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
      
      <li class="nav-item dropdown">
          <a href="" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">FACULTIES
          </a>
          <div class="dropdown-menu dropdown-default " aria-labelledby="navbarDropdownMenuLink-333">
              <a class="dropdown-item" href="">one</a>
              <a class="dropdown-item" href="">one</a>
              <a class="dropdown-item" href="">one</a>
              <a class="dropdown-item" href="">one</a>
          </div>
      </li>
      <li class="nav-item dropdown">
          <a href="" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ADMISSION
          </a>
          <div class="dropdown-menu dropdown-default " aria-labelledby="navbarDropdownMenuLink-333">
              <a class="dropdown-item" href="">PROCEDURE</a>
              <a class="dropdown-item" href="./AEI.php">ENGINEERING</a>
              <a class="dropdown-item" href="./APId.php">PHARMACY</a>
              <a class="dropdown-item" href="">MANAGEMENT</a>
              <a class="dropdown-item" href="./ADI.php">DIPLOMA</a>
          </div>
      </li>
      <li class="nav-item dropdown">
          <a href="" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CAREER
            </a>
          <div class="dropdown-menu dropdown-default " aria-labelledby="navbarDropdownMenuLink-333">
              <a class="dropdown-item" href="">PLACEMENT CELL</a>
              <a class="dropdown-item" href="">PLACEMENT RECORDS</a>
              <a class="dropdown-item" href="">OUR MAJOR RECURITERS</a>
              <a class="dropdown-item" href="">INDUSTRIAL VISIT</a>
              <a class="dropdown-item" href="">JOB SEEKER</a>
          </div>
      </li>
      <li class="nav-item dropdown">
          <a href="" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">FACILITES
          </a>
          <div class="dropdown-menu dropdown-default " aria-labelledby="navbarDropdownMenuLink-333">
              <a class="dropdown-item" href="">SMART WIFI CAMPUS</a>    
              <a class="dropdown-item" href="">WELL EQUIPPED LABS</a>
              <a class="dropdown-item" href="">SMART CLASS ROOMS</a>
              <a class="dropdown-item" href="">PERSONALITY DEVELOPMENT CELL</a>
              <a class="dropdown-item" href="">LIBRARY</a>
              <a class="dropdown-item" href="">SPORTS</a>
              <a class="dropdown-item" href="">TRANSPORTAION</a>
              <a class="dropdown-item" href="">CAFETERIA</a>
          </div>
      </li>
      <li class="nav-item dropdown">
          <a href="" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACHIVEMENTS
          </a>
          <div class="dropdown-menu dropdown-default " aria-labelledby="navbarDropdownMenuLink-333">
              <a class="dropdown-item" href="">one</a>
              <a class="dropdown-item" href="">one</a>
              <a class="dropdown-item" href="">one</a>
              <a class="dropdown-item" href="">one</a>
          </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactus">Contact Us</a>
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
          <a class="dropdown-item" href="login.php">ADMIN LOGIN</a>
          <a class="dropdown-item" href="login.php">TEACHER LOGIN</a>
          <a class="dropdown-item" href="login.php">STUDENT LOGIN</a>
        </div>
        <?php } else { ?>   
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user mr-2"></i>Account
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-default"
          aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="login.php">ADMIN LOGIN</a>
          <a class="dropdown-item" href="login.php">TEACHER LOGIN</a>
          <a class="dropdown-item" href="login.php">STUDENT LOGIN</a>
        </div>
        <?php } ?>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->

<!-- Form -->
<section class="py-5 " style="background:linear-gradient(#2bbbad,transparent)">
    <div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 py-5 ">
                <i><h1 class="display-4 font-weight-bold ">ADMISSION OPEN FOR <br>2021-2022</h1></i>
                </div>
                <div class="col-lg-6 py-2 my-auto">
                    <!-- <div class="row"> -->
                    <div class=" mx-auto card">
                    <div class="card-body">
                    <h6>INQUIRY FORM</h6>
                    <form action="" method="post">
                    <div class="md-form">
                        <input type="text" id="form1" class="form-control">
                        <label for="form1">Name</label>
                    </div>
                    <div class="md-form">
                        <input type="email" id="email" class="form-control">
                        <label for="email">Email</label>
                    </div>
                    
                    <div class="md-form">
                        <input type="number" id="number" class="form-control">
                        <label for="number">Contact Number</label>
                    </div> 
                    <div class="md-form">
                        <label for="address">Yours Query</label><br>
                        <textarea type="text" id="address" class="form-control" rows="2">
                        </textarea>
                        
                    </div>
                     <button class="btn btn-dark btn-block">Submit Form</button>
                    </form>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Us -->
