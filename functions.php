<?php

function pdo()
{
	$ini = parse_ini_file("config.ini");
	$db='spa';
	$result = array();
	$dbh = new PDO('mysql:host=localhost;dbname='.$db.'', $ini["user"], $ini["password"]);
	return($dbh);
}

function getState()
{
	$spa = shell_exec('python getState.py');
	return($spa);
}

?>