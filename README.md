### Codeception

Codeception is a modern full-stack testing framework for PHP. Inspired by BDD, it provides you an absolutely new way of
writing acceptance, functional and even unit tests. Powered by PHPUnit.

Codeception allows two methods to install it. Those are ‘Phar’ and ‘Composer’ methods.
 
* I prefer to do the installation using Codeceptions’ Phar file.

* Phar is a php file type which allows to compress several php files into a single php file. But user doesn’t need to extract it to       local drive to install it. By simply executing several commands can install Codeception framework into application being tested.

* My system specifications: Windows, XAMPP

### How to install Codeception

1)  [codeception.phar](http://codeception.com/codecept.phar) Once downloaded the Phar file, paste it to your website root
     folder
     
      • In my case i’m using XAMPP. So my Phar file will go to ‘C:\xampp\php\codecept.phar’
     
      • Then open up your command line tool and I assume you have already installed php into your system. You can check it by
        simply entering ‘php -v’.
     
      • If it shows your php version there then you have installed php already.
        
       ![php version](https://user-images.githubusercontent.com/4941557/63431116-c80e3680-c43b-11e9-82ed-6b69ae9db1e1.png)

     

Then navigate inside to ‘C:\xampp\php\codecept.phar’ folder.
   * Now let’s install Codeception.
   * Type following commands in command line tool.
           
          `php codecept.phar bootstrap`
           
        ![bootstrape](https://user-images.githubusercontent.com/4941557/62873911-dffc0100-bd3d-11e9-9bfd-8e0c3369bae7.png)
          
          `php codecept.phar build`
        
        ![build](https://user-images.githubusercontent.com/4941557/62874522-02dae500-bd3f-11e9-8d29-2c2effbfdec9.png)
      
    

   
 
   ***Note After doing this, you will have a new folder named “tests” added in your initial folder which contains:*** 

   
   ![test_folders](https://user-images.githubusercontent.com/4941557/63010095-5ebe7e80-bea3-11e9-8a1f-dda5c49603a7.png)
   



* _output, a folder where you will find all reports and images once you start running some tests.  
* _data, where you can store SQL dumps for test usage and the database cleanup feature.
* _support, where you can make custom methods to use additionally to the ones already created by default.
* Three test suites: acceptance, functional and unit. The functional and unit tests require more in-depth knowledge of PHP to be used. Therefore, we will only study acceptance tests. They offer a very wide range of testing options, so the other two aren’t really mandatory.
* “_bootstrap.php” file where you are able to specify paths to the files that you want to load and use in your tests. (If you wrote a function in a non-test PHP file, you can add it here, and we will explain how this works later on). 
* Configuration files for all of the three test suites (all of the .yml files).


4) Time For Configuration of Selenium webDriver and Browser where you run your test cases.

    `under tests folder their is .yml files which are use to setup browser and selenium webdriver and other capability of  functional        and acceptance test.`
 
     iF you want to create new testcase then use below command
     `php codecept.phar generate:cept acceptance File_Name`
      
      ***NOTE: to run above testcase***
        after step3 execution you get some directory which image show above now you have to folder which name is acceptance
        
      ![acceptance folder](https://user-images.githubusercontent.com/4941557/63011625-5156c380-bea6-11e9-82ed-161efb6973ba.jpg)
      
      ![testfiles](https://user-images.githubusercontent.com/4941557/63011940-ea85da00-bea6-11e9-9e8c-509d2b37c38b.png)
      
      
      to upload image you have copy [_data](/_data) to _data folder of initial directory.
      
      ![data](https://user-images.githubusercontent.com/4941557/63013067-08ecd500-bea9-11e9-9187-ca6baccb213e.png)

         
      
5) CMD to Run Testcase

      `run test on web browser you must need a selenium driver manager`
     
     
      cmd :   
         `webdriver-manager start`
     
     
      ![Untitled](https://user-images.githubusercontent.com/4941557/62895270-2700eb00-bd6c-11e9-844b-4403b92649b5.png)
     

     `php codecept.phar run acceptance'
     
       
   
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
