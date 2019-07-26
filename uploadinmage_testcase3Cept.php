    
<?php
$I = new AcceptanceTester($scenario);
$I->maximizeWindow();
$I->wantTo('Media should be uploaded with private privacy');
$I->amOnPage('/');
$I->seeInTitle('Activity – rtCamp');
$I->fillField("log","demo");
$I->fillField("pwd","demo");
$I->click("wp-submit");
$I->click("//*[@id='whats-new']");
$I->click("//*[@id='rtmedia-add-media-button-post-update']/span");
$I->attachFile("input[type='file']", "hw.png");
$I->click("aw-whats-new-submit");
$I->wait(3);
$I->see("Log Out");

?>