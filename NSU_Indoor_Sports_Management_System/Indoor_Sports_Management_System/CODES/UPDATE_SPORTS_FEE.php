<?php
include "Connect.php";
if(isset($_POST['SPORTS_NAME']))
{
    $SPORTS_NAME = $_POST['SPORTS_NAME'];
    $FEE = $_POST["FEE"];
    $sql= "UPDATE sports SET FEE='$FEE' WHERE SPORTS_NAME='$SPORTS_NAME'";
    $update = mysqli_query($db,$sql);
    header("location:Admin.php");
}
?>
