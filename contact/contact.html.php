<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ace In The Hole Contact Form</title>
    <meta name="description" content="Contact the Ace In The Hole athletics event team for any questions or concerns.">
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
    <h2>Contact us with any questions or comments you have. We'll respond to you via e-mail as soon as we can!</h2>
    <div id="wrapper">
      <p>Required fields are marked with an asterisk (*).</p>
      <main>
        <div id="contact">
          <form method="post">
            <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
            <label for="myname">*Full Name:</label>
              <input type="text" name="myname" id="myname" required>
            <label for="myemail">Email:</label>
              <input type="email" name="myemail" id="myemail">
            <label for="mycomments">*Write your message here:</label>
              <textarea name="mycomments" id="mycomments" rows="2" cols="20" required></textarea>
            <label for="myrole">*Athlete, Volunteer, or just interested?:</label>
              <select size="1" name="myrole" id="myrole">
                <option></option>
                <option value="athlete">Athlete</option>
                <option value="volunteer">Volunteer</option>
                <option value="Interested Party">Interested Party</option>
              </select>
            <input id="mysubmit" type="submit" value="Submit">
          </form>
        </div>
      </main>
    </div>
    <?php include '../includes/footer.inc.html.php'; ?>
  </body>
</html>