<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
	================================================== -->
    <meta charset="utf-8">
    <title>Educenter - Education HTML Template</title>

    <!-- Mobile Specific Metas
	================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Educenter HTML Template v1.0">

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="plugins/slick/slick.css">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
    <!-- animation css -->
    <link rel="stylesheet" href="plugins/animate/animate.css">
    <!-- aos -->
    <link rel="stylesheet" href="plugins/aos/aos.css">
    <!-- venobox popup -->
    <link rel="stylesheet" href="plugins/venobox/venobox.css">

    <!-- Main Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

</head>

<body>
    <!-- preloader start -->
    <div class="preloader">
        <img src="images/preloader.gif" alt="preloader">
    </div>
    <!-- preloader end -->

    <!-- header -->
    <header class="fixed-top header">
        <!-- top header -->
        <div class="top-header py-2 bg-white">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-4 text-center text-lg-left">
                        <a class="text-color mr-3" href="tel:+(1800)555-5555"><strong>CALL</strong> +(1800)555-5555</a>
                        <ul class="list-inline d-inline">
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#!"><i class="ti-facebook"></i></a></li>
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#!"><i class="ti-twitter-alt"></i></a></li>
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#!"><i class="ti-github"></i></a></li>
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#!"><i class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-8 text-center text-lg-right">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#!">notice</a></li>
                            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#!">research</a></li>
                            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#!">SCHOLARSHIP</a></li>
                            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="login.php">login</a></li>
                            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#!">register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- navbar -->
        <div class="navigation w-100">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark p-0">
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
                    <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav ml-auto text-center">
                            <li class="nav-item @@home">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#!">About</a>
                            </li>
                            <li class="nav-item @@courses">
                                <a class="nav-link" href="#!">COURSES</a>
                            </li>
                            <li class="nav-item @@events">
                                <a class="nav-link" href="#!">EVENTS</a>
                            </li>
                            <li class="nav-item @@blog">
                                <a class="nav-link" href="#!">BLOG</a>
                            </li>
                            <li class="nav-item dropdown view">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pages
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#!">Teacher</a></li>
                                    <li><a class="dropdown-item" href="#!">Teacher Single</a></li>
                                    <li><a class="dropdown-item" href="#!">Notice</a></li>
                                    <li><a class="dropdown-item" href="#!">Notice Details</a></li>
                                    <li><a class="dropdown-item" href="#!">Research</a></li>
                                    <li><a class="dropdown-item" href="#!">Scholarship</a></li>
                                    <li><a class="dropdown-item" href="#!">Course Details</a></li>
                                    <li><a class="dropdown-item" href="#!">Event Details</a></li>
                                    <li><a class="dropdown-item" href="#!">Blog Details</a></li>

                                    <li class="dropdown-item dropdown dropleft">
                                        <a class="dropdown-toggle" href="#" id="navbarDropdownSubmenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Sub Menu
                                        </a>
                                        <ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdownSubmenu">
                                            <li><a class="dropdown-item" href="#!">Sub Menu 01</a></li>
                                            <li><a class="dropdown-item" href="#!">Sub Menu 02</a></li>
                                            <li><a class="dropdown-item" href="#!">Sub Menu 03</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item @@contact">
                                <a class="nav-link" href="#!">CONTACT</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- /header -->

    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content rounded-0 border-0 p-4">
                <div class="modal-header border-0">
                    <h3>Login</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" class="row">

                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="loginName" name="loginName" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- page title -->
    <section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb mb-2">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="index.php">Home</a></li>
                        <li class="list-inline-item text-white h3 font-secondary nasted">Sign Up</li>
                    </ul>
                    <p class="text-lighten mb-0">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!--register-->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card rounded-0 border-0 p-4">
                    <div class="card-header border-0">
                        <h3 class="text-center mb-4">Register</h3>
                    </div>
                    <div class="card-body">
                        <form action="register_process.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="signupName">First name</label>
                                        <input type="text" class="form-control" id="signupName" name="firstname" placeholder="Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="signupName">Last name</label>
                                        <input type="text" class="form-control" id="signupName" name="lastname" placeholder="Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="signupEmail">Email</label>
                                        <input type="email" class="form-control" id="signupEmail" name="email" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="signupPassword">Password</label>
                                        <input type="password" class="form-control" id="signupPassword" name="password" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="signupPasswordConfirm">Confirm Password</label>
                                        <input type="password" class="form-control" id="signupPasswordConfirm" name="passwordconfirm" placeholder="Confirm Password" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="signupPhoneNumber">Phone Number</label>
                                        <input type="tel" class="form-control" id="signupPhoneNumber" name="phone" placeholder="Phone Number" required>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="signupAddress">Address</label>
                                        <input type="text" class="form-control" id="signupAddress" name="address1" placeholder="Street Address" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="signupAddress2">Address 2</label>
                                        <input type="text" class="form-control" id="signupAddress2" name="address2" placeholder="Apartment, suite, unit, etc. (optional)">
                                    </div>
                                    <div class="form-group">
                                        <label for="signupCity">City</label>
                                        <input type="text" class="form-control" id="signupCity" name="city" placeholder="City" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="signupState">State</label>
                                        <select class="form-control" id="signupState" name="state" required>
                                            <option value="" selected disabled>Select State</option>
                                            <?php
                                            $states = array(
                                                "AL" => "Alabama", "AK" => "Alaska", "AZ" => "Arizona", "AR" => "Arkansas", "CA" => "California",
                                                "CO" => "Colorado", "CT" => "Connecticut", "DE" => "Delaware", "DC" => "District Of Columbia", "FL" => "Florida",
                                                "GA" => "Georgia", "HI" => "Hawaii", "ID" => "Idaho", "IL" => "Illinois", "IN" => "Indiana",
                                                "IA" => "Iowa", "KS" => "Kansas", "KY" => "Kentucky", "LA" => "Louisiana", "ME" => "Maine",
                                                "MD" => "Maryland", "MA" => "Massachusetts", "MI" => "Michigan", "MN" => "Minnesota", "MS" => "Mississippi",
                                                "MO" => "Missouri", "MT" => "Montana", "NE" => "Nebraska", "NV" => "Nevada", "NH" => "New Hampshire",
                                                "NJ" => "New Jersey", "NM" => "New Mexico", "NY" => "New York", "NC" => "North Carolina", "ND" => "North Dakota",
                                                "OH" => "Ohio", "OK" => "Oklahoma", "OR" => "Oregon", "PA" => "Pennsylvania", "RI" => "Rhode Island",
                                                "SC" => "South Carolina", "SD" => "South Dakota", "TN" => "Tennessee", "TX" => "Texas", "UT" => "Utah",
                                                "VT" => "Vermont", "VA" => "Virginia", "WA" => "Washington", "WV" => "West Virginia", "WI" => "Wisconsin",
                                                "WY" => "Wyoming"
                                            );

                                            foreach ($states as $abbr => $state) {
                                                echo "<option value='$abbr'>$state</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="signupPostalCode">postalcode</label>
                                        <input type="text" class="form-control" id="signupPostalCode" name="postalcode" placeholder="Postal Code" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select class="form-control" id="signupGender" name="gender" required>
                                            <option value="" selected disabled>Select Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <!-- "I agree" radio button -->
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="agree" name="agree" required>
                                    <label class="form-check-label" for="agree">I agree to the terms and conditions</label>
                                </div>
                            </div>
                        
                            <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--/register-->
    <!-- footer -->
    <footer>
        <!-- newsletter -->
        <div class="newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 ml-auto bg-primary py-5 newsletter-block">
                        <h3 class="text-white">Subscribe Now</h3>
                        <form action="#">
                            <div class="input-wrapper">
                                <input type="email" class="form-control border-0" id="newsletter" name="newsletter" placeholder="Enter Your Email...">
                                <button type="submit" value="send" class="btn btn-primary">Join</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer content -->
        <div class="footer bg-footer section border-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
                        <!-- logo -->
                        <a class="logo-footer" href="index.php"><img class="img-fluid mb-4" src="images/logo.png" alt="logo"></a>
                        <ul class="list-unstyled">
                            <li class="mb-2">23621 15 Mile Rd #C104, Clinton MI, 48035, New York, USA</li>
                            <li class="mb-2">+1 (2) 345 6789</li>
                            <li class="mb-2">+1 (2) 345 6789</li>
                            <li class="mb-2">contact@yourdomain.com</li>
                        </ul>
                    </div>
                    <!-- company -->
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                        <h4 class="text-white mb-5">COMPANY</h4>
                        <ul class="list-unstyled">
                            <li class="mb-3"><a class="text-color" href="about.html">About Us</a></li>
                            <li class="mb-3"><a class="text-color" href="teacher.html">Our Teacher</a></li>
                            <li class="mb-3"><a class="text-color" href="contact.html">Contact</a></li>
                            <li class="mb-3"><a class="text-color" href="blog.html">Blog</a></li>
                        </ul>
                    </div>
                    <!-- links -->
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                        <h4 class="text-white mb-5">LINKS</h4>
                        <ul class="list-unstyled">
                            <li class="mb-3"><a class="text-color" href="courses.html">Courses</a></li>
                            <li class="mb-3"><a class="text-color" href="events.html">Events</a></li>
                            <li class="mb-3"><a class="text-color" href="notice.html">Notice</a></li>
                            <li class="mb-3"><a class="text-color" href="scholarship.html">Scholarship</a></li>
                        </ul>
                    </div>
                    <!-- support -->
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                        <h4 class="text-white mb-5">SUPPORT</h4>
                        <ul class="list-unstyled">
                            <li class="mb-3"><a class="text-color" href="https://themefisher.com/blog">Forums</a></li>
                            <li class="mb-3"><a class="text-color" href="https://docs.themefisher.com/">Documentation</a></li>
                            <li class="mb-3"><a class="text-color" href="#!">Language</a></li>
                            <li class="mb-3"><a class="text-color" href="#!">Release Status</a></li>
                        </ul>
                    </div>
                    <!-- support -->
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                        <h4 class="text-white mb-5">RECOMMEND</h4>
                        <ul class="list-unstyled">
                            <li class="mb-3"><a class="text-color" href="https://themefisher.com/">WordPress</a></li>
                            <li class="mb-3"><a class="text-color" href="https://themefisher.com/">LearnPress</a></li>
                            <li class="mb-3"><a class="text-color" href="https://themefisher.com/">WooCommerce</a></li>
                            <li class="mb-3"><a class="text-color" href="https://themefisher.com/">bbPress</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- copyright -->
        <div class="copyright py-4 bg-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 text-sm-left text-center">
                        <p class="mb-0">Copyright &copy;
                            <script>
                                var CurrentYear = new Date().getFullYear()
                                document.write(CurrentYear)
                            </script>
                            , designed & developed by <a href="https://themefisher.com/" class="text-muted">Themefisher</a>
                        </p>
                    </div>
                    <div class="col-sm-5 text-sm-right text-center">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://facebook.com/themefisher/"><i class="ti-facebook text-primary"></i></a></li>
                            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://twitter.com/themefisher"><i class="ti-twitter-alt text-primary"></i></a></li>
                            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://github.com/themefisher"><i class="ti-github text-primary"></i></a></li>
                            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://instagram.com/themefisher/"><i class="ti-instagram text-primary"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /footer -->

    <!-- jQuery -->
    <script src="plugins/jQuery/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="plugins/slick/slick.min.js"></script>
    <!-- aos -->
    <script src="plugins/aos/aos.js"></script>
    <!-- venobox popup -->
    <script src="plugins/venobox/venobox.min.js"></script>
    <!-- filter -->
    <script src="plugins/filterizr/jquery.filterizr.min.js"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
    <script src="plugins/google-map/gmap.js"></script>

    <!-- Main Script -->
    <script src="js/script.js"></script>


</body>

</html>