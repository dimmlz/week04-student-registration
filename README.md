# Student Registration System

## 1. Introduction

The Student Registration System is a Laravel web application for registering and managing student information.

The system allows users to enter student details, upload a profile picture, and save the information in a MySQL database.

The system also uses validation to make sure that the submitted information is complete and follows the required format.

## 2. Objectives

The objectives of this project are:

- Create a student registration form using Laravel Blade.
- Process form requests using a Laravel controller.
- Validate student information.
- Store student records in a MySQL database.
- Upload and store student profile pictures.
- Display success and error messages.
- Display the registered student's information.
- Practice using Git and GitHub for version control.

## 3. Technologies Used

- Laravel
- PHP
- MySQL
- Blade
- Tailwind CSS
- Vite
- Git
- GitHub

## 4. Laravel Request Lifecycle

The registration process starts when the user opens the registration form in the browser.

The request follows these steps:

1. The user opens the registration page.
2. The user fills out the registration form.
3. The browser sends the form data to Laravel.
4. The route receives the request.
5. The StudentController processes the request.
6. Laravel validates the submitted information.
7. The Student model handles the student data.
8. The validated data is saved to the MySQL database.
9. The profile picture is uploaded using Laravel Storage.
10. Laravel sends a response and redirects the user to the student profile page.
11. A success message is displayed.

### Simple Flow

