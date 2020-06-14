<?php 
require 'connection.php';


$bloodgroup= $_POST['blood-group'];
$location=$_POST['location'];
$city=$_POST['city'];


$sql = 'SELECT * FROM donar where bloodgroup = "'. $bloodgroup . '" and location = "'.$location.'" and city= "'.$city.'"';
$result = mysqli_query($mysqli, $sql);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" />
    <title>Search Result</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/respond.css">

    <link rel="shortcut icon" href="Logo.png">
</head>
<body style="background-color:#fc0a12;">
    <div class ="save-blood">
        <img  alt="NOimagefound" src="images/bloodtree.png" align ="center"><br><br>
      
        <h1>YOUR MATCHES</h1>
      
        <table  class="table table-bordered">
            <tr>
              <th>S.No</th>
              <th>Name</th>
              <th>Bloodgroup</th>
              <th>PH.No</th>
            </tr>
            <tr>
           <?php 
           $i=0;
            while( $i<$row = mysqli_fetch_assoc($result)) {  $i++;  ?>
           
              <td><?php echo $i; ?></td>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['bloodgroup']; ?></td>
              <td><?php echo $row['mobile']; ?></td>
              <!--Added City-->
              <td><?php echo $row['city']; ?></td>
            </tr>
           
           <?php  }
mysqli_close($mysqli);
?>
          </table> 
    </div>
</body>
</html>

<?php
