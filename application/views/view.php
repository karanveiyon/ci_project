
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
       <div class=""><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#contact_modal" >Create Record</button></div> 
    </div><br>
        <?php 
            $validation_errors = $this->session->flashdata('validation_errors');
            if ($validation_errors) {
                echo '<div class="alert alert-danger">' . $validation_errors . '</div>';
            }
        ?>
    <br>
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
                    <button data-id="<?php echo $contact->id;?>" class="btn btn-warning form_btn" data-bs-toggle="modal" data-bs-target="#contact_modal" >Edit</button>&nbsp;
                    <a href="<?php echo base_url('view/deleteContact/'.$contact->id);?>">                   
                    <button class="btn btn-danger">Delete</button>
                    </a>
                </td>
            </tr>

            <?php }?>
        </tbody>
    </table>
    <br>
    <a href="<?php echo base_url('view/print_pdf');?>"><button class="btn btn-success">Download as PDF</button></a>
    <a href="<?php echo base_url('index');?>"><button class="btn btn-primary">Back</button></a>
    </div>
    <!-- 
    <div class="modal fade"  data-bs-backdrop="static" id="createRecordModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <h1 class="modal-title text-center fs-3" id="exampleModalLabel">Create Contact Form</h1>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">

    <form action="<?php echo base_url('view/insert_data'); ?>" method="post">
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
    </div>
    <div class="modal-footer">
    <button class="btn btn-success" type="submit" name="submit">Add Data</button>
    </form>
    <a href="">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </a>
    </div>
    </div>
    </div>
    </div> -->
    <!-- create and edit Modal -->
    <div class="modal fade"  data-bs-backdrop="static" id="contact_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Contact</h1>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
    <form id="edit_form" action="<?php echo base_url('view/insert_and_edit_data');?>" method="post">
    <div class="input-group mb-3 d-none">
    <span class="input-group-text" id="id">Id</span> 
    <input type="text" name="id" id="id" class="form-control" placeholder="id" aria-label="Username" aria-describedby="basic-addon1" hidden>
    </div>
    <br>
    <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">Name</span> 
    <input type="text" name="name" id="" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1" >
    </div>
    <br>
    <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">Email</span>
    <input type="email" name="email" id="email" class="form-control" placeholder="E-mail" aria-label="Username" aria-describedby="basic-addon1" >
    </div>
    <br>
    <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1">Phone</span>
    <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number" aria-label="Username" aria-describedby="basic-addon1" >
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>    
<script>
    $(document).ready(function(){
        $('#datatable').DataTable();
    });
    $(document).ready(function()
    {
        $(document).on('click','.form_btn',function()
        {
            var id = $(this).data("id");
            $.ajax({
            url: '<?php echo base_url('view/get_data_id');?>',
            method: 'post', 
            data: {
                    id:id
            },
            dataType: 'json', 
            success: function(response) {
            console.log(response);
            $('#edit_form').find('[name="id"]').val(response.id);
            $('#edit_form').find('[name="name"]').val(response.name);
            $('#edit_form').find('[name="email"]').val(response.email);
            $('#edit_form').find('[name="phone"]').val(response.phone);
            },
            error: function(xhr, status, error) {
            
            console.error('Error:', status, error);
            }
            });
        })
    });
</script>
<?php include('footer.php');?>