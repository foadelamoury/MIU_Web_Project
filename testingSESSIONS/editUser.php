<?php
$ID = $_GET['ID'];

$con = new mysqli("localhost", "root", "","web-ex");
$sql="SELECT * FROM user WHERE ID=$ID";
$result = mysqli_query($con,$sql);
	$name='';
	$age='';
while($row = mysqli_fetch_array($result))
{
	$name = $row['Name'];
	$age = $row['Age'];
}

?>
<form action="applyedit.php" method="post">
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="<?php echo $name;?>"></td>
		</tr>
		<tr>
			<td>Age</td>
			<td><input type="text" name="age" value="<?php echo $age;?>"></td>
		</tr>
		<tr>
			<td><input type="hidden" name="id" value="<?php echo $ID;?>"></td>
			<td><input type="submit" name="submit"></td>
		</tr>
	</table>
</form>
