<?php
include 'header.php';
include 'var.php';
// Retrieve the post data from the database using the stored post ID
$id = $_SESSION['post_id'];
$row['image_url'] = $_SESSION['post_img'] ;
$row['caption'] = $_SESSION['post_caption'];
$img = $row['image_url'];
$sql = "SELECT * FROM images WHERE id = $id";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {

// Display the post on the post page
    echo"<div class='Blog'>";
    echo "<div id={$id} class='Blog_card'>";
    echo"<h4>{$row['username']}</h4>";
    echo'<img src="./uploads/'. $img .'">';
    echo"<p>{$row['caption']}</p>";
    echo"</div>";
    echo"</div>";


}
?>
