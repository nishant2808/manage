<?php 
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: dashboard.php");
    exit;
}

include "database.php"; 
$error="";
$email_error = $password_error ="";
if(isset($_POST['submit'])){
    $email = isset($_POST['email']) ? $_POST['email'] :'';
    $password = isset($_POST['password']) ? $_POST['password']: '';
    
    if($email == ""){
        $email_error= "Email is requried";
    }
    if($password == ""){
        $password_error = "Password is requried";
    }

    if($email != "" && $password != ""){
        $password = md5($password);
        $sql = "SELECT * FROM newtable WHERE email='$email' AND password = '$password' ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $_SESSION["loggedin"] = true;
            header("location: dashboard.php");
            
        }else{
            $error="Invalid email and password";
        }
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    .main{
        position: relative;
        left:200px;
        top:120px;
    }
    .header{
        text-align: center;
        margin-top: -17px;
        border: 5px solid black;
        
    }
    .submit-btn{
        padding-top: 20px;
    }
    .gender{
        margin-top: 10px;
    }
    .radio{
        margin-bottom: 10px;
        margin-left: 20px;
    }
    body{
        font-size: 30px;
        background-image:url(back.jpeg);
        background-size: cover;
        color: whitesmoke;
    }
    form input{
        height: 52px;
    }
    .sign{
        text-decoration: none;
        color: whitesmoke;
        background-color: #106DF6;
        font-size: 20px;
        padding: 5px;
        border-radius: 5px;
    }
    .error{
        color:red;  

    }
    </style>
  </head>
  <body>
    <div class="container">
        <p><span class="error"></span></p>
        <div class="header p-8 mb-2  bg-dark-border-subtle text-white mt-2">
        <h1>LOGIN FORM</h1>
        </div>

    <form class="main col-12" method="POST">
        <div class="content">
            <div class="col-4">
                <label for="inputEmail4" class="form-label">E-MAIL</label>
                <input type="email" class="form-control" id="inputEmail4" name="email">
                <span class="error"><?php echo $email_error; ?></span>
            </div>
            <div class="col-4">
                <label for="inputPassword4" class="form-label">PASSWORD</label>
                <input type="password" class="form-control" id="inputPassword4" name="password">
                <span class="error"><?php echo $password_error; ?></span>
            </div>
            <span class="error"><?php echo $error; ?></span>
            <div class="submit-btn col-12">
                <button type="submit" class="btn btn-success btn-lg" name="submit">LOGIN</button>
            </div>

            <p>Don't have an account? <a href="register.php" class="sign">Sign up now.</a></p>
        </div>
    </form>
    </div>
  </body>
</html>
