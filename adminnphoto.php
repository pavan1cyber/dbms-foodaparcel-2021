







<!--?php
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

$sql = "INSERT INTO customers ( customerid,firstname,lastname,state,city,phoneno)VALUES ($customerid , '$firstname', '$lastname', '$state' , '$city' , '$phoneo') ";         


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}





$conn->close();

?-->











<head>
<link href="boots.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>


  
  <img src='piz.png' style='width:100% ; margin-bottom:30px;'/>
  
  

  <div class='fs-2 fw-bold' style='width:800px;margin:auto;border-bottom:3px solid black'> Online Food Ordering system admim register </div>
<br>


  
  <form action = 'adminnpass.php' method = 'GET' style = 'width:98%'>




<table  class="table table-striped" >
  <thead>
    <tr>
      <th scope="col">usn</th>
      <th scope="col">photo</th>
      <th scope="col">login</th>
      <th scope="col">names</th>
      <th scope="col"> </th>
    </tr>
  </thead>
  <tbody>

  <tr>

    <th scope="row">1AY19CS069</th>
    <td ><img src='adminna.png' width='136px' /></td>

    <td><input class="btn btn-primary  fw-bold" type = 'submit' value = 'pavan' name  = 'submit'></td>
    <td class='fs-2 fw-bold'>pavan k</td>
    <td class='fs-2 fw-bold'> </td>
    </tr>


    <tr>

      <th scope="row">1AY19CS087</th>
      <td ><img src='adminnsd.jpg' width='136px' /></td>

      <td><input class="btn btn-primary  fw-bold" type = 'submit' value = 'rohit' name  = 'submit'></td>
      <td class='fs-2 fw-bold'>rohit d</td>
      <td class='fs-2 fw-bold'> </td>
    </tr>


  </tbody>
</table>





</form>



