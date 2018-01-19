<?php
require('functions.php');
$state=getState();
//ini_set("display_errors", true);
?>
<html>
    <head>
        <title>Spa</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<link rel="stylesheet" href="css/style2.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta http-equiv="Refresh" content="5;url=index.php">
    </head>

<body>

    <!--tableau jacuzzi-->
    <table>
    <tr><th colspan=6>Jacuzzi</th></tr>
    <tr><td width="20%">Jets</td><td width="20%">Air</td><td width="20%">Filtration</td><td width="20%">Chauffage</td><td width="20%">Lumières</td></tr>
    <tr>
  
  <!-- To duplicate --> 
    <td><label class="switch">
<?php
    if(isset($spa))
        $checked = ($spa['jet_j'] ? 'checked':'');
    else
        $checked='';
    print('<input class="checkboxcaller" name="jet_j" type="checkbox" id="jet_j" '.$checked.' />');
?>
   <div class="slider round"></div></label></td>
  <!-- To duplicate --> 

   <td><label class="switch">
<?php
    if(isset($spa))
        $checked = ($spa['air_j'] ? 'checked':'');
    else
        $checked='';
    print('<input class="checkboxcaller" name="air_j" type="checkbox" id="air_j" '.$checked.' />');
?>
   <div class="slider round"></div></label></td>

       <td><label class="switch">
<?php
    if(isset($spa))
        $checked = ($spa['fil_j'] ? 'checked':'');
    else
        $checked='';
    print('<input class="checkboxcaller" name="fil_j" type="checkbox" id="fil_j" '.$checked.' />');
?>
   <div class="slider round"></div></label></td>

       <td><label class="switch">
<?php
    if(isset($spa))
        $checked = ($spa['cha_j'] ? 'checked':'');
    else
        $checked='';
    print('<input class="checkboxcaller" name="cha_j" type="checkbox" id="cha_j" '.$checked.' />');
?>
   <div class="slider round"></div></label></td>
    
       <td><label class="switch">
<?php
    if(isset($spa))
        $checked = ($spa['lum_j'] ? 'checked':'');
    else
        $checked='';
    print('<input class="checkboxcaller" name="lum_j" type="checkbox" id="lum_j" '.$checked.' />');
?>
   <div class="slider round"></div></label></td>

    </tr>
    </table>
    
    <!--tableau piscine-->
    <table>
    <tr><th colspan=6>Piscine</th></tr>
    <tr><td width="20%">Cascade</td><td width="20%">NCC</td><td width="20%">Filtration</td><td width="20%">Chauffage</td><td width="20%">Lumières</td></tr>
    <tr>

       <td><label class="switch">
<?php
    if(isset($spa))
        $checked = ($spa['cas_p'] ? 'checked':'');
    else
        $checked='';
    print('<input class="checkboxcaller" name="cas_p" type="checkbox" id="cas_p" '.$checked.' />');
?>
   <div class="slider round"></div></label></td>


      <td><label class="switch">
<?php
    if(isset($spa))
        $checked = ($spa['ncc_p'] ? 'checked':'');
    else
        $checked='';
    print('<input class="checkboxcaller" name="ncc_p" type="checkbox" id="ncc_p" '.$checked.' />');
?>
   <div class="slider round"></div></label></td>


   <td><label class="switch">
<?php
    if(isset($spa))
        $checked = ($spa['fil_p'] ? 'checked':'');
    else
        $checked='';
    print('<input class="checkboxcaller" name="fil_p" type="checkbox" id="fil_p" '.$checked.' />');
?>
   <div class="slider round"></div></label></td>


       <td><label class="switch">
<?php
    if(isset($spa))
        $checked = ($spa['cha_p'] ? 'checked':'');
    else
        $checked='';
    print('<input class="checkboxcaller" name="cha_p" type="checkbox" id="cha_p" '.$checked.' />');
?>
   <div class="slider round"></div></label></td>

       <td><label class="switch">
<?php
    if(isset($spa))
        $checked = ($spa['lum_p'] ? 'checked':'');
    else
        $checked='';
    print('<input class="checkboxcaller" name="lum_p" type="checkbox" id="lum_p" '.$checked.' />');
?>
   <div class="slider round"></div></label></td>


    </tr>
    </table>

    <!--tableau informations -->
    <table>
    <tr><th colspan="3">Températures</th></tr>
    <tr><td width="50%">Air</td><td colspan="2" width="50%">Eau</td></tr>
    <tr><td width="50%"></td><td width="25%">Jacuzzi</td><td width="25%">Piscine</td></tr>
    <tr><td width="25%">25 °C</td width="25%"><td>35 °C</td><td colspan=2 width="50%">24 °C</td></tr>
    
    <div class="container">
    <tr><td colspan="7">

    <button type="button" name="shutdown" class="btn btn-info">Shut down !</button>
    </td></tr>
    </div>

    </table>
</form>
<script> 
$(".checkboxcaller").change(function()
    {
        var element = $(this).attr("name");
        $.post( "services/api.php", { "element":element, "checked": $(this).prop("checked") })
          .done(function( data ) {
          //  alert( "Data Loaded: " + data );
          });
    });

$("button").click(function()
    {
        var element = $(this).attr("name");
        $.post( "services/api.php", { "element":element, "checked": "true" })
          .done(function( data ) {
            //alert( "Data Loaded: " + data );
          });
    });


</script>

</body>
</html>
