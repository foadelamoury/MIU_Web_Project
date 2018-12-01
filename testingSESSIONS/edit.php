<?php
$con = new mysqli("localhost", "root", "","web-ex");
$sql="select * from User";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0)
{
	echo"<table>
	<tr bgcolor='#CCCCCC'>
	<td>Name</td>
	<td>Age</td>
	<td>Edit</td>
	</tr>";
	while($row = mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>" . $row['Name'] . "</td>";
		echo "<td>". $row['Age'] ."</td>";
		echo "<td><a href='editUser.php?ID=".$row['ID']."'> Edit </a></td>";
		echo "</tr>";
  }
    echo"</table>";
 }
?>
