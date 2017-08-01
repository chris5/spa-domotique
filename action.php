<?php
$device = $_GET['device'];
$value = $_GET['value'];
exec(rasp2arduino.py $device $value)
?>