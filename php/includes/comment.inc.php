<?php
function setComments($conn)
{
  if (isset($_POST['commentSubmit'])) {
      $userId=$_POST['userId'];
      $date=$_POST['date'];
      $message=$_POST['message'];
      $sql = "INSERT INTO `comments` ( `userId`, `date`, `message`) VALUES( 10,$date, $message)";
       $result= mysqli_query($conn,$sql);
    //   INSERT INTO `comments` (`cid`, `userId`, `date`, `message`) SELECT NULL, '10', '2018-12-03 00:00:02', '242'
  }

}
function getComments($conn)
{
  $sql= 'SELECT * FROM comments';
  $result= mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_assoc($result)) {
  echo "<div class='comment-box'><p>";
echo $row['userId']."<br>";
echo $row['date']."<br>";
echo nl2br($row['message']); // nl2br is a new line 2 breaks <br>
echo "</p></div>";


  }

}
