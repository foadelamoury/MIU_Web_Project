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
    if (isset($_POST['register'])) {
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $user_name=$_POST['user_name'];
        $password=$_POST['password'];
        if($first_name !="" and $last_name !="" and $user_name !="" and $password !="" )
        {
          $sql = "INSERT INTO `user` (`id`,`first_name`,`last_name`,`user_name` , `password`)
           VALUES ('','".$first_name."','".$last_name."','".$user_name."','".$password."')";
           if (mysqli_query($conn,$sql)) {
            header("location:login.php");
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
      <legend> Registration   </legend>
      <br>
First Name: <br>
<input type="text" name="first_name" placeholder="First name"/>
<br><br>
Last Name: <br>
<input type="text" name="last_name" placeholder="Last name"/><br><br>
User Name: <br>
<input type="text" name="user_name" placeholder="user name"/><br><br>
Password: <br>
<input type="password" name="password" placeholder="password"/><br><br>
<input type="submit" name="register" value="Register"/><br><br>

    </fieldset>
</form>
      </div>
  </body>
</html>
