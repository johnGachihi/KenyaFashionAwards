<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Mona - Model Agency HTML5 Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Blog | Kenya Fashion Awards</title>

  <!-- Favicon -->
  <link rel="icon" href="./img/core-img/KFA.jpg">

  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="{{asset('./css/style2.css')}}">

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
          <a class="nav-brand" href="{{ url('/index') }}"><img src="./img/core-img/KFA.jpg" alt=""></a>

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
<<<<<<< HEAD
                <li class="current-item"><a href="{{ url('/') }}/index">Home</a></li>
                <li><a href="#">Pages</a>
                  <ul class="dropdown">
                    <li><a href="{{ url('/') }}/index">- Home</a></li>
                    <li><a href="{{ url('/') }}/about">- About Us</a></li>
                    <li><a href="{{ url('/') }}/projects">- Projects</a></li>
                    <li><a href="{{ url('/') }}/models">- Models</a></li>
                    <li><a href="{{ url('/') }}/casting">- Casting</a></li>
                    <li><a href="{{ url('/') }}/blog">- Blog</a></li>
                    <li><a href="{{ url('/') }}/single-blog">- Blog Details</a></li>
                    <li><a href="{{ url('/') }}/contact">- Contact</a></li>
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
                <li><a href="{{ url('/') }}/projects">Project</a></li>
                <li><a href="{{ url('/') }}/models">Models</a></li>
                <li><a href="{{ url('/') }}/casting">Casting</a></li>
                <li><a href="#">Blog</a>
                  <ul class="dropdown">
                    <li><a href="{{ url('/') }}/blog">- Blog</a></li>
                    <li><a href="{{ url('/') }}/single-blog">- Blog Details</a></li>
                  </ul>
                </li>
                <li><a href="{{ url('/') }}/contact">Contact</a></li>
=======
                <li><a href="{{ url('/index') }}">Home</a></li>
                <li><a href="#">Awards</a>
                  <ul class="dropdown">
                    <li><a href="/category">Awards Category</a></li>
                    <li><a href="/criteria">Awards criteria</a></li>
                    </ul>
                </li>
                <li><a href="/models">Vote</a></li>
                <li  class="current-item"><a href="{{ url('/blog') }}">Blog</a></li>
                <li><a href="/contacts">Apply</a></li>
>>>>>>> 3d4f205257e403adb3d98d2b3ccc7d257510fac5
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
            <h2 class="title">Blog</h2>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/index') }}"><i class="fa fa-home"></i> Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Breadcrumb Area End ***** -->

  <div class="row">
    @foreach($approved_posts as $post)
    <div class="col-12 mb-4">
        <div class="card-shards card-small card-post card-post--asisde card-post--1">
            <div class="card-body">
                <div class="row">
                <div class="col-md-4 col-sm-4">
                    <img style="width:100%; " class="rounded" src="{{ url('/storage/cover_images/' . $post->cover_image)}}"/>
                </div>
                <div class="col-md-8 col-sm-8">
                <h3 class="card-title d-flex justify-content-between">
                    <a id="{{ $post->id}}" href="{{ url('show/'. $post->id) }}" class="">{{ $post->title }}</a>
                </h3>
                <div>
                    <p style="display: inline-block; 
                          width: 100%;
                          white-space: nowrap; 
                          overflow: hidden; 
                          text-overflow: ellipsis;"
                      class="card-text d-inline-block mb-3">{!! $post->body !!}</p>
                </div>
                <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                </div>
                <!-- <p class="card-text d-inline-block mb-3">{{ base64_decode($post->body) }}</p> -->
                <!-- <p class="bleble"><p>man</p></p> -->
            </div>
            </div>
        </div>
    </div>
    @endforeach
  </div>
  

  <!-- ***** Footer Area Start ***** -->
  <footer class="footer-area section-padding-80-0">
    <div class="container">
      <div class="row justify-content-between">

        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
          <div class="single-footer-widget mb-60">
            <!-- Logo -->
            <a href="#" class="d-block mb-4"><img src="./img/core-img/KFA.jpg" alt=""></a>
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
              <h4>+254-712-345-678</h4>
              <h6>i&M Building Kenyatta Avenue, Nairobi</h6>
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