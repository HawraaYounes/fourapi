<?php
$a =$_POST["a"];
$a =$_POST["b"];
$c =$_POST["c"];//take a,b,c values

$result=[
    "result"=>pow($a,3)+($b*$c)-($a/$b)//return calculation result
];

echo json_encode($result);
?>