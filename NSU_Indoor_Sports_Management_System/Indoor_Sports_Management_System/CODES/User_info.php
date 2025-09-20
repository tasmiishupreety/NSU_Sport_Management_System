<?php
include "Connect.php";
print_r($_POST);
$user_id = $_POST["USER_ID"];
$f_username = $_POST["FIRST_NAME"];
$l_username = $_POST["LAST_NAME"];
$Address = $_POST["ADDRESS"];
$user_sports = $_POST["SELECTED_SPORTS"];
$user_password  = $_POST["PASSWORD"];


$sql_1 = "INSERT INTO user_info(USER_ID, FIRST_NAME, LAST_NAME, ADDRESS) VALUES('$user_id','$f_username','$l_username','$Address')";
$sql_2 = "INSERT INTO authenticator(USER_ID,PASSWORD) VALUES('$user_id','$user_password')";
$sql_3 = "INSERT INTO user_sports(USER_ID,SELECTED_SPORTS) VALUES('$user_id','$user_sports')";

if(mysqli_query($db,$sql_1) && mysqli_query($db,$sql_2) && mysqli_query($db,$sql_3))
{header("Location:Sign up Form.html");
    echo "Account Created!";
    exit();
}

else{
    echo "<h1> Login failed. Invalid password.</h1>";
}
?>


