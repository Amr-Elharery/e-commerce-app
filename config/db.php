<?php
  class Database{
    private static $connection = null;

    public static function connect(){
      $ENV = include __DIR__ . '/env.php';
      if(self::$connection == null){
        self::$connection = new mysqli($ENV['SERVER_NAME'], $ENV['USER_NAME'], $ENV['PASSWORD'], $ENV['DB_NAME']);
      }
      return self::$connection;
    }
  }
?>