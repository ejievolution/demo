<?php
$con = mysql_connect('localhost','root','');
if(!$con){
	die("Database belom diaktifkan");
}
if(!mysql_select_db('demo',$con)){
	die("Nama database dalah");
}
?>