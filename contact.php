<?php
$name = $_REQUEST['txtName'];
$email   = $_REQUEST['txtEmail'];
$message = $_REQUEST['txtMessage'];


//database connection
include('dbConnect.php');

$sql = "INSERT into contact(name,email,message) values(:name,:email,:message)";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(":name",$name);
$stmt->bindParam(":email",$email);
$stmt->bindParam(":message",$message);

$stmt->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- Bootstrap CSS --> 
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <title></title>
     <style>
    .fa-check{
    font-size: 80px;
    color: #27ae60;
    font-weight: bold;
    height: 110px;
    width: 110px;
    border: 1px solid #27ae60;
    text-align: center;
    padding-top: 13px;
    border-radius: 50%;
    box-sizing: border-box;
    margin: 40px 0 0 0px;
    }
     </style>
</head>
<body>
    <div class="container-fluid" id="cont-3">
    <header id="nav-bar">
  <nav class="navbar navbar-expand-lg navbar-light" style="background: #070C90;">
    <a class="navbar-brand" href=index.html  style="color: white; font-weight: 600; margin-top: 15px;">TRUSTHEE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" style="color: white;"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto animate__animated animate__bounceInDown" style="padding-right: 50px;">
        <li class="nav-item" >
          <a class="nav-link" href="index.html" style="color:white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Home</a>
        </li>
        <li class="nav-item" >
          <a class="nav-link" href="year.php"  style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Candidate</a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link" href="result.php" style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Result</a>
        </li>
        <li class="nav-item" >
          <a class="nav-link" href="suggestion.html"  style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Suggestion</a>
        </li>
      
        <li class="nav-item" >
          <a class="nav-link" href="about.php"  style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">About</a>
        </li>
        <li class="nav-item" >
          <a class="nav-link" href="contact_form.php"  style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Contact</a>
        </li>
        <li>
          <a class="nav-link" href="admin_login.php"  style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Management</a>
        </li>
      
      </ul>
    </div>
  </nav>
</header>
           <section>
               <div class="container">
                   <div class="row">
                       <div class="col-md-12">
                        <i class="fa fa-check" aria-hidden="true" ></i>
                        <H1 style="margin-top: 40px;">Successfully Submitted</H1>
                       </div>
                       <div class="col-md-12">
                           <p>Go Home Click this Link -><a href="index.html">Click Me</a></p>
                       </div>
                   </div>
               </div>
           </section>
           <section>
               <div class="container" style="margin-top:190px">
                   <div class="row">
                       <div class="col-md-12">

                       </div>
                   </div>
               </div>
           </section>
           <section id="footersection">
    <div class="container-fluid ">
      <div class="row">
        <div class="col-md-6">
          <hr>
         <p >&copy;2024<a href="#">TRUSTHEE</a></p> 
        </div>
        <div class="col-md-6">
          <hr>
          <p >All Rights Reserved</p> 
        </div>
      </div>
    </div>
    </section>
            

            <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>    
    <script src="js/bootstrap.min.js"></script>  
    