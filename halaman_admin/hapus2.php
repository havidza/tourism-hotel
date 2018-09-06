<?php
$link = mysqli_connect("localhost", "root", "", "hotel");
  
// Get id from URL to delete that user
$id = $_GET['id'];
 
// Delete user row from table based on given id
$result = mysqli_query($link, "DELETE FROM testimonial WHERE id=$id");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:testimoni.php");
?>