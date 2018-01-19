<?php 
if(isset($_POST["element"]) && isset($_POST["checked"]))
{
	exec ( "rasp0108.py" .$_POST["element"].' '.$_POST["checked"]);
}
?>
