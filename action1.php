<?php
//$spa=array();

if(isset($_POST['eau_j'])){
    $spa['eau']=true;
    $state_eau=1;
}
else{
    $spa['eau']=false;
    $state_eau=0;
}
if(isset($_POST['air_j'])){
    $spa['air']=true;
    $state_air = 1;
}
else{
    $spa['air']=false;
    $state_air = 0;
}
if(isset($_POST['fil_j'])){
    $spa['fil']=true;
    $state_fil = 1;
}
else{
    $spa['fil']=false;
    $state_fil = 0;
}
if(isset($_POST['cha_j'])){
    $spa['cha']=true;
    $state_cha = 1;
}
else{
    $spa['cha']=false;
    $state_cha = 0;
}
if(isset($_POST['lum_j'])){
    $spa['lum']=true;
    $state_lum = 1;
}
else{
    $spa['lum']=false;
    $state_lum = 0;
}
//PISCINE
if(isset($_POST['ncc_p'])){
    $pool['ncc']=true;
    $state_ncc=1;
}
else{
    $pool['ncc']=false;
    $state_ncc=0;
}
if(isset($_POST['fil_p'])){
    $pool['fil']=true;
    $state_fil = 1;
}
else{
    $pool['fil']=false;
    $state_fil = 0;
}
if(isset($_POST['cha_p'])){
    $pool['cha']=true;
    $state_cha = 1;
}
else{
    $pool['cha']=false;
    $state_cha = 0;
}
if(isset($_POST['lum_p'])){
    $pool['lum']=true;
    $state_lum = 1;
}
else{
    $pool['lum']=false;
    $state_lum = 0;
}
//var_dump($spa);
//var_dump($pool);
?>