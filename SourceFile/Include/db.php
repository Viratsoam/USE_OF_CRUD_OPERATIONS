<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "vikassoam";

try
{

$db = new PDO("mysql:host={$db_host}; dbname={$db_name}",$db_user,$db_pass);
}
catch (Exception $e)
{

echo $e->getMessage();
}


 include './Include/class.crud'; 
 
  $crud = new crud($db);

?>