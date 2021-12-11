<?php include('../assets/includes/config.php')?>
<?php include('header.php')?>
<?php include('sidebar.php')?>

<?php 
     if(isset($_POST['submit']))
     {
         $title =$_POST['title'];
         mysqli_query($db_conn,"INSERT INTO subjects(title) VALUE ('$title')") or die('asdf');
     }
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 ">Manage Subjects</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">subjects</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header py-2">
                        <h3 class="card-title">
                            Subjects
                        </h3>
                        
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>S.NO</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <?php
                                    $count = 1;
                                    $query = mysqli_query($db_conn,'SELECT * FROM subjects');
                                    while($section = mysqli_fetch_object($query)) {?>
                                    <tr>
                                        <td><?=$count++?></td>
                                        <td><?=$section->title++?></td>
                                        <td></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header py-2">
                        <h3 class="card-title">
                            Add New Sections
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="tile">Title</label>
                                    <input type="text" name="title" placeholder="Title" required class="form-control">
                                </div>
                                

                                <button name="submit" class="btn btn-success">
                                    Submit
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
</section>
<!-- /.content -->
<?php include('footer.php')?>