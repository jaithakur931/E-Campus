<?php include('../assets/includes/config.php')?>
<?php include('header.php')?>
<?php include('sidebar.php')?>

<?php 
     if(isset($_POST['submit']))
     {  
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $category = $_POST['category'];
        $duration = $_POST['duration'];
        $today = date('Y-m-d');
 
        $_SESSION['success_msg'] = 'User Has been succesfully registered'; 
        mysqli_query($db_conn,"INSERT INTO courses (`name`,`subject` ,`category`, `duration`, `date`) VALUES ('$name', '$subject', '$category', '$duration', '$today')");
     }
?>


<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 ">Manage Courses</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Courses</li>
                </ol>
            </div>
            <?php
                if(isset($_SESSION['success_msg']))
                {?>
                    <div class="col-12">
                        <small class="text-success" style="font-size:16px"><?=$_SESSION['success_msg']?></small>
                    </div>
                <?php
                    unset($_SESSION['success_msg']);
                }
            ?>
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
                    Add New Course
                </h3>
            </div>
            <div class="card-body">
            <div class="table-responsive">
            <form action="" method="POST">
                <div class="form-group">
                <label for="name">Courses Category</label>
                    <select name="category" id="category" class="form-control" >
                        <option value="">Select Category</option>
                        <option value="B.TECH">B.TECH</option>
                        <option value="MBA">MBA</option>
                        <option value="Polytechnic">POLYTECHNIC</option>
                        <option value="Pharmcy">PHARMACY</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Courses Name</label>
                    <input type="text" name="name" id="name" placeholder="Course Title" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Subject</label>
                    <input type="text" name="subject" id="subject" placeholder="Subject" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Courses Duration</label>
                    <input type="text" name="duration" id="duration" placeholder="Subject Name" required class="form-control">
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
                    Courses
                </h3>
                <div class="card-tools">
                    <a href="?action=add-new" class="btn btn-success btn-sm"><i class="fa fa-plus mr-2"></i>Add New</a>
                </div>
            </div>
            <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>S.NO</th>
                        
                        <th>Category</th>
                        <th>Name</th>
                        <th>Subject</th>
                        <th>Duration</th>
                        <th>Add Date</th>
                    </tr>
                </thead>
                <tbody>
                                    <?php
                                    $count = 1;
                                    $course_query = mysqli_query($db_conn,'SELECT * FROM courses');
                                    while($course = mysqli_fetch_object($course_query)) {?>
                                    <tr>
                                        <td><?=$count++?></td>
                                        
                                        <td><?=$course->category?></td>
                                        <td><?=$course->name?></td>
                                        <td><?=$course->subject?></td>
                                        <td><?=$course->duration?></td>
                                        <td><?=$course->date?></td>
                                        
                                        
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