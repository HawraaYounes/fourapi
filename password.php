<?php
$password = $_POST['password'];
 
$number = preg_match('@[0-9]@', $password);//must contain numbers
$uppercase = preg_match('@[A-Z]@', $password);//must contain Upper case letters
$lowercase = preg_match('@[a-z]@', $password);//must contain lower case letters
$specialChars = preg_match('@[^\w]@', $password);//must contain special charachters
 
if(strlen($password) < 12 || !$number || !$uppercase || !$lowercase || !$specialChars) {//check if password is strong
    $strong=" Strong Password";
} else {
    $strong="Not Strong Password";
}
$result=[
    "result"=>$password." Is ".$strong
];
echo json_encode($result);
?>