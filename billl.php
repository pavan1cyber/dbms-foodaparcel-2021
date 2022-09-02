







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





$bill = 0;
if(isset($_GET['food1']))
{
   $bill = $bill + 480;
   $sql = "INSERT INTO reserves (dish,parcelid)VALUES ('food1' , $customerid) ";         

   $conn->query($sql);

}
if(isset($_GET['food2']))
{
  $bill = $bill + 399;
  $sql = "INSERT INTO reserves (dish,parcelid)VALUES ('food2' , $customerid) ";         

  $conn->query($sql);


}
if(isset($_GET['food3']))
{
  $bill = $bill + 499;
  $sql = "INSERT INTO reserves (dish,parcelid)VALUES ('food3' , $customerid) ";         

  $conn->query($sql);


}
if(isset($_GET['food4']))
{
  $bill = $bill + 299;
  $sql = "INSERT INTO reserves (dish,parcelid)VALUES ('food4' , $customerid) ";         

  $conn->query($sql);


}
if(isset($_GET['food5']))
{
  $bill = $bill + 350;
  $sql = "INSERT INTO reserves (dish,parcelid)VALUES ('food5' , $customerid) ";         

  $conn->query($sql);


}


$sql = "INSERT INTO parcels (parcelid,customerid,price)VALUES ($customerid,$customerid,$bill) ";         
$conn->query($sql);




$sql="SELECT price FROM parcels WHERE customerid=$customerid";
$result = $conn->query($sql);


$arrayResult = mysqli_fetch_array($result);

$billa = $arrayResult['price'] - 100;
echo("<div class='fs-3 fw-bold' style='width:800px;margin:auto;border-bottom:3px solid black'>parcel fee = Rs.'".$billa."' </div>");
echo("<div class='fs-3 fw-bold' style='width:800px;margin:auto;border-bottom:3px solid black'>delivery fee = Rs.100.99 </div>");
echo("<div class='fs-3 fw-bold' style='width:800px;margin:auto;border-bottom:3px solid black'>gst fee = Rs.0 </div>");
echo("<div class='fs-2 fw-bold' style='width:800px;margin:auto;border-bottom:3px solid black'>Total price with gst =Rs.'".$arrayResult['price']."'.99 </div>");


$conn->close();

?>










<div class='fs-2 fw-bold' style='width:800px;margin:auto;border-bottom:3px solid black'> Online Food Ordering system Bill details </div>




<link href="boots.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
crossorigin="anonymous">



<div style='width:100%;height:100%;background-image: url(shtbill.jpg);position:absolute;z-index:-2;opacity:0.4;background-repeat: 

no-repeat;background-size: cover;' ></div>


<form action = 'salesmann.php' method='GET'  
class="row g-4 needs-validation was-validated" style='width:800px;margin:auto'>
  <div class="col-md-8">
    <label class="form-label">card name</label>
    <input type="text" class="form-control" id="validationCustom01" value='firstname'
    name = 'cardname' required>
    <div class="valid-feedback">
      
    </div>
  </div>
  <div class="col-md-8">
    <label class="form-label">card no</label>
    <input type="text" class="form-control" id="validationCustom02" value='3243-5465-4354-4354-345'
    name = 'cardno' required>
    <div class="valid-feedback">
      
    </div>
  </div>


  <div class="col-md-3">
    <label class="form-label">ccv</label>
    <input type="text" class="form-control" pattern = '[0-9]{3}'
    name = 'ccv' required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>

  
  
  
  
    <div class="col-md-8">
    <label class="form-label">expiry date</label>
    <input type="date" class="form-control" 
    name = 'expirydate'  required="">
    <div class="invalid-feedback">
      Please provide a valid phoneno.
    </div>
  </div>
  
  
  
  
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" 
       required="">
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>

  
  <?php
  echo("<input class='form-check-input' type='text' value='".$customerid."'  name='customerid' >");

  ?>
  

  <div class="col-12">
    <button class="btn btn-primary fw-bold" name = 'submit' type="submit" value = 'submit'>PAY NOW</button>
  </div>
</form>