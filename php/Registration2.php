<?php
    require_once("connection1.php");
    if (isset($_POST['register'])) //if en hwa das 3ala register button w form mlyann !!
    {
  $type=$_POST['type'];
if ($type=="1")
{
echo '<form  method="post">';
echo"<fieldset>";
echo"<legend> Please Fill In This also</legend><br>";
echo"<fieldset>";
echo"<legend> Manager Information : </legend>";
echo"workPosition: <br>";
echo'<input type="text" name="workPosition" placeholder="workPosition" required/> <br>';
echo"workNumber: <br>";
echo'<input type="number" name="workNumber" placeholder="workNumber" required/> <br>';
echo"phoneNumber: <br>";
echo'<input type="number" name="phoneNumber" placeholder="phoneNumber" required/> <br>';
echo"homeNumber: <br>";
echo'<input type="number" name="homeNumber" placeholder="homeNumber" required/><br>';

        echo"</fieldset>";
        echo"</form>";
}}

/*
if($type=="1")
{
  header("location:Registration2.php");

}
else {
header("location:login1.php");
}
*/
 ?>
