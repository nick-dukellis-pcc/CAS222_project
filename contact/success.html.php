<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ace In The Hole Contact Email Confirmation</title>
    <meta name="description" content="Register for a weekend Ace In The Hole athletics event.">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/reset.css" rel="stylesheet" type="text/css">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link href="../css/navigation.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
      <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
  </head>
  <body>
    <?php include '../includes/header.inc.html.php'; ?>
    <div id="wrapper">
      <main>
        <h2>Thank you!</h2>
        <p>Our records show you submitted the following:<br>
          Name: <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?><br>
          Email: <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?><br>
          Questions/Comments: <?php echo htmlspecialchars($comments, ENT_QUOTES, 'UTF-8'); ?><br>
          Athlete, Volunteer, or just interested: <?php echo htmlspecialchars($role, ENT_QUOTES, 'UTF-8'); ?>
        </p>
      </main>
    </div>
    <?php include '../includes/footer.inc.html.php'; ?>
  </body>
</html>