<section class="py-5 bg-light" id="aboutus" >
    <div class="container">
        <div class="row">
            <div class="col-lg-6 py-5">
                <h2 class="font-weight-bold">About Us <br>Collage Management System</h2>
                <div class="pr-5">
                    <p>College Management System is established to fulfill the demand of an ideal Technical, Pharmacy & Management program.

                    <b>CMS</b>, which has carved a special place rich in the field of education It is duly recognized by the Directorate of Technical Education,spread over a scenic campus of over 25 acres land.
                    </p>
                   
                    <p>The College is bestowed upon a beautiful natural surroundings, Ecofriendly atmosphere and highly conducive environment for quality education and all round development of our precious students.
                    </p>
                </div>
            </div>
            <div class="col-lg-6" >
            <img src="./img/pexels-meliani-driss-2982449.jpg" height=460px width=450px alt="">
            </div> 
            
        </div>
    </div>
</section>
<!-- Our Courses -->
<section class="py-5" id="courses">
    <div class="text-center mb-5">
        <h2 class="font-weight-bold">Our Courses</h2>
        
    </div>

    <div class="container text-center ">
        <div class="row">
            
            <div class="col-lg-3">
                <div class="card">
                    <div>
                        <img src="./img/istockphoto-1208892212-1024x1024.jpg" alt="" class="img-fluid rounded-top">
                    </div>
                    <div class="card-body">
                        <b>MBA</b>
                        <p class="card-text">
                            <b>Duration:</b>4 years<br>
                            <b>Price:</b> 20,000/- <br>
                        </p>
                        <button class="btn btn-block btn-primary btn-sm">Enroll</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div>
                        <img src="./img/pexels-alena-shekhovtcova-6075031.jpg" alt="" class="img-fluid rounded-top">
                    </div>
                    <div class="card-body">
                        <b>PHARMACY</b>
                        <p class="card-text">
                            <b>Duration:</b>4 years<br>
                            <b>Price:</b> 40,000/- <br>
                        </p>
                        <button class="btn btn-block btn-primary btn-sm">Enroll</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div>
                        <img src="./img/pexels-craig-adderley-2566121.jpg" alt="" class="img-fluid rounded-top">
                    </div>
                    <div class="card-body">
                        <b>POLYTECHNIC</b>
                        <p class="card-text">
                            <b>Duration:</b>4 years<br>
                            <b>Price:</b> 70,000/- <br>
                        </p>
                        <button class="btn btn-block btn-primary btn-sm">Enroll</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div>
                        <img src="./img/pexels-meliani-driss-2982449.jpg" alt="" class="img-fluid rounded-top">
                    </div>
                    <div class="card-body">
                        <b>B.TECH</b>
                        <p class="card-text">
                            <b>Duration:</b>4 years<br>
                            <b>Price:</b> 70,000/- <br>
                        </p>
                        <button class="btn btn-block btn-primary btn-sm">Enroll</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Teacher Section -->
<section class="py-5 bg-light" id="teacher">
    <div class="text-center mb-5">
        <h2 class="font-weight-bold">Our Teacher</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 my-5">
                <div class="card">
                    <div class="col7 position-absolute" style="top:-50px">
                        <img src="./img/user8-128x128.jpg" alt="" class="mw-100 border rounded-circle">
                    </div>
                    <div class="card-body pt-5 mt-4">
                        <h5 class="card-title">Sandeep</h5>
                        <p><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i></p>
                        <p class="card-text">
                            <b>Subject:Data <br> Structure</b>
                            
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 my-5">
                <div class="card">
                    <div class="col7 position-absolute" style="top:-50px">
                        <img src="./img/pexels-christina-morillo-1181424.jpg" alt="" class="mw-100 border rounded-circle">
                    </div>
                    <div class="card-body pt-5 mt-4">
                        <h5 class="card-title">Ruchi</h5>
                        <p><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i></p>
                        <p class="card-text">
                            <b>Subject:Computer <br> Organiztion</b>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 my-5">
                <div class="card">
                    <div class="col7 position-absolute" style="top:-50px">
                        <img src="./img/user4-128x128.jpg" alt="" class="mw-100 border rounded-circle">
                    </div>
                    <div class="card-body pt-5 mt-4">
                        <h5 class="card-title">Trupti</h5>
                        <p><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i></p>
                        <p class="card-text">
                            <b>Subject:Human Resource <br> Management</b> 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 my-5">
                <div class="card">
                    <div class="col7 position-absolute" style="top:-50px">
                        <img src="./img/pexels-andrea-piacquadio-774909.jpg" alt="" class="mw-100 border rounded-circle">
                    </div>
                    <div class="card-body pt-5 mt-4">
                        <h5 class="card-title">Erin</h5>
                        <p><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i></p>
                        <p class="card-text">
                            <b>Subject:Corporate <br> Finance </b>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 my-5">
                <div class="card">
                    <div class="col7 position-absolute" style="top:-50px">
                        <img src="./img/user1-128x128.jpg" alt="" class="mw-100 border rounded-circle">
                    </div>
                    <div class="card-body pt-5 mt-4">
                        <h5 class="card-title">Aristotle</h5>
                        <p><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i></p>
                        <p class="card-text">
                            <b>Subject:Software <br> Architecture </b> 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 my-5">
                <div class="card">
                    <div class="col7 position-absolute" style="top:-50px">
                        <img src="./img/user7-128x128.jpg" alt="" class="mw-100 border rounded-circle">
                    </div>
                    <div class="card-body pt-5 mt-4">
                        <h5 class="card-title">Hannah</h5>
                        <p><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i></p>
                        <p class="card-text">
                            <b>Subject:Basic Of <br>Computer Science</b>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 my-5">
                <div class="card">
                    <div class="col7 position-absolute" style="top:-50px">
                        <img src="./img/user3-128x128.jpg" alt="" class="mw-100 border rounded-circle">
                    </div>
                    <div class="card-body pt-5 mt-4">
                        <h5 class="card-title">Bryan</h5>
                        <p><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i></p>
                        <p class="card-text">
                            <b>Subject:Operating <br>System</b> 
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 my-5">
                <div class="card">
                    <div class="col7 position-absolute" style="top:-50px">
                        <img src="./img/user6-128x128.jpg" alt="" class="mw-100 border rounded-circle">
                    </div>
                    <div class="card-body pt-5 mt-4">
                        <h5 class="card-title">Prince</h5>
                        <p><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i></p>
                        <p class="card-text">
                            <b>Subject:Data Mining and <br>Warehousing</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Achivement -->
