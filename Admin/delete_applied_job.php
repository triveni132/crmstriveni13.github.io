<?php

require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM history_applied_job WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error("deleted"));
header("Location: manage_applied_job.php"); 
?>
