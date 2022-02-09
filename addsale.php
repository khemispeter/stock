

<?php
	$itemnumber=$_POST['itemnumber'];
	$customerid=$_POST['customerid'];
	$customername=$_POST['customername'];
	$itemname=$_POST['itemname'];
	$saledate=$_POST['saledate'];
	$saleid=$_POST['saleid'];
	$quantity=$_POST['quantity'];
	$unitprice=$_POST['unitprice'];
  $totalstock=$_POST['totalstock'];




	// create connection
	$conn=new mysqli('localhost','root','','store');

	if($conn->connect_error){
	die ('connection fail:' .$conn_connect_error);

	}
	else{ 
	$stmt=$conn->prepare("insert into sale(itemnumber,customerid,customername,itemname,saledate,saleid,quantity,unitprice,totalstock) 
		values(?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param("sssssssss",$itemnumber,$customerid,$customername,$itemname,$saledate,$saleid,$quantity,$unitprice,$totalstock);
	$stmt->execute();
	echo "sale details added succesfully.";
	$stmt->close();
    $conn->close();
	}
?>