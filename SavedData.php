<?php
include('dbConnect.php');
$code = $_REQUEST['code'];
$reason   = $_REQUEST['reason'];
$id = $_REQUEST['id'];
$pos = $_REQUEST['pos'];



//database connection

$sql="SELECT * from users where votingcode='$code'";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$rs =  $stmt->fetchAll();
$count1=$stmt->rowCount();
if($count1>0){
  
        foreach($rs as $row){
            $user=$row['id'];
            $sql1="SELECT * from votes where userid='$user' && positionid='$pos'";
            $stmt1 = $pdo->prepare($sql1);
            $stmt1->execute();
            $rs1 =  $stmt1->fetchAll();
            $count=$stmt1->rowCount();

        if($count>0){

            $error = "Voter Already Voted";
            header("location:confirmation.php?id=".$id."&&pos=".$pos."&&error=".$error);

        }
        else{

        $sql = "INSERT INTO `votes`( `candidateid`, `positionid`, `userid`, `reason`) VALUES (:id,:pos,:voter,:reason)";

        $stmt = $pdo->prepare($sql);


        $stmt->bindParam(":reason",$reason);
        $stmt->bindParam(":id",$id);
        $stmt->bindParam(":pos",$pos);
        $stmt->bindParam(":voter",$user);


        $stmt->execute();

       header('location:successfully.php');
        }

        }
}
else{
        $error= "Voter Doesnot Exist";
		header("location:confirmation.php?id=".$id."&&pos=".$pos."&&error=".$error);
    }



?>  