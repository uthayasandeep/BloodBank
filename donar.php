<?php 
session_start();
require 'connection.php';
// print_r($_POST);

$name = $_POST['name'];
$bloodgroup= $_POST['blood-group'];
$dateofbirth= $_POST['date'];
$age= $_POST['age'];
$weight= $_POST['weight'];
$location=$_POST['location'];
$city=$_POST['city'];
$address= $_POST['address'];
$mobilenumber= $_POST['mobile-number'];


$check='select mobile from donar where mobile='.$_POST['mobile-number'];
$result = $mysqli->query($check);
$checkrows=mysqli_num_rows($result);

    if($checkrows == 0) {
        $sql = "INSERT INTO donar (name, bloodgroup, date,age,weight, location, city,address,mobile)
        VALUES ('$name','$bloodgroup','$dateofbirth', '$age',  '$weight', '$location', '$city','$address','$mobilenumber')";
        
        if ($mysqli->query($sql) === TRUE) {
            header('location: Thankyou.html');
        }
         else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;die;
        }
   }
   else{
           $_SESSION["error"] = "PHONE NUMBER ALREADY EXISTS";
        header('location: log.php');
   }

?>
