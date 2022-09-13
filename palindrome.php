<?php
$string =$_GET["string"];
$str = "";
$s = strtolower($string);
$len = strlen($string);
for ($i = ($len - 1); $i >= 0; $i--) {
    $str = $str . $s[$i];   
}
if ($s == $str) {
    $palindrome="Palindrome";
} else {
    $palindrome="Not Palindrome";
}
$result=[
    "result"=>$string." Is ".$palindrome
];
echo json_encode($result);

?>