<!DOCTYPE html>

<?php
    session_start();
    if (isset($_POST['submit'])) {
        if (empty($_POST['username']) || empty($_POST['password'])) {
            $error = "Username or Password is invalid";
            echo'Error';
        }
        else{
        // $user=$_POST['username'];
        // $pass=$_POST['password'];
        $connection = mysqli_connect("localhost", "root", "", "nursery_website");
        $sql="SELECT * FROM 'user' WHERE email='".$_POST['username']."' AND password='".$_POST['password']."'";
        $result = mysqli_query($connection, $sql);

        if(mysqli_num_rows($result) > 0){
            if($row = mysqli_fetch_array($result)){
                $_SESSION["id"]=$row["id"];
                $_SESSION["username"]=$row["email"];
                $_SESSION["password"]=$row["password"];
                $_SESSION["personSSN"]=$row["personSsn"];

                header("Location: index.php");
            }
        }

    }
}
?>

<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <style>
    .body{
        position:fixed;
        top: 50%;
        left: 50%;
        width:30em;
        height:18em;
        margin-top: -9em; /*set to a negative number 1/2 of your height*/
        margin-left: -15em; /*set to a negative number 1/2 of your width*/
        border: 1px solid #ccc;
        background-color: #f3f3f3;
    }
    </style>

    <body>

        <div class="body">
            <form action="" method="post">
                Username:
                <input type="text" name="username" placeholder="Username" required><br><br>
                Password:
                <input type="password" name="password" required><br><br>
                <input type="submit" name="submit">
            </form>
        </div>

    </body>
</html>
