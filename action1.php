<?php
$spa=array();
if(isset($_POST['eau'])){
	$spa['eau']=true;
	$state_eau=1;
}
else{
	$spa['eau']=false;
	$state_eau=0;
}
if(isset($_POST['air'])){
	$spa['air']=true;
	$state_air = 1;
}
else{
	$spa['air']=false;
	$state_air = 0;
}
if(isset($_POST['des'])){
	$spa['des']=true;
	$state_des = 1;
}
else{
	$spa['des']=false;
	$state_des = 0;
}
if(isset($_POST['cha'])){
	$spa['cha']=true;
	$state_cha = 1;
}
else{
	$spa['cha']=false;
	$state_cha = 0;
}

var_dump($spa);

function SPA($state_eau,$state_air,$state_des,$state_cha)
{
echo("gpio mode 1 out");
echo("gpio mode 2 out");
echo("gpio mode 3 out");
echo("gpio mode 4 out");
echo("<BR>");
echo("gpio write 1 ".$state_eau."");
echo("gpio write 2 ".$state_air."");
echo("gpio write 3 ".$state_des."");
echo("gpio write 4 ".$state_cha."");

}

SPA($state_eau,$state_air,$state_des,$state_cha);

?>