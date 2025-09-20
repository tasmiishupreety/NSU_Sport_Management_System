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
      <a href="USER_VIEW_SLOT.php">AVAILBLE SLOT OF SPORTS</a>
      <a href="Book Your Slot.html">Book Your Slot</a>
        <a href="Log in Form.html">Log Out</a>
    </div>
    
    
    

 <h1>Available Sports and Fee</h1>
 <br>
 <table>
    <tr>
        <th>SPORTS_NAME</th>
        <th>FEE</th>
       
</tr>
<?php
include "Connect.php";
$sql="SELECT * FROM sports ORDER BY FEE ASC";
$result = mysqli_query($db,$sql);
$count = mysqli_num_rows($result);


  while($row = mysqli_fetch_assoc($result))
    {
       echo "<tr>";
        
           echo "<td>" .$row["SPORTS_NAME"]. "</td>";
           echo "<td>" .$row["FEE"]. "</td>";
    echo"</tr>";
    
    }


    
    ?>




</table> 
</body>
</html>