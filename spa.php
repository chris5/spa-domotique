<?php
require_once('functions.php');
?>
<html>
	<head>
		<title>Spa</title>
		<link rel="stylesheet" href="css/style2.css">
	</head>
<body>

	<table>
	<tr><th colspan=4>Fonctions</th></tr>
	<tr><td width="25%">Eau</td><td width="25%">Air</td><td width="25%">Désinfection</td><td width="25%">Chauffage</td></tr>
	<tr>
	<td><label class="switch"><input id="eau" type="checkbox"><div  class="slider round"></div></label></td>
	<td><label class="switch"><input id="air" type="checkbox"><div  class="slider round"></div></label></td>
	<td><label class="switch"><input id="des" type="checkbox"><div  class="slider round"></div></label></td>
	<td><label class="switch"><input id="cha" type="checkbox"><div  class="slider round"></div></label></td>
	</tr>

	<tr><th colspan=4>Température</th></tr>
	<tr><td colspan=2 width="25%">Eau</td><td colspan=2 width="25%">Air</td>
	<tr><td id="r" colspan=2 width="25%">°C</td><td colspan=2 width="25%">°C</td>
	</table>
	<input type="text" id="ref">

    <script src="jquery.js"></script>
    <script>
      $(function() {
        $('#eau').click(function() {
          var param = 'l=' + $('#ref').val();
          $('#r').load('spa.php',param);
        });  
      });
      </script>
  </body>
</html>


</body>
</html>