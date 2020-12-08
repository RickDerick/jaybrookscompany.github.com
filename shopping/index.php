<?php

require_once('./php/component.php');
 
?>
<!doctype html>
<html>
<head>
<title>shopping cart</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="container">
<div class="row text-center py-5">
<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$db='productdb';
$conn=new mysqli($dbhost,$dbuser,$dbpass,$productdb);
if(!$conn){
	die('could not connect:'.mysql_error());
}
	$sql='SELECT id, product_name,product_price,product_image FROM producttb';
	$result=mysql_query($sql,$conn);
    if(!result){
		die('could not get data:'.mysql_error());
	}
	while($row=mysql_fetch_array($result, MYSQL_ASSOC)){
		component($row['id'],$row['product_name'],$row['product_price'],$row['product_image']);
}
?>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
