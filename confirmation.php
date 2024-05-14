<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
      .td-1{
          text-align: center;
          padding-top: 20px;
          
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
                <h1 style="padding-top: 20px;">Confirmation</h1>
                <?php
        if(isset($_GET['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_GET['error']."
            </div>
          ";
          
        }
        if(isset($_GET['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_GET['success']."
            </div>
          ";
          
        }
      ?>
                <form action="SavedData.php" method="post" id=ConfirmForm> 
                <table>
                    <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
                    <input type="hidden" name="pos" value="<?php echo $_GET['pos']?>">
    
                    <tr>
                        <td class="td-1">Voting Code :</td>
                        <td class="td-1" required><input type="text" class="form-control" style="text-align: left;" name="code"></td>
                    </tr>
                    <tr>
                        <td class="td-1">Reason :</td>
                        <td class="td-1"><textarea style="text-align: left;"  class="form-control" name="reason" id="" cols="23" rows="4" placeholder="Why You Vote This Candidate any Reason ?"></textarea></td>
                    </tr>
                    <tr>
                        <td class="td-2" id style="padding-top: 20px; padding-bottom: 40px;" ><button class="magnifyBtn" style="background: linear-gradient(to right, #54b670,#164B25);" name="Submit">Submit</button></td>
                    </tr>
                </table>
              </form>
            </div>
            <div class="col-md-6" style="padding-top: 50px;">
                <img src="img/7.svg" alt="" srcset="">
            </div>
        </div>
    </div>
</section>
<div class="container-fluid">
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
  </div>
  </section>



   
       <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>    
    <script src="js/bootstrap.min.js"></script>  
    

</body>
</html>