

<?php

session_start();
if(isset($_POST["submit"])){

    $_SESSION = array_merge($_SESSION,$_POST);

}

?>




<h1>DASHBOARD </h1>

<br><br>

<h4>Welcome <?php echo $_SESSION["nickname"]; ?> </h4>

<p>This is your dashboard, and your details are below.</p>

<p>Your Nickname Is : </p> <?php echo $_SESSION["nickname"]; ?>
<p>Your Country Is : </p> <?php echo $_SESSION["country"]; ?>
<p>Your State Is  : </p> <?php echo $_SESSION["state"]; ?>
<p>Your Email Is : </p><?php echo $_SESSION["email"]; ?>
<p>Your Password Is : </p> <?php echo $_SESSION["password"]; ?>
