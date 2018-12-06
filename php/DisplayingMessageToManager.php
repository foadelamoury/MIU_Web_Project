<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel='stylesheet' href='../css/style1.css'>
<style media="screen"  >
  *{margin: 0px; padding:0px;}
  #main{ width: 100%; height: 570px; margin: 40px auto}
    #result-message-area{width: 100%; padding: 0% 1%; height: 90%;}
  #message_area{width:98%;  height:10%; }


</style>
  <body>


<?php

  session_start();

if (isset($_SESSION['email']))
{
  echo "<div class='comment-box'><p>";
  echo 'Welcome '.$_SESSION['email'].'<br>';
  echo '<a href="logout1.php">Log out</a>
     <button onclick="ReloadingPage()">Reload page</button>';
     echo "</p></div>";
  echo '<div id="main">
  <div id="result-message-area">
  ';
  include("connection1.php");
      $sql1="SELECT * FROM `message`";
      $result1= mysqli_query($conn,$sql1);
      while ($row= mysqli_fetch_assoc($result1)) {
          $message=$row['message'];
          $email= $row['email'];
          echo "<div class='comment-box'><p>";

          echo '<h4 style="color:blue">'.$email.'</h4>';
          echo '<p>'.$message.'</p>';
echo "</p></div>";

      }
      if (Isset($_POST['submit'])) {

        $message=$_POST['message'];

        $sql='INSERT INTO `message` (`id`, `message`,`email`)
        VALUES ("","'.$message.'","'.$_SESSION['email'].'")
        ';
        if(mysqli_query($conn,$sql))
        {
          echo "<div class='comment-box'><p>";
          echo '<h4 style="color:blue">'.$_SESSION['email'].'</h4>';
          echo '<p>'.$message.'</p></div>';
          echo "</p></div>";
        }
  }
  echo '
  <div id="message_area">
  <form  method="post">
  </div>
    <br>


  <input type="text" name="message" style="width:80%; height:10%;" placeholder="Type your message" required/>
  <button type="submit" name="submit" onclick="ReloadingPage()"  style="width:10%; height:10%;" >Send</button>

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

<script src="../js/Reload.js">

</script>
</html>
