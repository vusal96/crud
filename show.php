<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
    </head>

    <style>
        
        td{
            padding: 10px;
        }
        a{
            text-decoration: none;
        }

    </style>

    <body>
        <table border="1">
        	<thead>
        		<tr>
        			<th>id</th>
        			<th>photoname</th>
                    <th>text</th>
        			<th>sekil</th>
        			<th>delete</th>
                    <th>edit</th>
        			<th>create</th>
        		</tr>
        	</thead>
        	<tbody>
        		<?php 
        			include "config.php";

        			$sql = "SELECT * FROM `slider`";
        			$query = mysqli_query($conn, $sql);

        			if ($query) {
        				
        				while($row = mysqli_fetch_assoc($query)){
        					echo "<tr>";
        					
        					echo"<td>".$row['id']."</td>";
        					echo"<td>".$row['photoName']."</td>";
                            echo"<td>".$row['text']."</td>";
        					echo"<td>".$row['file']."</td>";
        					echo"<td><a href='delete.php?id=".$row['id']."'>delete</a></td>";
        					echo"<td><a href='edit.php?id=".$row['id']."'>edit</a></td>";
        					echo"<td><a href='add.php'>Create</a></td>";
                            
        					echo "</tr>";
        				}


        			}


        		 ?>
        	</tbody>
        </table>
        
        <script src="js/main.js"></script>
    </body>
</html>