<?php

if(!empty($_POST)){
    $current_email = $_POST["current_email"];
    $current_pword = $_POST["current_pword"];
    $reenter_pword = $_POST["reenter_pword"];
    $location = $_POST["location"];
    $word_verification = $_POST["word_verification"];

    foreach ($_POST as $var){
        echo "$var <br>";
    }
}

?>

<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<h2>Create an Account</h2>
<p>If you already have a Google Account, you can <a href="https://www.google.com/">sign in here</a></p>
<h2>Required information for Google account</h2>


<form class="form-horizontal" action="validation.php" method="post">
<div class="form-group">
Your current email addres: <input required type="email" name="current_email" pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}"><br><span>e.g: myname@example.com. This will be used to sign-in to your account</span><br><br>
</div>
<div class="form-group">
Choose a password: <input required type="password" name="current_pword" minlength="8"><br>Minimum of 8 characters in length.<br><br>
</div>
<div class="form-group">
Re-enter password: <input required type="password" name="reenter_pword" minlength="8"><br>
</div>

<div class="form-group">
<input type="checkbox" value="Stayed_signed_in">Stayed signed in<br>
<input type="checkbox" value="Enable_web_history">Enable Web History <a href="validation.php">Learn More</a><br>
</div>

<div class="form-group">
Location: <select name="location" style="width:100px;">
<option>United States</option>
</select><br>
</div>
<div class="form-group">
Word Verification: Type the characters you see in the picture below.<br>
<input required type="text" name="word_verification">
</div>
<br>
<div class="form-group">
<input type="submit" value="Submit">
</div>
</form>
</div>
</body>
</html>