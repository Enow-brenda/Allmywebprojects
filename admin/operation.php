<?php
include 'includes/session.php';

if(isset($_GET['accid'])){
    $id = $_GET['accid'];
    $sql = "UPDATE `candidaterequest` SET `status`='1' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Candidate Accepted successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
}
if(isset($_GET['rejid'])){
    $id = $_GET['rejid'];
    $sql = "UPDATE `candidaterequest` SET `status`='2' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Candidate Rejected successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
    header("location:candidates.php");
}
?>