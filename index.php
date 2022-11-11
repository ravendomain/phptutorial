<?php

echo "Hello World";

?>

<h1>Hello Wisdom</h1>

<?php
echo 'This is button <br>';
echo 'This is button';
?>

<br />


<?php

$students = array( 'williams', 'alex', 'aisosa', 'wisdom');
$word = 'legal';
$age = true;

//Bollean are just used for conditional statements which denotes true or false

if($age === true){
    echo 'You are ' .$word. ' for alcohol';
}else{
    echo "You are not aged enough";
}

echo "<br />";
echo "<br />";

$students = array ('Ken', 'Alex', 'Kelvin', 'John');

$firststudent = $students[0];
$secondstudent = $students[1];
$thirdstudent = $students[2];
$forthstudent = $students[3];

echo " " .$firststudent. "<br />" .$secondstudent. "<br />" .$thirdstudent. "<br />" .$forthstudent ;

echo "<br />";
echo "<br />";

$num_of_students = count($students);

$index_of_last_students = $num_of_students -1;

$laststudent = $students[$index_of_last_students];

echo $laststudent;

echo "<br />";
echo "<br />";

//Basic Arimetic Operators

//Addition

$x = 10;
$y = 2;

echo $x + $y;
echo "<br />";

echo $x / $y;
echo "<br />";

echo $x % $y;
echo "<br />";

echo $x ** $y;
echo "<br />";


//Comparism Operators


echo "<br />";
echo "<br />";

$x = 14;
$y = 2;

//The value just have to be equal.
echo $x != $y;
echo "<br />";
echo $x == $y;

echo "<br />";

// The identical operator has to be both true and equal data type.
echo $x !== $y;
echo "<br />";
echo $x === $y;

?>


<?php

$email = "wisdom@gmail.com";
$password2 = "12345";

$email = $email === "wisdom@gmail.com";
$password2 = $password2 === "12345";

if($email && $password2){
    echo "Signed in Successfully";
} else{
    echo "Password is incorrect";
}

?>


<?php

echo "<br> <br>";

$student = "Dan";

switch($student){

    case "Wisdom":
        echo "This is " .$student;
    break;

    case "Alex":
        echo "This is " .$student;
    break;

    case "Dan":
        echo "This is " .$student;
    break;

    case "Winner":
        echo "This is " .$student;
    break;

    default :
        echo "User does not exist";
}

?>



<?php

//LOOPING

echo "<br> <br>";
echo "<br> <br>";

for ($x=0; $x < 10; $x++) {
    echo $x . " <br>";
}

?>


<?php

// PRACTICING IT.
echo "<br> <br>";
echo "<br> <br>";

$students = array ("Aisosa", "Kelvin", "Wisdom", "Jeffery");

$num_of_students = count($students);

for ($x=0; $x < $num_of_students; $x++) {
    
    echo $students[$x] . " <br>";
}

?>







<?php

echo "<br>";

$student1 = "Aisosa";
$age = 10;
$class = "Primary one";
$friends = array ("Ken", "won", "love");



function Outputstring(){
    $about = "Aisosa is 10 years old and he is in primary one";
    echo $about. " = " .strlen($about). " characters";
    echo "<br>";
}

Outputstring();


echo "<br>";


$about = "Aisosa is 10 years old and he is in primary 4";

function Output($value){
    echo $value. " = " .strlen($value). " characters";
    echo "<br>";
}

Output($about);


echo "<br>";


function Output2($name, $age, $class){
    echo $name. " = " .strlen($name). " characters";
    
    echo"<br><br>";

    echo "The student name is " .$name. " he is " .$age. " of age and in " .$class. " = " .strlen($name). strlen($age). strlen($class). " characters";

    echo "<br>";
}

Output2("Aisosa", "12", "Primary1");



echo "<br>";
echo "<br>";




function divsum($x = 10, $y = 10, $z = 10){
    $divsum = ($x+$y)/$z;

    return $divsum; 
}

$result = divsum(2,8,10);

$result2 = divsum(10,20,10);

$result3 = divsum(20,40,2);

echo $result;
echo "<br>";

echo $result2;
echo "<br>";

echo $result3;
echo "<br>";

?>


<?php

echo "<br><br>";

$cars = array("Benz", "Bmw", "GTR", "Lexus");

function Car($car){
    return "The name of my car is " .$car;
}

$num_of_cars = count($cars);

for ($x = 0; $x < $num_of_cars; $x++){

    echo $cars[$x] . "<br>";

    echo Car($cars[$x]);

}




echo "<br><br>";

?>

<?php

session_start();

// if (isset($_GET["submit"])){
//   $username =  $_GET["username"];
// }



// if (isset($_GET["submit"])){
// $_SESSION = $_GET;
// }


if (isset($_GET["submit"])){
$_SESSION ["firstpage"] = $_GET["username"];
}
?>



<html>
    <form method="GET" action="test.php">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" >

        <input type="submit" name="submit" value="Submit" >
    </form>

    <p> Username : <?php echo $username; ?> </p>
</html>



