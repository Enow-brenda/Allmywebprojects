<?php 
include('dbConnect.php');
if(isset($_POST['register'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['number'];
$sql="SELECT * from users where email='$email'";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$rs =  $stmt->fetchAll();
$count=$stmt->rowCount();

    
    if($count>0){
       
        $_SESSION['error'] = 'User already exists';
        header('location: join.php?error=User already exists');
    
    }
    else{
		//generate voters id
		$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$voter = substr(str_shuffle($set), 0, 15);

		
        $sql1= "INSERT INTO `users`( `name`, `email`, `phone`, `votingcode`) VALUES (:name,:email,:phone,:voter)";
        $stmt1 = $pdo->prepare($sql1);
        $stmt1->bindParam(":phone",$phone);
        $stmt1->bindParam(":email",$email);
        $stmt1->bindParam(":name",$name);
        $stmt1->bindParam(":voter",$voter);


       
      
		if($stmt1->execute()){
			$_SESSION['success'] = 'Account  added successfully';
            header('location: join.php?success=Account  added successfully');
        }
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	
}

	

 ?>