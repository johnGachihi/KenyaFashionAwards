@extends("layouts.user.app")

@section('main')
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">Awards Criteria</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Awards Criteria</li>
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
                    <div class="about-us-thumbnail mb-50">
                        <span class="line"></span>
                        <img src="{{ asset('/img/bg-img/kenya21.jpg') }}" alt="">
                        <span class="line2"></span>
                    </div>
                </div>

                <!-- About Us Content -->
                <div class="col-12 col-lg-8">
                    <div class="about-us-content mb-50">
                        <h2>Awards Criteria</h2>
                        <p>For all KFA awards: fashion awards, photography awards, accessories awards ...,
                            the evaluation criteria are: creativity, innovation, good finishing, trend setters, personal style, originality.</p>

                        <p>For all up-coming categories: should not be in the industry more than 5 years.</p>

                        <p>For all established categories: should be in the industry more than 5 years, should have on-line portfolio
                            (if we Google - what we will see), should have established outlet or studio/shop/..., should be participating in
                            the local or international fashion shows. </p>
                    </div>
                </div>
            </div>

            <!-- Single Service Area -->
            <div class="container">

                <div class="service-area mt-80">
                    <h1>Fashion Awards Criteria</h1><br />
                    <div class="row">

                        <!-- Single Service Area -->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-service-area mb-50">
                                <h5>BEST FEMALE MODEL</h5>
                                <h6>1. Presentation</h6>
                                <P>Showing confidence, have a good attitude and a friendly personality.</P>
                                <p>Show their personal style, good first impressions.</p>  <br />

                                <h6> 2. Model walk</h6>
                                <p>Does the model have a great signature walk or look about them that stands out as their signature look.</p><br/>

                                <h6>3. Female requirements: Tall, thin build, narrow hips, smaller bust, and usually young. Ages start at fourteen up to early twenties.</h6>
                                <p>5’11″ – 6’2″ (180-188 cm) in height</p>
                                <p>Weight: 140-165 lbs</p>
                                <p>Suit: 40 Regular (US size)</p>
                                <p>Shirt: 15″- 15.5″ x 34-35″</p>
                                <p>Waist: 32″- 34″</p>
                                <p>Inseam: 32″- 34″</p>
                                <p>Chest: 38″ – 40″</p>

                                <p>(Measurements need to be as close to this guideline as possible)</p>
                            </div>
                        </div>

                        <!-- Single Service Area -->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-service-area mb-50">
                                <h5>BEST MALE MODEL</h5>
                                <h6>1. Presentation</h6>
                                <P>Showing confidence, have a good attitude and a friendly personality.</P>
                                <p>Show their personal style, good first impressions.</p>  <br />

                                <h6> 2. Model walk</h6>
                                <p>Does the model have a great signature walk or look about them that stands out as their signature look.</p><br/>

                                <h6>3. Male requirements: Tall, lean, well-built usually young. Ages fourteen to thirty-five.</h6>
                                <p>5’11″ – 6’2″ (180-188 cm) in height</p>
                                <p>Weight: 140-165 lbs</p>
                                <p>Suit: 40 Regular (US size)</p>
                                <p>Shirt: 15″- 15.5″ x 34-35″</p>
                                <p>Waist: 32″- 34″</p>
                                <p>Inseam: 32″- 34″</p>
                                <p>Chest: 38″ – 40″</p>

                                <p>(Measurements need to be as close to this guideline as possible)</p>

                            </div>
                        </div>

                        <!-- Single Service Area -->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-service-area mb-50">

                                <h5>BEST PLUS SIZE MODEL</h5>
                                <h6>1. Presentation</h6>
                                <P>Showing confidence, have a good attitude and a friendly personality.</P>
                                <p>Show their personal style, good first impressions.</p>  <br />

                                <h6> 2. Model walk</h6>
                                <p>Does the model have a great signature walk or look about them that stands out as their signature look.</p><br/>

                                <h6>3. Proportional requirements: A Proportional figure and shapely legs.</h6>

                                <P>5’8″ to 6′ in height</P>
                                <p>wear a size 8 and up</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </section>
    <!-- ***** About Us Area End ***** -->

    <!-- ***** Core Value Area Start ***** -->
    {{-- <section class="mona-core-value-area bg-gray section-padding-80-0">
      <div class="container">
        <div class="row">
          <!-- Section Heading -->
          <div class="col-12">
            <div class="section-heading text-center">
              <h2>Our Core Value</h2>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-lg-6">
            <div class="mona-benefits-area mb-80">

              <!-- Single Benefits Area -->
              <div class="single-benefits-area d-flex mb-30">
                <!-- Icon -->
                <div class="benefits-icon">
                  <i class="icon_box-checked"></i>
                </div>
                <!-- Content -->
                <div class="benefits-content">
                  <h5>Expert Advice</h5>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor.</p>
                </div>
              </div>

              <!-- Single Benefits Area -->
              <div class="single-benefits-area d-flex mb-30">
                <!-- Icon -->
                <div class="benefits-icon">
                  <i class="icon_like_alt"></i>
                </div>
                <!-- Content -->
                <div class="benefits-content">
                  <h5>Clients Satisfaction</h5>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor.</p>
                </div>
              </div>

              <!-- Single Benefits Area -->
              <div class="single-benefits-area d-flex mb-30">
                <!-- Icon -->
                <div class="benefits-icon">
                  <i class="icon_calendar"></i>
                </div>
                <!-- Content -->
                <div class="benefits-content">
                  <h5>Planning & Strategy</h5>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor.</p>
                </div>
              </div>

            </div>
          </div>

          <div class="col-12 col-lg-6">
            <div class="mona-video-area mb-80">
              <img src="./img/bg-img/21.jpg" alt="">
              <!-- Play Button -->
              <a href="https://www.youtube.com/watch?v=sSakBz_eYzQ" class="btn video-play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
    <!-- ***** Core Value Area End ***** -->

    <!-- ***** Client Feedback Area Start ***** -->
    <section class="clients-feedback-area section-padding-0-80 clearfix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="slider slider-for">

                        <!-- Client Feedback Text -->
                        <div class="client-feedback-text text-center">
                            <div class="quote-icon">
                                <i class="icon_quotations" aria-hidden="true"></i>
                            </div>
                            <div class="client-description text-center">
                                <h4>“Success Agency is, hands down, one of the best companies that we have worked with! The company has either met or exceeded all of the goals that we initially set for all of the projects that they implemented for us.”</h4>
                            </div>
                            <div class="ratings text-center">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Rodney Williams</h5>
                                <span>Producer</span>
                            </div>
                        </div>

                        <!-- Client Feedback Text -->
                        <div class="client-feedback-text text-center">
                            <div class="quote-icon">
                                <i class="icon_quotations" aria-hidden="true"></i>
                            </div>
                            <div class="client-description text-center">
                                <h4>“Success Agency is, hands down, one of the best companies that we have worked with! The company has either met or exceeded all of the goals that we initially set for all of the projects that they implemented for us.”</h4>
                            </div>
                            <div class="ratings text-center">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Nazrul Islam</h5>
                                <span>Producer</span>
                            </div>
                        </div>

                        <!-- Client Feedback Text -->
                        <div class="client-feedback-text text-center">
                            <div class="quote-icon">
                                <i class="icon_quotations" aria-hidden="true"></i>
                            </div>
                            <div class="client-description text-center">
                                <h4>“Success Agency is, hands down, one of the best companies that we have worked with! The company has either met or exceeded all of the goals that we initially set for all of the projects that they implemented for us.”</h4>
                            </div>
                            <div class="ratings text-center">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Williams Rodney</h5>
                                <span>Producer</span>
                            </div>
                        </div>

                        <!-- Client Feedback Text -->
                        <div class="client-feedback-text text-center">
                            <div class="quote-icon">
                                <i class="icon_quotations" aria-hidden="true"></i>
                            </div>
                            <div class="client-description text-center">
                                <h4>“Success Agency is, hands down, one of the best companies that we have worked with! The company has either met or exceeded all of the goals that we initially set for all of the projects that they implemented for us.”</h4>
                            </div>
                            <div class="ratings text-center">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Rodney Williams</h5>
                                <span>Producer</span>
                            </div>
                        </div>

                        <!-- Client Feedback Text -->
                        <div class="client-feedback-text text-center">
                            <div class="quote-icon">
                                <i class="icon_quotations" aria-hidden="true"></i>
                            </div>
                            <div class="client-description text-center">
                                <h4>"Business sponsorship is a major source of funding for many events as it is a powerful marketing tool
                                    .Building and strengthening your company brand through effective visibility is one of the key essentials in business strategy." </h4>
                            </div>
                            <div class="ratings text-center">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="client-name text-center">
                                <h5>Rodney Williams</h5>
                                <span>Producer</span>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Client Thumbnail Area -->
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="slider slider-nav">
                        <div class="client-thumbnail">
                            <img src="{{ asset('/img/bg-img/6.jpg') }}" alt="">
                        </div>
                        <div class="client-thumbnail">
                            <img src="{{ asset('/img/bg-img/7.jpg') }}" alt="">
                        </div>
                        <div class="client-thumbnail">
                            <img src="{{ asset('/img/bg-img/8.jpg') }}" alt="">
                        </div>
                        <div class="client-thumbnail">
                            <img src="{{ asset('/img/bg-img/6.jpg') }}" alt="">
                        </div>
                        <div class="client-thumbnail">
                            <img src="{{ asset('/img/bg-img/7.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Client Feedback Area End ***** -->

    <!-- ***** CTA Area Start ***** -->
    <section class="mona-cta-area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content">
                        <h2>Do You Want To Be A Model?</h2>
                        <h6>Apply Now!</h6>
                        <a href="/contacts" class="btn mona-btn">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** CTA Area End ***** -->

@endsection

{{--<img src="{{ asset('/storage/pictures/' + $candidate->applicant->picture) }}"--}}