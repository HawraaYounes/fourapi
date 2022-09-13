<?php
$password = $_GET['password'];
 
$number = preg_match('@[0-9]@', $password);
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$specialChars = preg_match('@[^\w]@', $password);
 
if(strlen($password) < 12 || !$number || !$uppercase || !$lowercase || !$specialChars) {
    $strong="Not Strong";
} else {
    $strong="Strong";
}
$result=[
    "result"=>$password." Is ".$strong
];
?>