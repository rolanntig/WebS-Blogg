<?php include 'var.php';
include 'header.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="Login_form">
        <h1>Login</h1>
        <form method="post">
            <input type="email" placeholder="Email" name="login_email" required>
            <input type="password" placeholder="Password" name="login_password" required>
            <input type="submit" value="Login" name="Login" class="btn" required>
        </form>
    </div>
    <div class="Register_form">
        <h1>Register</h1>
        <form method="post">
        <input type="text" placeholder="Username" id="username" name="username" required>
        <input type="email" placeholder="Email" id="email" name="reg_email" required>
        <input type="password" placeholder="Pass" id="Pass" name="reg_password" required>
        <input type="submit" value="Register" name="Register" class="btn" required>
        </form>
    </div>
    </div>

    <?php 
    
    if(isset($_POST['Register'])){

       
        //username,email and password that will be stored in database
        $user = $_POST['username'];
        $email = $_POST['reg_email'];
        $pass = $_POST['reg_password'];

        //connects to db with credentials above
        //inserts values of username,email and password into table named user
        $sql = "INSERT INTO user (username, email, pass) VALUES ('$user', '$email', '$pass')";
        //starts the insert process
        mysqli_query($conn,$sql);
        
            
    }

    if(isset($_POST['Login'])){
        //username,email and password that will be stored in database
        $email = $_POST['login_email'];
        $pass = $_POST['login_password'];
      
        $sql = "SELECT * FROM user WHERE email='$email' AND pass='$pass'";
        //starts the insert process
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $user = $row['username'];
      
        if(mysqli_num_rows($result) > 0){
          // Store user information in session
          session_start();
          $_SESSION['username'] = $user;
      
          header('Location: blog.php');
          exit();

        } else {
          echo "invalid credentials";
        }
      }
      
    
    ?>
</body>
</html>