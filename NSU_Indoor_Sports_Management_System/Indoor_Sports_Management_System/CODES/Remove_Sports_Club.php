<?php
include "Connect.php";
if(isset($_POST['SPORTS_NAME']))
{
    $SPORTS_NAME = $_POST['SPORTS_NAME'];
    
    $sql="DELETE FROM sports WHERE SPORTS_NAME='$SPORTS_NAME'";
    $delete = mysqli_query($db,$sql);
    header("location:Admin.php");
}
?>

