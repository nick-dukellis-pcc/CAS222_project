<?php

try
{
  $pdo = new PDO('mysql:host=localhost;dbname=ndukelli_aith', 'ndukelli_pht_user', 'phtmyP4ssw0rd');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include '../includes/error.html.php';
  exit();
}

if (isset($_POST['myname']))
  {
    $name = $_POST['myname'];
    $email = $_POST['myemail'];
    $comments = $_POST['mycomments'];
    $role = $_POST['myrole'];
    // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.

    // Runs a try/catch to attempt to insert data in the database.
    try {
      $sql = 'INSERT INTO contact SET
        name = :name,
        email = :email,
        comments = :comments,
        role = :role';
      $s = $pdo->prepare($sql);
        $s->bindValue(':name', $name);
        $s->bindValue(':email', $email);
        $s->bindValue(':comments', $comments);
        $s->bindValue(':role', $role);
      $s->execute();
    }
    catch (PDOException $e)
    {
      $error = 'Error while registering: ' . $e->getMessage();
      include '../includes/error.html.php';
      exit();
    }
    // Load the thank you page after the INSERT runs
    
    include 'success.html.php';

    // Load the initial page if the initial if statement is false
    
  } else {
      
include 'contact.html.php';

}