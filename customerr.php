


<div class='fs-2 fw-bold' style='width:800px;margin:auto;border-bottom:3px solid black'> Online Food Ordering system customer register </div>



<link href="boots.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
crossorigin="anonymous">


<div style='width:100%;height:100%;background-image: url(shtbill.jpg);position:absolute;z-index:-2;opacity:0.1;background-repeat: 

no-repeat;background-size: cover;' ></div>


<form action = 'parcell.php' method='GET'  
class="row g-3 needs-validation was-validated" style='width:800px;margin:auto'>
  <div class="col-md-4">
    <label class="form-label">First name</label>
    <input type="text" class="form-control" id="validationCustom01" value="pavan" 
    name = 'firstname' required>
    <div class="valid-feedback">
      
    </div>
  </div>
  <div class="col-md-4">
    <label class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationCustom02" value="k" 
    name = 'lastname' required>
    <div class="valid-feedback">
      
    </div>
  </div>


  <div class="col-md-6">
    <label class="form-label">City</label>
    <input type="text" class="form-control" 
    name = 'city' required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-3">
    <label lass="form-label">state</label>
    <select class="form-select"  name = 'district' required>
      <option selected="" disabled="" value="">Choose...</option>
      <option>karnataka</option>
      <option>maharastra</option>
      <option>goa</option>
      
    </select>
    <div class="invalid-feedback">
      Please select a valid state
    </div>
  </div>
  
  
  
  <div class="col-md-3">
    <label class="form-label">Zip</label>
    <input type="text" class="form-control" 
    name = 'zip' required=""  pattern = '[0-9]{6}'>
    <div class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>
  
    <div class="col-md-12">
    <label class="form-label">phoneno</label>
    <input type="text" class="form-control" 
    name = 'phoneno' required="" pattern = '[0-9]{10}'>
    <div class="invalid-feedback">
      Please provide a valid phoneno.
    </div>
  </div>
  

  <div class="col-md-5">
    <label class="form-label">customer password</label>
    <input type="password" class="form-control" 
    name = 'shtpass' required="" pattern = '.{5,}'>
    <div class="invalid-feedback">
      Please provide a valid password.
    </div>
  </div>
  
  <div class="col-md-5">
    <label class="form-label">confirm password</label>
    <input type="password" class="form-control" 
     required="" pattern = '.{5,}'>
    <div class="invalid-feedback">
       Please provide confirm password.
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
  <div class="col-12">
    <button class="btn btn-primary fw-bold" name = 'submit' type="submit" value = 'submit'>login</button>
  </div>
</form>





<div class='fs-3 fw-bold' style='width:800px;margin:32px auto 10px auto;border-top:3px solid black;'> DBMS MiniProject 18CSL55 </div>
<div class='fs-6 fw-bold' style='width:800px;margin:auto'> 1AY19CS069  </div>
<br>
<div class='fs-3 fw-bold' style='width:800px;margin:auto'> PAVAN K </div>





