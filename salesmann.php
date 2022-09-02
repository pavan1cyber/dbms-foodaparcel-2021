


<link href="boots.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
crossorigin="anonymous">



<div class='fs-1 fw-bold' style='width:800px;margin:auto;'> thank for purchase </div>










<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "foodparcels";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


 


$customerid = $_GET['customerid'];
$cardno = $_GET['cardno'];
$ccv = $_GET['ccv'];
$expiredat = $_GET['expirydate'];


$sql = "INSERT INTO paytss(customerid,cardno,ccv,expiredat) VALUES ('$customerid','$cardno','$ccv','$expiredat');";         
$conn->query($sql);





$conn->close();

?>





<form action = 'customerr.php' method='GET'  
class="row g-3 needs-validation was-validated" style='width:800px;margin:auto'> 

  <div class="col-12">
    <button class="btn btn-primary fw-bold" name = 'submit' type="submit" value = 'submit'>purchace again</button>
  </div>
</form>


