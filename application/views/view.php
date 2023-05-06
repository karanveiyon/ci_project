
<?php defined('BASEPATH') OR exit('No direct script access allowed');
include('header.php');
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5 p-2">
    <h2 class="text-center fs-3">CRUD Page</h2><br>
    <div class="col-md-12" style=" display:flex; flex-direction: row; align-items:center; justify-content:space-between;"> 
       <div class=""><span class="text-center fs-3"><?php echo $title; ?></span> </div>
       <div class=""><button class="btn btn-primary">Create Record</button></div> 
    </div><br>
    <table class="table table-secondary table-hover" id="datatable">
        <thead>
        <tr>
            <td>S.No</td>
            <td>Name</td>
            <td>E-mail</td>
            <td>Phone</td>
            <td>Edit</td>
        </tr>
        </thead>
        <tbody>
            <?php foreach($contacts as $contact) {?>
            <tr>
                <td><?php echo $contact->id;?></td>
                <td><?php echo $contact->name;?></td>
                <td><?php echo $contact->email;?></td>
                <td><?php echo $contact->phone;?></td>
                <td>
                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $contact->id;?>" >Edit</button>&nbsp;
                    <a href="<?php echo base_url('view/deleteContact/'.$contact->id);?>">                   
                    <button class="btn btn-danger">Delete</button>
                    </a>
                </td>
            </tr>
                        <!-- Modal -->
                        <div class="modal fade"  data-bs-backdrop="static" id="editModal<?php echo $contact->id;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Contact Form</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <form action="<?php echo base_url('view/editContact/'.$contact->id);?>" method="post">
                        <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Id</span> 
                        <input type="text" name="id" id="" class="form-control" placeholder="id" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $contact->id;?>">
                        </div>
                        <br>
                        <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Name</span> 
                        <input type="text" name="name" id="" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $contact->name;?>">
                        </div>
                        <br>
                        <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Email</span>
                        <input type="email" name="email" id="" class="form-control" placeholder="E-mail" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $contact->email;?>">
                        </div>
                        <br>
                        <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Phone</span>
                        <input type="text" name="phone" id="" class="form-control" placeholder="Phone Number" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $contact->phone;?>">
                        </div>
                        </div>
                        <div class="modal-footer">
                        <button class="btn btn-success" type="submit" name="submit">Update Data</button>
                        </form>
                        <a href="">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </a>
                        </div>
                        </div>
                        </div>
                        </div>
            <?php }?>
        </tbody>
    </table>
    <br>
    <a href="<?php echo base_url('index');?>"><button class="btn btn-primary">Back</button></a>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>    
<script>
    $(document).ready(function(){
        $('#datatable').DataTable();
    });
</script>
<?php include('footer.php');?>