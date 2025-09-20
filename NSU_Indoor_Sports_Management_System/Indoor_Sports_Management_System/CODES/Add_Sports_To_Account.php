<?php
include "Connect.php";
$user_id = $_POST["USER_ID"];
$select_sports = $_POST["SELECTED_SPORTS"];



$sql4 = "INSERT INTO user_sports(USER_ID,SELECTED_SPORTS) VALUES('$user_id','$select_sports')";

if(mysqli_query($db, $sql4))
{



    
    echo '<script type="text/javascript">alert("The following sports was added to the list: ' . $user_id . '");</script>';
    ?>
    <html>
       <a href="USER_VIEW_SLOT.php">AVAILBLE SLOT OF SPORTS</a>
      <a href="Sports_Info(USER).php">Sports_INFO</a>
      <a href="SELECT YOUR SLOT.php">YOUR SPORTS</a>
      <a href="About Us.html">About Us</a>
      <a href="Log in Form.html">Log Out</a>

    </html><?php
    

    exit();
}

else
{
    echo "<h1> Invalid \.";
}
?>

