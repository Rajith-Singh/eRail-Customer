<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>eRail: An Automated Solution for Railway Conceptual Modernization and Expansion System </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <!-- Favicon -->
    <link href="favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<Style>
p {
  text-indent: 50px;
  text-align: justify;
  letter-spacing: 3px;
}
h2 {
  text-align: center;
  text-transform: uppercase;
  color: #4CAF50;
}
.centeralign{text-align: center;}
.kk{
  border: 1px solid black;
  padding: 25px 50px 75px 100px;
  text-color: solid black;
  /* background-color: lightblue; */
}

.rating {
  display: inline-block;
}

.rating input[type="radio"] {
  display: none;
}

.rating label {
  font-size: 30px;
  color: #ccc;
  cursor: pointer;
}

.rating label:before {
  content: "\2605"; /* Unicode character for a star */
}

.rating input[type="radio"]:checked ~ label {
  color: gold; /* Change to your desired filled star color */
}

/* Style the dropdown container */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Style the dropdown button */
.dropbtn {
  background-color: #f1f1f1;
  padding: 10px;
  border: none;
  cursor: pointer;
}

/* Style the dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Style the dropdown links */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

  /* Style for the dropdown button */
  .dropdown select {
    width: 100%;
    padding: 10px;
    border: 1px solid #E5E5E5;
    border-radius: 5px 5px 5px 5px;
    box-shadow: 0 0 10px #E8E8E8 inset;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: #fff;
    appearance: none; /* Remove default styling on some browsers */
    cursor: pointer;
  }

  /* Style for dropdown options */
  .dropdown select option {
    padding: 10px;
  }

/* Reset some default styling */
body, h1, p {
    margin: 0;
    padding: 0;
}

/* Style the icon container */
.icon-container {
    position: relative;
    display: inline-block;
    margin: 20px;
}

/* Style the clickable icon */
.clickable-icon {
    display: block;
    width: 50px;
    height: 50px;
    background-color: #f0f0f0;
    border-radius: 50%;
    text-align: center;
    line-height: 50px;
    text-decoration: none;
    position: absolute;
    top: 0;
    left: 0;
}


.button5 {border-radius: 50%;}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

</Style>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <!-- Header Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 bg-secondary d-none d-lg-block">
                <a href="" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 display-3 text-primary">eRail</h1>
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row bg-dark d-none d-lg-flex">
                    <div class="col-lg-7 text-left text-white">
                        <div class="h-100 d-inline-flex align-items-center border-right border-primary py-2 px-3">
                            <i class="fa fa-envelope text-primary mr-2"></i>
                            <small>gmr@railway.gov.lk</small>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2 px-2">
                            <i class="fa fa-phone-alt text-primary mr-2"></i>
                            <small>+94 11 4 600 111</small>
                        </div>
                    </div>
                    <div class="col-lg-5 text-right">
                        <div class="d-inline-flex align-items-center pr-2">
                            <a class="text-primary p-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-primary p-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-primary p-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-primary p-2" href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="text-primary p-2" href="">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
                    <a href="" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 display-4 text-primary">eRail</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.html" class="nav-item nav-link active">Home</a>
                            <a href="about.html" class="nav-item nav-link">About</a>
                            <a href="service.html" class="nav-item nav-link">Service</a>
                            <a href="project.html" class="nav-item nav-link">Project</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="blog.html" class="dropdown-item">Latest Blog</a>
                                    <a href="single.html" class="dropdown-item">Blog Detail</a>
                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link">Contact</a>
                        </div>
                        <a href="" class="btn btn-primary mr-3 d-none d-lg-block">Get A Quote</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->







    <br><br>
<center>
<h2>Tell us, how was your stay?
</h2>

<form action="process_form.php" method="post">
    <center>
<label for="field2">How would you rate your experience?</label><br>
<div class="rating">
  <input type="radio" name="rating" id="star5" value="5"><label for="star5"></label>
  <input type="radio" name="rating" id="star4" value="4"><label for="star4"></label>
  <input type="radio" name="rating" id="star3" value="3"><label for="star3"></label>
  <input type="radio" name="rating" id="star2" value="2"><label for="star2"></label>
  <input type="radio" name="rating" id="star1" value="1"><label for="star1"></label>
</div>
<br><br>

       
<div class="dropdown">
<label for="field2">How would you rate your experience?</label><br>

    <select>
      <option value="option1">Option 1</option>
      <option value="option2">Option 2</option>
      <option value="option3">Option 3</option>
      <option value="option4">Option 4</option>
    </select>
  </div>

       <br><br>
       <label for="field3">Who did you go with?</label>
       <div class="dropdown">

    <select>
      <option value="option1">Family</option>
      <option value="option2">Friends</option>
      <option value="option3">Solo</option>
      <option value="option4">Couple</option>
    </select>
  </div>
  <br><br>
  <label for="field4">Write your review</label><br>
  <input type="text" id="field4" name="field4"><br><br>

  <button type="submit" class="button button4">Add your review</button>
  
</center>

    </form>


</center>















    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 mt-n3 display-4 text-primary">eRail</h1>
                </a>
                <p>An Automated Solution for Railway Conceptual Modernization and Expansion System</p>
                <h5 class="font-weight-semi-bold text-white mb-2">Revolutionizing Railways</h5>
                <img src="/img/eRail_Logo.png" class="logo" width="80px" height="80px"> &nbsp &nbsp
                <img src="/img/Sri_Lanka_Railway_logo.png" class="logo" width="80px" height="80px"> &nbsp &nbsp
                <img src="/img/team_logo.png" class="logo" width="80px" height="80px"> &nbsp &nbsp

            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Get In Touch</h4>
                <p><i class="fa fa-map-marker-alt text-primary mr-2"></i>P.O. Box 355, <br> Railway Head Quarters, <br> Maradana, Colombo 10</p>
                <p><i class="fa fa-phone-alt text-primary mr-2"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope text-primary mr-2"></i>gmr@railway.gov.lk</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Projects</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Newsletter</h4>
                <p>Rebum labore lorem dolores kasd est, et ipsum amet et at kasd, ipsum sea tempor magna tempor. Accu kasd sed ea duo ipsum.</p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-0" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: #3E3E4E !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a href="#">eRail</a>. All Rights Reserved. Designed by ZEALOTS
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Help</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->




    <!-- Back to Top -->
    <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>