<?php
include("header.html");

include("dbConnect.php");

$sql = "SELECT *  from  `positions` group by priority DESC";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$rs =  $stmt->fetchAll();




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
.btn-special-2 {
    padding: 12px 24px;
    background-color: white;
    color: hsl(243, 80%, 62%);
    border-radius: 6px;
    border: 2px hsl(243, 80%, 62%) solid;
    transition: transform 250ms ease-in-out;
}

.btn-special-2:hover {
    transform: scale(1.10);
}

.btn-special-2:active {
    transform: scale(.9);
}
#footersection{
    margin-top:80px;
}

    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h2 class="h2_1">Select Voting Position</h2>
            <?php foreach($rs as $row){?>
            <div class="col-md-12">
            <a href="insert_Candidates.php?id=<?php echo $row['id']?>"><button style="margin-top:50px;" class="btn-special-2"><?php echo $row['description']?></button></a>
            </div>
            <?php }?>
            </div>
           
        </div>
    </div>

    
</body>
</html>
<?php
include("footer.html");
?>