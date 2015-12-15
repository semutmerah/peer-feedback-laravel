<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform submit feedback for other programmer');
$I->amOnPage('/feedback/programmer-slug-name/new');
$I->seeElement('img[alt="Logo KMK"]');
$I->see('Developer Peer Feedback');
$I->seeElement('label', ['id' => 'pertanyaan_1', 'for' => 'jawaban_1']);
$I->seeElement('input', ['name' => 'jawaban[]', 'id' => 'jawaban_1']);
$I->seeElement('label', ['id' => 'pertanyaan_2', 'for' => 'jawaban_2']);
$I->seeElement('input', ['name' => 'jawabanp[]', 'id' => 'jawaban_2']);
