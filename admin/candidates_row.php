<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = " SELECT *,positions.id AS posid ,candidaterequest.id AS canid FROM candidaterequest LEFT JOIN positions ON positions.id=candidaterequest.positionid  WHERE candidaterequest.id = '$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>