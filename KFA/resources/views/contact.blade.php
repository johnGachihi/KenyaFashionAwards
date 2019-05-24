<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Mona - Model Agency HTML5 Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Kenya Fashion Awards</title>

  <!-- Favicon -->
  <link rel="icon" href="./img/core-img/favicon.ico">

  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="./css/style2.css">

</head>

<body>
  <!-- Preloader -->
  <div id="preloader">
    <div class="wrapper">
      <div class="cssload-loader"></div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area">
    <!-- Main Header Start -->
    <div class="main-header-area">
      <div class="classy-nav-container breakpoint-off">
        <!-- Classy Menu -->
        <nav class="classy-navbar justify-content-between" id="monaNav">

          <!-- Background Curve -->
          <div class="bg-curve" style="background-image: url(./img/core-img/choice.png);"></div>

          <!-- Logo -->
          <a class="nav-brand" href="index.php"><img src="./img/core-img/logo.png" alt=""></a>

          <!-- Navbar Toggler -->
          <div class="classy-navbar-toggler">
            <span class="navbarToggler"><span></span><span></span><span></span></span>
          </div>

          <!-- Menu -->
          <div class="classy-menu">
            <!-- Menu Close Button -->
            <div class="classycloseIcon">
              <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
            </div>

            <!-- Nav Start -->
            <div class="classynav">
              <ul id="nav">
                <li><a href="./index.php">Home</a></li>
                <li><a href="#">Pages</a>
                  <ul class="dropdown">
                    <li><a href="./index.php">- Home</a></li>
                    <li><a href="./about.php">- About Us</a></li>
                    <li><a href="./projects.php">- Projects</a></li>
                    <li><a href="./models.php">- Models</a></li>
                    <li><a href="./casting.php">- Casting</a></li>
                    <li><a href="./blog.php">- Blog</a></li>
                    <li><a href="./single-blog.php">- Blog Details</a></li>
                    <li><a href="./contact.php">- Contact</a></li>
                    <li><a href="#">- Dropdown</a>
                      <ul class="dropdown">
                        <li><a href="#">- Dropdown Item</a></li>
                        <li><a href="#">- Dropdown Item</a>
                          <ul class="dropdown">
                            <li><a href="#">- Even Dropdown</a></li>
                            <li><a href="#">- Even Dropdown</a></li>
                            <li><a href="#">- Even Dropdown</a></li>
                            <li><a href="#">- Even Dropdown</a></li>
                          </ul>
                        </li>
                        <li><a href="#">- Dropdown Item</a></li>
                        <li><a href="#">- Dropdown Item</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="./projects.php">Project</a></li>
                <li><a href="./models.php">Models</a></li>
                <li><a href="./casting.php">Casting</a></li>
                <li><a href="#">Blog</a>
                  <ul class="dropdown">
                    <li><a href="./blog.php">- Blog</a></li>
                    <li><a href="./single-blog.php">- Blog Details</a></li>
                  </ul>
                </li>
                <li class="current-item"><a href="./contact.php">Contact</a></li>
              </ul>

              <!-- Search Icon -->
              <div class="search-icon" data-toggle="modal" data-target="#searchModal">
                <i class="icon_search"></i>
              </div>
            </div>
            <!-- Nav End -->

          </div>
        </nav>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Top Search Area Start ***** -->
  <div class="top-search-area">
    <!-- Search Modal -->
    <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <!-- Close Button -->
            <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
            <!-- Form -->
            <form action="index.php" method="post">
              <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
              <button type="submit">Search</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Top Search Area End ***** -->

  <!-- ***** Breadcrumb Area Start ***** -->
  <div class="breadcumb-area">
    <div class="container h-100">
      <div class="row h-100 align-items-end">
        <div class="col-12">
          <div class="breadcumb--con">
            <h2 class="title">Applications</h2>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                <li class="breadcrumb-item"><a href="#">Applications</a></li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Breadcrumb Area End ***** -->

  <!-- ***** Contact Area Start ***** -->
  <section class="mona-contact-area mb-30 section-padding-80-0">
    <div class="container">
      <div class="row align-items-center justify-content-between">

        <!-- Contact Form -->
                <div class="col-12 col-lg-6">
            <form action="#" method="post">
              <table class="form-apply">
                <div class="col-12 col-sm-12 col-lg-6">
                <tr>
                  <td>Name:<input type="text" name="name" placeholder="Name" required></td>
                </tr>
                <tr>
                  <td>Company:<input type="text" name="company" placeholder="Company" required></td>
                </tr>
                <tr>
                  <td>Email:<input type="email" name="email" placeholder="Email" required></td>
                </tr>
                </div>
                <div class="col-12 col-lg-6">
                <tr>
                  <td>Phone Number:<input type="tel" name="phone_number" placeholder="Telephone Number" required></td>
                </tr>
                <tr>
                  <td>Attach your Picture:<input type="file" name="image" placeholder="" required></td>
                </tr>
                <tr>
                  <td>Bio:<input type="textarea" name="bio" placeholder="Add more information about your self" required></td>
                </tr>
                </div>
              </table>
            </form>
                </div>
          </div>

      <div class="row">
        <!-- Single Contact Card -->
        <div class="col-12 col-lg-4">
          <div class="single-contact-card mb-80">
            <h2>Reception</h2>
            <h6>40 Baria Sreet 133/2 NewYork City, US <br>
              info@colorlib.com <br>
              +01-3-8888-6868</h6>
          </div>
        </div>

        <!-- Single Contact Card -->
        <div class="col-12 col-lg-4">
          <div class="single-contact-card mb-80">
            <h2>Booking</h2>
            <h6>40 Baria Sreet 133/2 NewYork City, US <br>
              info@colorlib.com <br>
              +01-3-8888-6868</h6>
          </div>
        </div>

        <!-- Single Contact Card -->
        <div class="col-12 col-lg-4">
          <div class="single-contact-card mb-80">
            <h2>President</h2>
            <h6>40 Baria Sreet 133/2 NewYork City, US <br>
              info@colorlib.com <br>
              +01-3-8888-6868</h6>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Contact Area End ***** -->

  <!-- ***** Footer Area Start ***** -->
  <footer class="footer-area section-padding-80-0">
    <div class="container">
      <div class="row justify-content-between">

        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
          <div class="single-footer-widget mb-60">
            <!-- Logo -->
            <a href="#" class="d-block mb-4"><img src="./img/core-img/logo.png" alt=""></a>
            <p>Integer vehicula mauris libero, at molestie eros imperdiet sit amet. Suspendisse mattis ante sit amet ante.</p>
            <div class="copywrite-text">
              <p>&copy; 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
          </div>
        </div>

        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
          <div class="single-footer-widget mb-60">
            <!-- Widget Title -->
            <h4 class="widget-title">Our Link</h4>

            <!-- Catagories Nav -->
            <nav>
              <ul class="our-link">
                <li><a href="#">New Faces</a></li>
                <li><a href="#">Model Of the Week</a></li>
                <li><a href="#">Classic Women</a></li>
                <li><a href="#">Privacy Terms</a></li>
                <li><a href="#">Classic Men</a></li>
                <li><a href="#">Conditions</a></li>
                <li><a href="#">Hair & Styles</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </nav>
          </div>
        </div>

        <!-- Single Footer Widget -->
        <div class="col-12 col-lg-4 col-xl-3">
          <div class="single-footer-widget mb-60">
            <!-- Widget Title -->
            <h4 class="widget-title">Contact</h4>
            <!-- Footer Content -->
            <div class="footer-content mb-30">
              <h4>+01-3-8888-6868</h4>
              <h6>40 Baria Sreet 133/2 NewYork City</h6>
            </div>
            <!-- Social Info -->
            <div class="footer-social-info">
              <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
              <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </footer>
  <!-- ***** Footer Area End ***** -->

  <!-- ******* All JS ******* -->
  <!-- jQuery js -->
  <script src="js/jquery.min.js"></script>
  <!-- Popper js -->
  <script src="js/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- All js -->
  <script src="js/mona.bundle.js"></script>
  <!-- Active js -->
  <script src="js/default-assets/active.js"></script>

</body>

</html>