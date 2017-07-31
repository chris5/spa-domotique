<?php 
if(isset($_POST["element"]) && isset($_POST["checked"]))
{
	echo $_POST["element"];
	echo $_POST["checked"];
	exec('python python.py '.$_POST["element"].' '.$_POST["checked"]);
}
?>
