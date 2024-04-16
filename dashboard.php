<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
include "database.php"; 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dashbaord</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background-image: url(pxfuel.jpg);
            color: whitesmoke;
            
        }
        .heading{
            text-align: center;
            margin-top: 200px;
            font-size: 50px;
            font-weight: 900;
        }
        .img{
            position: relative;
            left:550px;
            top:100px;
        }
        .log{
            position: relative;
            left: 380px;
            top:320px;
            text-decoration: none;
            color: white;
            font-size: 25px;
            border-radius: 5px;
            background-color: red;
        }
        </style>
  </head>
  <body>
    
      <img src="img.jpeg" alt="Nishant" width="auto" height="300px" class="img">
      <a href="logout.php" class="log">LOGOUT</a>
    <p class="heading">WELCOME YOU ARE LOGGED IN</p>
    <?php 
    $sql = "SELECT * FROM newtable";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table class='table'><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th>
        <th>age</th><th>gender</th><th>reg_date</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["email"]."</td>
            <td>".$row["age"]."</td><td>".$row["gender"]."</td><td>".$row["reg_date"]."</td></tr>";
        }
        echo "</table>";
    }else{
        echo "0 results";
    }
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>


