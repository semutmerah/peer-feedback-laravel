<?php

class FeedbackSummaryPageKeyTest extends \PHPUnit_Framework_TestCase
{
    protected $wd;
    protected $url = 'http://peer2.local/feedback/You/summarise';

    protected function setUp()
    {
        $capabilities = array(\WebDriverCapabilityType::BROWSER_NAME => 'firefox');
        $this->wd = RemoteWebDriver::create('http://127.0.0.1:4444/wd/hub', $capabilities);
    }

    protected function tearDown()
    {
        $this->wd->quit();
    }

    public function testRightArrowChangeTheFeedbackRight()
    {
        $this->wd->get($this->url);
        $feedback_now = $this->wd->findElement(
            WebDriverBy::cssSelector('.feedback-set.show .feedback.show')
        );
        $now_text = $feedback_now->getText();

        //Pencetan keyboard tampaknya hanya bekerja kalau spesifik dikirim ke body
        $body = $this->wd->findElement(
            WebDriverBy::cssSelector('body')
        );

        $feedback_next = $this->wd->findElement(
            WebDriverBy::cssSelector('div.feedback-set.show>div.section-content>p.feedback:nth-child(4)')
        );
        $second_text = $feedback_next->getAttribute('innerHTML');
        $this->assertNotEquals($now_text, $second_text);

        $body->sendKeys([\WebDriverKeys::ARROW_RIGHT]);
 
        $feedback_now = $this->wd->findElement(
            WebDriverBy::cssSelector('.feedback-set.show .feedback.show')
        );
        $now_text = $feedback_now->getText();

        $this->assertEquals($now_text, $second_text);
    }

    public function testLeftArrowChangeTheFeedbackLeft()
    {
        $this->wd->get($this->url);

        //Pencetan keyboard tampaknya hanya bekerja kalau spesifik dikirim ke body
        $body = $this->wd->findElement(
            WebDriverBy::cssSelector('body')
        );

        //Supaya bisa geser kiri, tentu saja ngga bisa ada di paling kiri
        $body->sendKeys([\WebDriverKeys::ARROW_RIGHT]);

        $feedback_now = $this->wd->findElement(
            WebDriverBy::cssSelector('.feedback-set.show .feedback.show')
        );
        $now_text = $feedback_now->getText();

        $feedback_next = $this->wd->findElement(
            WebDriverBy::cssSelector('div.feedback-set.show>div.section-content>p.feedback:nth-child(3)')
        );
        //elemen tidak tertampil visual,tidk bisa getText()
        $second_text = $feedback_next->getAttribute('innerHTML'); 
        
        //jaga-jaga, jangan-jangan sama
        $this->assertNotEquals($now_text, $second_text);


        $body->sendKeys([\WebDriverKeys::ARROW_LEFT]);
        $feedback_now = $this->wd->findElement(
            WebDriverBy::cssSelector('.feedback-set.show .feedback.show')
        );
        $now_text = $feedback_now->getText();
        $this->assertEquals($now_text, $second_text);
    }

 
    public function testLeftArrowFromFirstFeedbackWillMoveToLastFeedback()
    {
        $this->wd->get($this->url);

        //Pencetan keyboard tampaknya hanya bekerja kalau spesifik dikirim ke body
        $body = $this->wd->findElement(
            WebDriverBy::cssSelector('body')
        );

        $feedback_now = $this->wd->findElement(
            WebDriverBy::cssSelector('.feedback-set.show .feedback.show')
        );
        $now_text = $feedback_now->getText();

        $all_feedback = $this->wd->findElements(
            WebDriverBy::cssSelector('.feedback-set.show .feedback')
        );
        //elemen tidak tertampil visual,tidk bisa getText()
        $panjang = count($all_feedback);
        $second_text = $all_feedback[$panjang-1]->getAttribute('innerHTML'); 
        
        //jaga-jaga, jangan-jangan sama
        $this->assertNotEquals($now_text, $second_text);


        $body->sendKeys([\WebDriverKeys::ARROW_LEFT]);
        $feedback_now = $this->wd->findElement(
            WebDriverBy::cssSelector('.feedback-set.show .feedback.show')
        );
        $now_text = $feedback_now->getText();
        $this->assertEquals($now_text, $second_text);
 
    }

