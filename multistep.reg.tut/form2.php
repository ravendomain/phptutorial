
<?php

session_start();
if(isset($_POST["next"])){

    $_SESSION = $_POST;
    $_SESSION = array_merge($_SESSION,$_POST);

    // function validation($data){
    //     return validation($data);
    // }
    
    // $fullname = validation($_SESSION["fullname"]);
    // $nickname = validation($_SESSION["nickname"]);

    // $_SESSION["fullname"] = $fullname;
    // $_SESSION["nickname"] = $email;


}

?>

<h1>
<?php echo "Hello " .$_SESSION["nickname"]; ?>
</h1>

<p>Please continue to fill out the form.</p>

<form method="POST" action="form3.php">
    <label for="">Country</label>
    <input type="text" name="country" />
     

    <br><br>
    <label for="">State</label>
    <input type="text" name="state" />

    <br><br>
    <input type="submit" name="next" value="Next" />

</form>