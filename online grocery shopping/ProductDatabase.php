<?php
	function getJSONFromDB($sql){
	$connect=mysqli_connect("localhost","root","","grocery shop");
	//$sql="SELECT 'Username' FROM signup";
	$result=mysqli_query($connect,$sql);
	$json_array=array();
	while($row=mysqli_fetch_assoc($result)){
		$json_array[]=$row;
	}
	return json_encode($json_array);
	}
	$jsonData= getJSONFromDB("SELECT Name, Price ,Unit,Category_Id,Id FROM item");
	echo $jsonData;
	//echo getJSONFromDB("SELECT Password FROM signup");
	//$jsn=json_decode($jsonData);
?>