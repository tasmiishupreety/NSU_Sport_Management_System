<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Sports</title>
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
      <a href="Admin.php">Add Sports</a>
      <a href="Remove  sports from your club.html">Remove Sports</a>
      <a href="Log in Form.html">Log Out</a>
    </div>
    
    
    <div style="padding-left:16px">

    </div>
    <h1>Add A sports</h1>

    <form action="form_script.php" method="POST">
        <lable for="">Student ID:</lable>
        <input type="number" id="id" name="id">
        <br>
        <br>
        <lable for="name">Name:</lable>
        <input type="text" id="name" name="name">
        <br>
        <br>
        <input type="submit" value="Save">
    </form>
    
</body>
</html>