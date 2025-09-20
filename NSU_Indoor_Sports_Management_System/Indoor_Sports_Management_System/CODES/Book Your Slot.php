<?php
include "Connect.php";
if(isset(($_POST['SLOT_NUMBER'])))
{
    if(isset(($_POST['SPORTS_NAME'])))
    {
    $SPORTS_NAME = $_POST['SPORTS_NAME'];
    $SLOT_NUMBER =$_POST['SLOT_NUMBER'];
    
    $sql="DELETE FROM available_slots WHERE SPORTS_NAME='$SPORTS_NAME' AND SLOT_NUMBER='$SLOT_NUMBER'";
    $delete = mysqli_query($db,$sql);
    header("location:User.html");
    }
}
?>

