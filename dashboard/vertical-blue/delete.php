<?php
$id = $_GET['i'];

$conn = mysqli_connect("localhost", "root", "", "newsportal");
$delete= "DELETE from news where news_id='$id'";
$data = mysqli_query($conn,$delete);
header("location: tables-datatable.php");
?>