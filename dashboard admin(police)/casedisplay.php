<?php 
SESSION_start();
 $id=$_SESSION['id'];
 $sid=$_SESSION['sid'];
 $image1="";
  //echo"<script>alert($id)</script>"; to check value of id
  if(isset($_SESSION['id']) && isset($_SESSION['fname']) && isset($_SESSION['lname']) && isset($_SESSION['lname'])){
    include "connection.php";  
    $sql = "SELECT * from police_registration WHERE police_id='$id' ";
    $result = $conn->query($sql);
 
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
     
        $image1=$row["image"]; 
      }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Crime Reports</title>
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
        <a href="#" class="navbar-brand mx-4 mb-3">
          <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Home</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
          <div class="position-relative">
          <img class="rounded-circle"  src="http://localhost/crime_reporting/dashboard%20admin(police)/image/<?php echo $image1;?>" id="output" style="width: 40px; height: 40px;" onerror="this.style.display='none'"/>
             
            <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
          </div>
          <div class="ms-3">
            <h6 class="mb-0"><?php echo $_SESSION['fname'] ?> <?php echo $_SESSION['lname'] ?></h6><!-- user-->
            <span></span><!-- user-->
          </div>
        </div>
        <div class="navbar-nav w-100">
          <a href="dashboard.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
          <!--<div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
            <div class="dropdown-menu bg-transparent border-0">
              <a href="button.html" class="dropdown-item">Buttons</a>
              <a href="typography.html" class="dropdown-item">Typography</a>
              <a href="element.html" class="dropdown-item">Other Elements</a>
            </div>
          </div>-->
          <!--<a href="widget.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>-->
          <!-- <a href="blog.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Blog/News </a> -->
          <!-- <a href="blogpost.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Blog Post</a> -->
          <a href="Criminal_deets.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Criminal detail</a>
          <a href="casedisplay.php" class="nav-item nav-link active"><i class="fa fa-chart-bar me-2"></i>Your Cases</a>
          <!--<a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>-->
         <!-- <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>-->
          <!-- <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
            <div class="dropdown-menu bg-transparent border-0">
              <a href="signin.html" class="dropdown-item">Sign In</a>
              <a href="signup.html" class="dropdown-item">Sign Up</a>
              <a href="404.html" class="dropdown-item">404 Error</a>
              <a href="blank.html" class="dropdown-item">Blank Page</a>
            </div>
          </div> -->
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
                  <img class="rounded-circle" src="image/Leonardo.jpg" alt="" style="width: 40px; height: 40px;">
                  <div class="ms-2">
                    <h6 class="fw-normal mb-0">leo sent you a message</h6>
                    <small>15 minutes ago</small>
                  </div>
                </div>
              </a>
              <hr class="dropdown-divider">
              <a href="#" class="dropdown-item">
                <div class="d-flex align-items-center">
                  <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">

                  <div class="ms-2">
                    <h6 class="fw-normal mb-0">leo sent you a message</h6>
                    <small>16 minutes ago</small>
                  </div>
                </div>
              </a>
              <hr class="dropdown-divider">
              <a href="#" class="dropdown-item">
                <div class="d-flex align-items-center">
                  <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                  <div class="ms-2">
                    <h6 class="fw-normal mb-0">Stan sent you a message</h6>
                    <small>17 minutes ago</small>
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
              <span class="d-none d-lg-inline-flex">Notification</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
              <a href="#" class="dropdown-item">
                <h6 class="fw-normal mb-0">Report sent</h6>
                <small>30 seconds ago</small>
              </a>

              <hr class="dropdown-divider">
              <a href="#" class="dropdown-item">
                <h6 class="fw-normal mb-0">Profile updated</h6>
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
              <img class="rounded-circle me-lg-2" src="http://localhost/crime_reporting/dashboard%20admin(police)/image/<?php echo $image1;?>" alt="" style="width: 40px; height: 40px;">
              <span class="d-none d-lg-inline-flex"><?php echo $_SESSION['username']?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
              <a href="Profile.php" class="dropdown-item">My Profile</a>
              <a href="#" class="dropdown-item">Settings</a>
              <a href="logout.php" class="dropdown-item">Log Out</a>
            </div>
          </div>
        </div>
      </nav>
      <!-- Navbar End -->


      <!-- Sale & Revenue Start
      <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
          <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
              <i class="fa fa-chart-line fa-3x text-primary"></i>
              <div class="ms-3">
                <p class="mb-2">Today </p>
                <h6 class="mb-0">$1234</h6>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
              <i class="fa fa-chart-bar fa-3x text-primary"></i>
              <div class="ms-3">
                <p class="mb-2">Total Sale</p>
                <h6 class="mb-0">$1234</h6>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
              <i class="fa fa-chart-area fa-3x text-primary"></i>
              <div class="ms-3">
                <p class="mb-2">Today Revenue</p>
                <h6 class="mb-0">$1234</h6>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
              <i class="fa fa-chart-pie fa-3x text-primary"></i>
              <div class="ms-3">
                <p class="mb-2">Total Revenue</p>
                <h6 class="mb-0">$1234</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
       Sale & Revenue End   -->



      <!-- Sales Chart Start
      <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
          <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary text-center rounded p-4">
              <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Reports</h6>
                <a href="">Show All</a>
              </div>
              <canvas id="worldwide-sales"></canvas>
            </div>
          </div>
          <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary text-center rounded p-4">
              <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Salse & Revenue</h6>
                <a href="">Show All</a>
              </div>
              <canvas id="salse-revenue"></canvas>
            </div>
          </div>
        </div>
      </div>
       Sales Chart End -->



      <!-- Recent Sales Start -->
      <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary text-center rounded p-4">
          <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Report History</h6>
            <a href="">Show All</a>
          </div>
          
          <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">

              <thead>
                <tr class="text-white">
                  <th scope="col">ID</th>
                  <th scope="col">Crime Place</th>
                  <th scope="col">Crime Type</th>
                  <th scope="col">Crime Evidence</th>
                  <th scope="col">Date</th>
                  <th scope="col">View</th>
                  <!--    <th scope="col">Action</th>-->
                </tr>
              </thead>
              <tbody>
              <?php 
                $sql="SELECT * FROM investigation_details join user_complaints on investigation_details.complaint_id= user_complaints.complaint_id where investigation_details.police_id='$id'";
                $result=mysqli_query($conn,$sql);
                while ($data = mysqli_fetch_assoc($result)) {
              ?>
                <tr>
                  <th scope="row"><?php echo $data['complaint_id']?></th>
                  <td><?php echo $data['crime_place'];?></td>
                  <td><?php echo $data['crime_type'];?></td>
                  <td> <?php echo $data['crime_evidence'];?></td>
                  <td><?php echo $data['date_col'];?></td>
                  <td><a href="yourcase.php?csid=<?php echo $data['complaint_id'];?>"><button name="submit" class="btn btn-success">View</button></a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!--   Recent Sales End -->






      <!-- Footer Start -->
      
      <!-- Footer End -->
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
<?php
}
  
else{
  echo "error";
}
?>