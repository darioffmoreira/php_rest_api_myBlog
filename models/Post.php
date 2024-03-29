<?php

  class Post {
    // DB stuff
    private $connection;
    private $table = 'posts';

    // Post Properties
    public $id;
    public $category_id;
    public $category_name;
    public $title;
    public $body;
    public $author;
    public $created_at;

    // Constructor with DB
    public function __construct($db) {
      $this->connection = $db;
    }

    // --------------------------- Get Posts : BEGIN

    public function read() {
      // Create query
      $query = 'SELECT
              c.name as category_name,
              p.id,
              p.category_id,
              p.title,
              p.body,
              p.author,
              p.created_at
            FROM
              ' . $this->table . ' p
            LEFT JOIN
              categories c ON p.category_id = c.id
            ORDER BY
              p.created_at DESC';

        // Prepare statement
        $statement = $this->connection->prepare($query);

        $statement->execute();

        return $statement;
    }

    // --------------------------- Get Posts : END

    // --------------------------- Get Single Post : BEGIN

    public function read_single() {

        // Create query
        $query = 'SELECT
        c.name as category_name,
        p.id,
        p.category_id,
        p.title,
        p.body,
        p.author,
        p.created_at
      FROM
        ' . $this->table . ' p
      LEFT JOIN
        categories c ON p.category_id = c.id
      WHERE
        p.id = ?
        LIMIT 0,1';

        // Prepare statement
        $statement = $this->connection->prepare($query);

        // Bind ID
        $statement->bindParam(1, $this->id);

        // Execute query
        $statement->execute();

        // Assign propertys
        $row = $statement->fetch(PDO::FETCH_ASSOC);

        // Set properties
        $this->title = $row['title'];
        $this->body = $row['body'];
        $this->author = $row['author'];
        $this->category_id = $row['category_id'];
        $this->category_name = $row['category_name'];
    }

    // --------------------------- Get Single Post : END
    
    // --------------------------- Create Post : BEGIN

    public function create() {
      // Create query
      $query = 'INSERT INTO ' . $this->table . '
        SET
          title = :title,
          body = :body,
          author = :author,
          category_id = :category_id';

      // Prepare statement
      $statement = $this->connection->prepare($query);

      // Clear data
      $this->title = htmlspecialchars(strip_tags($this->title));
      $this->body = htmlspecialchars(strip_tags($this->body));
      $this->author = htmlspecialchars(strip_tags($this->author));
      $this->category_id = htmlspecialchars(strip_tags($this->category_id));

      // Bind data
      $statement->bindParam(':title', $this->title);
      $statement->bindParam(':body', $this->body);
      $statement->bindParam(':author', $this->author);
      $statement->bindParam(':category_id', $this->category_id);

      // Execute query
      if($statement->execute()){
          return true;
      }
      
      // Print error if something goes wrong
      printf("Error: %s.\n", $statement->error);
      return false;
    }

    // --------------------------- Create Post : END

    // --------------------------- Update Post : BEGIN

    public function update() {
      // Create query
      $query = 'UPDATE ' . $this->table . '
        SET
          title = :title,
          body = :body,
          author = :author,
          category_id = :category_id
        WHERE
        id = :id';

      // Prepare statement
      $statement = $this->connection->prepare($query);

      // Clear data
      $this->title = htmlspecialchars(strip_tags($this->title));
      $this->body = htmlspecialchars(strip_tags($this->body));
      $this->author = htmlspecialchars(strip_tags($this->author));
      $this->category_id = htmlspecialchars(strip_tags($this->category_id));
      $this->id = htmlspecialchars(strip_tags($this->id));

      // Bind data
      $statement->bindParam(':title', $this->title);
      $statement->bindParam(':body', $this->body);
      $statement->bindParam(':author', $this->author);
      $statement->bindParam(':category_id', $this->category_id);
      $statement->bindParam(':id', $this->id);

      // Execute query
      if($statement->execute()){
          return true;
      }
      
      // Print error if something goes wrong
      printf("Error: %s.\n", $statement->error);
      return false;
    }

    // --------------------------- Update Post : END

    // --------------------------- Delete Post : BEGIN

    public function delete() {

        // Create query
        $query = 'DELETE FROM ' . $this->table. ' WHERE id = :id';

        // Prepare statement
        $statement = $this->connection->prepare($query);

        // Clear data
        $this->id = htmlspecialchars(strip_tags($this->id));

        // Bind data
        $statement->bindParam(':id', $this->id);

        // Execute query
        if($statement->execute()){
          return true;
        }

        // Print error if something goes wrong
        printf("Error: %s.\n", $statement->error);
        return false;

    }

    // --------------------------- Delete Post : END

}