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
    - [Create a new post](#create-a-new-post)
    - [Update a Post](#update-a-post)
      - [Check data](#check-data)
    - [Delete a Post](#delete-a-post)
    - [Read Categories](#read-categories)
    - [Read Single Category](#read-single-category)
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
1. To retrieve all blog posts, make a GET request to:

```bash
http://localhost/php_rest_myBlog/api/post/read.php
```

### Read Single Post
1. To retrieve a single blog post, make a GET request with the post ID as a query parameter:

```bash
http://localhost/php_rest_myBlog/api/post/read_single.php?id=3
```

### Create a new post
1. To create a new blog post, make a POST request to:

```bash
http://localhost/php_rest_myBlog/api/post/create.php
```

2. Include the post details in the request body as a JSON object:
   
```json
{
    "title": "Your Post Title",
    "body": "Your post content goes here.",
    "author": "Author Name",
    "category_id": "1"
}
```

- A successful creation will return a JSON response:

```json
{
    "message": "Post Created!"
}
```

- In case of an error:

```json
{
    "message": "Post not created!"
}
```

### Update a Post
1. To update an existing blog post, make a PUT request to:
  
```bash
http://localhost/php_rest_myBlog/api/post/update.php
```

2. Include the post details and the post ID in the request body as a JSON object:

```json
{
    "id": "15",
    "title": "Updated Title",
    "body": "Updated post content.",
    "author": "Updated Author",
    "category_id": "2"
}
```

#### Check data

To retrieve information about a specific blog post using a GET request, you can follow these steps:

1. Open your favorite API testing tool (e.g., Postman).

2. Make a POST request to the following URL:

```bash
http://localhost/php_rest_myBlog/api/post/read_single.php?id=15
```

### Delete a Post

To delete an existing blog post, make a DELETE request to:

```bash
http://localhost/php_rest_myBlog/api/post/delete.php
```

- Include the post ID in the request body as a JSON object:
  
```json
{
    "id": "15"
}
```

### Read Categories

- To retrieve a list of all blog categories, make a GET request to:

```bash
http://localhost/php_rest_myBlog/api/category/read.php
```

- A successful request will return a JSON response containing the list of categories:

```json
{
    "data": [
        {
            "id": "1",
            "name": "Technology"
        },
        {
            "id": "2",
            "name": "Gaming"
        },
        {
            "id": "3",
            "name": "Auto"
        },
        {
            "id": "4",
            "name": "Entertainment"
        },
        {
            "id": "5",
            "name": "Books"
        }
    ]
}
```

### Read Single Category

- To retrieve information about a specific blog category, make a GET request to the following URL:

```bash
http://localhost/php_rest_myBlog/api/category/read_single.php?id=2
```

Response:

```json
{
    "id": 2,
    "name": "Category Name"
}
```



keeping working ...



## License
- This project is licensed under the MIT License.