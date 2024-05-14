<?php
$name = $_REQUEST['txtName'];
$email   = $_REQUEST['txtEmail'];
$number = $_REQUEST['txtNumber'];
$bio =  $_REQUEST['bio'];
$info =  $_REQUEST['info'];
$expe =  $_REQUEST['experience'];

$why=  $_REQUEST['whyme'];
$position=$_REQUEST['position'];
$photo_name='2.png';
//$photo_name=$_FILES['photo']['name'];
//$photo_tmp=$_FILES['photo']['tmp_name'];
//move_uploaded_file($photo_tmp,"img/".$photo_name);







//database connection
include('dbConnect.php');

$sql = "INSERT INTO `candidaterequest`( `name`, `email`, `phonenumber`, `additionalinfo`, `photo`, `bio`, `experience`, `status`, `whychooseme`,  `positionid`) VALUES (:name,:email,:mobile,:info,:photo,:bio,:expe,'0',:why,:position)";

$stmt = $pdo2->prepare($sql);

$stmt->bindParam(":name",$name);
$stmt->bindParam(":email",$email);
$stmt->bindParam(":mobile",$number);
$stmt->bindParam(":info",$info);
$stmt->bindParam(":bio",$bio);
$stmt->bindParam(":photo",$photo_name);
$stmt->bindParam(":expe",$expe);
$stmt->bindParam(":why",$why);
$stmt->bindParam(":position",$position);

$stmt->execute();

header('location: pending.php');
?>
