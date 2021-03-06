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
    $age = $_POST['myage'];
    $role = $_POST['myrole'];
    $phone = $_POST['myphone'];
    $email = $_POST['myemail'];
    $contactname = $_POST['contactname'];
    $contactphone = $_POST['contactphone'];
    $gender = $_POST['mygender'];
    $shirtsize = $_POST['myshirtsize'];
    $saturday = $_POST['saturday'];
    $sunday = $_POST['sunday'];
    $comments = $_POST['mycomments'];
    // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.

    // Runs the try/catch to attempt to insert data in the database.
    try {
      $sql = 'INSERT INTO registrations SET
        name = :name,
        age = :age,
        role = :role,
        phone = :phone,
        email = :email,
        contactname = :contactname,
        contactphone = :contactphone,
        gender = :gender,
        shirtsize = :shirtsize,
        saturday = :saturday,
        sunday = :sunday,
        comments = :comments';
      $s = $pdo->prepare($sql);
        $s->bindValue(':name', $name);
        $s->bindValue(':age', $age);
        $s->bindValue(':role', $role);
        $s->bindValue(':phone', $phone);
        $s->bindValue(':email', $email);
        $s->bindValue(':contactname', $contactname);
        $s->bindValue(':contactphone', $contactphone);
        $s->bindValue(':gender', $gender);
        $s->bindValue(':shirtsize', $shirtsize);
        $s->bindValue(':saturday', $saturday);
        $s->bindValue(':sunday', $sunday);
        $s->bindValue(':comments', $comments);
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
      
include 'registration.html.php';

}