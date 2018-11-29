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
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $Family_Name=$_POST['Family_Name'];
        $Gender=$_POST['Gender'];
        $Mobile_Number=$_POST['Mobile_Number'];
        $Home_Telephone=$_POST['Home_Telephone'];
        $Email=$_POST['Email'];
        $National_ID=$_POST['National_ID'];
        $University_Degree=$_POST['University_Degree'];
        $Date_Of_Birth=$_POST['Date_Of_Birth'];
        $Address=$_POST['Address'];
        $Building_Number=$_POST['Building_Number'];
        $Flat_Number=$_POST['Flat_Number'];
        $Department_Number=$_POST['Department_Number'];
        $user_name=$_POST['user_name'];
        $password=$_POST['password'];

        if($first_name !="" and $last_name !="" and $user_name !="" and $password !="" and $Family_Name !="" and $Gender !=""
        and $Mobile_Number !=""and $Home_Telephone !=""and $Email !=""
        and $National_ID !=""and $University_Degree !=""and $Date_Of_Birth !=""
        and $Address !=""and $Building_Number !=""and $Flat_Number !="" and $Department_Number !="" )
        {

          $sql = "INSERT INTO `user` (`id`,
            `first_name`,
            `last_name`,
             `Family_Name` ,
             `Gender`,
               `Mobile_Number` , `Home_Telephone` , `Email` ,
           `National_ID` ,`University_Degree` ,`Date_Of_Birth` ,`Address` ,`Building_Number` ,
           `Flat_Number` ,`Department_Number` ,`user_name` , `password`)
           VALUES (NULL,'".$first_name."',
             '".$last_name."',
             '".$Family_Name."',
                '".$Gender."',
             '".$Mobile_Number."',
             '".$Home_Telephone."',
           '".$Email."',
           '".$National_ID."',
           '".$University_Degree."',
           '".$Date_Of_Birth."',
           '".$Address."',
           '".$Building_Number."'
           ,'".$Flat_Number."',
           '".$Department_Number."',
           '".$user_name."','".$password."')";
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
    First Name: <br>
        <input type="text" name="first_name" placeholder="First name..." required/> <br>
    Last Name: <br>
        <input type="text" name="last_name" placeholder="Last name..." required/><br>
    Family Name : <br>
        <input type="text" Name="Family_Name" placeholder="Last name..." required/> <br>
    Gender : <br>
        <input type="radio" Name="Gender" value="Male" required/>Male <br>
        <input type="radio" Name="Gender" value="Female" required/> Female <br>
    Mobile Number : <br>
        <input type="Number" Name="Mobile_Number" placeholder="Mobile Number..."required/><br>
    Home Telephone : <br>
        <input type="Number" Name="Home_Telephone" placeholder="Home Number..."required/><br>
    Email : <br>
        <input type="text" Name="Email" placeholder="example@live.com..." required/><br>
    National Number : <br>
        <input type="Number" Name="National_ID" placeholder="National ID..."required/><br>
    University Degree :<br>
        <input type="text" Name="University_Degree" placeholder="University Degree..."required/><br>
    Date Of Birth:<br>
        <input type="number" Name="Date_Of_Birth" placeholder="Date Of Birth..." required/><br>
        </fieldset>


<fieldset>
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

<input type="submit" name="register" value="Register"required/><br><br>

</fieldset>
</form>
</div>
  </body>
</html>
