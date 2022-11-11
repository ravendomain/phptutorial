
<?php

session_start();
if(isset($_POST["next"])){

    array_merge($_SESSION,$_POST);

    $_SESSION = array_merge($_SESSION,$_POST);

}

?>

<p> Hello </p> <?php echo $_SESSION["nickname"]. " from " .$_SESSION["country"]; ?> <p>please continue to fill out the form.</p>


<form method="POST" action="dashboard.php">
    <label for="">Email Address</label>
    <input type="text" name="email" />
     

    <br><br>
    <label for="">Password</label>
    <input type="text" name="password" />

    <br><br>
    <input type="submit" name="submit" value="submit" />

</form>