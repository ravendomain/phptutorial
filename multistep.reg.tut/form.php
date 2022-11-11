<?php

session_start();

if (isset($_POST["next"])){

    $_SESSION = $_POST;
    
}
?>





<form method="POST" action="form2.php">
    <label for="">Full Name</label>
    <input type="text" name="fullname" />
     

    <br><br>
    <label for="">Nickname</label>
    <input type="text" name="nickname" />

    <br><br>
    <input type="submit" name="next" value="Next" />


</form>


