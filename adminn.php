<head>
<link href="boots.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>





<div class='fs-1 fw-bold' style='width:1100px;border-bottom:3px solid black;margin : auto;'> Admin page for customers parcell  </div>
<br>
<br>
<br>

<form action='adminnn.php' style='width:1100px;margin : auto;'; method='GET'>
<table  class="table table-striped" >
  <thead>
    <tr>
      <th scope="col">customerid</th>
      <th scope="col">customername</th>
      <th scope="col">adress</th>
      <th scope="col">parcell</th>
      <th scope="col">phoneno</th>
      <th scope="col">parcelprice</th>
      <th scope="col">payed</th>
    </tr>
  </thead>
  <tbody>



















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


 
$sql = "SELECT * FROM customers cu  ORDER BY cu.customerid DESC";
$result = $conn->query($sql);

$sqlsht = "SELECT * FROM parcels pa  ORDER BY pa.customerid DESC";
$resultsht = $conn->query($sqlsht);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    $rowsht = $resultsht->fetch_assoc();
    echo("  <tr>
    <th scope='row'>".$row['customerid']."</th>
    <td class='fs-5 fw-bold'>".$row['firstname']."</td>
    <td class='fs-5 fw-bold'>".$row['city']."</td>
    <td> <input type='checkbox' name='food5' value='sht' class='form-check-input' style='width:50px;height:50px' /> 
    <label class='form-check-label'>
       parcell
    </label>
    </td>
    <td class='fs-6 fw-bold'>".$row['phoneno']."</td>
    <td class='fs-6 fw-bold'>Rs.".$rowsht['price'].".99</td>
    <td class='fs-5 fw-bold'>payed</td>
  </tr>");


  }
}


?>





  </tbody>
</table>


<br>
<br>

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
  <div class="col-12">
    <button class="btn btn-primary" name = 'submit' type="submit" value = 'submit'>parcel to customers</button>
  </div>

  
</form>