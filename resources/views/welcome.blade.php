@extends("layouts.frontend")


@section("title")
 {{ config("app.name") }} | home
@endsection


@section("slider")
  @includeIf("layouts.slider")
@endsection


@section("main_content")

    <!-- Section: home-boxes -->
    <section>
      <div class="container-fluid pt-0">
        <div class="section-content">
          <div class="row equal-height-inner mt-sm-0">
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
              <div class="sm-height-auto bg-theme-colored">
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
              <div class="sm-height-auto bg-theme-colored-darker5">
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
              <div class="sm-height-auto bg-theme-colored-darker9">
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
    </section>

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

    <!-- Section: Depertment-->
    <section id="depertment" class="divider parallax layer-overlay overlay-white-9" data-parallax-ratio="0.1" data-bg-img="http://placehold.it/1920x873">
      <div class="container pb-50">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase title">Healthy <span class="text-theme-colored font-weight-300"> Teeth </span>Treatments</h2>
              <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
            	<img src="http://placehold.it/370x270" alt="">
              <h3 class=""><a href="#">Dental Implant</a></h3>
              <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit tem autem voluptatem obcaecati.</p>
              <a href="#" class="btn btn-flat btn-theme-colored mt-15 text-theme-color-2">Read More</a>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
              <img src="http://placehold.it/370x270" alt="">
              <h3 class=""><a href="#">Dental Bridges</a></h3>
              <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit tem autem voluptatem obcaecati.</p>
              <a href="#" class="btn btn-flat btn-theme-colored mt-15 text-theme-color-2">Read More</a>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
              <img src="http://placehold.it/370x270" alt="">
              <h3 class=""><a href="#">Root Canel</a></h3>
              <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit tem autem voluptatem obcaecati.</p>
              <a href="#" class="btn btn-flat btn-theme-colored mt-15 text-theme-color-2">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Pricing -->
    <section id="pricing">
      <div class="container pb-50">
        <div class="section-title text-center mb-60">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase mt-0">Pricing</h2>
              <div class="title-icon">
                <img class="mb-10" src="images/title-icon.png" alt="">
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
        <div class="section-content mt-20">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 hvr-float-shadow mb-sm-30 wow fadeInLeft animation-delay1">
              <div class="pricing-table border-3px border-theme-colored bg-white text-center">
                <div class="p-40 bg-white">
                  <div class="pricing-icon">
                    <i class="flaticon-medical-hammers5 text-theme-colored"></i>
                  </div>
                  <h3 class="package-type font-24 text-uppercase">Dental Whitening</h3>
                  <h1 class="price text-theme-colored mb-10 font-36">$33</h1>
                  <h4 class="discount">First Time</h4>
                  <p>Lorem ipsum dolor sit amet conse ctetur adipi sicing elit. Rem autem voluptatem obcaecati! </p>
                  <a class="btn btn-colored btn-theme-colored text-uppercase mt-30" href="#">Request an Appointment</a>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 hvr-float-shadow mb-sm-30 wow fadeInUp animation-delay1">
              <div class="pricing-table border-3px border-theme-colored bg-white text-center">
                <div class="p-40 bg-white">
                  <div class="pricing-icon bg-theme-colored">
                    <i class="flaticon-medical-human3 text-white"></i>
                  </div>
                  <h3 class="package-type font-24 text-uppercase">Root Treatment</h3>
                  <h1 class="price text-theme-colored mb-10 font-36">$15</h1>
                  <h4 class="discount">First Time</h4>
                  <p>Lorem ipsum dolor sit amet conse ctetur adipi sicing elit. Rem autem voluptatem obcaecati! </p>
                  <a class="btn btn-colored btn-theme-colored text-uppercase mt-30" href="#">Request an Appointment</a><br>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 hvr-float-shadow mb-sm-30 wow fadeInRight animation-delay1">
              <div class="pricing-table border-3px border-theme-colored bg-white text-center">
                <div class="p-40 bg-white">
                  <div class="pricing-icon">
                    <i class="flaticon-medical-scalpel3 text-theme-colored"></i>
                  </div>
                  <h3 class="package-type font-24 text-uppercase">Dental Implant</h3>
                  <h1 class="price text-theme-colored mb-10 font-36">$29</h1>
                  <h4 class="discount">First Time</h4>
                  <p>Lorem ipsum dolor sit amet conse ctetur adipi sicing elit. Rem autem voluptatem obcaecati! </p>
                  <a class="btn btn-colored btn-theme-colored text-uppercase mt-30" href="#">Request an Appointment</a><br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  	<!--start funfact Section-->
  	<section  class="divider parallax layer-overlay overlay-white-8" data-bg-img="http://placehold.it/1920x873">
  			<div class="container pb-50">
  				<div class="section-content">
  					<div class="row">
  						<div class="col-xs-12 col-sm-6 col-md-3 mb-50">
  							<div class="funfact text-center">
  								<i class="flaticon-medical-male100 text-theme-colored"></i>
  								<h2 data-animation-duration="2000" data-value="10" class="animate-number font-38">0</h2>
  								<h5 class="text-uppercase mb-0">Professional Dentists</h5>
  							</div>
  						</div>
  						<div class="col-xs-12 col-sm-6 col-md-3 mb-50">
  							<div class="funfact text-center">
  								<i class="flaticon-medical-family21 text-theme-colored"></i>
  								<h2 data-animation-duration="2000" data-value="2480" class="animate-number font-38">0</h2>
  								<h5 class="text-uppercase mb-0">Setisfied Patient</h5>
  							</div>
  						</div>
  						<div class="col-xs-12 col-sm-6 col-md-3 mb-50">
  							<div class="funfact text-center">
  								<i class="flaticon-medical-hospital17 text-theme-colored"></i>
  								<h2 data-animation-duration="2000" data-value="40" class="animate-number font-38">0</h2>
  								<h5 class="text-uppercase mb-0">Hospital Rooms</h5>
  							</div>
  						</div>
              <div class="col-xs-12 col-sm-6 col-md-3 mb-50">
  							<div class="funfact text-center">
  								<i class="flaticon-medical-hospital36 text-theme-colored"></i>
  								<h2 data-animation-duration="2000" data-value="20" class="animate-number font-38">0</h2>
  								<h5 class="text-uppercase mb-0">Our Machines</h5>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  	</section>

    <!-- start Doctors Section:-->
    <section id="doctors">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class=" mt-0 line-height-1">Our <span class="text-theme-colored">Dentist</span></h2>
              <div class="title-icon">
                <img class="mb-10" src="images/title-icon.png" alt="">
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
        <div class="row mtli-row-clearfix">
          <div class="col-md-12">
            <div class="owl-carousel-4col">
              <div class="item">
                <div class="team-members border-bottom-theme-color-2px maxwidth400">
                  <div class="team-thumb">
                    <img class="img-fullwidth" alt="" src="http://placehold.it/275x370">
                    <div class="team-overlay"></div>
                  </div>
                  <div class="team-details bg-theme-colored2 p-20">
                    <h4 class="text-uppercase mb-0"><a class="text-white" href="#">Dr. Linda Feldman</a></h4>
                    <p class="text-gray-bbb">Root Canals Dentist</p>
                    <a class="text-gray-ccc font-16" href="#">(+01) - 234 567 890</a>
                    <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm mt-10">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="team-members border-bottom-theme-color-2px maxwidth400">
                  <div class="team-thumb">
                    <img class="img-fullwidth" alt="" src="http://placehold.it/275x370">
                    <div class="team-overlay"></div>
                  </div>
                  <div class="team-details bg-theme-colored2 p-20">
                    <h4 class="text-uppercase mb-0"><a class="text-white" href="#">Dr. Jessica Tailor</a></h4>
                    <p class="text-gray-bbb">Implant Surgeon</p>
                    <a class="text-gray-ccc font-16" href="#">(+01) - 234 567 890</a>
                    <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm mt-10">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="team-members border-bottom-theme-color-2px maxwidth400">
                  <div class="team-thumb">
                    <img class="img-fullwidth" alt="" src="http://placehold.it/275x370">
                    <div class="team-overlay"></div>
                  </div>
                  <div class="team-details bg-theme-colored2 p-20">
                    <h4 class="text-uppercase mb-0"><a class="text-white" href="#">Dr. Nichol Fleming</a></h4>
                    <p class="text-gray-bbb">Cosmetic Dental Surgeon</p>
                    <a class="text-gray-ccc font-16" href="#">(+01) - 234 567 890</a>
                    <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm mt-10">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="team-members border-bottom-theme-color-2px maxwidth400">
                  <div class="team-thumb">
                    <img class="img-fullwidth" alt="" src="http://placehold.it/275x370">
                    <div class="team-overlay"></div>
                  </div>
                  <div class="team-details bg-theme-colored2 p-20">
                    <h4 class="text-uppercase mb-0"><a class="text-white" href="#">Dr. Brian Adam</a></h4>
                    <p class="text-gray-bbb">Restorative Dentist</p>
                    <a class="text-gray-ccc font-16" href="#">(+01) - 234 567 890</a>
                    <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm mt-10">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  	<!-- Section: Call To Action -->
  	<section  class="divider parallax layer-overlay overlay-theme-colored2-9" data-bg-img="http://placehold.it/1920x873">
			<div class="container pt-20 pb-20">
				<div class="call-to-action">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
              <h2 class="text-theme-colored"><i class="pe-7s-call text-theme-colored"></i><a class="text-theme-colored" href="#"> (+01) &ndash; 234 567 890</a></h2>
							<h2 class="text-white">Please feel free to contact us for emergency case.</h2>
							<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit rem autem voluptatem obcaecati lienum phaedrum torquatos nec eu, vis detraxit periculis ex.</p>
              <a href="#" class="btn btn-theme-colored mt-20">Contact With Us</a>
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

		<!--start testimonial Section-->
    <section class="bg-theme-colored2">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase text-white mt-0 line-height-1">Testimonial</h2>
              <div class="title-icon">
                <img class="mb-10" src="images/title-icon-white.png" alt="">
              </div>
              <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <div class="owl-carousel-3col" data-dots="true">
                <div class="item">
                  <div class="testimonial style1">
                    <div class="comment bg-theme-colored2">
                      <p class="text-white">Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.</p>
                    </div>
                    <div class="content mt-20">
                      <div class="thumb pull-right flip"> <img class="img-circle" alt="" src="http://placehold.it/95x95"> </div>
                      <div class="text-right flip pull-right flip mr-20 mt-10">
                        <h5 class="author text-white">Gavin Smith</h5>
                        <h6 class="title text-gray-bbb mt-0">Happy Patient</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial style1">
                    <div class="comment bg-theme-colored2">
                      <p class="text-white">Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.</p>
                    </div>
                    <div class="content mt-20">
                      <div class="thumb pull-right flip"> <img class="img-circle" alt="" src="http://placehold.it/95x95"> </div>
                      <div class="text-right flip pull-right flip mr-20 mt-10">
                        <h5 class="author text-white">Jonathan Smith</h5>
                        <h6 class="title text-gray-bbb mt-0">Happy Patient</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial style1">
                    <div class="comment bg-theme-colored2">
                      <p class="text-white">Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.</p>
                    </div>
                    <div class="content mt-20">
                      <div class="thumb pull-right flip"> <img class="img-circle" alt="" src="http://placehold.it/95x95"> </div>
                      <div class="text-right flip pull-right flip mr-20 mt-10">
                        <h5 class="author text-white">Mary James</h5>
                        <h6 class="title text-gray-bbb mt-0">Happy Patient</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial style1">
                    <div class="comment bg-theme-colored2">
                      <p class="text-white">Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.</p>
                    </div>
                    <div class="content mt-20">
                      <div class="thumb pull-right flip"> <img class="img-circle" alt="" src="http://placehold.it/100x100"> </div>
                      <div class="text-right flip pull-right flip mr-20 mt-10">
                        <h5 class="author text-white">Lucy brown</h5>
                        <h6 class="title text-gray-bbb mt-0">Happy Patient</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
      </div>
    </section>

    <!-- Section: Blog -->
    <section id="blog">
      <div class="container pb-50">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="mt-0 line-height-1">Recent  <span class="text-theme-colored"> News</span></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
              <div class="owl-carousel-3col owl-nav-top mb-sm-0" data-nav="true">
              <div class="item">
                <article class="post clearfix maxwidth600 mb-30 wow fadeInRight" data-wow-delay=".2s">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> 
                      <img src="http://placehold.it/350x270" alt="" class="img-responsive img-fullwidth"> 
                    </div>
                  </div>
                  <div class="bg-theme-colored2 p-5 text-center pt-10 pb-10">
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-calendar mr-5 text-white"></i>21 February</span>
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-white"></i> 214 Comments</span>
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-heart-o mr-5 text-white"></i> 895 Likes</span>
                  </div>
                  <div class="entry-content bg-lighter p-20 pr-10">
                    <div class="entry-meta mt-0 no-bg no-border">
                      <div class="event-content">
                        <h3 class="entry-title text-white text-capitalize m-0"><a href="#">This is a standard post with thumbnail image</a></h3>
                      </div>
                    </div>
                    <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobis</p>
                    <div class="mt-10"> <a href="blog-single-left-sidebar.html" class="btn btn-theme-colored btn-sm">Read More</a> </div>
                    <div class="clearfix"></div>
                  </div>
                </article>
              </div>
              <div class="item">
                <article class="post clearfix maxwidth600 mb-30 wow fadeInRight" data-wow-delay=".2s">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> 
                      <img src="http://placehold.it/350x270" alt="" class="img-responsive img-fullwidth"> 
                    </div>
                  </div>
                  <div class="bg-theme-colored2 p-5 text-center pt-10 pb-10">
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-calendar mr-5 text-white"></i>21 February</span>
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-white"></i> 214 Comments</span>
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-heart-o mr-5 text-white"></i> 895 Likes</span>
                  </div>
                  <div class="entry-content bg-lighter p-20 pr-10">
                    <div class="entry-meta mt-0 no-bg no-border">
                      <div class="event-content">
                        <h3 class="entry-title text-white text-capitalize m-0"><a href="#">This is a standard post with thumbnail image</a></h3>
                      </div>
                    </div>
                    <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobis</p>
                    <div class="mt-10"> <a href="blog-single-left-sidebar.html" class="btn btn-theme-colored btn-sm">Read More</a> </div>
                    <div class="clearfix"></div>
                  </div>
                </article>
              </div>
              <div class="item">
                <article class="post clearfix maxwidth600 mb-30 wow fadeInRight" data-wow-delay=".2s">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> 
                      <img src="http://placehold.it/350x270" alt="" class="img-responsive img-fullwidth"> 
                    </div>
                  </div>
                  <div class="bg-theme-colored2 p-5 text-center pt-10 pb-10">
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-calendar mr-5 text-white"></i>21 February</span>
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-white"></i> 214 Comments</span>
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-heart-o mr-5 text-white"></i> 895 Likes</span>
                  </div>
                  <div class="entry-content bg-lighter p-20 pr-10">
                    <div class="entry-meta mt-0 no-bg no-border">
                      <div class="event-content">
                        <h3 class="entry-title text-white text-capitalize m-0"><a href="#">This is a standard post with thumbnail image</a></h3>
                      </div>
                    </div>
                    <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobis</p>
                    <div class="mt-10"> <a href="blog-single-left-sidebar.html" class="btn btn-theme-colored btn-sm">Read More</a> </div>
                    <div class="clearfix"></div>
                  </div>
                </article>
              </div>
              <div class="item">
                <article class="post clearfix maxwidth600 mb-30 wow fadeInRight" data-wow-delay=".2s">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> 
                      <img src="http://placehold.it/350x270" alt="" class="img-responsive img-fullwidth"> 
                    </div>
                  </div>
                  <div class="bg-theme-colored2 p-5 text-center pt-10 pb-10">
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-calendar mr-5 text-white"></i>21 February</span>
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-white"></i> 214 Comments</span>
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-heart-o mr-5 text-white"></i> 895 Likes</span>
                  </div>
                  <div class="entry-content bg-lighter p-20 pr-10">
                    <div class="entry-meta mt-0 no-bg no-border">
                      <div class="event-content">
                        <h3 class="entry-title text-white text-capitalize m-0"><a href="#">This is a standard post with thumbnail image</a></h3>
                      </div>
                    </div>
                    <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobis</p>
                    <div class="mt-10"> <a href="blog-single-left-sidebar.html" class="btn btn-theme-colored btn-sm">Read More</a> </div>
                    <div class="clearfix"></div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Divider: Clients -->
    <section class="clients bg-theme-colored">
      <div class="container pt-10 pb-0">
        <div class="row">
          <div class="col-md-12">
            <!-- Section: Clients -->
            <div class="owl-carousel-6col text-center owl-nav-top">
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection