
<?php

  session_start();

if (isset($_SESSION['email']))
{
  echo 'Welcome '.$_SESSION['email'].'<br>';
  echo '<a href="logout1.php">Log out</a>';
}
else
{
  header("location:login1.php");
}
