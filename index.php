<?php 
require_once('configuration.php');
require_once('functions.php');
?>
<head>
	<title>SpaDomo</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="wrap">
<span class="decor"></span>
<nav>
  <ul class="primary">
    <li>
      <a href="piscine.php">Piscine</a>
    </li>
    <li>
      <a href="spa.php">Spa</a>
    </li>
    <li>
      <a href="ambiance.php">Ambiance</a>
    </li>
    <li>
      <a href="technique.php">Technique</a>
    </li>
  </ul>
</nav>
</div>

<!--
<table class="materialTab">
<tr><th>Objet</th><th>PIN</th><th>Etat</th></tr>
<?php foreach($materials as $material=>$pin){ ?>
<tr>
	<td><?php echo $material; ?></td>
	<td><?php echo $pin.' ('.$pins[$pin] .')'; $pinState = getPinState($pin,$pins); ?></td>
	<td><div onclick="changeState(<?php echo $pin; ?>,this)" class="pinState <?php echo $pinState; ?>"></div></td></tr>
<?php } ?>
<tr>
<td colspan="3"><div onclick="demo();">Joyeux noël !!</div></td>
</tr>
</table>
-->


<script src="js/jquery.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>