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
<body>
<h2>Create an Account</h2>
<p>If you already have a Google Account, you can <a href="https://www.google.com/">sign in here</a></p>
<h2></h2>
<form action="validation.php" method="post">
Your current email addres: <input required type="email" name="current_email"><br><span>e.g: myname@example.com. This will be used to sign-in to your account</span><br><br>
Choose a password: <input required type="password" name="current_pword" minlength="8"><br>Minimum of 8 characters in length.<br><br>
Re-enter password: <input required type="password" name="reenter_pword" minlength="8"><br>

<input type="checkbox" value="Stayed_signed_in">Stayed signed in<br>
<input type="checkbox" value="Enable_web_history">Enable Web History <a href="validation.php">Learn More</a><br>


Location: <select name="location" style="width:100px;">
<option>United States</option>
</select><br>
Word Verification: Type the characters you see in the picture below.<br>
<input required type="text" name="word_verification">
<br>
<input type="submit" value="Submit">
</form>

</body>
</html>