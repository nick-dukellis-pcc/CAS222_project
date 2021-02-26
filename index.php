<?php

ini_set('display_errors', true);
error_reporting(E_ALL);


try
{
  $pdo = new PDO('mysql:host=localhost;dbname=ndukelli_aith', 'ndukelli_pht_user', 'phtmyP4ssw0rd');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include 'includes/error.html.php';
  exit();
}

include 'home/home.html.php';