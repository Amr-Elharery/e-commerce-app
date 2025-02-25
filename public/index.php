<?php
  echo '<h1>Hello mystore!</h1>';
  
  include __DIR__ . '/../config/db.php';
  $database = new Database();
  try{
      $connection = $database->connect();
      if($connection){
        echo 'Connected to the database';
      }
  }
  catch(Exception $e){
    echo 'Caught exception: ', $e->getMessage(), "\n";
  }
?>