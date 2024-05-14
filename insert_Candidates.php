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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
      .td-1{
          text-align: center;
          padding-top: 20px;
        
      }
      table{
        margin:auto;
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
    


    </section>
    <section id="center">
    <div class="container">
        <div class="row">
            <div class="col-md-6" >
                <h1 style="padding-top: 20px;">Candidate Enroll</h1>
                <p style="padding-top: 20px;"><?php echo $row['description']." Candidates"?></p>
                <form action="process_cand.php" method="post">
                <table>
                  <input type="hidden" name="position" value="<?php echo $position?>" enctype="multipart/form-data">
                    <tr>
                        <td class="td-1">Name :</td>
                        <td class="td-1"><input  class="form-control"  requiredtype="text" style="text-align: left;" name="txtName" autofocus></td>
                    </tr>
                    <tr>
                        <td class="td-1">Email :</td>
                        <td class="td-1"><input  class="form-control" requiredtype="email" style="text-align: left;" name="txtEmail"></td>
                    </tr>
                    <tr>
                        <td class="td-1">Mobile Number :</td>
                        <td class="td-1"><input  class="form-control" required type="number" style="text-align: left;" name="txtNumber"></td>
                    </tr>
                    <tr>
                        <td class="td-1">Biography:</td>
                        <td><textarea class="form-control" style="margin-top:10px" name="bio"></textarea></td>
                    </tr>
                    <tr>
                        <td class="td-1">Additional Info:</td>
                        <td class="td-1"><textarea class="form-control" style="margin-top:10px" name="info"></textarea></td>
                    </tr>
                    <tr>
                        <td class="td-1">Experience :</td>
                        <td class="td-1"><input class="form-control" required type="text" style="text-align: left;" name="experience"></td>
                    </tr>
                    <tr>
                        <td class="td-1">Why Choose Me</td>
                        <td class="td-1"><textarea class="form-control" style="margin-top:10px" name="whyme"></textarea></td>
                    </tr>
                    <tr>
                        <td class="td-1">Photo:</td>
                        <td class="td-1"><input type="file" name="photo" multiple accept="image/*"></td>
                    </tr>
                    
                    <tr>
                        <td class="td-2" id style="padding-top: 20px; padding-bottom: 40px;" ><button class="magnifyBtn" style="background: linear-gradient(to right, #54b670,#164B25);" name="Submit">Submit</button></td>
                    </tr>
                </table>
              </form>
            </div>
            <div class="col-md-6" style="padding-top: 50px;">
                <img src="img/8.svg" alt="" srcset="">
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
    <!-- <script src="js/aos.js"></script>
    <script>
     AOS.init();
    </script> -->
</body>
</html>
<?php } ?>