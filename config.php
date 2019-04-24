<?php
 $server="localhost";
 $dbname="cvdata";
 $dbuser="root";
 $dbpass="";
 $con=mysqli_connect($server,$dbuser,$dbpass,$dbname);
 if($con)
 {
 	echo 'Success ';
 }
 else
 {
 	echo 'faild to databased with connect';
 }
?>