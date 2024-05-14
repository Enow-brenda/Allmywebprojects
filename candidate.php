<?php 
include("dbConnect.php");
$position=$_GET['id'];
$sql = "SELECT *  from  `positions` where id='$position'";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$rs =  $stmt->fetchAll();
foreach($rs as $row){
 
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!------------------  Required Meta Tags ------------------>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!------------------  Bootstrap css ------------------>

<link rel="stylesheet" href="css/bootstrap.min.css">

  <!------------------  FontAwesome CDN ------------------>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!------------------  Custom css------------------>

<link rel="stylesheet" href="css/style.css">

<!------------------  Fonts CDN ------------------>

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<!------------------  Internal Css ------------------>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        scroll-behavior: smooth;
        text-align: center;
        font-family: 'Poppins', sans-serif;
    }
</style>
</head>
<body>
  <!------------------  Navbar Section ------------------>
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
<div class="container">
         
         <div class="row">
           <div class="col-md-12" >
          
           
           <h1 class="text-center" style="margin-bottom: 50px;text-transform:capitalize;"><?php
           echo $row['description'].' Candidates'?></h1>
         </div>
         <?php 
   
      

   $sql = "select * from candidaterequest where status=1 && positionid='$position'";
   include("dbConnect.php");
    
       $result= $pdo->query($sql);
     
     $rs =   $result->fetchAll();
      
     foreach($rs as $row){
?>
        <!-- Card Start -->
          <div class="col-md-3 " style=" margin-left:25px; padding-top: 30px;">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="images/<?php echo $row['photo']?>" alt="shinzo" height="350px">
                  <div class="card-body">
                    <h2 class="card-title"><?php echo $row['name']; ?></h2>
                    <p class="card-text"><?php echo $row['email']; ?></p>
                    <a href="Responsive_Portfolio_10-05-23-main/index.php?id=<?php echo $row['id'].'&&pos='.$_GET['id']?>" class="btn btn-success">View Portfolio</a>
                    
                    <a href="confirmation.php?id=<?php echo $row['id'].'&&pos='.$_GET['id']?>" class="btn btn-primary">Vote Now</a>
                  </div>
                </div>
              </div>
              <?php } ?>
              <!-- Card End -->
    
          </div>
        </div>
      </section>
      <!------------------  Footer Section ------------------>

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

</body>
</html>
<?php }?>