<?php 
if(isset($_POST["element"]) && isset($_POST["checked"]))
{
	exec('python rasp2ard.py '.$_POST["element"].' '.$_POST["checked"]);
}
?>
