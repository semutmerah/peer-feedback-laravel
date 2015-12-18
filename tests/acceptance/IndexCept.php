<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('open index page of peer feedback');
$I->amOnPage('/index');
$I->see('Home','h1');