    public function testRightArrowFromLastFeedbackWillMoveToFirstFeedback()
    {
        $this->wd->get($this->url);

        $body = $this->wd->findElement(
            WebDriverBy::cssSelector('body')
        );

        $body->sendKeys([\WebDriverKeys::ARROW_LEFT]);

        $feedback_now = $this->wd->findElement(
            WebDriverBy::cssSelector('.feedback-set.show .feedback.show')
        );
        $now_text = $feedback_now->getText();

        $all_feedback = $this->wd->findElements(
            WebDriverBy::cssSelector('.feedback-set.show .feedback')
        );
        $panjang = count($all_feedback);
        //elemen tidak tertampil visual,tidk bisa getText()
        $second_text = $all_feedback[0]->getAttribute('innerHTML'); 
        
        //jaga-jaga, jangan-jangan sama
        $this->assertNotEquals($now_text, $second_text);


        $body->sendKeys([\WebDriverKeys::ARROW_RIGHT]);
        $feedback_now = $this->wd->findElement(
            WebDriverBy::cssSelector('.feedback-set.show .feedback.show')
        );
        $now_text = $feedback_now->getText();
        $this->assertEquals($now_text, $second_text);
    }

    public function testDownKeyWillMoveToNextQuestion()
    {
        $this->wd->get($this->url);

        $body = $this->wd->findElement(
            WebDriverBy::cssSelector('body')
        );

        $all_questions = $this->wd->findElements(
            WebDriverBy::cssSelector('.feedback-set .question')
        );
        
        $second_question = $all_questions[1]->getAttribute('innerHTML');
        
        $body->sendKeys([\WebDriverKeys::ARROW_DOWN]);

        $question_now = $this->wd->findElement(
            WebDriverBy::cssSelector('.feedback-set.show .question')
        )->getText();

        $this->assertEquals($question_now, $second_question);
    }

    public function testUpKeyWillMoveToPreviousQuestion()
    {
        $this->wd->get($this->url);

        $body = $this->wd->findElement(
            WebDriverBy::cssSelector('body')
        );

        $body->sendKeys([\WebDriverKeys::ARROW_DOWN]);

        $all_questions = $this->wd->findElements(
            WebDriverBy::cssSelector('.feedback-set .question')
        );
        
        $first_question = $all_questions[0]->getAttribute('innerHTML');
        
        $body->sendKeys([\WebDriverKeys::ARROW_UP]);

        $question_now = $this->wd->findElement(
            WebDriverBy::cssSelector('.feedback-set.show .question')
        )->getText();

        $this->assertEquals($question_now, $first_question);

    }

    public function testMovingKeyWillNotWorkWhenTextareaIsFocused()
    {
        $this->wd->get($this->url);

        $body = $this->wd->findElement(
            WebDriverBy::cssSelector('body')
        );
        
        $textarea = $this->wd->findElement(
            WebDriverBy::cssSelector('.feedback-set.show textarea')
        );

        $textarea->click();
        $textarea->sendKeys("Ngetik sesuatu");
        $feedback_now = $this->wd->findElement(
            WebDriverBy::cssSelector('.feedback-set.show .feedback.show')
        );
        $now_text = $feedback_now->getText();
        $textarea->sendKeys([\WebDriverKeys::ARROW_RIGHT]);

        $feedback_now = $this->wd->findElement(
            WebDriverBy::cssSelector('.feedback-set.show .feedback.show')
        );
        $next_text = $feedback_now->getText();

        $this->assertEquals($now_text,$next_text);
    }

    public function testTabKeyWillFocusOnTextArea()
    {
        $this->wd->get($this->url);

        $body = $this->wd->findElement(
            WebDriverBy::cssSelector('body')
        );

        $body->sendKeys(\WebDriverKeys::TAB);

        $textarea = $this->wd->findElement(
            WebDriverBy::cssSelector('.feedback-set.show textarea:focus')
        );

        $this->assertEquals(1,count($textarea));
     }

    public function testEscapeKeyWillUnfocusTextarea()
    {
        $this->wd->get($this->url);
        $textarea = $this->wd->findElement(
            WebDriverBy::cssSelector('.feedback-set.show textarea')
        );
        
        $textarea->click();
        $textarea->sendKeys("ads");
        $textarea->sendKeys(\WebDriverKeys::ESCAPE);

        try {
            $textarea = $this->wd->findElement(
                WebDriverBy::cssSelector('.feedback-set.show textarea:focus')
            );
            $this->fail('textarea still focused');
        } catch (Exception $e) { }
    }
}
