<?php
  namespace App;
  class Database{
    private $conn;
      protected static $settings = array(
        "mysql" => array(
            'driver' => "mysql",
            'host' => "localhost",
            'user' => "campus",
            'pass' => "campus2023",
            'database' => 'campusland',
            'flags' => array(
                \PDO::ATTR_PERSISTENT => false,
                // Enable exceptions
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                // Emulate prepared statements
                \PDO::ATTR_EMULATE_PREPARES => true,
                // Set default fetch mode to array
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                // Set character set
                \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci'
            )
          )
      );
      public function __construct($args  = [])
      {
        $this->conn = $args['conn'] ?? null;
      }
      public function connection($dbkey){
        $dbconfig = self::$settings[$dbkey];
        $this->conn = $args['conn'] ?? null;
        $this-> conn = null; 
        $dns = "{$dbconfig['driver']}:host={$dbconfig['host']};dbname={$dbconfig['database']}";
        try {
            $connection = new \PDO($dns, $dbconfig['user'], $dbconfig['pass'], $dbconfig['flags']);
            echo 'conexion exitosa';
        } catch (\PDOException $e) {
            echo "Error: " . $e->getMessage();

        }
        return $this->conn;
      }
      
      }
  
?>