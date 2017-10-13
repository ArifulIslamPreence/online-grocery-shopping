<?php
	$connect=mysqli_connect("localhost","root","","grocery shop");
	$CategoryName=$_POST['CategoryName'];
	
	if($_POST['button'] == 'Insert'){
		if($_POST['CategoryName']!=""){
			if(mysqli_query($connect,"INSERT INTO Category VALUES('','$CategoryName')")){
				echo '<script language="javascript">';
				echo 'alert("Inserted!!!")';
				echo '</script>';
			}
		}
		else{
			echo '<script language="javascript">';
			echo 'alert("Error!!!")';
			echo '</script>';
		}
	} 
?>