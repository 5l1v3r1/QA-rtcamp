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
   

2) Clone a Git repository or Download as Zip.
    
    * copy resource folder image into `C:\xampp\php\tests\_data` folder.
    * copy all test case into `C:\xampp\php\tests\acceptance`
    
    * under tests folder their is .yml files which are use to setup browser and selenium webdriver and other capability of functional          and acceptance test.`
    
    * in tests folder replace `acceptance.suite.yml` file with github repository `acceptance.suite.yml` file.
              
      
3)  Finally you have to run the test script. For that type following command in command line tool.

      * run test on web browser you must need a selenium driver manager 
       
      `webdriver-manager start`
    
      ![Untitled](https://user-images.githubusercontent.com/4941557/62895270-2700eb00-bd6c-11e9-844b-4403b92649b5.png)
     

       `php codecept.phar run acceptance`
     
          
      ![Untitled](https://user-images.githubusercontent.com/4941557/61984565-906dc380-b022-11e9-8fd6-d18442f64a99.png)


You can see the output on your command line. If you have done it correctly it should pass all the tests and assertions
successfully!!!



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
