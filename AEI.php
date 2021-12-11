<?php include('header.php')?>

<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">
  <a class="navbar-brand" href="#">CMS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="./index.php">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutus">About Us</a>
      </li>
      
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light">
          <i class="fab fa-facebook"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light">
          <i class="fab fa-google-plus-g"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
          <?php if(isset($_SESSION['login'])) { ?>
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user mr-2"></i>Account
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-default"
          aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="./admin/dashboard.php">Dashboard</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <a class="dropdown-item" href="./logout.php">Logout</a>
        </div>
            <?php } else { ?>   
        <a href="login.php" class="nav-link"><i class="fa fa-user mr-2"></i>login</a>
        <?php } ?>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->

<div class="d-flex " style="">
    <div class="container-fluid ">
    <h1 class="display-4 font-weight-bold text-center">Engineering</h1><h2 class="text-center">Admission To B.E Courses</h2>
    <hr>
    <h4>-> Admission to the B.E. course is as per the guidelines laid down by the DTE and through :
        <br>
        <br>
        -> JEE Mains. Reservation in the seats of Counseling is as per the Govt. Norms:
    </h4>
<table class="table table-bordered " >
  <thead>
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col" class="text-center">BRANCHES</th>
      <th scope="col">SEATS</th>
      <th scope="col">DURATION</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td class="text-center">Computer Science Engineering</td>
      <td>120</td>
      <td>4 YEARS</td>
    
    </tr>
    <tr>
      <th scope="row">2</th>
      <td class="text-center">Electric and Electronics Engineering</td>
      <td>60</td>
      <td>4 YEARS</td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td class="text-center">Electronics and Communication Engineering</td>
      <td>120</td>
      <td>4 YEARS</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td class="text-center">Information Technology</td>
      <td>60</td>
      <td>4 YEARS</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td class="text-center">Mechanical Engineering</td>
      <td>120</td>
      <td>4 YEARS</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td class="text-center">Civil Engineering</td>
      <td>120</td>
      <td>4 YEARS</td>
    </tr>
  </tbody>
</table>

<div class="container-fluid ">
    <h1 class="display-8 font-weight-bold text-left">PROCEDURE</h1>
    <hr>
    <h4 class="text-left"><b>Bachelor Of Engineering(B.E)</b></h4>
    <hr>
    <h5>Eligibility For Admission</h5>
    <ol>
        <li>The Candidate should be an Indian National</li>
        <li>Educational Qualifications
            <ul>
                <li>The candidate should have passed 12th class with Physics and Maths as main subjects & any one from Chemistry/Bio-technology/Biology.</li>
                <li>The Candidate should have passed with 45% aggregate marks in the above three subjects(40 % marks for SC/ST/OBC other than creamy layer ).
                </li>
                <li>Candidate should have appeared in JEE/12th class</li>
            </ul>
        </li>
    </ol>
    <h5>Documents Required for Bachelor of Engineering (B.E.)</h5>
    <ol>
        <li>Copy of Marksheet of 10th & 12th Class</li>
        <li>JEE(Main) Marksheet (Copy)
        <li>TC ,  Character Certificate and Migration Certificate (original Copy)</li>
        <li> M.P. Domicile Certificate</li>
        <li>Caste (SC/ST/OBC)</li>
        <li>Aadhar card and Samagra ID</li>
        <li>Latest Income Certificate (SC/ST/OBC) </li>
        <li>Gap Certificate (if applicable)</li>
        <li>Seven (7) passport size photographs</li>
    </ol>
</div>
</div>
</div>

<!-- Footer -->
<footer style="background:url(./img/pexels-splitshire-1526.jpg) center/cover no-repeat">
    <div class="py-4 text-white" style="background:">
    <div class="py-4 text-white" style="background:">
        <div class="cointainer-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <h5>Support</h5>
                    <ul class="fa-ul ml-4">
                        <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>Our Blog</a></li>
                        <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>Career</a></li>
                        <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>Terms & Conditions</a></li>
                        <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>FAQ</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5>Social Presence</h5>
                    <div>
                        <span class="fa-stack">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x fa-inverse text-dark"></i>
                        </span>
                        <span class="fa-stack">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fab fa-instagram fa-stack-1x fa-inverse text-dark"></i>
                        </span>
                        <span class="fa-stack">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fab fa-twitter fa-stack-1x fa-inverse text-dark"></i>
                        </span>
                        <span class="fa-stack">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fab fa-linkedin fa-stack-1x fa-inverse text-dark"></i>
                        </span>
                        <span class="fa-stack">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fab fa-youtube fa-stack-1x fa-inverse text-dark"></i>
                        </span>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h5>Subscribe Now</h5>
                    <form action="">
                        <div class="form-group">
                            <input type="email" id="email" class="form-control" placeholder="Your Email">
                        </div>
                        <button class="btn btn-secondary  btn-block">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>

<section class="py-2 text-light" style="background:#463d3a">
    <div class="container-fluid">
        Copyright 2020-2021 @ All Right Reserved. <a href="#" class="text-light">College Management System</a>
    </div>
</section>

<?php include('footer.php') ?>