
<?php


$students = array("John", "Kelvin", "Frank", "Destiny", "William", "David");


//Finding Only Last Student

$total_num_of_students = count ($students);

$finding_last_student = $total_num_of_students -1;

$laststudent = $students[$finding_last_student];



$studentname = "Aisosa";


switch($studentname) {
    case "John":
        echo "This is " .$studentname. " and he is so friendly that he has " .$total_num_of_students. 
        " friends but his best friend is " .$laststudent;
    break;

    case "Kelvin":
        echo "This is " .$studentname. " and he is so friendly that he has " .$total_num_of_students. 
        " friends but his best friend is " .$laststudent;
    break;


    case "Frank":
        echo "This is " .$studentname. " and he is so friendly that he has " .$total_num_of_students. 
        " friends but his best friend is " .$laststudent;
    break;

    case "Destiny":
        echo "This is " .$studentname. " and he is so friendly that he has " .$total_num_of_students. 
        " friends but his best friend is " .$laststudent;
    break;

    case "William":
        echo "This is " .$studentname. " and he is so friendly that he has " .$total_num_of_students. 
        " friends but his best friend is " .$laststudent;
    break;

    case "David":
        echo "This is " .$studentname. " and he is so friendly that he has " .$total_num_of_students. 
        " friends but his best friend is " .$laststudent;
    break;

    case "Aisosa":
        echo "This is " .$studentname. " and he is so friendly that he has " .$total_num_of_students. 
        " friends but his best friend is " .$laststudent;
    break;

    default:
       echo "User does not exist";
    break;
}



echo "<br><br>";


//Bollean are just used for conditional statements which denotes true or false

$relationship = true;


if ($relationship === true) {
    echo $studentname. " is single";
}else{
    echo $studentname. " is not single";
}



echo "<br><br>";


//Basic Arimetic Operators

//Addition


$x = 10;
$y = 20;


echo $y - $x;
echo "<br>";

echo $x * 2;
echo "<br>";

echo $x + $y;
echo "<br>";



echo "<br><br>";


// BOOLEAN Comparism Operators

$email = "aisosa@gmail.com";
$password = "aisosa";

$useremail = $email === "aisosa@gmail.com";
$userpassword = $password === "aisosa";

if ($useremail && $userpassword){
    echo "Successfully Signed In";
}else{
    echo "Sign In Unsuccessful";
}



echo "<br><br>";



//LOOPING

for ($x=0; $x<10; $x++){
    echo $x. "<br>";
}

echo "<br>";
//LOOPING AISOSA FRIENDS

for ($x=0; $x < $total_num_of_students; $x++){
    echo $students[$x]. "<br>";
}



echo "<br><br>";



//FUNCTION

$studentoftheyear = "There are " .$total_num_of_students. " in " 
.$studentname. "'s class, but " .$studentname. " is the best student of the year.";

function Beststudent($beststudent){
    echo $beststudent. " = " .strlen($beststudent);
}


Beststudent($studentoftheyear);

















?>