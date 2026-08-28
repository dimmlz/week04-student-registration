# Student Registration System

## ITST 302 – Client-Server Technologies
### Week 4 – Mini Project 03

## 1. Introduction

The Student Registration System is a simple Laravel web application for registering students.

The system allows the user to enter student information such as Student ID, name, email, mobile number, date of birth, gender, program, year level, address, and profile picture.

The information is validated before it is saved to the MySQL database. The system also shows a success message after registration and displays the student's profile.

This project shows how Laravel can be used for forms, validation, file upload, database connection, and displaying data.

### Purpose of the System

The purpose of this project is to make the student registration process easier and more organized.

Instead of using paper forms, student information can be entered and stored in a database.

### Importance of Data Validation

Data validation is important because it helps make sure that the information entered by the user is correct and complete.

For example, the Student ID and email must be unique, the email must have a valid format, and the profile picture must be an accepted image file.

### Use of Registration Systems

Registration systems are used in many organizations such as schools, companies, hospitals, and government offices.

They help collect and store information in an organized way.

---

## 2. Objectives

The objectives of this project are:

- Create a student registration form using Laravel Blade.
- Process form data using a Laravel controller.
- Use server-side validation.
- Display validation error messages.
- Display a success message after registration.
- Upload a student profile picture.
- Store student information in MySQL.
- Display registered student information.
- Use Laravel routes, models, migrations, and controllers.
- Create a responsive user interface using Tailwind CSS.
- Use Git for version control.

---

## 3. Laravel Request Lifecycle

The registration process follows this simple flow:

```text
User
  |
  v
Registration Form
  |
  v
Laravel Route
  |
  v
StudentController
  |
  v
Validation
  |
  +------ No ------> Show Errors
  |
 Yes
  |
  v
Upload Profile Picture
  |
  v
Student Model
  |
  v
MySQL Database
  |
  v
Success Message
  |
  v
Student Profile