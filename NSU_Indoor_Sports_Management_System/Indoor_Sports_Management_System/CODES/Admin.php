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
      <a href="Add_Sports_To_Your_Club.html">Add Sports</a>
      <a href="Available_Slot.html">Edit Slots</a>
      <a href="Remove_sports_from_your_club.html">Remove Sports</a>
      <a href="Update_SPORTS_FEE.html">UPDATE FEE</a>
      <a href="Log in Form.html">Log Out</a>
    </div>
    
    
    <div style="padding-left:16px">
      <h2>Welcome to Admin Dashboard</h2>
    </div>
    

 <h1>USER_INFO</h1>
 <br>
 <table>
    <tr>
        <th>User_ID</th>
        <th>First_Name</th>
        <th>Last_Name</th>
        <th>Address</th>
</tr>
<?php
include "Connect.php";
$sql="SELECT * FROM user_info";
$result = mysqli_query($db,$sql);
$count = mysqli_num_rows($result);


  while($row = mysqli_fetch_assoc($result))
    {
       echo "<tr>";
        
           echo "<td>" .$row["USER_ID"]. "</td>";
           echo "<td>" .$row["FIRST_NAME"]. "</td>";
           echo "<td>" .$row["LAST_NAME"]. "</td>";
           echo "<td>" .$row["ADDRESS"]."</td>";
    echo"</tr>";
    
    }


    
    ?>




</table> 
</body>
</html>