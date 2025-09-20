<?php
include "Connect.php";
print_r($_POST);
$sports_name = $_POST["SPORTS_NAME"];
$slot = $_POST["SLOT_TIME"];
$daet = $_POST["SLOT_DATE"];
$s_numbr=$_POST["SLOT_NUMBER"];



$sql = "INSERT INTO available_slots(SPORTS_NAME,SLOT_TIME,SLOT_DATE,SLOT_NUMBER) VALUES('$sports_name','$slot','$daet','$s_numbr')";


if(mysqli_query($db, $sql) )
{
    
    echo '<script type="text/javascript">alert("The Slot Has Been ADDED");</script>';
    ?>
    <html>
        <a href=Admin.php>Return to Admin Dashboard?</a>

    </html><?php
    

    exit();
}

else
{
    echo "<h1> Invalid \.";
}
?>
}