<?php
$todaydate =$_GET["todaydate"];
$today= new DateTime($todaydate);
if(date("m") == 12 && date("d") > 25){
    $christmasDay = (date("Y") + 1) . "-12-25";
}
else{
    $christmasDay = date("Y") ."-12-25";
}
$christmasDay = new DateTime($christmasDay);
$timeleft= $today->diff($christmasDay);
$result=[
    "result"=>$timeleft->days ." days left for christmas"
];
echo json_encode($result);

?>