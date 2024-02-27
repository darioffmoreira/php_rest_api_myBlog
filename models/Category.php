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

    // Get categories
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
  }