

<?php
	$fullname=$_POST['fullname'];
	$status=$_POST['status'];
	$vendorid=$_POST['vendorid'];
	$mobilephone=$_POST['mobilephone'];
	$cellphone=$_POST['cellphone'];
	$email=$_POST['email'];
	$state=$_POST['state'];
	$city=$_POST['city'];
  $address=$_POST['address'];




	// create connection
	$conn=new mysqli('localhost','root','','store');

	if($conn->connect_error){
	die ('connection fail:' .$conn_connect_error);

	}
	else{ 
	$stmt=$conn->prepare("insert into customer(fullname,status,vendorid,mobilephone,cellphone,email,state,city,address) 
		values(?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param("sssssssss",$fullname,$status,$vendorid,$mobilephone,$cellphone,$email,$state,$city,$address);
	$stmt->execute();
	echo "customer details added succesfully.";
	$stmt->close();
    $conn->close();
	}
?>