<?php
$string =$_GET["string"];
$str = "";
$s = strtolower($string);
$len = strlen($string);
for ($i = ($len - 1); $i >= 0; $i--) {//loop over the string from the last char
    $str = $str . $s[$i]; //add each char to a string so it will be reversed
}
if ($s == $str) {//check if given and reversed strings are equal
    $palindrome="Palindrome";
} else {
    $palindrome="Not Palindrome";
}
$result=[
    "result"=>$string." Is ".$palindrome
];
echo json_encode($result);

?>