<?php include 'includes/session.php'; ?>
<?php include 'includes/slugify.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<link rel="stylesheet" href="../css/boostrap.min.css">
  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <?php 
include("../dbConnect.php");
$candidate=$_GET['id'];
$pos=$_GET['pos'];
$sql = "SELECT *  from  `positions` where id='$pos'";
$query = $conn->query($sql);
while($row = $query->fetch_assoc()){


$position=$row['description'];

$sql1 = "SELECT *  from  `candidaterequest` where id='$candidate' && positionid='$pos'";

$query1 = $conn->query($sql1);
while($row1 = $query1->fetch_assoc()){
?>
<!DOCTYPE html>

  <body>
    <a href="candidates.php" class="btn btn-danger" style="margin-right:50px">Back</a>
    <section class="section">
      <div class="section__container " style="display:flex;justify-content:center;align-items:center;width:90%;">
        <div class="content">
          
          <h1 class="title">
            This is <span style="text-transform:capitalize;"><?php echo $row1['name']?> <br /></span> a candidate for the position of <b style="text-transform:capitalize;"><?php echo $position?></b>
          </h1>
          
        
        </div>
        <div class="image">
          <img src="../images/<?php echo $row1['photo']?>" alt="profile" style="width:300px;border-radius: 50%;"/>
        </div>
      </div>
    </section>
    <section class="about" >
      <div class="section__container about__container" >
       
        <div class="about__content" style="display:flex;width:100%;justify-content:center;gap:10rem;margin-left:30px;margin-top:5rem">
          <div>
          <h2 class="section__title "><b>Biography</b></span></h2>
         
         <p class="about__details">
         <?php echo $row1['bio'];?>
         </p><br>
         <p>
         <?php echo $row1['additionalinfo'];?>
</p>
          </div>
          <div>
          <h2 class="section__title "><b>Experience</b></span></h2>
         
         <p class="about__details">
         <?php echo $row1['experience'];?>
         </p>
          </div>
     <div>
     <h2 class="section__title "><b>Why choose Me</b></span></h2>
         
         <p class="about__details">
         <?php echo $row1['whychooseme'];?>
         </p>
     </div>
          
         
        
        </div>
      </div>
    </section>
    
  </body>
</html>
<?php }}?>

    
    <?php
  
?>
</body>
</html>
