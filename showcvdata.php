<?php
include_once("config.php");
$result=mysqli_query($con,"SELECT * FROM cvinfo order by id DESC");

?>
<html>
<head>
	</head>
	<body style="background-color: green;color:white;">
		<br>
		<table align="center" width="80%" style=" border-radius: 20px 20px 20px 20px; font-size: 25px;background:url(co.jpg);">
			<tr>
				<th>
					Show all cv information
				</th>
			</tr>
		</table>
		<hr>
	
		<center>
	
					<?php
					while($res = mysqli_fetch_array($result))
					{
						$all[] = $res;}
						foreach ($all as $res ) {
							?>	
			<table style="font-size: 20px; background:url(co.jpg);" width="80%">
						<tr><td>Name: <?php echo $res['name']; ?> </td></tr>
						<tr><td>Mobile number: 0<?php echo $res['phonenumber'] ?> </td><tr>
						<tr><td>Email: <?php echo $res['email']?> </td></tr>
						<tr><td><h3>Workedarea</h3><ul><li><?php echo $res['workedarea']?></li></ul></td></tr>
						<tr><td><h3>Experience</h3><ul><li><?php echo $res['experience']?></li></ul></td></tr>
						<tr><td><h3>Personal certificate & skill</h3><ul><li> <?php echo $res['personalcs']?> </li></ul></td></tr>
						<tr><td><h3>Personal information</h3><ul><li><?php echo $res['personalinformation'] ?></li></ul></td></tr>
						<tr><td><h3> Qualification</h3><ul><li><?php echo $res['qualification']?> </li></ul></td></tr>
						<tr><td><h3>Language</h3><ul><li><?php echo $res['language'] ?> </li></ul></td></tr>
						<tr><td><h3>Present Address</h3><ul><li><?php echo $res['presentaddress'] ?> </li></ul></td></tr>
						<tr><td><h3>Permanent Address</h3><ul><li><?php echo $res['permanentaddress'] ?> </li></ul></td></tr>





</table> <br><br><br><br>
					<?php 
				}

					?>
			
		</center>
	
	</body>
</html>