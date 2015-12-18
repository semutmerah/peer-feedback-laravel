<?php 
$I = new FunctionalTester ($scenario);
$I->wantTo('Login as a user');

$I->submitForm('#login',[
    'username'=>'muismuhidin',
    'password'=>'123'
]   'submitButton');

$I->amOnPage('/login');
$I->fillField('username','muismuhidin');
$I->fillField('password','123');
$I->click('button[type=submit]');


