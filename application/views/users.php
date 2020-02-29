<!DOCTYPE>
<html>
<head>
	<title>this is users</title>
</head>
<body>
<table style="text-align: center">
	<tr>
		<th>Name</th>
		<th>Age</th>
		<th>Address</th>
	</tr>
	<?php foreach ($users as $user){?>
	<tr>
		<td><?php echo $user['id'];?></td>
		<td><?php echo $user['name'];?></td>
		<td><?php echo $user['account_no'];?></td>
	</tr>
	<?php }?>
</table>
</body>
</html>
