

<?php
	$itemnumber=$_POST['itemnumber'];
	$purchasedate=$_POST['purchasedate'];
	$purchaseid=$_POST['purchaseid'];
	$itemname=$_POST['itemname'];
	$vendorname=$_POST['vendorname'];
	$quantity=$_POST['quantity'];
	$unitprice=$_POST['unitprice'];
	$totalcost=$_POST['totalcost'];




	// create connection
	$conn=new mysqli('localhost','root','','store');

	if($conn->connect_error){
	die ('connection fail:' .$conn_connect_error);

	}
	else{ 
	$stmt=$conn->prepare("insert into purchase(itemnumber,purchasedate,purchaseid,itemname,vendorname,quantity,unitprice,totalcost) 
		values(?,?,?,?,?,?,?,?)");
	$stmt->bind_param("ssssssss",$itemnumber,$purchasedate,$purchaseid,$itemname,$vendorname,$quantity,$unitprice,$totalcost);
	$stmt->execute();
	echo "purchase added succesfully.";
	$stmt->close();
    $conn->close();
	}
?>