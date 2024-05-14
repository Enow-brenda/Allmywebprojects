<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$email   = $_POST['email'];
		$number = $_POST['number'];
		$bio =  $_POST['bio'];
		$info =  $_POST['info'];
		$expe =  $_POST['expe'];
		
		$why=  $_POST['why'];
		$position=$_POST['position'];

		$sql = "UPDATE `candidaterequest` SET `name`='$name',`email`='$email',`phonenumber`='$number',`additionalinfo`='$info',`bio`='$bio',`experience`='$expe',`whychooseme`='$why',`positionid`='$position' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Candidate updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: candidates.php');

?>