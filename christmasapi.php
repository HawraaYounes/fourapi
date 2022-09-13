<?php
$todaydate =$_GET["todaydate"];//get today date 
$today= new DateTime($todaydate);
if(date("m") == 12 && date("d") > 25){//check if christmas of this year passed
    $christmasDay = (date("Y") + 1) . "-12-25";//if yes,add 1 to year 
}
else{
    $christmasDay = date("Y") ."-12-25";//if no, keep the current year
}
$christmasDay = new DateTime($christmasDay);
$timeleft= $today->diff($christmasDay);//calculate the difference between today date and christmas
$result=[
    "result"=>$timeleft->days ." days left for christmas"
];
echo json_encode($result);

?>