<section class="py-5 text-white" style="background:#6951c7" id="achivement">
    <div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pr-6 ">
                <h2 class="font-weight-bold ">ACHIVEMENT</h2>  
                
                <img src="./img/pexels-pavel-danilyuk-7944035.jpg" class="img-fluid py-3" alt=""
                >
                </div>
                <div class="col-lg-6 my-auto">
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <div class="border rounded">
                                <div class="card-body text-center">
                                    <span><i class="text-warning fas fa-graduation-cap fa-2x"></i></span>
                                    <h2 class="my-2 font weight-bold h1">78</h2>
                                    <hr class="border-warning">
                                    <h2>SPORTS</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="border rounded">
                                <div class="card-body text-center">
                                    <span><i class="text-warning fas fa-graduation-cap fa-2x"></i></span>
                                    <h2 class="my-2 font weight-bold h1">334</h2>
                                    <hr class="border-warning">
                                    <h2>VISITS</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="border rounded">
                                <div class="card-body text-center">
                                    <span><i class="text-warning fas fa-graduation-cap fa-2x"></i></span>
                                    <h2 class="my-2 font weight-bold h1">500+</h2>
                                    <hr class="border-warning">
                                    <h2>PLACEMENT</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="border rounded">
                                <div class="card-body text-center">
                                    <span><i class="text-warning fas fa-graduation-cap fa-2x"></i></span>
                                    <h2 class="my-2 font weight-bold h1">500</h2>
                                    <hr class="border-warning">
                                    <h2>TECH FEST</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What people say -->
<section class="py-5">
    <div class="text-center mb-5">
        <h2 class="font-weight-bold"><i>What People Says</i></h2>
        <p class="classtext-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas ea officia error dolorum commodi laudantium eligendi excepturi officiis vero mollitia.</p>
    </div>
    <div class="container">
        <div class="row">
        <div class="col-6">
            <div class="border rounded ">
                <div class="p-4 text-center">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, quidem repudiandae laudantium harum nisi quis eos at molestias libero maiores!
                </div>
            <i class="fa fa-quote-left fa-3x position-absolute" style="top:1rem; left:1rem; opacity:.2"></i>   
            </div>
            <div class="text-center mt-n3">
            <img src="./img/pexels-daniel-xavier-1239288.jpg" class="rounded-circle border" width="100" height="100" alt="">
            <h6 class="mb-0 font-weight-bold">Daniel</h6>
            <p><i>Student</i></p>
            </div>
        </div>
        <div class="col-6">
            <div class="border rounded ">
                <div class="p-4 text-center">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, quidem repudiandae laudantium harum nisi quis eos at molestias libero maiores!
                </div>
            <i class="fa fa-quote-left fa-3x position-absolute" style="top:1rem; left:1rem; opacity:.2"></i>   
            </div>
            <div class="text-center mt-n3">
            <img src="./img/pexels-godisable-jacob-718978.jpg" class="rounded-circle border" width="100" height="100" alt="">
            <h6 class="mb-0 font-weight-bold">Jacob</h6>
            <p><i>Student</i></p>
            </div>
        </div>
        </div>
    </div>
</section>

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