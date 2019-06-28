# Student Management System
1. index.php - Display student list
2. addStudent.php - add student form/action
3. updateStudent.php  - edit student form/action
4. viewStudent.php - view student list

## Database Name management
table 1: 
  name: students
  columns: 
      1. sid int(11) primary key auto-increment
      2. sname varchar(30)
      3. scontact varchar(10) unique
      4. saddress varchar(100)
      5. spic varchar(255)
      6. createdOn date
      7. rollNo varchar(10) unique