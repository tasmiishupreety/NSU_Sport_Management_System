<?php
include "Connect.php";
$sports_name = $_POST["SPORTS_NAME"];
$fee = $_POST["FEE"];



$sql4 = "INSERT INTO sports(SPORTS_NAME,FEE) VALUES('$sports_name','$fee')";

if(mysqli_query($db, $sql4))
{

    //header("Location: Add_Sports_To_Your_Club.html");

    //echo '<script type="text/javascript">alert(" has been added to the sports list.")</script>';
    //echo '<script type="text/javascript">alert(' $sports_name . '" has been added to the sports list.");</script>';
    echo '<script type="text/javascript">alert("The following sports was added to the list: ' . $sports_name . '");</script>';
    ?>
    <html>
        <a href=Add_Sports_To_Your_Club.html>Add another sports?</a>
        <a href=Admin.php>Return to Admin Dashboard?</a>

    </html><?php
    

    exit();
}

else
{
    echo "<h1> Invalid \.";
}
?>

