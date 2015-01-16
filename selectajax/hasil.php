<?php
include "connect.php";
//menangkap onchange
$id = $_GET['id'];
if($id!=''){
$query = mysql_query("select * from users join groups on groups.id = users.group_id where group_id=".$id);
	while ($d=mysql_fetch_array($query)){ 
		$nama = $d['fullname']; $email = $d['email']; $group = $d['group_name'];
	echo "<tr>
				<td>$nama</td>
				<td>$email</td>
				<td>$group</td>
			</tr>";
	}
}else{ //jika filter sama dengan semua
	$query = mysql_query("select * from users join groups on groups.id = users.group_id");
	while ($d=mysql_fetch_array($query)){ 
		$nama = $d['fullname']; $email = $d['email']; $group = $d['group_name'];
	echo "<tr>
				<td>$nama</td>
				<td>$email</td>
				<td>$group</td>
			</tr>";
	}
}			
?>