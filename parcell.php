<?php


$firstname = $_GET['firstname'];
echo("<h1 class='fs-2 fw-bold'>".'Welcome  '.$firstname.'</h1>');

?>













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




$customerid = 0;
$sql = "SELECT * FROM customers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $customerid = $customerid + 1;
  }
}
  

 echo($customerid);
 
 $customerid = $customerid + 1;
 
 
 
 


$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$state = $_GET['district'];
$city = $_GET['city'];
$phoneo = $_GET['phoneno'];
$password = $_GET['shtpass'];

$sql = "INSERT INTO customers ( customerid,firstname,lastname,state,city,phoneno,password)VALUES ($customerid , '$firstname', '$lastname', '$state' , '$city' , '$phoneo' ,'$password') ";         


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}





$conn->close();

?>













<head>
<link href="boots.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
  
  <img src='piz.png' style='width:100% ; margin-bottom:30px;'/>
  
  
  
  <form action = 'billl.php' method = 'GET' style = 'width:98%'>

  <?php
  echo("<input class='btn btn-primary' type = 'text' value = '".$customerid."' name  = 'customerid'>");

  ?>



<table  class="table table-striped" >
  <thead>
    <tr>
      <th scope="col">dish</th>
      <th scope="col">dish</th>
      <th scope="col">parcel</th>
      <th scope="col">dish</th>
      <th scope="col">price</th>
    </tr>
  </thead>
  <tbody>
    <tr>

      <th scope="row">1</th>
      <td><img src='allseasongulliverpizza.png' /></td>
      <td> <input   type="checkbox" name="food1" value='sht' class='form-check-input' style='width:50px;height:50px' required />  
      <label class="form-check-label" for="invalidCheck">
         buy
      </label>
      </td>
      <td class='fs-2 fw-bold'>All Season Gulliver Pizza</td>
      <td class='fs-2 fw-bold'>Rs.480.99</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><img src='bbqchickenclassicpizzalarge.png' /></td>
      <td> <input type="checkbox" name="food2" value='sht' class='form-check-input' style='width:50px;height:50px' />  
      <label class="form-check-label">
         buy
      </label>
    
      </td>
      <td class='fs-2 fw-bold'>bbq chicken classic pizza large</td>
      <td class='fs-2 fw-bold'> Rs.399.99</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><img src='chickenfajitapizza.png' /></td>
      <td> <input type="checkbox" name='food3' value='sht' class='form-check-input' style='width:50px;height:50px'/>  
      <label class="form-check-label" for="invalidCheck">
         buy
      </label>
      </td>
      <td class='fs-2 fw-bold'>chicken fajita pizza</td>
      <td class='fs-2 fw-bold'>Rs.499.99</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td><img src='margheritapizza.png' /></td>
      <td> <input type="checkbox" name='food4' value='sht' class='form-check-input' style='width:50px;height:50px'/>  
      <label class="form-check-label" for="invalidCheck">
         buy
      </label>
      </td>
      <td class='fs-2 fw-bold'>margherita pizza</td>
      <td class='fs-2 fw-bold'>Rs.299.99</td>
    </tr>
    
    <tr>
      <th scope="row">5</th>
      <td><img src='maxicanpizzatestbetter.png' /></td>
      <td> <input type="checkbox" name='food5' value='sht' class='form-check-input' style='width:50px;height:50px' /> 
      <label class="form-check-label" for="invalidCheck">
         buy
      </label>
      </td>
      <td class='fs-2 fw-bold'>maxican pizza test better</td>
      <td class='fs-2 fw-bold'>Rs.350.99</td>
    </tr>


  </tbody>
</table>

<input class="btn btn-primary  fw-bold" type = 'submit' value = 'place order' name  = 'submit'>





</form>



</body>