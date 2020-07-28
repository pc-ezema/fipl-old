@extends("layouts.frontend")


@section("title")
 {{ config("app.name") }} | home
@endsection


@section("slider")
  @includeIf("layouts.slider")
@endsection


@section("main_content")

<section class="bg-theme-colored2_1">
      <div class="container pt-0 pb-0 pb-bottom-gap">
        <div class="row">
          <div class="col-md-4">
            <div class="bg-theme-colored2 p-20">
              <i class="flaticon-dental-hemostat-1 text-white font-42 pull-left flip mr-20"></i>
              <h4 class="text-white font-weight-600 mb-0">Best Medical Services</h4>
              <h5 class="text-gray-lightgray mt-5">Get Your Services Now From Us</h5>
            </div>
          </div>
          <div class="col-md-4">
            <div class="bg-theme-colored_1 p-20">
              <i class="flaticon-dental-cracked-tooth text-white font-42 pull-left flip mr-20"></i>
              <h4 class="text-white font-weight-600 mb-0">Best Dental Treatment</h4>
              <h5 class="text-gray-lightgray mt-5">Get Your Services Now From Us</h5>
            </div>
          </div>
          <div class="col-md-4">
            <div class="bg-theme-colored2_1 p-20">
              <i class="flaticon-dental-teeth-protection text-white font-42 pull-left flip mr-20"></i>
              <h4 class="text-white font-weight-600 mb-0">Emergency Case</h4>
              <h5 class="text-gray-lightgray mt-5">Call at +(012) 345 6789</h5>
            </div>
          </div>
        </div>
      </div>
</section>
 
