<?php
	include('connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM members WHERE id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
	header("location: index.php");
?>