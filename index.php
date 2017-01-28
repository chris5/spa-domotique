<!--<?php
require('functions.php');
getState();
?>-->
<html>
    <head>
        <title>Spa</title>
        <link rel="stylesheet" href="css/style2.css">
    </head>
<body>
    <form action="index.php" method="POST">
    <table>
    <tr><th colspan=6>Jacuzzi</th><td rowspan="3"><input type="submit" class="button" value="Valider"></td></tr>
    <tr><td width="20%">Eau</td><td width="20%">Air</td><td width="20%">Filtration</td><td width="20%">Chauffage</td><td width="20%">Lumières</td></tr>
    <tr>
    <td><label class="switch"><input name="eau_j" type="checkbox" value="eau"><div class="slider round"></div></label></td>
    <td><label class="switch"><input name="air_j" type="checkbox" value="air"><div  class="slider round"></div></label></td>
    <td><label class="switch"><input name="fil_j" type="checkbox" value="des"><div  class="slider round"></div></label></td>
    <td><label class="switch"><input name="cha_j" type="checkbox" value="cha"><div  class="slider round"></div></label></td>
    <td><label class="switch"><input name="cha_j" type="checkbox" value="lum"><div  class="slider round"></div></label></td>
    </tr>
    </table>
    </form>

    <form action="index.php" method="POST">
    <table>
    <tr><th colspan=4>Piscine</th><td rowspan="3"><input type="submit" class="button" value="Valider"></td></tr>
    <tr><td width="25%">Nage Contre Courant</td><td width="25%">Filtration</td><td width="25%">Chauffage</td><td width="25%">Lumières</td></tr>
    <tr>
    <td><label class="switch"><input name="ncc_p" type="checkbox" value="eau"><div class="slider round"></div></label></td>
    <td><label class="switch"><input name="fil_p" type="checkbox" value="air"><div  class="slider round"></div></label></td>
    <td><label class="switch"><input name="fil_p" type="checkbox" value="des"><div  class="slider round"></div></label></td>
    <td><label class="switch"><input name="fil_p" type="checkbox" value="lum"><div  class="slider round"></div></label></td>
    </tr>
    </table>
    </form>

    <table>
    <tr><th colspan="3">Températures</th></tr>
    <tr><td width="50%">Air</td><td colspan="2" width="50%">Eau</td></tr>
    <tr><td width="50%"></td><td width="25%">Jacuzzi</td><td width="25%">Piscine</td></tr>
    <tr><td width="25%">°C</td width="25%"><td>°C</td><td colspan=2 width="50%">°C</td></tr>
    </table>
    
    <table>
    <tr><td><input type="button" class="button" value="Refresh"></td>
    </tr>
    </table>
    </form>
</body>
</html>