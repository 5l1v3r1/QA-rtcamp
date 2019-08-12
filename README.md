# Description
This Reoositories contain automation & Manual Testing Test Case with their issues and all the test case of automation is devlope using the famous automation tool codeception. 

### Codeception

Codeception is a modern full-stack testing framework for PHP.
Inspired by BDD, it provides an absolutely new way of writing acceptance, functional and even unit tests.
Powered by PHPUnit.


### How To Setup All the Stuff

### Test Cases


Test Objective | Expected Results
-------------- | ----------------
Login with valid username and password and should be able to successfully login | User should successfully log in
URL: https://qa.rtcamp.net/activity/ UN: demo PW: demo 
Login with invalid username and password and should not be able to login | User should get the error message, should not get logged in
Update the status of a post with any of the media type and privacy should be private | Media should be uploaded with private privacy
Create the album with any valid name with private privacy and upload 5 media inside that album URL: https://qa.rtcamp.net/members/demo/media/album/ | Album should be created with given name and privacy, 5 media should be uploaded successfully
Like/Unlike the media (Open any recently uploaded media, Click on like) | Media should show Unlike once liked and vice versa. If liked it should appear here https://qa.rtcamp.net/members/demo/media/likes/
Change cover image (Go to profile, Click on change cover image) | The cover image should be updated successfully


# How to set it up

1) [Insatll codeception follow this guide](https://innobyte.com/blog/installing-configuring-codeception-windows/)
2) For Run this all test case on your system 
    ->copy the _data folder in your directory xampp->php->tests->_data
    ->copy all test case in your directory xampp->php->tests->acceptance
3) cmd to run: 
        php codecept.phar run acceptance

![Untitled](https://user-images.githubusercontent.com/4941557/61984565-906dc380-b022-11e9-8fd6-d18442f64a99.png)

### Example 

![Example 1 ](https://github.com/priyankvadaliya/QA-rtcamp/blob/master/Screenshots/automation/1testcase.png?raw=true)
