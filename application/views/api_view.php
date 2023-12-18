<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include('header.php');?>


<div class="container mt-5">    
    <div class="container-fluid col-md-6">
    <h1 class="text-center fs-3">API Page</h1>
    <div class="mt-3">
    <ul>
        <li> <a href="<?php echo base_url().'api/getApi/';?>">Test API Link</a></li>
        <li><a href="<?php echo base_url().'api/getEmployee/';?>">Get Employee Data API</a></li>
    </ul>
    </div>
    </div>
</div>

<?php include('footer.php');?>