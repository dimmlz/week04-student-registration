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

The registration process follows these steps:

1. The user opens the registration page.
2. The user fills out the registration form.
3. The browser sends the form data to Laravel.
4. The route receives the request.
5. The StudentController processes the request.
6. Laravel validates the submitted information.
7. If the information is invalid, validation errors are displayed.
8. If the information is valid, the student information is saved.
9. The profile picture is uploaded using Laravel Storage.
10. Laravel redirects the user to the student profile page.
11. A success message is displayed.

### Simple Flow

```text
User
  |
  v
Registration Form
  |
  v
Submit Form
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
  +------ Invalid ------> Display Errors
  |
 Valid
  |
  v
Upload Profile Picture
  |
  v
Save Student Information
  |
  v
MySQL Database
  |
  v
Student Profile
```

## 5. Validation Rules

The system uses server-side validation before saving student information.

Some of the validation rules used are:

| Field | Validation |
|---|---|
| Student ID | Required and unique |
| First Name | Required |
| Middle Name | Optional |
| Last Name | Required |
| Email | Required, valid email, and unique |
| Mobile Number | Required and numeric |
| Date of Birth | Required |
| Gender | Required |
| Program | Required |
| Year Level | Required |
| Address | Required |
| Profile Picture | Required and must be an image |

Validation is important because it prevents incomplete or incorrect data from being stored in the database.

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

The uploaded image is stored using Laravel Storage. Only the file path is saved in the database.

The application uses the public storage link so that the uploaded image can be displayed on the student profile page.

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

This project helped me understand how Laravel handles forms and user input.

I learned that validation is important because it prevents incomplete or incorrect information from being saved to the database.

I also learned how server-side validation works. Unlike client-side validation, server-side validation is processed by the application before the data is stored. This gives the system another level of protection even if the user tries to submit invalid data.

Another thing I learned is how file uploads work in Laravel. The profile picture is uploaded using Laravel Storage while the file path is saved in the database. This helped me understand how applications handle uploaded files.

Working with MySQL also helped me understand how the information from the registration form becomes a database record.

Overall, this activity gave me more practice with Laravel forms, controllers, validation, database integration, file uploads, Blade, Tailwind CSS, and Git. These are useful skills for building larger web applications.

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

- Laravel Documentation
- PHP Documentation
- MySQL Documentation
- Tailwind CSS Documentation
- MDN Web Docs

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