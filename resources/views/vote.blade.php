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
  {{--<link rel="icon" href="./img/core-img/favicon.ico">--}}
  <link rel="icon" href="{{ asset('/img/core-img/KFA.jpg') }}">

  <!-- Core Stylesheet -->
  {{--<link rel="stylesheet" href="css/style2.css">--}}
  <link rel="stylesheet" href="{{ asset('css/style2.css') }}">

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
          {{--<div class="bg-curve" style="background-image: url(./img/core-img/choice.png);"></div>--}}
          <div class="bg-curve" style="background-image: url({{ asset('/img/core-img/choice.png') }});"></div>

          <!-- Logo -->
          {{--<a class="nav-brand" href="index.php"><img src="./img/core-img/KFA.jpg" alt=""></a>--}}
          <a class="nav-brand" href="index.php"><img src="{{ asset('img/core-img/KFA.jpg') }}" alt=""></a>
        </nav>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Breadcrumb Area Start ***** -->
  <div class="breadcumb-area">
    <div class="container h-100">
      <div class="row h-100 align-items-end">
        <div class="col-12">
          <div class="breadcumb--con">
            <h2 class="title">Vote</h2>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url ('index')}}"><i class="fa fa-home"></i> Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Vote</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Breadcrumb Area End ***** -->

  <!-- ***** About Us Area Start ***** -->
  <section class="mona-about-us-area mb-30 section-padding-80-0">
    <div class="container">
      <div class="row">

        <!-- About Us Thumbnail -->
        <div class="col-12 col-sm-12 col-lg-4">
            {{--<img src="./img/bg-img/kenya10.jpg" alt="">--}}
            <img src="{{ asset('storage/pictures/'.$candidate->applicant->pictures)}}" alt="">
            <span class="line2"></span>
        </div>

        <!-- About Us Content -->
        <div class="col-12 col-lg-8">
            <div class="about-us-content mb-50">
                <h2>{{ $candidate->applicant->name }}</h2>
                @if(!empty($candidate->applicant->bio))
                    <p>{{$candidate->applicant->bio}}</p>
                @else
                    <p>Bio not provided</p>
                @endif

                <button id="vote-btn" class="bt">Vote</button>
          </div>
      </div>
    </div>
    </div>
  </section>

  <!-- ******* All JS ******* -->
  <!-- jQuery js -->
  {{--<script src='js/jquery.min.js'></script>--}}
  <script src='{{ asset('js/jquery.min.js') }}'></script>
  <!-- Popper js -->
  <script src='{{ asset('js/popper.min.js') }}'></script>
  <!-- Bootstrap js -->
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <!-- All js -->
  <script src="{{ asset('js/mona.bundle.js') }}"></script>
  <!-- Active js -->
  <script src="{{ asset('js/default-assets/active.js') }}"></script>

    <script>
        $('#vote-btn').click(() => {
            $.ajax({
                url: '{{ url('vote') }}',
                method: 'get',
                data: {
                    award_category: {{$candidate->award_category_id}},
                    applicant: {{ $candidate->id }}
                }
            });
        });

    </script>

</body>
</html>