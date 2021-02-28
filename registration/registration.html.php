<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ace In The Hole Registrations</title>
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
  <h2>Register for one of our events</h2>
  <div id="wrapper">  
    <p>Required fields are marked with an asterisk (*).</p>
      <main>
        <div id="registrations">
          <form method="post">
            <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
            <label for="myname">*Full Name:</label>
              <input type="text" name="myname" id="myname" required>
            <label for="myage">*Age:</label>
              <input type="text" name="myage" id="myage" required>
            <label for="myrole">*Athlete or Volunteer?:</label>
              <select size="1" name="myrole" id="myrole">
                <option></option>
                <option value="athlete">Athlete</option>
                <option value="volunteer">Volunteer</option>
              </select>
            <label for="myphone">Phone:</label>
              <input type="tel" name="myphone" id="myphone">
            <label for="myemail">*Email:</label>
              <input type="email" name="myemail" id="myemail" required>
            <label for="contactname">*Emergency Contact Name:</label>
              <input type="text" name="contactname" id="contactname" required>
            <label for="contactphone">Emergency Contact Phone:</label>
              <input type="tel" name="contactphone" id="contactphone">
            <label for="mygender">*Gender:</label>
              <select size="1" name="mygender" id="mygender">
                <option></option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="non-binary">Non-Binary</option>
              </select>
            <label for="myshirtsize">*T-shirt Size:</label>
              <input type="text" name="myshirtsize" id="myshirtsize" required>
            <label for="saturday">*Are you registering for any events on Saturday?</label>
              <input type="text" name="saturday" id="saturday" required>
            <label for="sunday">*Are you registering for any events on Sunday?</label>
              <input type="text" name="sunday" id="sunday" required>
            <label for="mycomments">*Do you have any food or drink sensitivities, allergies, or would any other special accomodations be necessary?</label>
              <textarea name="mycomments" id="mycomments" rows="2" cols="20" required></textarea>
            <input id="mysubmit" type="submit" value="Submit">
          </form>
        </div>
      </main>
    </div>
    <?php include '../includes/footer.inc.html.php'; ?>
  </body>
</html>