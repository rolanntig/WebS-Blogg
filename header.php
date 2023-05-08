<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/blog.css">
    <title>Blogg sida</title>
</head>
<body>
    <nav>
        <h3>Blogg</h3>
        <a href="./blog.php">Posts</a>
        <?php 
        session_start();
        if(isset($_SESSION['username'])){
            echo"<a href='./logout.php'>Logout</a>";
            } else {
            echo"<a href='./login.php'>Login</a>";
            }


        ?>
        

    </nav>
</body>
</html>