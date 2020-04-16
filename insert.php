<?php
$username=$_POST['username'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phoneCode=$_POST['phoneCode'];
$phone=$_POST['phone'];

if(!empty($username) || !empty($gender) || !empty($email) || !empty($phoneCode) || !empty($phone)){

	$dbhost = "localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="car";

	$conn = new mysqli($dbhost,$dbUsername,$dbPassword,$dbname);
	if(mysqli_connect_error()){
		die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());
	}else{
		$SELECT = "SELECT email From register Where email = ? Limit 1";
		$INSERT = "INSERT Into register (username,gender,email,phoneCode,phone) values(?,?,?,?,?)";

		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("s",$email);
		$stmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result();
		$rnum = $stmt->num_rows;

		if($rnum==0){
			$stmt->close();

			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("sssii",$username,$gender,$email,$phoneCode,$phone);
			$stmt->execute();
			echo "thanks for showing interest in MORRIS GARAGE , and we will contact you in near future";
		}else{
			echo "someone already register using this email";
  		}$stmt->close();
		 $conn->close();



}
}else{
	echo "All fields are required";
	die();
	# code...
}
?>