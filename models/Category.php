<?php

  class Category {
    // DB Stuff
    private $connection;
    private $table = 'categories';

    // Category Properties
    public $id;
    public $name;
    public $created_at;

    // Constructor with DB
    public function __construct($db) {
      $this->connection = $db;
    }

    // --------------------------- Get all Categorys : BEGIN

    public function read() {
      // Create query
      $query = 'SELECT id, name, created_at
                FROM
                ' . $this->table . '
                ORDER BY
                  created_at DESC';
      
      // Prepare statement
      $statement = $this->connection->prepare($query);

      $statement->execute();

      return $statement;
    }

    // --------------------------- Get all Categorys : END

    // --------------------------- Get Single Category : BEGIN

      public function read_single() {
        // create query
        $query = 'SELECT id, name, created_at
                  FROM
                  '. $this->table . '
                  WHERE id = ?';

        // Prepare statement
        $statement = $this->connection->prepare($query);

        // Bind ID
        $statement->bindParam(1, $this->id);

          // Execute query
        $statement->execute();

        // Assign propertys
        $row = $statement->fetch(PDO::FETCH_ASSOC);

        // Set properties
        $this->id = $row['id'];
        $this->name = $row['name'];
      }

    // --------------------------- Get Single Category : END

  }

    