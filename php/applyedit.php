<?php
$con = new mysqli("localhost", "root", "","web-ex");
if(isset($_POST['submit']))
{
  $ID = $_POST['id'];
  $age = $_POST['age'];
  $name = $_POST['name'];

  $result = mysqli_query($con, "UPDATE user SET Name='$name', Age='$age' WHERE ID=$ID");

  header("Location: all.php");
}
?>
