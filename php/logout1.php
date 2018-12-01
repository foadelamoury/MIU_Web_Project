<?php
session_start();

if (isset($_SESSION['email']))
{
  unset($_SESSION['email']);
  header("location:login1.php");
}
else
{
header("location:login1.php");
}
