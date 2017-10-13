<?php
	$connect=mysqli_connect("localhost","root","","grocery shop");
	$CategoryId=$_POST['CategoryId'];
	$ItemName=$_POST['ItemName'];
	$ItemUnit=$_POST['ItemUnit'];
	$ItemPrice=$_POST['ItemPrice'];
	
	if($_POST['button'] == 'Insert'){
		if($_POST['CategoryId']!="" && $_POST['ItemName']!="" && $_POST['ItemPrice']!="" && $_POST['ItemUnit']!=""){
			if(mysqli_query($connect,"INSERT INTO item VALUES('','$ItemName','$ItemPrice','$ItemUnit','$CategoryId')")){
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
	/*elseif($_POST['button'] == 'UPDATE'){
	
	}*/
	elseif($_POST['button'] == 'Delete'){
		if($_POST['ItemName']!=""){
			if(mysqli_query($connect,"DELETE FROM item WHERE Name='$ItemName';")){
				echo '<script language="javascript">';
				echo 'alert("Deleted!!!")';
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