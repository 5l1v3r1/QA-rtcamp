<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('User should successfully log in ');
$I->amOnPage('/');
$I->seeInTitle('Activity – rtCamp');
$I->fillField("log","demo");
$I->fillField("pwd","demo");
$I->click("wp-submit");
$I->see("Log Out");
$I->click("Log Out");
?>
