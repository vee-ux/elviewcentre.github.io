Technologies Used
HTML5 & CSS3
PHP
MySQL
Bootstrap (for responsive design)
           
Getting Started
Prerequisites
XAMPP (or similar local server stack):

Download XAMPP.
Git (optional, for cloning the repository):

Download Git.
Local Installation
Clone the repository:

bash
Copy code
git clone https://github.com/vee-ux/elviewcentre.github.io.git
Move the project folder to your server directory:

Windows: C:\xampp\htdocs\elviewcentre
macOS/Linux: /Applications/XAMPP/htdocs/elviewcentre
     
Start XAMPP and ensure:
Apache and MySQL services are running.
Access the project in your browser:
Copy code
http://localhost/El-View Website
     
Database Setup
Open phpMyAdmin at http://localhost/phpmyadmin.
Create a new database named school_website.
Run the following SQL scripts to set up the necessary tables:
Table: users (Admin Login Credentials)
sql
Copy code
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);
Table: messages (Contact Form Messages)
sql
Copy code
CREATE TABLE inquiries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    phone VARCHAR(15),
    message TEXT,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

Admin Login
Navigate to the login page
Once logged in, you can view and manage messages sent through the contact form.



License
This project is licensed under the MIT License.
