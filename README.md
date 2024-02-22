# MyBlog PHP REST API

This is a simple PHP REST API for managing blog posts.

## Table of Contents
- [MyBlog PHP REST API](#myblog-php-rest-api)
  - [Table of Contents](#table-of-contents)
  - [Features](#features)
  - [Getting Started](#getting-started)
    - [Prerequisites](#prerequisites)
    - [Installation](#installation)
    - [Testing with Postman](#testing-with-postman)

## Features
- Retrieve blog posts via a RESTful API.
- Support for categories.
- Basic error handling.

## Getting Started

### Prerequisites
- [XAMPP](https://www.apachefriends.org/index.html) or any PHP development environment.
- [MySQL](https://www.mysql.com/) database.

### Installation

1. Clone the repository:

```bash
  git clone https://github.com/darioffmoreira/php_rest_myBlog.git
```

### Testing with Postman

To test the API endpoints using Postman, follow these steps:

1. Ensure that your XAMPP or PHP development environment is running, and the MySQL database is set up.

2. Open Postman and set the request type to "GET."

3. Use the following URL to test the 'read' endpoint, which retrieves all blog posts:

```bash
  http://localhost/php_rest_myBlog/api/post/read.php
```
4. Send the request to see the response from the API.