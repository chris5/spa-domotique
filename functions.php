<?php


function pdo()
{
	$ini = parse_ini_file("config.ini");
	$db='spa_bdd';
	$result = array();
	$dbh = new PDO('mysql:host=localhost;dbname='.$db.'', $ini["user"], $ini["password"]);
	return($dbh);
}

function getState()
{
	$dbh=pdo();
	foreach($dbh->query('SELECT gpio,fonction from cablages WHERE cablage IS NOT NULL ORDER BY gpio') as $row) 
		{
			$var=exec("gpio read ".$row["gpio"]."");
			if($var == 1){
				$var=true;
			}
				else{
					$var=false;
				}
			
			$result[$row["fonction"]] = $var;}
    $dbh = null;

return($result);
}

function ChangeState($fonctions,$value)
{
	$tab=array();
	$dbh=pdo();
	foreach($dbh->query('SELECT gpio from cablages where fonction LIKE "%'.$fonctions.'%"') as $row)
	{
		foreach($row as $result)
			{
				exec("gpio mode ".$result." out");
				if ($value == 1){
					exec("gpio write ".$result." 1");
				}
				else{
					exec("gpio write ".$result." 0");
				}
			}	
	}	
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
function tmp_p($value)
{

}
function tmp_j($value)
{

}
function tmp_a($value)
{

}

function getPinState($pin,$pins){
	$commands = array();
	exec("gpio read ".$pins[$pin],$commands,$return);
	//return (trim($commands[0])=="1"?'on':'off');
	return 'on';

}

?>
