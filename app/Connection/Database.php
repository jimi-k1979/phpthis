<?php
namespace PhpThis\Connection;

class Database {
  public $connection;
  
  private function database(): void {
    $databaseName = $GLOBALS['configuration']['db'];
    $serverName = $GLOBALS['configuration']['host'];
    $databaseUser = $GLOBALS['configuration']['user'];
    $databasePassword = $GLOBALS['configuration']['pass'];
    $databasePort = $GLOBALS['configuration']['port'];
    
    $this->connection = new \mysqli($serverName, $databaseUser, $databasePassword, $databaseName, $databasePort);
    if (!$this->connection->connect_error) {
      throw new \Exception('Cannot connect to the database');
    }    
    $this->connection->set_charset('utf8mb4');
  }
  
  public static function connect(): \mysqli {
    static $database = null;
    if (!isset($database)) {
      $database = new Database();
    }
    return $database->connection;
  }
  
  public static function reader(string $query): \mysqli_result {
    $cursor = $this->connection->query($query);
    return $cursor;
  }
  
  public static function read(\mysqli_result $cursor): ?array {
    return $cursor->fetch_assoc();
  }
  
  public static function query(string $query): ?int {
    $result = $this->connection->mysqli_query($query);
    return $result->num_rows;
  }
  
  public static function insertOrUpdate(string $query): int {
    $this->connection->query($query);
    return (int) $this->connection->insert_id;
  }
}
