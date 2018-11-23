<html>
	<head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
    <body>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>


<?php
$con = new mysqli("localhost", "root", "","web-ex");
$sql="select * from User";
$result = mysqli_query($con,$sql);
$i = 0;
if(mysqli_num_rows($result) > 0)
{
	echo"<table class='table table-dark'>
	<tr>
	<td>#</td>
	<td>ID</td>
	<td>Name</td>
	<td>Age</td>
	</tr>";
	while($row = mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>". $i++ ."</td>";
		echo "<td>" . $row['ID'] . "</td>";
		echo "<td>" . $row['Name'] . "</td>";
		echo "<td>". $row['Age'] ."</td>";
		echo "</tr>";
  	}
	echo"<tr>
	<td> <a class='btn btn-primary btn-lg btn-block' href='../html/AddUser.html' role='button'>Add User</a>	</td>
	<td> <a class='btn btn-primary btn-lg btn-block' href='Edit.php' role='button'>Edit User</a> </td>
	<td> <a class='btn btn-primary btn-lg btn-block' href='delete.php' role='button'>Delete User</a> </td>
	<td> <a class='btn btn-primary btn-lg btn-block' href='all.php' role='button'>Refresh</a> </td>
	</tr>";
    echo"</table>";
 }
?>
