<?php
$con = new mysqli("localhost", "root", "","web-ex");
$sql="select * from User";
$result = mysqli_query($con,$sql);
$count = mysqli_num_rows($result);
$counter = 0;
if(mysqli_num_rows($result) > 0)
{
	echo"<form method='post' action=''>";
	echo"<table>
	<tr bgcolor='#CCCCCC'>
	<td>#</td>
	<td>ID</td>
	<td>Name</td>
	<td>Age</td>
	</tr>";
	while($row = mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td><input type='checkbox' name='checkbox[]' id='checkbox[]' value=".$row['ID']."></td>";
		echo "<td>" . $row['ID'] . "</td>";
		echo "<td>" . $row['Name'] . "</td>";
		echo "<td>". $row['Age'] ."</td>";
		echo "</tr>";
		$counter++;
  }
    echo"<tr>
    <td align='center' bgcolor='#CCCCCC' colspan='4'><input type='submit' name='submit'></td></tr>";
    echo"</table>";
    echo"</form>";
 }
if(isset($_POST['submit']))
{
	if (isset($_POST['checkbox']))
	{
		$DelID = $_POST['checkbox'];
		foreach ($DelID as $keys => $value)
		{
			$DelSql = "DELETE FROM user WHERE ID = $value";
			$result = mysqli_query($con,$DelSql);
			echo "Data Deleted successfully</br>";
			echo "<a href='all.php'> get back to home </a>";
		}
	}
}
?>
