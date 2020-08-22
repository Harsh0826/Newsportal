<?php
$id = $_GET['news_id'];

$conn = mysqli_connect("localhost", "root", "", "newsportal");
$INSERT = "UPDATE news SET status='active',approval='real' where news_id='$id'";
mysqli_query($conn,$INSERT) or die('error');
header('location:approval.php');


?>