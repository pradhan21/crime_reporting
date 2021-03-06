<?php include_once "header.php";?>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h5 class="text-primary"><i class="fa fa-user-edit me-2"></i>Crime Reporting</h5>
                            </a>
                            <h3>Sign Up</h3>
                        </div>
                        <form method="POST" action="registerhandle.php">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="fname" id="floatingText" placeholder="First Name" required>
                                <label for="floatingText">First Name</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" name="lname"id="floatingText" placeholder="Last Name"required>
                                <label for="floatingText">Last Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com"required>
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control"name="username" id="floatingText" placeholder="Username"required>
                                <label for="floatingText">Username</label>
                            </div>
                            
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control"name="password" id="floatingPassword" placeholder="Password"required>
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control"name="id" id="floatingText" placeholder="000-0000-000000"required>
                                <label for="floatingText">Citizenship Id/Passwport Id</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control"name="city" id="floatingText" placeholder="Kathmandu"required>
                                <label for="floatingText">City</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control"name="address" id="floatingText" placeholder="Tahachal, Kathmandu"required>
                                <label for="floatingText">Address</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control"name="station" id="floatingText" placeholder="Kalimati Police Station"required>
                                <label for="floatingText">Nearest Police station</label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <a href="">Forgot Password</a>
                            </div>
                            <button type="submit" name="Submit" value="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                        </form>
                        <p class="text-center mb-0">Already have an Account? <a href="login.php">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
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