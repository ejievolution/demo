<!DOCTYPE html>
<html>
<head>
	<title> :: Select Ajax :: </title>
	<script src="../js/jquery-1.10.2.js" type="text/javascript"></script>
	<link href="../css/tablestyle.css" media="all" rel="stylesheet" type="text/css" />
	<script>
		 $(document).ready(function() {

		 	//onChange filter
		  $(document).on('change','.filter-group',function(){
			  	var kirim = $(this).val();
			  	$.get("hasil.php",{id:kirim}, function(data)
			  	{
			  		$('.tampil-data').html(data);
			  	});
		  });

		});
     
	</script>
</head>
<body>
<?php
	include "connect.php";
?>
<center>
	<select class="filter-group" name="group_id">
		<option value=""> Pilih Group </option>
	<?php 
		$query = mysql_query("select * from groups");
		while ($d=mysql_fetch_array($query)){ ?>
		<option value="<?php echo $d['id']; ?>"><?php echo $d['group_name']; ?></option>
		<?php } ?>
	</select>
</center>
<div class="datagrid" style="width:70%;margin-left: 15%;margin-top:100px;text-align:center;">
	<table style="" align="center">
		<caption>DAFTAR MEMBER</caption>
		<thead>
			<tr>
				<th>Nama</th>
				<th>Email</th>
				<th>Nama Group</th>
			</tr>
		</thead>
		<tbody class="tampil-data">
		<?php 
		$query_user = mysql_query("select * from users join groups on groups.id = users.group_id");
		while ($d_user=mysql_fetch_array($query_user)){ ?>
			<tr>
				<td><?php echo $d_user['fullname']; ?></td>
				<td><?php echo $d_user['email']; ?></td>
				<td><?php echo $d_user['group_name']; ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>

</body>
</html>