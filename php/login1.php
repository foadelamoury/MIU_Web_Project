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
        require_once("connection1.php");

    if (isset($_POST['login'])) {

      $user_name=$_POST['user_name'];
      $password=$_POST['password'];
        if( $user_name !="" and $password !="" )
        {
          $q = 'SELECT * FROM `user` where `user_name`="'.$user_name.'"
          and `password` ="'.$password.'"';
          $r = mysqli_query($conn,$q);
           if (mysqli_num_rows($r)>0) {
echo "you are now logged in";
          }
           else {
             echo 'your password and user name do not match';
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
  <input type="text" name="user_name" placeholder="user name" required/><br><br>
  Password: <br>
  <input type="password" name="password" placeholder="password"/><br><br>
  <input type="submit" name="login" value="Login"/><br><br>

  </fieldset>
  </form>
    </div>
  </body>
  </html>
