# Description
This repository contain automation & Manual Testing Test Case with their issues and all the test case of automation is devlope using the famous automation tool codeception. 

### Codeception

Codeception is a modern full-stack testing framework for PHP.
Inspired by BDD, it provides an absolutely new way of writing acceptance, functional and even unit tests.
Powered by PHPUnit.


### How To Setup All the Stuff

1) First of all you need to install  [Composer-Setup.exe](https://getcomposer.org/Composer-Setup.exe) on your system,
   Composer is a tool for dependency management in PHP. It allows you to declare the libraries your project depends on and it will
   manage (install/update) them for you.

2) Codeception has some basic requirement like minimum php version,etc instead of install one requirement one time we take help of          composer in that we just have to specify the package name and version releted data on file so you have run and get all the dependency
   package.

      ` composer require "codeception/codeception" --dev `

    
    ![composer](https://user-images.githubusercontent.com/4941557/62870962-30706000-bd38-11e9-8805-e243d1653feb.png)
    
    
3) Now all Background set to start with codecception with single click and [codeception.php](http://codeception.com/codecept.phar)
   Download
    -> Copy this file Folder Where yo went to setup your Projects.
   
   `php codecept.phar bootstrap`
 
   ![bootstrape](https://user-images.githubusercontent.com/4941557/62873911-dffc0100-bd3d-11e9-9bfd-8e0c3369bae7.png)

    `php codecept.phar bootstrap `
   
   ![build](https://user-images.githubusercontent.com/4941557/62874522-02dae500-bd3f-11e9-8d29-2c2effbfdec9.png)

   After doing this, you will have a new folder named “tests” added in your initial folder which contains:

* _output, a folder where you will find all reports and images once you start running some tests.  
* _data, where you can store SQL dumps for test usage and the database cleanup feature.
* _support, where you can make custom methods to use additionally to the ones already created by default.
* Three test suites: acceptance, functional and unit. The functional and unit tests require more in-depth knowledge of PHP to be used. Therefore, we will only study acceptance tests. They offer a very wide range of testing options, so the other two aren’t really mandatory.
* “_bootstrap.php” file where you are able to specify paths to the files that you want to load and use in your tests. (If you wrote a function in a non-test PHP file, you can add it here, and we will explain how this works later on). 
* Configuration files for all of the three test suites (all of the .yml files).


4) Time For Configuration of Selenium webDriver and Browser where you run your test cases.

    `under tests folder their is .yml files which are use to setup browser and selenium webdriver and other capability of  functional        and acceptance test.`
 
     Now you create new testcase file using this command in cmd
     `php codecept.phar generate:cept acceptance File_Name`

    or you just copy paste all your code to acceptacne folder.

5) CMD to Run Testcase

     `php codecept.phar run acceptance`

      ![Untitled](https://user-images.githubusercontent.com/4941557/61984565-906dc380-b022-11e9-8fd6-d18442f64a99.png)



### Example 


   ![1testcase](https://user-images.githubusercontent.com/4941557/62879127-10489d00-bd48-11e9-9b8b-ae41b28a13e3.png)
    

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


### Contribute
If you want to contribute to this project, report any bugs you encounter and help me add more features to it.
