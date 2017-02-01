<?php
require('functions.php');
var_dump(getState());

if(isset($_POST['eau_j'])){
    $spa['eau_j']=true;
}
else{
    $spa['eau_j']=false;
}

if(isset($_POST['air_j'])){
    $spa['air_j']=true;
}
else{
    $spa['air_j']=false;
}

if(isset($_POST['fil_j'])){
    $spa['fil_j']=true;
}
else{
    $spa['fil_j']=false;
}

if(isset($_POST['cha_j'])){
    $spa['cha_j']=true;
}
else{
    $spa['cha_j']=false;
}

if(isset($_POST['lum_j'])){
    $spa['lum_j']=true;
}
else{
    $spa['lum_j']=false;
}
//PISCINE
if(isset($_POST['ncc_p'])){
    $spa['ncc_p']=true;
}
else{
    $spa['ncc_p']=false;
}
if(isset($_POST['fil_p'])){
    $spa['fil_p']=true;
}
else{
    $spa['fil_p']=false;
}
if(isset($_POST['cha_p'])){
    $spa['cha_p']=true;
}
else{
    $spa['cha_p']=false;
}
if(isset($_POST['lum_p'])){
    $spa['lum_p']=true;
}
else{
    $spa['lum_p']=false;
}
var_dump($spa);
?>
<html>
    <head>
        <meta HTTP-EQUIV="Refresh" CONTENT="10">
        <title>Spa</title>
        <link rel="stylesheet" href="css/style2.css">
    </head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" name="Jacuzzi">
    <table>
    <tr><th colspan=6>Jacuzzi</th></tr>
    <tr><td width="20%">Eau</td><td width="20%">Air</td><td width="20%">Filtration</td><td width="20%">Chauffage</td><td width="20%">Lumières</td></tr>
    <tr>
    <td><label class="switch">
    <?php
    if($spa['eau_j']==true){
    print('<input name="eau_j" type="checkbox" value="eau_j" onchange="this.form.submit()" checked>');
    $toto=ChangeState('eau_j',$spa['eau_j']);}
    else{
    print('<input name="eau_j" type="checkbox" value="eau_j" onchange="this.form.submit()">');
    $toto=ChangeState('eau_j',$spa['eau_j']);}
    ?><div class="slider round"></div></label></td>
    <td><label class="switch">
    <?php
    if($spa['air_j']==true){
    print('<input name="air_j" type="checkbox" value="air_j" onchange="this.form.submit()" checked>');}
    else{
    print('<input name="air_j" type="checkbox" value="air_j" onchange="this.form.submit()">');}
    ?><div class="slider round"></div></label></td><td><label class="switch">
    <?php
    if($spa['fil_j']==true){
    print('<input name="fil_j" type="checkbox" value="fil_j" onchange="this.form.submit()" checked>');}
    else{
    print('<input name="fil_j" type="checkbox" value="fil_j" onchange="this.form.submit()">');}
    ?><div class="slider round"></div></label></td><td><label class="switch">
    <?php
    if($spa['cha_j']==true){
    print('<input name="cha_j" type="checkbox" value="cha_j" onchange="this.form.submit()" checked>');}
    else{
    print('<input name="cha_j" type="checkbox" value="cha_j" onchange="this.form.submit()">');}
    ?><div class="slider round"></div></label></td>
    <td><label class="switch">
    <?php
    if($spa['lum_j']==true){
    print('<input name="lum_j" type="checkbox" value="lum_j" onchange="this.form.submit()" checked>');}
    else{
    print('<input name="lum_j" type="checkbox" value="lum_j" onchange="this.form.submit()">');}
    ?><div class="slider round"></div></label></td>
    </tr>
    </table>
    <table>
    <tr><th colspan=4>Piscine</th></tr>
    <tr><td width="25%">Nage Contre Courant</td><td width="25%">Filtration</td><td width="25%">Chauffage</td><td width="25%">Lumières</td></tr>
    <tr>
    <td><label class="switch">
    <?php
    if($spa['ncc_p']==true){
    print('<input name="ncc_p" type="checkbox" value="ncc_p" onchange="this.form.submit()" checked>');}
    else{
    print('<input name="ncc_p" type="checkbox" value="ncc_p" onchange="this.form.submit()">');}
    ?><div class="slider round"></div></label></td>
    <td><label class="switch">
    <?php
    if($spa['fil_p']==true){
    print('<input name="fil_p" type="checkbox" value="fil_p" onchange="this.form.submit()" checked>');}
    else{
    print('<input name="fil_p" type="checkbox" value="fil_p" onchange="this.form.submit()">');}
    ?><div class="slider round"></div></label></td><td><label class="switch">
    <?php
    if($spa['cha_p']==true){
    print('<input name="cha_p" type="checkbox" value="cha_p" onchange="this.form.submit()" checked>');}
    else{
    print('<input name="cha_p" type="checkbox" value="cha_p" onchange="this.form.submit()">');}
    ?><div class="slider round"></div></label></td><td><label class="switch">
    <?php
    if($spa['lum_p']==true){
    print('<input name="lum_p" type="checkbox" value="lum_p" onchange="this.form.submit()" checked>');}
    else{
    print('<input name="lum_p" type="checkbox" value="lum_p" onchange="this.form.submit()">');}
    ?><div class="slider round"></div></label></td>
    </tr>
    </table>
    </form>

    <table>
    <tr><th colspan="3">Températures</th></tr>
    <tr><td width="50%">Air</td><td colspan="2" width="50%">Eau</td></tr>
    <tr><td width="50%"></td><td width="25%">Jacuzzi</td><td width="25%">Piscine</td></tr>
    <tr><td width="25%">25 °C</td width="25%"><td>35 °C</td><td colspan=2 width="50%">24 °C</td></tr>
    </table>
    </form>
    <?php var_dump($toto);
    ?>
</body>
</html>