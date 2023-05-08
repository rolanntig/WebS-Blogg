<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
    <input type="text" name="caption">
    <input type="file" name="image">
    <input type="submit" value="Post" name="submit">
    </form>


    <?php
    include 'var.php';
// Check if the form was submitted
if(isset($_POST['submit'])){
    // Check if a file was uploaded
    if(!empty($_FILES['image']['tmp_name'])){
      // Get the uploaded file's name and temporary filename
      $filename = $_FILES['image']['name'];
      $tmpname = $_FILES['image']['tmp_name'];
  
      // Move the uploaded file to a specific directory
      move_uploaded_file($tmpname, "uploads/$filename");
  
      // Get the caption
      $caption = $_POST['caption'];
  
      // Get the user who posted the image
      $user = $_SESSION['username'];
  
      // Connect to the MySQL database
  
      // Check if the connection was successful
      if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
      }
  
      // Insert the filename, caption, and user into the database
      $sql = "INSERT INTO images (image_url, caption, username) VALUES ('$filename', '$caption', '$user')";
      if(mysqli_query($conn, $sql)){
        echo "Image uploaded successfully.";
      } else {
        echo "Error: " . mysqli_error($conn);
      }
  
      // Close the database connection
      mysqli_close($conn);
    } else {
      echo "Please choose an image to upload.";
    }
  }
  
  
    
    
    ?>
</body>
</html>