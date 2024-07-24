# ATM Management System

## Overview

This repository contains the implementation of an ATM Management System web application. The primary goal of this project was to develop a user-friendly application that simplifies the management of ATM services and reduces the effort required for manual data entry by bank staff. The application uses PHP and HTML for the front-end and MySQL with WAMP server for the back-end.

## Description

The ATM Management System facilitates efficient banking services through an automated system. The application includes functionalities for customer login, account management, transaction handling, and various banking operations such as withdrawal, deposit, transfer, and mini-statement generation.

## Features

### User Functionalities
- **Customer Login**: Customers can log in using their card number and PIN.
- **Home Page**: Displays the customer's name and provides access to various banking operations.
- **Change PIN**: Allows customers to change their PIN.
- **Check Balance**: Displays the current account balance.
- **Withdraw**: Enables customers to withdraw money from their account.
- **Deposit**: Allows customers to deposit money into their account.
- **Transfer**: Facilitates fund transfer between accounts.
- **Mini-Statement**: Displays the customer's recent transactions.
- **Logout**: Logs the customer out of the application.

### Admin Functionalities
- **Manage Stock**: Admins can update and add new stock.
- **Review Transactions**: Admins can view daily transactions and manage inventory.

### Implementation Details

- **Back-End**: MySQL database with tables for customers, accounts, cards, and transactions. Uses PHP for database connectivity.
- **Front-End**: Developed using PHP and HTML, featuring login, main page, and various transaction-related pages.
- **Database Connectivity**: Implemented using MySQLi and PDO for secure and efficient database operations.

## Usage

To use the ATM Management System:
1. Set up a WAMP server and host the application files.
=> Copy the file php files from the folder php
=> Save the above wtproj file in WWW folder in case of WAMP application folder.
=> Import the proj.sql code in phpMyAdmin.
=> Run on browser "localhost/login.php"

## Learnings

- **Web Development**: Gained experience in developing a web application using HTML, CSS, PHP, and MySQL.
- **Database Management**: Learned to design and manage a database for storing banking information.
- **User Authentication**: Implemented secure user authentication and session management.
- **Banking Operations**: Developed functionalities for common banking operations such as withdrawals, deposits, and transfers.

## Conclusion

This project provided valuable experience in developing a comprehensive web application for managing ATM services. The ATM Management System demonstrates the ability to create a user-friendly and functional banking platform using modern web technologies.
