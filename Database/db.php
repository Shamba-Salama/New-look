<?php

$db_server = "localhost";
$db_user = 'root';
$db_pass = '22092209';
$db_name = "salama_farm_db";
$conn = '';

  try{
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
  }catch(myqli_sql_exception){
    echo "Connection failed";
  }



?>