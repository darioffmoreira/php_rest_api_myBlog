# MyBlog PHP REST API

This is a simple PHP REST API for managing blog posts.

## Table of Contents
- [MyBlog PHP REST API](#myblog-php-rest-api)
  - [Table of Contents](#table-of-contents)
  - [Features](#features)
  - [Getting Started](#getting-started)
    - [Prerequisites](#prerequisites)
    - [Installation](#installation)
  - [Usage](#usage)
    - [Read All Posts](#read-all-posts)
    - [Read Single Post](#read-single-post)
  - [License](#license)

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

## Usage

### Read All Posts
- To retrieve all blog posts, make a GET request to:

```bash
http://localhost/php_rest_myBlog/api/post/read.php
```

### Read Single Post
- To retrieve a single blog post, make a GET request with the post ID as a query parameter:

```bash
http://localhost/php_rest_myBlog/api/post/read_single.php?id=3
```

...



## License
- This project is licensed under the MIT License.