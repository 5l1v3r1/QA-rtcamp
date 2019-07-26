<?php
$I = new AcceptanceTester($scenario);
$I->maximizeWindow();
$I->wantTo('User should successfully log in ');
$I->amOnPage('/');
$I->seeInTitle('Activity – rtCamp');
$I->fillField("log","demo");
$I->fillField("pwd","demo");
$I->click("wp-submit");
$I->see("Log Out");
$I->click("//li[@id='activity-647']//div[@class='activity-content']//img");
$I->click("Like");
$I->click("//span[@class='rtm-mfp-close mfp-close dashicons dashicons-no-alt']");
$I->amOnUrl("https://qa.rtcamp.net/members/demo/media/likes/");
$I->dontSee("Sorry !! There's no media found for the request !!");
?>