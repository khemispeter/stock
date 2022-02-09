

<?php
	$itemnumber=$_POST['itemnumber'];
	$productid=$_POST['productid'];
	$itemname=$_POST['itemname'];
	$status=$_POST['status'];
	$describtion=$_POST['describtion'];
	$quantity=$_POST['quantity'];
	$unitprice=$_POST['unitprice'];
	$totalstock=$_POST['totalstock'];




	// create connection
	$conn=new mysqli('localhost','root','','store');

	if($conn->connect_error){
	die ('connection fail:' .$conn_connect_error);

	}
	else{ 
	$stmt=$conn->prepare("insert into item(itemnumber,productid,itemname,status,describtion,quantity,unitprice,totalstock) 
		values(?,?,?,?,?,?,?,?)");
	$stmt->bind_param("ssssssss",$itemnumber,$productid,$itemname,$status,$describtion,$quantity,$unitprice,$totalstock);
	$stmt->execute();
	echo "item added succesfully.";
	$stmt->close();
    $conn->close();
	}
?>