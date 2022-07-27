<?php 
SESSION_start();
$RaceErr="";
$SkinErr="";
$hairErr="";
$heightErr="";
$weightErr="";
$ageErr="";
$nameErr = "";  
$dateErr = "";  
$genderErr = "";  
$casenoErr = "";  
$mobileErr="";
$addressErr="";
$crimeDErr="";
$l_Err="";
$f_Err="";
$name = "";  
$f_name="";
$l_name="";
$date = "";  
$gender = "";  
$comment = "";  
$caseno = "";  
$mobile="";
$address="";
$age="";
$height="";
$weight="";
$hair="";
$crimeD="";
$Race="";
$Skin="";
$image="";
$no=0;
 
include ("DB_pull.php");

   
   ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Criminal details form</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                       <!-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>-->
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="button.html" class="dropdown-item">Buttons</a>
                            <a href="typography.html" class="dropdown-item">Typography</a>
                            <a href="element.html" class="dropdown-item">Other Elements</a>
                        </div>
                    </div>
                  <!--  <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>-->
                    <a href="blog.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Blog/News</a>
                    <a href="#" class="nav-item nav-link active"><i class="fa fa-keyboard me-2"></i> Criminal detail</a>
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">John Doe</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="Profile.php" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="login/logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
            <?php  
                  
                  if ($_SERVER["REQUEST_METHOD"] == "POST") {  
                  if (empty($_POST["f_name"])) {  
                    $f_Err = "Name Field is required";  
                  } else {  
                    $f_name = test_input($_POST["f_name"]);  
                      
                    if (!preg_match("/^[a-zA-Z-' ]*$/",$f_name)) {  
                      $f_Err = "Only letters and white space allowed";  
                    }  
                  }  
                    if (empty($_POST["l_name"])) {  
                      $l_Err = "Name Field is required";  
                    } else {  
                        
                      $l_name = test_input($_POST["l_name"]);  
                      if (!preg_match("/^[a-zA-Z-' ]*$/",$l_name)) {  
                        $l_Err = "Only letters and white space allowed";  
                      }  
                    }  
                    if (empty($_POST["email"])) {  
                    $dateErr = "date field is required";  
                  } else {  
                    $date = test_input($_POST["date"]);  
                    if (empty($_POST["date"])) {  
                        $dateErr = "date-feild is required";  
                      }
                  }  
//race check
                if (empty($_POST["Race"])) {  
                    $RaceErr = "Race is required";  
                } else {  
                    $Race = test_input($_POST["Race"]);  
                    
                    if (!preg_match("/^[a-zA-Z-' ]*$/",$Race)) {  
                    $RaceErr = "Only letters and white space allowed";  
                    }  
                }  
//Skin check    
                if (empty($_POST["Skin"])) {  
                    $SkinErr = "Skin color is required";  
                } else {  
                    $Skin = test_input($_POST["Skin"]);  
                    
                    if (!preg_match("/^[a-zA-Z-' ]*$/",$Skin)) {  
                    $SkinErr = "Only letters and white space allowed";  
                    }  
                }  

//case no error check
                  if (empty($_POST["caseno"])) {  
                    $casenoErr = "case no is required";  
                  } 
                  if (empty($_POST["caseno"])) {  
                    $caseno = "";  
                  } else {  
                    $caseno = test_input($_POST["caseno"]);  
                    if (preg_match("/^[a-zA-Z-' ]*$/",$caseno)) {  
                      $casenoErr = "Invalid number";  
                    }  
                  }  
//age check
                  if (empty($_POST["age"])) {  
                    $ageErr = "age is required";  
                  } 
                  if (empty($_POST["age"])) {  
                    $age = "";  
                  } else {  
                    $age = test_input($_POST["age"]);  
                    if (preg_match("/^[a-zA-Z-' ]*$/",$age)) {  
                      $ageErr = "Invalid number";  
                    }  
                  }  
//weight check                  
                  if (empty($_POST["weight"])) {  
                    $weightErr = "weight is required";  
                  } 
                  if (empty($_POST["weight"])) {  
                    $weight = "";  
                  } else {  
                    $weight = test_input($_POST["weight"]);  
                    if (preg_match("/^[a-zA-Z-' ]*$/",$weight)) {  
                      $weightErr = "Invalid number";  
                    }  
                  }  
//height check
                if (empty($_POST["height"])) {  
                    $heightErr = "height is required";  
                } 
                if (empty($_POST["height"])) {  
                    $height = "";  
                } else {  
                    $height = test_input($_POST["height"]);  
                    if (preg_match("/^[a-zA-Z-' ]*$/",$height)) {  
                    $heightErr = "Invalid number";  
                    }  
                }  
//mobile no error check
                  if (empty($_POST["mobile"])) {  
                    $mobileErr = "Mobile no is required";  
                  } 
                  if (empty($_POST["mobile"])) {  
                    $mobile = "";  
                  } else {  
                    $mobile = test_input($_POST["mobile"]);  
                    if (!preg_match( '/^(\+1|001)?\(?([0-9]{3})\)?([ .-]?)([0-9]{3})([ .-]?)([0-9]{4})/' ,$mobile)) {  
                      $mobileErr = "Invalid mobile no";  
                    }  
                  } 
                  
//comment check description checkas well
                  if (empty($_POST["comment"])) {  
                    $comment = "";  
                  } else {  
                    $comment = test_input($_POST["comment"]);  
                  }  
//hair type check
                if (empty($_POST["hair"])) {  
                    $hairErr = "hair is required";  
                } else {  
                    $hair = test_input($_POST["hair"]);  
                }  
                
 //gender check                 
                  if (empty($_POST["gender"])) {  
                    $genderErr = "Gender is required";  
                  } else {  
                    $gender = test_input($_POST["gender"]);  
                  }  
//crime description check
                if (empty($_POST["crimeD"])) {  
                    $crimeDErr = "Description is required";  
                } else {  
                    $crimeD = test_input($_POST["crimeD"]);  
                    
                    //if (!preg_match("/^[a-zA-Z-' ]*$/",$crimeD)) {  
                    //$f_Err = "Only letters and white space allowed";  
                   // }  
                }  
//address check
                  if (empty($_POST["address"])) {  
                    $addressErr = "Address is required";  
                  }else {  
                    $address = test_input($_POST["address"]);  
                  }  
                 }  
                function test_input($data) {  
                  $data = trim($data);  
                  $data = stripslashes($data);  
                  $data = htmlspecialchars($data);  
                  return $data; 
                }  
            ?>
                        


                <div class="container-fluid pt-4 px-4">
                    <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Criminal details</h6>
                                <a href="">Show All</a>
                            </div>
                            <div class="table-responsive">
                            <table class="table text-start align-middle table-bordered table-hover mb-0">
                                <thead>
                                    <tr class="text-white">
                                
                                    <th scope="col">Date</th>
                                    <th scope="col">Criminal Name</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Descritpion</th>
                                    

                                    
                                    <!--    <th scope="col">Action</th>-->
                                    </tr>
                                </thead>
                                <?php
                                            if(is_array($fetchData)){      
                                            $sn=1;
                                            foreach($fetchData as $data){
                                            ?>
                                <tbody>
                                    <tr>
                                        
                                    <td><?php echo ++$no;?> July 2022</td>
                                    
                                    <td><a href= "Criminal_details_form.php?id=<?php echo $data['criminal_name'] ;?>"> <?php echo $data['criminal_name']??'';?></a></td>
                                    <td><a href= "Criminal_details_form.php?id=<?php echo $data['criminal_name'] ;?>"> <?php echo $data['gender']??'';?></a></td>
                                    <td><a href= "Criminal_details_form.php?id=<?php echo $data['criminal_name'] ;?>"> <?php echo $data['age']??'';?></a></td>
                                    <td><a href= "Criminal_details_form.php?id=<?php echo $data['criminal_name'] ;?>"> <?php echo $data['description']??'';?></a></td>
                                    
                                    
                                    </tr>
                                </tbody>
                        
                                <?php
                            
                                $sn++;}} 
                                ?>
                                
                                
                            </table>
                        </div>
                </div>
      <!--   Recent Sales End 
                <div class="container-fluid pt-4 px-4">
                    <div class="row g-4">
                        <div class="col-sm-12 col-xl-6">
                            <div class="bg-secondary rounded h-100 p-4">
                                <h2 class="mb-4">Criminal Details </h2>
                                <form>
                                <div class="mb-3">
                                <h4 class="mb-4">Image : </h4>
                                        <?php echo "<img src= '$image'/>";?>
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Criminal name :</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" value ="<?php echo $name;?>"
                                            aria-describedby="emailHelp">
                                        
                                    </div>
                                    <hr>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Age :</label>
                                        <input type="text" class="form-control" id="exampleInput    1" value ="<?php echo $age;?>">
                                    </div>
                                    <hr>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Height :</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" value ="<?php echo $height;?>">
                                    </div>
                                    <hr>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Weight :</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" value ="<?php echo $weight;?>">
                                    </div>
                                    <hr>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Gender :</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" value ="<?php echo $gender;?>">
                                    </div>
                                    <hr>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Hair type :</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" value ="<?php echo $hair;?>">
                                    </div>
                                    <hr>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Skin color :</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" value ="<?php echo $Skin;?>">
                                    </div>
                                    <hr>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Race :</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" value ="<?php echo $Race;?>">
                                    </div>
                                    <hr>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Description :</label>
                                        <textarea class="form-control" placeholder="Description" id="floatingTextarea" name ="crimeD" style="height: 150px;"  ><?php echo $crimeD;?></textarea>
                                    </div>
                                    <hr>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Records :</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" value ="<?php echo $caseno;?>">
                                    </div>
                                    <hr>
                                    
                                </form>
                            </div>
                    </div>  -->

                    <!-- Footer Start 
      <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary rounded-top p-4">
          <div class="row">

            <div class="col-12 col-sm-6 text-center text-sm-start">
              &copy; <a href="#">Scelus-nunitare</a>, All Right Reserved.
            </div>
            <div class="col-12 col-sm-6 text-center text-sm-end">-->
              <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->


          <!--    Designed By <a href="#">Group-NNAS</a>
              <br>
              Distributed by: <a href="#" target="_blank">NNAS</a>


            </div>
          </div>
        </div>
      </div>
       Footer End -->
    </div>
    <!-- Content End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

  </div>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/chart/chart.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/tempusdominus/js/moment.min.js"></script>
  <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>