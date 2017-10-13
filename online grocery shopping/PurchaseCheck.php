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
	$jsonData=getJSONFromDB("SELECT s.Username,s.C_Id,s.Action,p.TotalPuchase FROM signup s,purchase p where s.C_Id =p.C_Id");
	
	echo $jsonData;
	/*$jsn1=json_decode($jsonData2);
	for($i=0;$i<sizeof($jsn1);$i++){
		echo $jsn1[$i]->TotalPuchase." - ".$jsn1[$i]->Username."<br>";
	}*/
?>