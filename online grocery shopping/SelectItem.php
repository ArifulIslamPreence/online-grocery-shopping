<!DOCTYPE html>
<html>
	<head>
	<style>
		body {background-color: powderblue;text-align:center}
		table, th, td {
		border: 1px solid black;
		}
	</style>
	</head>

<body>
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
	 $jsn=getJSONFromDB("select * from category");
$jData=json_decode($jsn);
$value=$_REQUEST['cid'];
	foreach($jData as $v){ 
	
		if ($v->Id==$value){
	
	 $jsonData= getJSONFromDB("SELECT * FROM item WHERE Category_Id='$value'");
	$jsnn=json_decode($jsonData);
	
	 }
	 }
if(isset($_POST['items'])) {
	$productname=$_POST['items'];
	$quantity=$_POST['quantity'];
	
  mysqli_query($connect,"INSERT INTO cart VALUES('','$productname','$quantity')");
  }
   $jsndt= getJSONFromDB("SELECT * FROM cart");
	$jsn2=json_decode($jsndt);
  
	?>
	
	
	
	
	
	
	
	

<br><br><br>
<!--<form id="form1" name="form1" method="post" action="SelectItem.php">-->
<h1>Select Items</h1>
<br>
 <select name="category">
 <?php foreach($jsnn as $v){?>

 <option id="items" name="items" value="<?php $v->Name; ?>"> <?php echo $v->Name." ";echo $v->Price." tk";  ?></option> <?php }?>
 </select>
 <h1>Quantity</h1>
 <input type="number" id="quantity" name="quantity">
<input type="button" value="Add" onclick="showHint()" style="width:80px;height:20px;"></button>
<script>
function test(v){
	alert(v.innerHTML);
}
function showHint() {
	str=document.getElementById('items').value;
	str2=document.getElementById('quantity').value;
	//document.getElementById("spinner").style.visibility= "visible";
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			var resp=(xmlhttp.responseText);
			msg="";
			console.log(resp);
			/*for(i=0;i<resp.length;i++){
				msg=msg+resp[i].name+" with cgpa : "+resp[i].cgpa+"<br>";
			}*/
			//alert(msg);
			//document.getElementById("").innerHTML = msg;
		}	
	};
	var url="SelectItem.php?items="+str+"quantity="+str2;
	//alert(url);
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}
</script>
<br><br>
<table style="width:100%">
  <tr>
    <th>Item Name</th>
    <th>Quantity</th> 
	</tr>
<?php foreach($jsn2 as $x){?>
    <tr>
		<th><?php echo $x->ItemName;?></th>
		<th><?php echo $x->Quantity;?></th>
		</tr>
		<?php } ?>
 

<br><br>
<button type="button"style="width:100px;height:40px;"onclick="return js()">Next</button>
<script>
function js() {
    confirm("Forget Something? Add Please!");
}
</script>


</body>
</html>
