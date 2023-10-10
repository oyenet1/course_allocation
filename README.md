<div style="width:100%; max-width: 1024px; margin: 2px auto; padding: 10px; border: 1px #eee solid; border-radius:8px">

# Course Allocation System

#### The course allocation system is a software tool designed to empower faculty administrators to efficiently assign courses to lecturers across various academic levels. This software streamlines the process of course management and allocation, allowing administrators to assign courses to lecturers based on their designated teaching levels. Additionally, it incorporates features to prevent the occurrence of duplicate course assignments to lecturers across different levels, ensuring a more organized and error-free course allocation process.

## System Requirements

### The system requirements are divided into two:

The minimum system requirement for this application to run is any system(PC) that possess the following attributes

1. **Hardware Requirements**
    - 1gb ram system
    - 20gb rom
    - 1.2ghz processor and above
2. **Sofware Requirements**
    - A Web Server e.g wamp,xamp, laragon etc.
    - PHP V8 and above
    - MySQL Database
    - Composer
    - Git (optional if you are cloning from github)

## System Architechure

System architecture is a high-level design or blueprint that outlines the structure, components, and interactions of a system, helping to define how it will function and meet its objectives. It serves as a roadmap for designing and building complex systems, providing a clear and organized framework for development

### Use case diagram

A use case diagram is a diagram that shows the interaction between users and a system, it also helps to understand how the system is used and different actions it can perform.
!["Use case Diagram"](/public/img/Course_allocation_system_Usecase_diagram.png)

### Data flow diagram

A Data flow diagram shows how data moves through a system. It illustrates the flow of information between different processes, data sources and data destinations.
!["Dataflow diagram"](/public/img/Course_allocation_system_Dataflow_diagram.png)

### ERD (Entity Relationship diagram)

An Entity Relationship Diagram (ERD) is a visual map used in databases to depict how different data elements (entities) are connected, making it easier to understand and manage the database structure
![Alt text](/public/img/erd.png)

## Installation Guide

To install this software the system(PC) should possess the system requirements listed above.

Running this software project from GitHub involves a few steps. You can do this by either cloning the repository using Git or by downloading the project as a ZIP file.

### Method 1: Cloning the Repository

**STEP 1: Clone project**

```sh
## Open your terminal and navigate to your project directory

cd your_project_directory

git clone https://github.com/oyenet1/course_allocation.git

# Navigate to the project folder
cd course_allocation
```

**STEP 2: Set Up the Environment Configuration**

```sh
#Copy the .env.example file to a new .env file:
cp .env.example .env
```

**STEP 3: Set Up the Environment Configuration**

```sh
#Generate an application key:
php artisan key:generate
```

**STEP 4: Install Project Dependencies**

```sh
php artisan key:generate
```

**STEP 5: Create the Database**

Create a new database on your local database server. Update the database connection information in the `.env` file:

```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```

**Step 6: Run Database Migrations and Seeders**

The command below below will create tables and seed the tables with dummy data

```sh
    php artisan migrate:fresh --seed
```

**Step 7: Start the Local Development Server**

```sh
    php artisan serve
```

**Step 8: Access Your Laravel Application**

Open a web browser and navigate to `http://127.0.0.1:8000` or the URL provided by the Laravel development server. You should see your Laravel application up and running locally

By default, Laravel will start the development server on `http://127.0.0.1:8000`

**Method 1: Downloading as a ZIP File**
Download the project and put it in the www folder of laragon (Any other server can be used but the server must posses all the mentioned requirements needed to run the project).
After successful cloning of the project
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

    </div>
