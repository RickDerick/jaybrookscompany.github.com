<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
if(!$conn){
	die('could not connect:'.mysql_error());
}
	$sql='SELECT id, product_name,product_price,product_image FROM producttb';
	mysql_select_db('productdb');
	$result=mysql_query($sql,$conn);
    if(!result){
		die('could not get data:'.mysql_error());
	}
	while($row=mysql_fetch_array($result, MYSQL_ASSOC)){
		component($row['id'],['product_name'],['product_image'])
	}
?>