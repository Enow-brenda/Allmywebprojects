<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$name = $_POST['name'];
$email   = $_POST['email'];
$number = $_POST['number'];
$bio =  $_POST['bio'];
$info =  $_POST['info'];
$expe =  $_POST['expe'];

$why=  $_POST['why'];
$position=$_POST['position'];
$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}
		

		$sql = "INSERT INTO `candidaterequest`( `name`, `email`, `phonenumber`, `additionalinfo`,  `bio`, `experience`, `status`, `whychooseme`,  `positionid`,`photo`) VALUES ('$name','$email','$mobile','$info','$bio','$expe','1','$why','$position','$filename')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Candidate added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: candidates.php');
?>