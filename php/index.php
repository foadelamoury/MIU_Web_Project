



<?php
  date_default_timezone_set('Africa/Cairo');
  include 'includes/dbh.inc.php';
  include 'includes/comment.inc.php';
 ?>
<!DOCTYPE html>
<html lang='en' dir='ltr'>
  <head>
    <meta charset='utf-8'>
    <title>Commenting</title>
    <link rel='stylesheet' href='../css/style1.css'>
  </head>
  <body>

     <?php
     echo "<br>";
    echo "<form method='post' action='".setComments($conn)."'>
    <input type='hidden' name='userId'>

    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <textarea name='message'></textarea><br>
    <button  type='submit' name='commentSubmit'>Comment</button>
    <button onclick='ReloadingPage()'>Reload page</button>
    </form>";
     getComments($conn);




?>

  </body>
  <script src="../js/Reload.js">

  </script>
</html>
