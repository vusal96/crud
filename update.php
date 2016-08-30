<?php 

include "config.php";

if (isset($_POST)) {
	$id = $_POST['id'];
	$photoName = $_POST['photoName'];
	$text = $_POST['text'];
	$sekil = $_POST['sekil'];


	$sql = "UPDATE `slider` SET `photoName`='$photoName',`text`='$text',`sekil`=`$sekil` WHERE id = $id";
	
	$query = mysqli_query($conn,$sql);
	if ($query) {
		header("Location:show.php");
	}else {
		echo "error";
	}
}



 ?>

