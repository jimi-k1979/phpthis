<?php
namespace PhpThis\Connection;

class DBConnection {
  protected $dsn;
  protected $user;
  protected $password;
  
  public static function createFromConfiguration(Configuration $config): DBConnection {
    $conn = new DBConnection();
    $conn->setDsn($config->getDBDsn());
    $conn->setUser($config->getDBUser());
    $conn->setPassword($config->getDBPass());
    
    return $conn;
  }
  
  public static function newConnection($dsn, $user, $password): DBConnection {
    $conn = new DBConnection();
    $conn->setDsn($dsn);
    $conn->setUser($user);
    $conn->setPassword($password);

    return $conn;
  }
}
