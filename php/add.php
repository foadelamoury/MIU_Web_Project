<?php
$con = new mysqli("localhost", "root", "","web-ex");
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
  $age = $_POST['age'];

  if (empty($name) || empty($age)) {
    if (empty($name)) {
      echo "Name Field Empty!!!";
    }
    if (empty($age)) {
      echo "Age Field Empty";
    }
  }else {
    $result = mysqli_query($con, "INSERT INTO user(name, age) VALUES('$name','$age')");
    echo "Data Added successfully</br>";
    echo "<a href='all.php'> get back to home </a>";
  }
}
?>
