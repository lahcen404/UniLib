create database uniLibDB;
-- drop database unilibdb;
use uniLibDB;



create table users (
id INT AUTO_INCREMENT PRIMARY KEY,
firstName VARCHAR(100) NOT NULL,
lastName VARCHAR(100) NOT NULL,
email VARCHAR(100) UNIQUE NOT NULL,
password VARCHAR(255) NOT NULL,
role ENUM ('user','admin') DEFAULT 'user' NOT NULL
);

create table books(
id INT AUTO_INCREMENT PRIMARY KEY ,
title VARCHAR(100) NOT NULL,
yearPublication INT(4) NOT NULL,
genre VARCHAR(100) NOT NULL  ,
availability ENUM('AVAILABLE','BORROWED') NOT NULL,


);


create table loans(
id INT PRIMARY KEY AUTO_INCREMENT,
loan_date DATE NOT NULL,
return_date DATE ,
book_id INT,
user_id INT,
FOREIGN KEY (book_id) REFERENCES books(id) ,
FOREIGN KEY (user_id) REFERENCES users(id)

);

SELECT * FROM books;
SELECT * FROM users;
SELECT * FROM loans;