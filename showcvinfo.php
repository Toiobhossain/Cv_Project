<?php
include_once("config.php");
$result=mysqli_query($con,"SELECT * FROM register order by id DESC");

?>
<html>
<head>
	</head>
	<body>
		<table border="1">
		
					<?php
					while($res = mysqli_fetch_array($result))
					{
						echo "<tr><td>".$res['name']."</td>";
						
						echo "<td>".$res['email']."</td>";
						echo "<td>".$res['address']."</td>";
						echo "<td> <a href=\"edit.php?id=$res[ID]\">Edit</a></td>";
						echo "<td> <a href=\"delete.php?id=$res[ID]\">Delete</a></td></tr>";

					}
					?>
				
			
			
		</table>
	</body>
</html>