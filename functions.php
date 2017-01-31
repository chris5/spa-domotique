<?php
function getState()
{
	$user='root';
	$pass='';
	$db='spa_bdd';
	$result = array();
	try {
		$dbh = new PDO('mysql:host=localhost;dbname='.$db.'', $user, $pass);
		foreach($dbh->query('SELECT * from gpio_ports WHERE cablage IS NOT NULL') as $row) {
			$var=exec("gpio read ".$row["gpio"]."");
			$var="1";
			//echo($var);
			$result[$row["gpio"]] = $var;}
    $dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
return($result);
}

function eau_j($value)
{

}

function air_j($value)
{

}

function cha_j($value)
{

}

function fil_j($value)
{

}

function lum_j($value)
{

}

function ncc_p($value)
{

}

function cha_p($value)
{

}

function fil_p($value)
{

}

function lum_p($value)
{

}
function getPinState($pin,$pins){
	$commands = array();
	exec("gpio read ".$pins[$pin],$commands,$return);
	//return (trim($commands[0])=="1"?'on':'off');
	return 'on';

}

?>