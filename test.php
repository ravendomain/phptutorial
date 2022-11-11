<?php 


session_start();

if(isset($_POST['next'])) {


	foreach ($_POST as $key => $value) 
	{
		$_SESSION['info'][$key] = $value;
	}

$keys = array_keys($_SESSION['info']);


if (in_array('next', $keys)) {
	unset($_SESSION['info']['next']);
}

echo "Hell world";

header("location:appeal.php");
}

?>