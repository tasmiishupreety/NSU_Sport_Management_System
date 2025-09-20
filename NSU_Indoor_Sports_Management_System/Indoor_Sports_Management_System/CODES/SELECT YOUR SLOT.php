<!DOCTYPE html>
<html lang="en">
<head>
    <title>ADMIN PANEL:USER INFORMATION</title>
</head>
<body>
<style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }
 
    
    .topnav {
      overflow: hidden;
      background-color: #333;
    }
    
    .topnav a {
      float: left;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }
    
    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }
    
    .topnav a.active {
      background-color: #04AA6D;
      color: white;
    }
    </style>
    </head>
    <body>
    
    <div class="topnav">
    <a href="User.html">Home</a>
      <a href="Sports_Info(USER).php">Sports_Info</a>
      <a href="Log in Form.html">Log Out</a>
    </div>
    
    
    <div style="padding-left:16px">
      <h2>Your Information</h2>
    </div>
    

 
 <br>
 <table>
    <tr>
        <th>USER_ID</th>
        <th>SPORTS_NAME</th>
        <th>AVAILABLE_SLOT</th>
</tr>




<?php
include "Connect.php";

$data = file_get_contents("../User_ID.txt");
$sql = "SELECT u.USER_ID AS 'USER_ID',a.SPORTS_NAME AS 'SPORTS_NAME',a.SLOT_NUMBER AS 'AVAILABLE_SLOT' 
FROM available_slots AS a,user_sports AS u WHERE a.SPORTS_NAME = u.SELECTED_SPORTS AND u.USER_ID ='$data 'ORDER BY AVAILABLE_SLOT ASC";


$result = mysqli_query($db, $sql);

while($row = mysqli_fetch_assoc($result))
{
   echo "<tr>";
    
       echo "<td>" .$row["USER_ID"]. "</td>";
       echo "<td>" .$row["SPORTS_NAME"]. "</td>";
       echo "<td>" .$row["AVAILABLE_SLOT"]. "</td>";
echo"</tr>";

}







?>













</table> 
</body>
</html>