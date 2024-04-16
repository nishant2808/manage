<?php 
include "database.php"; 
$firstname_error = $lastname_error =  $email_error = $password_error = $age_error = $gender_error =  $check_error=" ";
$firstnme=$lastname=$email=$password=$age=$gender=$check="";
if(isset($_POST["submit"])){
    $firstname = isset($_POST['fname']) ? $_POST['fname']: '';
    $lastname = isset($_POST['lname']) ? $_POST['lname']:'';  
    $email = isset($_POST["email"]) ? $_POST['email']:'';
    $password = isset($_POST["password"]) ? $_POST['password']:'';
    $age = isset($_POST['age']) ? $_POST['age']:'';
    $gender = isset($_POST['gender']) ? $_POST['gender']:'';
    $check = isset($_POST['check']) ? $_POST['check']:'';
     

    if($firstname == ""){
        $firstname_error= "First name is required ";
    } if($lastname == ""){
        $lastname_error = "Last name is requried";
    }if ($email == ""){
        $email_error= "Email is requried";
    }if($password == ""){
        $password_error = "Password is requried";
    }if ($age == ""){
        $age_error= "Please enter your age";
    } if($gender == ""){
        $gender_error = " Please select your gender ";
    } if ($check == ""){
        $check_error = "Please check it";
    }
    
    if($firstname != '' &&  $lastname != '' &&  $email != '' &&  $password != '' && $age != '' &&  $gender != ''){
        $password = md5($_POST['password']);
        $sql = "INSERT INTO newtable (firstname, lastname, email, password, age, gender)
        VALUES ('$firstname', '$lastname', '$email', '$password', '$age', '$gender')";
        if ($conn->query($sql) === TRUE) {
            $login_url = 'http://localhost/form/login.php';
            header('Location: '.$login_url);
          }else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
    }
      
    
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
    .main{
        position: relative;
        left:500px;
    }
    .header{
        text-align: center;
        margin-top: -17px;
    }
    .submit-btn{
        padding-top: 20px;
        padding-bottom: 20px;
        
    }
    .gender{
        margin-top: 10px;
        
    }
    .radio{
        margin-bottom: 10px;
        margin-left: 20px;
    }
    body{
        font-size: 22px;
        background-image:url(pxfuel.jpg);
        background-size: contain;
        color: whitesmoke;
    }
    form input{
        height: 45px;
    }
    .login{
        text-decoration: none;
        color: whitesmoke;
        background-color: #106DF6;
        font-size: 20px;
        padding: 5px;
        border-radius: 5px;
    }
    .error{
        color: red;
    }
        
    
    </style>
  </head>
  <body>
    <p><span class="error"></span></p>
    <div class=" header p-8 mb-2 bg-warning text-white">
    <h1>REGISTRATION FORM</h1>
    </div>

  <form class="main col-12" method="POST">
  <div class="content">

  <div class="col-4">
    <label for="inputfname" class="form-label">FIRST NAME</label>
    <input type="text" class="form-control" id="inputfname" name="fname">
    <span class="error"><?php echo $firstname_error; ?></span>
  </div>
  <div class="col-4">
    <label for="inputlname" class="form-label">LAST NAME</label>
    <input type="text" class="form-control" id="inputlname" name="lname">
    <span class="error"><?php echo $lastname_error; ?></span>
  </div>

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
  <div class="col-4">
    <label for="inputage" class="form-label">AGE</label>
    <input type="number" class="form-control" id="inputage" name="age">
    <span class="error"><?php echo $age_error; ?></span>
  </div>
  <label class="gender" name="gender"> GENDER:</label>
  <div class="form-check-inline radio">
  <label class="form-check-label" for="flexRadioDefault1"> MALE</label>
  <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="male">
  </div>

  <div class="form-check-inline radio">
  <label class="form-check-label" for="flexRadioDefault1">FEMALE</label>
  <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="female">
  </div>

  <div class="form-check-inline radio">
  <label class="form-check-label" for="flexRadioDefault1">OTHER</label>
  <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="other">
  </div><br>
  <span class="error"><?php echo $gender_error; ?></span>
  <div class="col-12 checkbox">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" name="check">
      <label class="form-check-label checkbox" for="gridCheck" >
        Check me out
      </label>
    </div>
  </div>
  <span class="error"><?php echo $check_error; ?></span>
  <div class="submit-btn col-12">
    <button type="submit" class="btn btn-success btn-lg" name="submit">REGISTER</button>
      </div>
           
      <p>Already have an account? <a href="login.php" class="login">Login here.</a></p>
    </div>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>