<!-- Section: home-boxes -->
    <!-- <section>
      <div class="container-fluid pt-0">
        <div class="section-content">
          <div class="row equal-height-inner mt-sm-0">
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
              <div class="sm-height-auto bg-theme-colored_1">
                <div class="text-center pt-30 pb-sm-30">
                  <div class="icon-box text-center">
                    <a class="icon bg-silver-light icon-circled" href="#"> <i class="flaticon-medical-blood8 text-theme-colored"></i> </a>
                    <h3 class="text-white">Free Consultation</h3>
                    <p class="text-white">Eleifend lobortis bibendum volutpat est senectus duis convallis</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
              <div class="sm-height-auto bg-theme-colored-darker3">
                <div class="text-center pt-30 pb-sm-30">
                  <div class="icon-box text-center">
                    <a class="icon bg-silver-light icon-circled" href="#"> <i class="flaticon-medical-medical45 text-theme-colored"></i> </a>
                    <h3 class="text-white">Quality Brackets</h3>
                    <p class="text-white">Eleifend lobortis bibendum volutpat est senectus duis convallis</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay3">
              <div class="sm-height-auto bg-theme-colored_1">
                <div class="text-center pt-30 pb-sm-30">
                  <div class="icon-box text-center">
                    <a class="icon bg-silver-light icon-circled" href="#"> <i class="flaticon-medical-pill text-theme-colored"></i> </a>
                    <h3 class="text-white">Latest Technology</h3>
                    <p class="text-white">Eleifend lobortis bibendum volutpat est senectus duis convallis</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay4">
              <div class="sm-height-auto bg-theme-colored-darker3">
                <div class="text-center pt-30 pb-sm-30">
                  <div class="icon-box text-center">
                    <a class="icon bg-silver-light icon-circled" href="#"> <i class="fa fa-phone  text-theme-colored"></i> </a>
                    <h3 class="text-white">Call at (252) 332-7955</h3>
                    <p class="text-white">Get The Quality Care That You Deserve Immediately</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Section: about -->
    <section id="about">
    	<div class="container pt-0">
    		<div class="section-content">
    			<div class="row">
            <div class="col-md-3 mb-30">
              <div class="sm-height-auto bg-theme-colored2">
                <div class="p-30">
                  <h3 class="text-uppercase text-white mt-0">Opening Hours</h3>
                  <div class="opening-hours">
                    <ul class="list-unstyled text-white">
                      <li class="clearfix"> <span>Monday</span>
                        <div class="value"> 8:00am - 12:00pm </div>
                      </li>
                      <li class="clearfix"> <span>Tues - Thur</span>
                        <div class="value">8:00am - 4:30pm</div>
                      </li>
                      <li class="clearfix"> <span>Friday</span>
                        <div class="value">8:00am - 3:00pm</div>
                      </li>
                      <li class="clearfix"> <span>Sunday</span>
                        <div class="value">8:00am - 4:30pm</div>
                      </li>
                      <li class="clearfix"> <span>Free Checkup</span>
                        <div class="value">8:00am - 4:30pm</div>
                      </li>
                    </ul>
                  </div>
                  <a class="btn btn-border btn-circled btn-transparent btn-sm mt-20" data-toggle="modal" data-target="#BSParentModal" href="ajax-load/form-appointment.html">Request an appointment</a>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-30">
              <img src="http://placehold.it/370x270" alt="">
              <h3 class=""><a href="#">Dental Implant</a></h3>
              <p class="">Lorem ipsum dolor sit amet, consec tetur adipis icing elit tem autem voluptatem obcaecati.</p>
              <a href="#" class="btn btn-flat btn-theme-colored text-theme-color-2">Read More</a>
            </div>

            <div class="col-md-3 mb-30">
              <img src="http://placehold.it/370x270" alt="">
              <h3 class=""><a href="#">Dental Bridges</a></h3>
              <p class="">Lorem ipsum dolor sit amet, consec tetur adipis icing elit tem autem voluptatem obcaecati.</p>
              <a href="#" class="btn btn-flat btn-theme-colored text-theme-color-2">Read More</a>
            </div>

            <div class="col-md-3">
              <img src="http://placehold.it/370x270" alt="">
              <h3 class=""><a href="#">Root Canel</a></h3>
              <p class="">Lorem ipsum dolor sit amet, consec tetur adipis icing elit tem autem voluptatem obcaecati.</p>
              <a href="#" class="btn btn-flat btn-theme-colored text-theme-color-2">Read More</a>
            </div>
    			</div>
    		</div>
    	</div>
    </section>

    <!-- Section: Services --> 
    <section id="services" class="divider parallax layer-overlay overlay-theme-colored2-9" data-bg-img="http://placehold.it/1920x988">
    	<div class="container pb-50">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase text-white mt-0 line-height-1">Our Services</h2>
              <div class="title-icon">
                <img class="mb-10" src="images/title-icon-white.png" alt="">
              </div>
              <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
    		<div class="section-content">
    			<div class="row features-style1">
    				<div class="col-sm-6 col-md-4">
    					<div class="icon-box p-30 bg-white mb-30 border-3px">
    						<a href="#"><i class="flaticon-medical-teeth2 text-theme-colored"></i></a>
    						<div class="features-details">
    							<h3>Dental Implants</h3>
    							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
    						</div>
    						<a href="#" class="btn btn-flat btn-sm btn-theme-colored mt-15  text-theme-color-2">Read More</a>
    					</div>
    				</div>
    				<div class="col-sm-6 col-md-4">
              <div class="icon-box p-30 bg-white mb-30 border-3px">
                <a href="#"><i class="flaticon-medical-microscope13 text-theme-colored"></i></a>
                <div class="features-details">
                  <h3>Root Canal</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
                </div>
                <a href="#" class="btn btn-flat btn-sm btn-theme-colored mt-15  text-theme-color-2">Read More</a>
              </div>
    				</div>
    				<div class="col-sm-6 col-md-4">
              <div class="icon-box p-30 bg-white mb-30 border-3px">
                <a href="#"><i class="flaticon-medical-brush18 text-theme-colored"></i></a>
                <div class="features-details">
                  <h3>Teeth Whitening</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
                </div>
                <a href="#" class="btn btn-flat btn-sm btn-theme-colored mt-15  text-theme-color-2">Read More</a>
              </div>
    				</div>
    				<div class="col-sm-6 col-md-4">
              <div class="icon-box p-30 bg-white mb-30 border-3px">
                <a href="#"><i class="flaticon-medical-first32 text-theme-colored"></i></a>
                <div class="features-details">
                  <h3>Wisdom Teeth</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
                </div>
                <a href="#" class="btn btn-flat btn-sm btn-theme-colored mt-15  text-theme-color-2">Read More</a>
              </div>
    				</div>
    				<div class="col-sm-6 col-md-4">
              <div class="icon-box p-30 bg-white mb-30 border-3px">
                <a href="#"><i class="flaticon-medical-dentist text-theme-colored"></i></a>
                <div class="features-details">
                  <h3>Crowns Bridges</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
                </div>
                <a href="#" class="btn btn-flat btn-sm btn-theme-colored mt-15  text-theme-color-2">Read More</a>
              </div>
    				</div>
    				<div class="col-sm-6 col-md-4">
              <div class="icon-box p-30 bg-white mb-30 border-3px">
                <a href="#"><i class="flaticon-medical-dentist1 text-theme-colored"></i></a>
                <div class="features-details">
                  <h3>Cosmetic Dentis</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
                </div>
                <a href="#" class="btn btn-flat btn-sm btn-theme-colored mt-15  text-theme-color-2">Read More</a>
              </div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

		<!--start gallary Section-->
		<section class="bg-lighter">
			<div class="container">
				<div class="section-title text-center mt-0">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h2 class="mt-0 line-height-1">Our <span class="text-theme-colored">Gallery</span></h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
						</div>
					</div>
				</div>
				<div class="section-content">
					<div class="row">
						<div class="col-md-12">
							<!-- Portfolio Filter -->
							<div class="portfolio-filter text-center">
								<a href="#" class="active" data-filter="*">All</a>
								<a href="#branding" class="" data-filter=".branding">Checkup</a>
								<a href="#design" class="" data-filter=".design">Whitening</a>
								<a href="#photography" class="" data-filter=".photography">Whitening</a>
							</div>
							<!-- End Portfolio Filter -->
							
							<!-- Portfolio Gallery Grid -->
							<div class="gallery-isotope default-animation-effect grid-3 gutter-small clearfix" data-lightbox="gallery">
								<!-- Portfolio Item Start -->
								<div class="gallery-item design">
									<div class="thumb">
										<img class="img-fullwidth" src="http://placehold.it/500x339" alt="project">
										<div class="overlay-shade"></div>
										<div class="text-holder">
											<div class="title text-center">Sample Title</div>
										</div>
										<div class="icons-holder">
											<div class="icons-holder-inner">
												<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
													<a href="images/gallery/full/1.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Portfolio Item End -->
								<!-- Portfolio Item Start -->
								<div class="gallery-item branding photography">
									<div class="thumb">
										<img class="img-fullwidth" src="http://placehold.it/500x339" alt="project">
										<div class="overlay-shade"></div>
										<div class="text-holder">
											<div class="title text-center">Sample Title</div>
										</div>
										<div class="icons-holder">
											<div class="icons-holder-inner">
												<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
													<a href="images/gallery/full/2.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Portfolio Item End -->
								<!-- Portfolio Item Start -->
								<div class="gallery-item design">
									<div class="thumb">
										<img class="img-fullwidth" src="http://placehold.it/500x339" alt="project">
										<div class="overlay-shade"></div>
										<div class="text-holder">
											<div class="title text-center">Sample Title</div>
										</div>
										<div class="icons-holder">
											<div class="icons-holder-inner">
												<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
													<a href="images/gallery/full/3.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Portfolio Item End -->
								<!-- Portfolio Item Start -->
								<div class="gallery-item branding">
									<div class="thumb">
										<img class="img-fullwidth" src="http://placehold.it/500x339" alt="project">
										<div class="overlay-shade"></div>
										<div class="text-holder">
											<div class="title text-center">Sample Title</div>
										</div>
										<div class="icons-holder">
											<div class="icons-holder-inner">
												<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
													<a href="images/gallery/full/4.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Portfolio Item End -->
								<!-- Portfolio Item Start -->
								<div class="gallery-item design photography">
									<div class="thumb">
										<img class="img-fullwidth" src="http://placehold.it/500x339" alt="project">
										<div class="overlay-shade"></div>
										<div class="text-holder">
											<div class="title text-center">Sample Title</div>
										</div>
										<div class="icons-holder">
											<div class="icons-holder-inner">
												<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
													<a href="images/gallery/full/5.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Portfolio Item End -->
								<!-- Portfolio Item Start -->
								<div class="gallery-item photography">
									<div class="thumb">
										<img class="img-fullwidth" src="http://placehold.it/500x339" alt="project">
										<div class="overlay-shade"></div>
										<div class="text-holder">
											<div class="title text-center">Sample Title</div>
										</div>
										<div class="icons-holder">
											<div class="icons-holder-inner">
												<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
													<a href="images/gallery/full/6.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Portfolio Item End -->
								<!-- Portfolio Item Start -->
								<div class="gallery-item branding">
									<div class="thumb">
										<img class="img-fullwidth" src="http://placehold.it/500x339" alt="project">
										<div class="overlay-shade"></div>
										<div class="text-holder">
											<div class="title text-center">Sample Title</div>
										</div>
										<div class="icons-holder">
											<div class="icons-holder-inner">
												<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
													<a href="images/gallery/full/7.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Portfolio Item End -->
								<!-- Portfolio Item Start -->
								<div class="gallery-item photography">
									<div class="thumb">
										<img class="img-fullwidth" src="http://placehold.it/500x339" alt="project">
										<div class="overlay-shade"></div>
										<div class="text-holder">
											<div class="title text-center">Sample Title</div>
										</div>
										<div class="icons-holder">
											<div class="icons-holder-inner">
												<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
													<a href="images/gallery/full/8.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Portfolio Item End -->
								<!-- Portfolio Item Start -->
								<div class="gallery-item branding">
									<div class="thumb">
										<img class="img-fullwidth" src="http://placehold.it/500x339" alt="project">
										<div class="overlay-shade"></div>
										<div class="text-holder">
											<div class="title text-center">Sample Title</div>
										</div>
										<div class="icons-holder">
											<div class="icons-holder-inner">
												<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
													<a href="images/gallery/full/9.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Portfolio Item End -->
							</div>
							<!-- End Portfolio Gallery Grid -->
						</div>
					</div>
				</div>
			</div>
		</section>

@endsection