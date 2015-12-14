<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform submit feedback for other programmer');
$I->amOnPage('/feedback/programmer-slug-name/new');
$I->see('Developer Peer Feedback');
$I->seeElement('label[id="pertanyaan_1"]');
$I->seeElement('input', ['name' => 'jawaban[]']);

