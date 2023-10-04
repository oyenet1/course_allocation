# Course Allocation System

#### Course allocation system is a software that gives administrators the power to efficiently allocate courses to lecturers at different levels. With this software administrators can easily manage and assign courses based on specific levels lecturers would be teaching. The software also prevents duplicates in course allocation to lecturers at different levels.

## System Requirements

#### The minimum system requirement for this application to run is any system(PC) that possess the following attributes

-   1gb Hardware

*   20gb ROM

-   1.2ghz

*   Apache server

-   php v8

*   git
*   mysql database

-   composer

## System Architechure

Use case diagram  
 A use case diagram is a diagram that shows the interaction between users and a system, it also helps to understand how the system is used and different actions it can perform.
!["Use case Diagram"](/public/img/Course_allocation_system_Usecase_diagram.png)

Data flow diagram
A Data flow diagram shows how data moves through a system. It illustrates the flow of information between different processes, data sources and data destinations.
!["Dataflow diagram"](/public/img/Course_allocation_system_Dataflow_diagram.png)

ERD (Entity Relationship diagram)
This diagram shows the relationship between entities in a database. It helps to understand the structure and organisation of data in a database system.
![Alt text](/public/img/erd.png)

## Installation Guide

To install this software the system(PC) should possess the system requirements listed above.

Running this software project from GitHub involves a few steps. You can do this by either cloning the repository using Git or by downloading the project as a ZIP file.

**Method 1: Cloning the Repository**
Download the project and put it in the www folder of laragon (Any other server can be used but the server must posses all the mentioned requirements needed to run the project).
After successful cloning of the project

-   Go into the project folder
-   Run **composer install** to install all dependencies

*   Create an environmental file **.env** (this can be done by copying the **.env.example** file and adding all items into the **.env** file).

-   Set the database (the database can be created using laragon).

*   Once the database is created run this command
    **php artisan migrate:fresh --seed**

-   Launch your project.

**Method 1: Downloading as a ZIP File**
Go to the GitHub repository of the project and download the project as a ZIP file.
Extract the ZIP file to the directory where you want to store your project which is in the www folder of laragon (Any other server can be used but the server must posses all the mentioned requirements needed to run the project).
After successful download of the project

-   Go into the project folder
-   Run **composer install** to install all dependencies

*   Create an environmental file **.env** (this can be done by copying the **.env.example** file and adding all items into the **.env** file).

-   Set the database (the database can be created using laragon).

*   Once the database is created run this command
    **php artisan migrate:fresh --seed**

-   Launch your project.

## Features and Usage
The system has various features, highlighted below is some of the features and usage.
1. #### Add Lecturer
    Lecturers from different departments can be added to the system by the administrator. Different lecturers from various fields can be added and levels and courses assigned to them.
    Lecturers can also be removed(Deleted) from the system. You can also search for lecturers on the system.
    ![Add lecturer](<public/img/add lecturer.jpeg>)
    ![Add lecturer success](<public/img/success message for lecturer.jpeg>)
    ![Lecturers Table](<public/img/lecturers table.jpeg>)
    ![Lecturer Deleted](<public/img/lecturer deleted.jpeg>)


2. #### Add Course
    Courses varies across departments and levels.various courses can be added to the software which makes allocating courses easy. The software prevents duplication of assigning a course to different lectueres. 
    ![Add Course](<public/img/add course.jpeg>)
    ![Course added success](<public/img/course added sucess.jpeg>)
    ![Courses table](<public/img/courses table..jpeg>)
    ![Delete course](<public/img/Course delete.PNG>)


    Course Allocation to is made easy with this system. Couses can be allocated to lecturers and levels assigned to them. Courses can be added and updated. Course allocation shows the course, the lecturer assigned to the course, the level offering the course and the semester. Courses can also be dissociated from lecturer. 
    ![Allocation form](<public/img/allocation form.jpeg>)
    ![Allocation success](<public/img/allocation success.jpeg>)
    ![Allocation table](<public/img/allocation table.jpeg>)
    ![Allocation delete](<public/img/deleted course allocation.jpeg>)

3. #### Add Level
    Courses have been arranged systematically for each level in an orderly manner. The system allows the admin to add different levels and also assign courses and lecturers to levels. Levels can also be removed from the system. 
    ![Add Level](<public/img/Add Level.PNG>)
    ![Level Table](<public/img/Level Table.PNG>)
    ![Level Delete](<public/img/Delete Level.PNG>)