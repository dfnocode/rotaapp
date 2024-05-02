<?php

  try {
    $auth = new PDO('mysql:host=localhost:10040;dbname=rotadb24;charset=utf8', 'root', 'root');
  }
  catch(Exception $error) {
    die('Error : ' . $error->getMessage());
  }

?>