```text
Browser
   |
   v
Registration Form
   |
   v
Route
   |
   v
StudentController
   |
   v
Validation
   |
   v
Student Model
   |
   v
MySQL Database
   |
   v
Response
   |
   v
Student Profile

## 5. Validation Rules

The system uses server-side validation before saving student information.

The main validation rules are:

| Field | Validation |
|---|---|
| Student ID | Required and unique |
| First Name | Required, string, and maximum of 100 characters |
| Middle Name | Optional |
| Last Name | Required, string, and maximum of 100 characters |
| Email | Required, valid email, and unique |
| Mobile Number | Required and numeric |
| Date of Birth | Required |
| Gender | Required |
| Program | Required |
| Year Level | Required |
| Address | Required |
| Profile Picture | Required, image only, JPG/JPEG/PNG, maximum 2MB |

Required fields make sure that important student information is not missing.

The unique rule prevents duplicate Student IDs and email addresses.

Email validation makes sure that the email follows the correct format.

Numeric validation makes sure that the mobile number contains numeric values.

Image validation makes sure that the uploaded profile picture is an allowed image file.

The file size restriction helps prevent users from uploading very large files.

Server-side validation is important because the data is checked by the application before it is saved to the database.

## 6. Database Design

The project uses a `students` table to store the registered student information.

The table contains the following fields:

- `id`
- `student_id`
- `first_name`
- `middle_name`
- `last_name`
- `email`
- `mobile_number`
- `gender`
- `date_of_birth`
- `program`
- `year_level`
- `address`
- `profile_picture`
- `created_at`
- `updated_at`

The `id` field is the primary key.

The `student_id` and `email` fields are unique to prevent duplicate student records.

## 7. File Upload

The system allows users to upload a student profile picture.

The uploaded image is stored using Laravel Storage inside the public storage directory.

The `storage:link` command is used to create the public storage link.

Only the file path is saved in the database.

The uploaded profile picture is then displayed on the student profile page after successful registration.

## 8. User Interface

The system has three main pages:

### Registration Page

The registration page contains the fields needed to register a student.

The form is also responsive so it can adjust to different screen sizes.

### Student List

The student list displays the registered students.

On larger screens, the records are displayed in a table.

On smaller screens, the records are displayed as cards to make the page easier to use on mobile devices.

### Student Profile

The student profile page displays the complete information of a registered student, including the uploaded profile picture.

## 9. Problems Encountered

### Problem 1: Laravel application could not load

There was an error where the local server could not be reached.

### Solution

The Laravel development server was started again and the application was checked through the browser.

### Problem 2: Maximum execution time error

Laravel showed a maximum execution time error while loading the application.

### Solution

The Laravel cache was cleared using:

```bash
php artisan optimize:clear
php artisan config:clear
php artisan cache:clear
```

After clearing the cache, the application worked again.

### Problem 3: Tailwind CSS was not installed correctly

Tailwind CSS was initially installed outside the project folder.

### Solution

The terminal was moved to the correct project directory and Tailwind CSS was installed again.

```bash
cd week04-student-registration
npm install tailwindcss @tailwindcss/vite
```

## 10. Git Version Control

Git was used to track the development of the project.

Some of the commits made during development include:

- `chore: create Laravel student registration project`
- `feat: add student controller`
- `feat: display registration success message`
- `feat: configure Tailwind CSS`
- `feat: improve responsive student profile UI`
- `feat: improve responsive registration and student list UI`

More meaningful commits will be added as the project documentation and other requirements are completed.

## 11. Reflection

This project helped me understand how Laravel handles forms, user input, validation, database records, and file uploads. At first, the registration form looked like a simple form, but I learned that there are many things that need to be checked before information can be stored in a database.

One of the most important things I learned is the importance of validation. Validation helps make sure that the information submitted by the user is complete and follows the required format. For example, the Student ID and email address need to be unique so that duplicate records will not be created. Email validation also makes sure that the user enters a valid email address. Other fields also need to be required so that important student information will not be missing.

I also learned more about handling user input in Laravel. The information from the registration form is sent to the Laravel application through a request. The route receives the request and the controller processes it. Before the information is saved, Laravel checks the submitted data using server-side validation. This helped me understand how different parts of Laravel work together when processing a form.

Server-side validation is important because client-side validation alone is not enough. Client-side validation can improve the user experience by showing errors immediately in the browser, but it can still be bypassed. Server-side validation checks the data inside the application before it reaches the database. This gives the system better protection against invalid or unwanted data.

Another lesson I learned is about file uploads. The system allows the user to upload a profile picture, but the application needs to check the uploaded file before storing it. Image validation and file size restrictions help prevent inappropriate or very large files from being uploaded. Laravel Storage also makes it easier to manage uploaded files. Instead of saving the actual image inside the database, only the file path is stored.

The database part of the project also helped me understand how form information becomes an actual record. The students table stores the information submitted by the user. Using a migration also makes the database structure easier to manage because the table and its columns can be created through Laravel.

Registration systems are also common in real-world enterprise applications. Universities use them for student records, companies use them for employee information, hospitals use them for patient registration, and online systems use them for customer accounts. Because these systems handle important information, validation and proper file handling are necessary.

Overall, this activity gave me more practice with Laravel forms, controllers, validation, models, migrations, MySQL, file uploads, Blade, Tailwind CSS, and Git. It also helped me understand that building a web application is not only about making the interface work. The application also needs to properly process, validate, and store information. These skills will be useful for the larger Laravel projects that I will work on in the future.

## 12. Screenshots

The following screenshots will be added to the `screenshots` folder:

- Registration Form
- Validation Errors
- Flash Success Message
- Uploaded Profile Picture
- Student Profile
- Database Records
- Laravel Project Structure
- GitHub Repository
- Terminal Output
- Browser Output

## 13. Required Diagrams

The following diagrams will be added to the `documentation` folder:

- Registration Flowchart
- Database ER Diagram
- Laravel Request Lifecycle Diagram

## 14. References

Laravel. (n.d.). *Laravel documentation*. https://laravel.com/docs

MDN Web Docs. (n.d.). *MDN Web Docs*. https://developer.mozilla.org/

MySQL. (n.d.). *MySQL 8.0 reference manual*. https://dev.mysql.com/doc/

PHP Documentation Group. (n.d.). *PHP documentation*. https://www.php.net/docs.php

Tailwind Labs. (n.d.). *Tailwind CSS documentation*. https://tailwindcss.com/docs

## 15. Project Files

The project contains the main Laravel files and folders used for the student registration system.

```text
week04-student-registration/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── StudentController.php
│   └── Models/
│       └── Student.php
├── database/
│   └── migrations/
├── documentation/
│   ├── registration-flowchart.png
│   ├── database-erd.png
│   └── request-lifecycle.png
├── resources/
│   └── views/
│       └── students/
│           ├── create.blade.php
│           ├── index.blade.php
│           └── show.blade.php
├── routes/
│   └── web.php
├── screenshots/
├── storage/
├── README.md
└── package.json
```

## 16. Project Status

The Student Registration System is completed based on the main requirements of the laboratory activity.

The system can:

- Register a student.
- Validate student information.
- Upload a profile picture.
- Store student information in MySQL.
- Display validation errors.
- Display a success message.
- Display the registered student's profile.
- Display registered students in a responsive list.
- Store uploaded images using Laravel Storage.