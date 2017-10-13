<?php
	$connect=mysqli_connect("localhost","root","","grocery shop");
	$Action=$_REQUEST['Action'];
	
	if($_POST['button'] == 'Accept'){
		if(mysqli_query($connect,"UPDATE signup SET Action='Accepted' WHERE C_Id='$Action';")){
			header('Location:PurchaseCheck.html');
		}
	}
	else if($_POST['button'] == 'Deny'){
		if(mysqli_query($connect,"UPDATE signup SET Action='Denied' WHERE C_Id='$Action';")){
			header('Location:PurchaseCheck.html');
		}
	}
	else{
			header('Location:PurchaseCheck.html');
			echo '<script language="javascript">';
			echo 'alert("Error!!!")';
			echo '</script>';
	}
?>