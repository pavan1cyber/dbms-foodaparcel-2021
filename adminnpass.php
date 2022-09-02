


<link href="boots.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
crossorigin="anonymous">



<?php
$firstname = $_GET['submit'];
echo("<div class='fs-1 fw-bold' style='width:800px;margin:auto;border-bottom:3px solid black'> admin pass Welcome 

".$firstname."</div>");

?>


<form action = 'adminn.php' method='GET'  
class="row g-3 needs-validation was-validated" style='width:800px;margin:auto'>

<?php
echo(
  "<div class='col-md-4'>
    <label class='form-label'>user name</label>
    <input type='text' class='form-control' id='validationCustom01' value='".$firstname."'
    name = 'firstname' pattern='^".$firstname."' required>
    <div class='valid-feedback'>
      
    </div>
  </div>");

?>

  
  <div class="form-group">
            Password<input type="password" id="pwdId" class="form-control" name ='password' pattern='^password' required>
            <div class="valid-feedback">Valid</div>
            <div class="invalid-feedback">a to z only (3 to 9 long)</div>
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
  <div class="col-12">
    <button class="btn btn-primary" name = 'submit' type="submit" value = 'submit'>login</button>
  </div>
</form>
