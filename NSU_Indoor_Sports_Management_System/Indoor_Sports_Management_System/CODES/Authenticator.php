<?php
include "Connect.php";
print_r($_POST);
$user_id = $_POST["ID"];
$user_password  = $_POST["Pass"];
 
$sql= "SELECT USER_ID FROM user_info WHERE USER_ID = '$user_id'";
$result = mysqli_query($db, $sql);
if (mysqli_num_rows($result) > 0)
{
  $user_id = stripcslashes($user_id);
  $user_password = stripcslashes($user_password);
  $user_id = mysqli_real_escape_string($db, $user_id);
  $user_password = mysqli_real_escape_string($db, $user_password);
 
  $sql = "select * from authenticator where USER_ID = '$user_id' and PASSWORD = '$user_password'";
  $result = mysqli_query($db, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);
 
  $myFile = fopen("../User_ID.txt", "w") or 
            die("Unable to open file!");
 
            fwrite($myFile, $user_id);
            fclose($myFile);
 
  if($count == 1){
 
 
    {
      header("Location: User.html");
      exit();
  }
 
  }
  else{
      echo " Login failed. Invalid password.";
      {header("Location: Log in Form.html");
        exit();}
  }
 
}
 
 
else if(mysqli_num_rows($result) == 0){
 
    $sql= "SELECT ADMIN_ID FROM ADMIN WHERE Admin_ID = '$user_id'";
    $result2 = mysqli_query($db, $sql);
 
    if(mysqli_num_rows($result2) > 0){
      $user_id = stripcslashes($user_id);
    $user_password = stripcslashes($user_password);
    $user_id= mysqli_real_escape_string($db, $user_id);
    $user_password = mysqli_real_escape_string($db, $user_password);
 
    $sql = "select * from authenticator where USER_ID = '$user_id' and PASSWORD = '$user_password'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    $myFile = fopen("../Admin_ID.txt", "w") or
            die("Unable to open file!");
 
    fwrite($myFile, $user_id);

    fclose($myFile);
 
 
    if($count == 1){
 
 
 
    {
      header("Location: Admin.php");
        exit();
    }
 
    }
    else{
        echo "Login failed. Invalid password.";
    }
    }
}
 
else{
    echo " Login failed. User/Admin ID.";
}
 
?>