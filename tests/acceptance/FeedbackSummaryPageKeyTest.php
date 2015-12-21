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
        echo "now: {$now_text}\nsecond: {$second_text}\n";
        $this->assertEquals($now_text, $second_text);
    }
/*
    public function testLeftArrowChangeTheFeedbackLeft()
    {
    }

    public function testLeftArrowFromFirstFeedbackWillMoveToLastFeedback()
    {
    }

    public function testRightArrowFromLastFeedbackWillMoveToFirstFeedback()
    {
    }

    public function testDownKeyWillMoveToNextQuestion()
    {
    }

    public function testUpKeyWillMoveToPreviousQuestion()
    {
    }

    public function testMovingKeyWillNotWorkWhenTextareaIsFocused()
    {
    }

    public function testTabKeyWillFocusOnTextArea()
    {
    }

    public function testEscapeKeyWillUnfocusTextarea()
    {
    }
 */
}
