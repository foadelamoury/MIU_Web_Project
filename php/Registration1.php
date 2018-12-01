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
    if (isset($_POST['register'])) //if en hwa das 3ala register button w form mlyann !!
    {
      //attribute in database == what posted from From
        $email=$_POST['email'];
        $password=$_POST['password'];
        $firstName=$_POST['firstName'];
        $lastName=$_POST['lastName'];
        $familyName=$_POST['familyName'];
        $gender=$_POST['gender'];
        $nationality=$_POST['nationality'];
        $dateOfBirth=$_POST['dateOfBirth'];
        $ssn=$_POST['ssn'];
        $type=$_POST['type'];




        if($email !="" and $password !="" and $firstName !="" and $lastName !="" and $familyName !="" and $gender !=""
        and $nationality !=""and $dateOfBirth !=""and $ssn !=""
        and $type !="" )
        {

          $sql = "INSERT INTO `user` (`id`, `email`,`password`,`firstName` ,`lastName`,`familyName` , `gender` , `nationality` ,`dateOfBirth` ,`ssn` ,`type`)
           VALUES (NULL,'".$email."','".$password."','".$firstName."','".$lastName."','".$familyName."','".$gender."','".$nationality."','".$dateOfBirth."','".$ssn."','".$type."')";
           if (mysqli_query($conn,$sql)) {
            header("location:login1.php");
           }

           else {
             echo $sql;
           }
        }

        else {
          echo "Please fill all the boxes";
          echo "whyyy"; //ahhahahah
        }
        }

     ?>
      <div id="main">

<form  method="post">
  <fieldset>
  <legend> Please Fill In The Form</legend><br>
      <fieldset>
      <legend> Personal Information : </legend>
    Email: <br>
        <input type="text" name="email" placeholder="Email" required/> <br>
        Password: <br>
            <input type="password" name="password" placeholder="Password" required/> <br>

        First Name: <br>
            <input type="text" name="firstName" placeholder="First name..." required/> <br>

    Last Name: <br>
        <input type="text" name="lastName" placeholder="Last name..." required/><br>
    Family Name : <br>
        <input type="text" Name="familyName" placeholder="familyName" required/> <br>
    Gender : <br>
        <input type="radio" Name="gender" value="Male" required/>Male <br>
        <input type="radio" Name="gender" value="Female" required/> Female <br>
    Nationality : <br>
        <input type="text" Name="nationality" placeholder="Nationality"required/><br>
    dateOfBirth : <br>
        <input type="date" Name="dateOfBirth" placeholder="dateOfBirth"required/><br>
    Ssn : <br>
        <input type="text" Name="ssn" placeholder="Ssn" required/><br>
    type : <br>
        <input type="text" Name="type" placeholder="type"required/><br>

        </fieldset>


<!--<fieldset>
<legend>Address Information: </legend>
Full Addres :<br>
      <input type="text" Name="Address"required/><br>
Building Number : <br>
      <input type="number" Name="Building_Number"required/><br>
Flat Number : <br>
      <input type="number" Name="Flat_Number"required/><br>
Department : <br>
      <input type="number" Name="Department_Number"required/><br>
</fieldset>
<fieldset>
  <legend> Login Information </legend>
User Name: <br>
      <input type="text" name="user_name" placeholder="user name" required/><br>
Password: <br>
      <input type="password" name="password" placeholder="password" required/><br>
      </fieldset>
-->
<input type="submit" name="register" value="Register"required/><br><br>
<!--</fieldset>-->
</form>
</div>
  </body>
</html>
