<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include('header.php');?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<div class="container mt-5">    
    <div class="container-fluid col-md-6">
    <h1 class="text-center fs-3">Contact Form</h1>
    <form action="<?php echo base_url('index/insert_data'); ?>" method="post">
    <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">Name</span>
    <input type="text" name="name" id="" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <br>
    <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">Email</span>
    <input type="email" name="email" id="" class="form-control" placeholder="E-mail" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <br>
    <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">Phone</span>
    <input type="text" name="phone" id="" class="form-control" placeholder="Phone Number" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <br>
    <button class="btn btn-success" type="submit" name="submit">Add Data</button>
    </form><br>
    <a href="<?php echo base_url('view');?>"><button  class="btn btn-primary" name ="view">View Records</button></a>
    </div>
</div>

<?php include('footer.php');?>