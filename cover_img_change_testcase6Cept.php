<?php
$I = new AcceptanceTester($scenario);
$I->maximizeWindow();
$I->wantTo('The cover image should be updated successfully');
$I->amOnPage('/');
$I->seeInTitle('Activity – rtCamp');
$I->fillField("log","demo");
$I->fillField("pwd","demo");
$I->click("wp-submit");
$I->amOnUrl("https://qa.rtcamp.net/members/demo/profile/");
$I->click("//a[@id='change-cover-image']");
$I->wait(2);
$I->click("//input[@id='bp-browse-button']");
$I->attachFile("input[type='file']", "cover.jpg");
$I->wait(3);
$I->see("Your new cover image was uploaded successfully.");
$I->wait(3);
$I->see("Log Out");

?>