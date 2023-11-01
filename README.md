# URL Shortener

This is a simple URL shortener created using PHP and MySQL. It allows you to take long URLs and generate shorter, more manageable versions. Users can also access the original URLs by clicking on the shortened links.

## Features

- Create shortened URLs from long ones.
- Redirect users to the original URL when they access the shortened link.
- Simple and easy-to-use front-end interface.
- Backend database storage for URL mapping.

## Table of Contents

- [Installation](#installation)
- [Usage](#usage)
- [Customization](#customization)
- [License](#license)

## Installation

### Prerequisites

- You need a web server with PHP support and a MySQL database.
- Clone or download this repository to your web server directory.

### Database Configuration

- Create a MySQL database (if not already created).
- Update the database connection details in `shorten.php` and `redirect.php` with your database host, username, password, and database name.

### Database Table

- Create a table in your database to store the URL mapping. You can use the following SQL statement:

```sql
CREATE TABLE url_shortener (
   id INT AUTO_INCREMENT PRIMARY KEY,
   original_url VARCHAR(255) NOT NULL
);
