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
	 
	?>