<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      *{margin: 0px; padding:0px;  }
      #main{ width:300px; margin: 24px auto;}

    </style>
  </head>
  <body>
    <?php
        require_once("connection1.php");

        $sql = "INSERT INTO `user` (`id`,`first_name`,`last_name`,`user_name` , `password`)
         VALUES ('','".$first_name."','".$last_name."','".$user_name."','".$password."')";
         if (mysqli_query($conn,$sql)) {
            echo "In the first if";
         }
         else {
           echo $sql;
         }

    


     ?>
    <div id="main">


    </div>
  </body>
  </html>
