<?php defined('BASEPATH') OR exit('No direct script access allowed');
include('header.php');
?>

<div class="container mt-5">    
    <div align="center" class="container-fluid col-md-6"><h3>PHP Mailer</h3>
 </div>
<div class="container col-md-6">
    <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">From</span>
  <input type="text" class="form-control" placeholder="example@domain.com" aria-label="" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">To</span>
  <input type="text" class="form-control" placeholder="example@domain.com" aria-label="" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Subject</span>
  <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
</div>
<div class="input-group">
  <span class="input-group-text">Body</span>
  <textarea class="form-control" aria-label="With textarea"></textarea>
</div>

<div class="row mt-3">
    <div class="container col-md-6"><button class="btn btn-success">Send Mail</button></div>
    <div class="container col-md-6"><button class="btn btn-danger">Reset form</button></div>
</div>
</div>
</div>
<?php include('footer.php');?>