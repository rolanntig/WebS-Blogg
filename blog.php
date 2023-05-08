
<?php
include 'header.php';
include 'post.php';
include 'var.php';

    $sql = "SELECT * FROM images ORDER BY id DESC";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)) {
      
    // Store the post ID in the session variable
    $_SESSION['post_id'] = $row['id'];
    $_SESSION['post_img'] = $row['image_url'];
    $_SESSION['post_caption'] = $row['caption'];

    $img = $row['image_url'];

    echo"<div class='Blog'>";
    echo "<div class='Blog_card' id={$row['id']}><a href='bigpost.php'>";
    echo"<h4>{$row['username']}</h4>";
    echo'<img src="./uploads/'. $img .'">';
    echo"<p>{$row['caption']}</p>";
    echo"</a></div>";
    echo"</div>";
    }    
?>


