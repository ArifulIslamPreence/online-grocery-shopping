<?php
	$connect=mysqli_connect("localhost","root","","grocery shop");
	$ModifiedCategoryId=$_POST['ModifiedCategoryId'];
	$PreviousItemName=$_POST['PreviousItemName'];
	$ModifiedItemName=$_POST['ModifiedItemName'];
	$ModifiedItemUnit=$_POST['ModifiedItemUnit'];
	$ModifiedItemPrice=$_POST['ModifiedItemPrice'];
	
	if($_POST['button'] == 'Modify'){
		if($_POST['ModifiedCategoryId']!="" && $_POST['ModifiedItemName']!="" && $_POST['ModifiedItemPrice']!="" && $_POST['ModifiedItemUnit']!="" && $_POST['PreviousItemName']!=""){
			if(mysqli_query($connect,"UPDATE item SET Name='$ModifiedItemName', Price='$ModifiedItemPrice', Unit='$ModifiedItemUnit', Category_Id='$ModifiedCategoryId' WHERE Name='$PreviousItemName';")){
				echo '<script language="javascript">';
				echo 'alert("Modified!!!")';
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