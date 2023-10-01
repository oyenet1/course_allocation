# Course Allocation System
#### Course allocation system is a software that gives administrators the power to efficiently allocate courses to lecturers at different levels. With this software administrators can easily manage and assign courses based on specific levels lecturers would be teaching. The software also prevents duplicates in course  allocation to lecturers at different levels. 

## System Requirements
#### The minimum system requirement for this application to run is any system(PC) that possess the following attributes
+ 1gb Hardware
- 20gb ROM 
* 1.2ghz
- Apache server 
+ php v8 
* git
* mysql database
+ composer

## System Architechure 

   Use case diagram  
       A use case diagram is a diagram that shows the interaction between users and a system, it also helps to understand how the system is used and different actions it can perform. 
      ![Alt text](<readme img/Course allocation system Usecase diagram.png>)

   Data flow diagram 
      A Data flow diagram shows how data moves through a system. It illustrates the flow of information between different processes, data sources and data destinations. 
      ![Alt text](<readme img/Course allocation system Dataflow diagram.png>)

   ERD (Entity Relationship diagram) 
      This diagram shows the relationship between entities in a database. It helps to understand the structure and organisation of data in a database system. 
      ![Alt text](<readme img/erd.png>)    

## Installation Guide 
To install this software the system(PC) should possess the system requirements listed above.

Running this software project from GitHub involves a few steps. You can do this by either cloning the repository using Git or by downloading the project as a ZIP file. 

**Method 1: Cloning the Repository**
Download the project and put it in the www folder of laragon (Any other server can be used but the server must posses all the mentioned requirements needed to run the project). 
After successful cloning of the project 
+ Go into the project folder
+ Run **composer install**  to install all dependencies
* Create an environmental file **.env** (this can be done by copying the **.env.example** file and adding all items into the **.env** file).
- Set the database (the database can be created using laragon). 
* Once the database is created run this command
**php artisan migrate:fresh --seed**
+ Launch your project. 

**Method 1: Downloading as a ZIP File**
Go to the GitHub repository of the project and download the project as a ZIP file.
Extract the ZIP file to the directory where you want to store your project which is in the www folder of laragon (Any other server can be used but the server must posses all the mentioned requirements needed to run the project).
After successful download of the project 
+ Go into the project folder
+ Run **composer install**  to install all dependencies
* Create an environmental file **.env** (this can be done by copying the **.env.example** file and adding all items into the **.env** file).
- Set the database (the database can be created using laragon). 
* Once the database is created run this command
**php artisan migrate:fresh --seed**
+ Launch your project. 

