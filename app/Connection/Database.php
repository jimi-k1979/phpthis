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
    
    $this->connection = mysqli_connect($serverName, $databaseUser, $databasePassword, $databaseName, $databasePort);
    mysqli_set_charset($this->connection, 'utf8mb4');
    if (!$this->connection) {
      throw new \Exception('Cannot connect to the database');
    }
  }
  
  public static function connect() {
    static $database = null;
    if (!isset($database)) {
      $database = new Database();
    }
    return $database->connection;
  }
  
  public static function reader(string $query, $connnection) {
    $cursor = mysqli_query($connnection, $query);
    return $cursor;
  }
  
  public static function read($cursor) {
    return mysqli_fetch_assoc($cursor);
  }
  
  public static function query($query, $connection) {
    $result = mysqli_query($connection, $query);
    return mysqli_num_rows($result);
  }
  
  public static function insertOrUpdate($query, $connection) {
    $result = mysqli_query($connection, $query);
    return intval(mysqli_insert_id($connection));
  }
}
