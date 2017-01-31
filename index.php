<?php
require('functions.php');
getState();

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
    if(isset($_POST['eau_j'])){
    print('<input name="eau_j" type="checkbox" value="eau" onchange="this.form.submit()" checked>');
    $toto=eau_j($spa['eau']);}
    else{
    print('<input name="eau_j" type="checkbox" value="eau" onchange="this.form.submit()">');
    $toto=eau_j($spa['eau']);}
    ?><div class="slider round"></div></label></td>
    <td><label class="switch">
    <?php
    if(isset($_POST['air_j'])){
    print('<input name="air_j" type="checkbox" value="air" onchange="this.form.submit()" checked>');}
    else{
    print('<input name="air_j" type="checkbox" value="air" onchange="this.form.submit()">');}
    ?><div class="slider round"></div></label></td><td><label class="switch">
    <?php
    if(isset($_POST['fil_j'])){
    print('<input name="fil_j" type="checkbox" value="fil" onchange="this.form.submit()" checked>');}
    else{
    print('<input name="fil_j" type="checkbox" value="fil" onchange="this.form.submit()">');}
    ?><div class="slider round"></div></label></td><td><label class="switch">
    <?php
    if(isset($_POST['cha_j'])){
    print('<input name="cha_j" type="checkbox" value="cha" onchange="this.form.submit()" checked>');}
    else{
    print('<input name="cha_j" type="checkbox" value="cha" onchange="this.form.submit()">');}
    ?><div class="slider round"></div></label></td>
    <td><label class="switch">
    <?php
    if(isset($_POST['lum_j'])){
    print('<input name="lum_j" type="checkbox" value="lum" onchange="this.form.submit()" checked>');}
    else{
    print('<input name="lum_j" type="checkbox" value="lum" onchange="this.form.submit()">');}
    ?><div class="slider round"></div></label></td>
    </tr>
    </table>
    <table>
    <tr><th colspan=4>Piscine</th></tr>
    <tr><td width="25%">Nage Contre Courant</td><td width="25%">Filtration</td><td width="25%">Chauffage</td><td width="25%">Lumières</td></tr>
    <tr>
    <td><label class="switch">
    <?php
    if(isset($_POST['ncc_p'])){
    print('<input name="ncc_p" type="checkbox" value="ncc" onchange="this.form.submit()" checked>');}
    else{
    print('<input name="ncc_p" type="checkbox" value="ncc" onchange="this.form.submit()">');}
    ?><div class="slider round"></div></label></td>
    <td><label class="switch">
    <?php
    if(isset($_POST['fil_p'])){
    print('<input name="fil_p" type="checkbox" value="fil" onchange="this.form.submit()" checked>');}
    else{
    print('<input name="fil_p" type="checkbox" value="fil" onchange="this.form.submit()">');}
    ?><div class="slider round"></div></label></td><td><label class="switch">
    <?php
    if(isset($_POST['cha_p'])){
    print('<input name="cha_p" type="checkbox" value="cha" onchange="this.form.submit()" checked>');}
    else{
    print('<input name="cha_p" type="checkbox" value="cha" onchange="this.form.submit()">');}
    ?><div class="slider round"></div></label></td><td><label class="switch">
    <?php
    if(isset($_POST['lum_p'])){
    print('<input name="lum_p" type="checkbox" value="lum" onchange="this.form.submit()" checked>');}
    else{
    print('<input name="lum_p" type="checkbox" value="lum" onchange="this.form.submit()">');}
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
    <?php //var_dump($toto);
    ?>
</body>
</html>