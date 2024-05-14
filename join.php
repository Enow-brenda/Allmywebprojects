<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<style>
		.card{
			width:400px;
			margin-left:auto;
			margin-right:auto;
			margin-top:100px;
			text-align:center;
			padding:30px;	
			border:4px #164B25 solid;
			border-radius:5px;	
            
		}
	</style>
	<body>
    <?php
    session_start();
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
		<section class="sec">
			<div class="card">
				<div class="row">
					<div class="col-md-12">
						<h3>Voters Registration</h3>
	<?php 
	
	?>
					<form action="addvoter.php" method="post">
                    <div class="form-group">
							<input required type="text" class="form-control" name="name" placeholder="Your Name *" value="" required />
						</div>
						<div class="form-group">
							<input required type="email" class="form-control" name="email" placeholder="Your Email *" value="" required />
						</div>
                        <div class="form-group">
							<input required type="text" class="form-control" name="number" placeholder="Your Contact *" value="" required />
						</div>
						
						<div class="form-group">
							<input required type="submit" class="form-control btn btn-primary" style="background: linear-gradient(to right, #54b670,#164B25);" name="register" value="Register"/>
						</div>	
                        <a href="index.html">Go Back</a>
					</form>
				</div>
			</div>
		</div>
	</section>
	<script src="js/jquery-3.2.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>    
		<script src="js/bootstrap.min.js"></script> 
	</body>
	</html>

