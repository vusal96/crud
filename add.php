<?php 
include "config.php";

 ?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="add.php" method="post" enctype="multipart/form-data">
		<input type="text" name="photoName" placeholder="photoName"><br>
		<input type="text" name="text" placeholder="text"><br>
		<input type="file" name="file" value="sekil"><br>
		<input type="submit" name="submit" value="add">
	</form>
	
	<?php 
	// Check if image file is a actual image or fake image
	
		if (isset($_POST['submit'])) {
			echo $imageFileType;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			$target_file = date('dmYGis'). basename($_FILES["file"]["name"]);
            move_uploaded_file($_FILES["file"]["tmp_name"],"image/".$target_file);


			$text = $_POST['text'];

			$sql = "INSERT INTO `slider`(`photoName`, `text`) VALUES ('$target_file','$text')";
			$query = mysqli_query($conn, $sql);

			if ($query) {
				header("Location:show.php");
			}else{
				echo "error add";
			}


		}
	 ?>
</body>
</html>
