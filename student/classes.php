<?php include('../assets/includes/config.php')?>
<?php include('header.php')?>
<?php include('sidebar.php')?>

<?php 
     if(isset($_POST['submit']))
     {
        $title =$_POST['title'];
        $sections = implode(',',$_POST['section']);
        $added_date = date('Y-m-d');
        mysqli_query($db_conn,"INSERT INTO classes (title,section,added_date) VALUE ('$title','$sections','$added_date')") or die('DB Error');
     }
?>


<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 ">Manage Classes</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Classes</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <?php 
        if (isset($_REQUEST['action'])){ ?>
            <div class="card">
            <div class="card-header py-2">
                <h3 class="card-title">
                    Add New Class
                </h3>
            </div>
            <div class="card-body">
            <div class="table-responsive">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="tile">Title</label>
                    <input type="text" name="title" placeholder="Title" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="tile">Section</label>
                    <?php
                    $query = mysqli_query($db_conn,'SELECT * FROM sections');
                    $count = 1;
                    while ($sections = mysqli_fetch_object($query)) { ?>
                   <div>
                   <label for="<?=$count?>">
                    <input type="checkbox"  id="<?=$count?>" value="<?=$sections->id?>" name="section[]" placeholder="Section">
                    <?=$sections->title?>
                    </label>
                   </div>
                    <?php 
                    $count++;
                    } ?>
                </div>

                <button name="submit" class="btn btn-success">
                    Submit
                </button>
            </form>
            </div>
        </div>
        <?php } else {?>

        <!-- Info boxes -->
        <div class="card">
            <div class="card-header py-2">
                <h3 class="card-title">
                    Classes
                </h3>
               
            </div>
            <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>S.NO</th>
                        <th>Name</th>
                        <th>Sections</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                                    <?php
                                    $count = 1;
                                    $cla_query = mysqli_query($db_conn,'SELECT * FROM classes');
                                    while($class = mysqli_fetch_object($cla_query)) {?>
                                    <tr>
                                        <td><?=$count++?></td>
                                        <td><?=$class->title++?></td>
                                        <td>
                                            <?php
                                                $sections = explode(',',$class->section);
                                                foreach($sections as $section) {
                                                    $sec_query = mysqli_query($db_conn,'SELECT * FROM sections WHERE id = '.$section.'');
                                                    $sec = mysqli_fetch_object($sec_query);
                                                    echo $sec->title .'<br>';
                                                }
                                            ?>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
            </table>
            </div>
        </div>
        <?php } ?>
        </div>
        <!--/. container-fluid -->
</section>
<!-- /.content -->
<?php include('footer.php')?>