<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('User should get the error message, should not get logged in');
$I->amOnPage('/');
$I->seeInTitle('Activity – rtCamp');
$I->fillField("log","abc");
$I->fillField("pwd","abc");
$I->click("wp-submit");
$I->seeInTitle('Log In ‹ rtCamp — WordPress');
?>
