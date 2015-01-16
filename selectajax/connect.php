<?php
$con = mysql_connect('localhost','root','analis');
if(!$con){
	die("Database belom diaktifkan");
}
if(!mysql_select_db('demo',$con)){
	die("Nama database dalah");
}
?>