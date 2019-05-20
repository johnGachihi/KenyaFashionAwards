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
  </div><br/><br/>
  <!-- ***** Top Search Area End ***** -->
  <div class="section-padding-80-0">
    <div class ="main">
      <div id="form">
         <form action="#">
          <table>
            <tr><td>First Name: <input type="text"  name="firstname" id="firstname" placeholder="Enter Firstname" required></td></tr>
            <tr><td>Last Name: <input type="text"  name="lastname" id="lastname" placeholder="Enter lastname" required></td></tr>
            <tr><td>Username: <input type="text"  name="username" id="username" placeholder="Enter username" required></td></tr>            
            <tr><td>Password: <input type="password"  name="password" id="password" placeholder="Enter Password" required></td></tr>
            <tr><td>confirm password: <input type="password"  name="password1" id="password1" placeholder="Confirm Password" required></td></tr>
              <tr><td><input class="" type="submit" value="Submit"></td><tr>
                <tr><td id="formFooter"><a class="underlineHover" href="#">Login</td></tr>
          </table>
        </form>
      </div>
    </div>
      </div>

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