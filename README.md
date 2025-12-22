

# 📚 UniLib - Library Management System

## 📝 Project Overview

**UniLib** is a PHP-based **Library Management System** developed using **Object-Oriented Programming (OOP)** principles.
The application manages **authors, books, users, and loans** with a clean architecture, secure database access using **PDO**, and clear separation of responsibilities.

This project is intended for **educational purposes** and demonstrates good practices in PHP, MySQL, and MVC-style organization.

---

## 🎯 Functional Scope

### 1️⃣ Author Management

The platform allows:

* Adding an author
* Editing an author
* Deleting an author
* Displaying the list of authors
* Viewing author details

**Author attributes:**

* First name
* Last name
* Nationality
* Short description

---

### 2️⃣ Book Management

The platform allows:

* Adding a book
* Editing a book
* Deleting a book
* Displaying the list of books
* Viewing book details

**Book attributes:**

* Title
* Author
* Year of publication
* Genre
* Availability (Available / Borrowed)

---

### 3️⃣ Loan Management

The platform allows:

* Borrowing an available book
* Returning a borrowed book
* Displaying borrowed books
* Consulting user loan history

📌 **Business rule:**
When a book is borrowed, it becomes **unavailable** until returned.

---

* 📐 UML class diagram describing entity relationships
* 🚫 Custom **404 error page**
* 🔁 Centralized routing via `Router.php`
* 🎨 Reusable layout using templates (header / footer)


---

## 🧠 Technical Constraints

* PHP using **Object-Oriented Programming**
* MySQL database
* PDO for database access
* Use of **INNER JOIN** for relational queries
* Separation of concerns (Models / Views / Routing)
* Form validation
* Structured, readable, and commented code

---

## 🧩 OOP Principles Applied

* Encapsulation (`private` / `protected` properties)
* Getters and setters
* Constructors for initialization
* Simple business methods
* Basic inheritance:

  * `Person` (base class)

    * `Author`
    * `User`
    * `Admin`

---

## 🗂️ Project Structure

```
UNILIB/
│
├── app/
│   ├── configs/
│   │   └── DBConnection.php
│   │
│   ├── models/
│   │   ├── Person.php
│   │   ├── Author.php
│   │   ├── User.php
│   │   ├── Admin.php
│   │   ├── Book.php
│   │   └── Loan.php
│   │
│   └── router/
│       └── Router.php
│
├── database/
│   └── schema.sql
│
├── public/
│   ├── assets/
│   ├── .htaccess
│   └── index.php
│
├── views/
│   ├── pages/
│   │   ├── admin/
│   │   │   ├── dashboard.php
│   │   │   ├── add_author.php
│   │   │   ├── edit_author.php
│   │   │   ├── add_book.php
│   │   │   └── edit_book.php
│   │   │
│   │   ├── auth/
│   │   │   ├── login.php
│   │   │   └── register.php
│   │   │
│   │   ├── authors/
│   │   │   ├── list.php
│   │   │   └── details.php
│   │   │
│   │   ├── books/
│   │   │   ├── list.php
│   │   │   └── details.php
│   │   │
│   │   ├── user/
│   │   │   └── my_loans.php
│   │   │
│   │   └── 404.php
│   │
│   └── templates/
│       ├── header.php
│       ├── footer.php
│       └── layout.php
│
└── README.md
```


