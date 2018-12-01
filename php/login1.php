<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      *{margin: 0px; padding:0px;  }
      #main{ width:300px; margin: 24px auto;}
      fieldset {
      display: block;
      margin-left: 2px;
      margin-right: 2px;
      padding-top: 0.35em;
      padding-bottom: 0.625em;
      padding-left: 0.75em;
      padding-right: 0.75em;
      border: 2px groove (internal value);
  }
    </style>
  </head>
  <body>
    <?php
    session_start();
        require_once("connection1.php");

    if (Isset($_POST['login'])) {

      $email=$_POST['email'];
      $password=$_POST['password'];
        if( $email !="" and $password !="" )
        {
          $sql = "SELECT * FROM `user` where `email` ='".$email."' and `password`= '".$password."'";
           $result = mysqli_query($conn,$sql);
          if (mysqli_num_rows($result)==0)
           {
             $_SESSION['email']= $email;
             /*echo "you are now logged in ";*/
          }
          else {
            echo 'your password and user name do not match';
          }
           if (mysqli_query($conn,$sql))
           {

            header("location:index1.php");


           }
           else {
             echo $sql;
           }
        }
        else {
          echo "Please fill all the boxes";
        }
        }

     ?>
    <div id="main">

  <form  method="post">
  <fieldset>
    <legend>Login:</legend>
    <br>

  User Name: <br>
  <input type="text" name="email" placeholder="Email" required/><br><br>
  Password: <br>
  <input type="password" name="password" placeholder="password"/><br><br>
  <input type="submit" name="login" value="Login"/><br><br>

  </fieldset>
  </form>
    </div>
  </body>
  </html>
