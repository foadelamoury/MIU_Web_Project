<!DOCTYPE html>
<html lang="en" dir="ltr">
<style media="screen">
  *{margin: 0px; padding:0px;}
  #main{border: 1px solid black; width: 450px; height: 570px; margin: 40px auto}
  #message_area{width:98%; padding: 0% 1%; border: 1px solid black; height:10%; }
  #result-message-area{width: 98%; padding: 0% 1%;border: 1px solid blue; height: 90%;}

</style>
  <body>


<?php

  session_start();

if (isset($_SESSION['email']))
{

  echo 'Welcome '.$_SESSION['email'].'<br>';
  echo '<a href="logout1.php">Log out</a>';
  echo '<div id="main">
  <div id="result-message-area">
  ';
  include("connection1.php");
      $sql1="SELECT * FROM `message`";
      $result1= mysqli_query($conn,$sql1);
      while ($row= mysqli_fetch_assoc($result1)) {
          $message=$row['message'];
          $email= $row['email'];
          echo '<h4 style="color:blue">'.$email.'</h4>';
          echo '<p>'.$message.'</p>';
          echo '<hr>';

      }
      if (Isset($_POST['submit'])) {

        $message=$_POST['message'];

        $sql='INSERT INTO `message` (`id`, `message`,`email`)
        VALUES ("","'.$message.'","'.$_SESSION['email'].'")
        ';
        if(mysqli_query($conn,$sql))
        {
          echo '<h4 style="color:blue">'.$_SESSION['email'].'</h4>';
          echo '<p>'.$message.'</p></div>';

        }
  }
  echo '
  <div id="message_area">
  <form  method="post">

    <br>


  <input type="text" name="message" style="width:370px; height:50px;" placeholder="Type your message" required/>
  <input type="submit" name="submit" style="width:70px; height:50px;" value="message"/>

  </form>
  </div>
  </div>';

}
else
{
  header("location:logout1.php");
}
?>
</body>
</html>
