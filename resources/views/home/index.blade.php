@extends('home._layouts._app')

@section('content')

        <!-- Home Slider Area -->
        <div class="home-slider-area">
            <div class="container-fluid m-0 p-0">
                <div class="home-slider owl-carousel owl-theme" data-slider-id="1">
                    
                    <div class="slider-item">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="home-slider-content">
                                    <span>أباهي للتمليك</span>
                                    <h1>اختيارك لمنزلك هو <b>اختيار مكان راحتك</b></h1>
                                    <p>Lorem ipsum dolor sit ame consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                                    <div class="home-slider-btn">
                                        <a href="{{ route('projects') }}" class="default-btn">
                                            تصفح المشاريع
                                            <i class='bx bx-right-arrow-alt'></i>
                                        </a>
                                        <a href="contact.html" class="default-btn active">
                                            اتصل بنا
                                            <i class='bx bx-right-arrow-alt'></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-7 pl-0">
                                <div class="home-slider-img">
                                    <img src="{{ asset('home.PNG') }}" alt="Images">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Start Carousel Thumbs -->
			<div class="thumbs-wrap">
				<div class="owl-thumbs home-slider-thumb" data-slider-id="1">
					<div class="owl-thumb-item">
						<span>01</span>
					</div>

					<div class="owl-thumb-item">
						<span>02</span>
					</div>

					<div class="owl-thumb-item">
						<span>03</span>
					</div>
				</div>
			</div>
			<!-- End Carousel Thumbs -->
        </div>
        <!-- Home Slider Area End -->

        <!-- Service Area -->
        <div class="service-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="service-card service-card-bg">
                            <i class='flaticon-bankrupt'></i>
                            <a href="service-details.html">
                                <h3>Property Management</h3>
                            </a>
                            <p class="text-break">Lorem ipsum dolor sitameem adipiscing cnsectetur adisci- mod tur adipiscing</p>
                            <a href="service-details.html" class="learn-more-btn">
                                Learn More
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="service-card service-card-bg active">
                            <i class='flaticon-value'></i>
                            <a href="service-details.html">
                                <h3>Commercial Development</h3>
                            </a>
                            <p class="text-break">Lorem ipsum dolor sitameem adipiscing cnsectetur adisci- mod tur adipiscing</p>
                            <a href="service-details.html" class="learn-more-btn">
                                Learn More
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="service-card service-card-bg">
                            <i class='flaticon-time-management'></i>
                            <a href="service-details.html">
                                <h3>Construction Management</h3>
                            </a>
                            <p class="text-break">Lorem ipsum dolor sitameem adipiscing cnsectetur adisci- mod tur adipiscing</p>
                            <a href="service-details.html" class="learn-more-btn">
                                Learn More
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="service-card service-card-bg">
                            <i class='flaticon-house'></i>
                            <a href="service-details.html">
                                <h3>Residential Development</h3>
                            </a>
                            <p class="text-break">Lorem ipsum dolor sitameem adipiscing cnsectetur adisci- mod tur adipiscing</p>
                            <a href="service-details.html" class="learn-more-btn">
                                Learn More
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service Area End -->

        <!-- Property Area -->
        <div class="property-area pt-100 pb-70">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-5 pl-0">
                        <div class="property-img">
                            <a href="property-details.html">
                                <img src="assets/img/property/p-1.jpg" alt="Images">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="property-item ml-50">
                            <div class="section-title">
                                <span>INHABITATION house</span>
                                <h2>
                                    <a href="property-details.html">
                                        Minimalism In Style
                                        <b>Your Property</b>
                                    </a>
                                </h2>
                                <p>
                                    Lorem ipsum dolor sit ame consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliquaUt enim
                                    ad minim veniaquis nostrud exercitation
                                </p>
                            </div>

                            <div class="property-counter">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6 col-md-3">
                                        <div class="counter-card">
                                            <h2>12</h2>
                                            <h3>MINUTES</h3>
                                            <span>Sport City Center</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-sm-6 col-md-3">
                                        <div class="counter-card">
                                            <h2>20</h2>
                                            <h3>MINUTES DRIVE</h3>
                                            <span>Sport City Center</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-sm-6 col-md-3">
                                        <div class="counter-card">
                                            <h2>16</h2>
                                            <h3>MINUTES</h3>
                                            <span>Swimming Pool</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-sm-6 col-md-3">
                                        <div class="counter-card">
                                            <h2>10</h2>
                                            <h3>MINUTES</h3>
                                            <span>Shopping Mall</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Property Area End -->

        <!-- Property Section -->
        <section class="property-section pb-70">
            <div class="container-fluid">
                <div class="container-max">
                    <div class="property-section-text">
                        <div class="section-title">
                            <span>The areas</span>
                            <h2>
                                The Area Of Property
                                <b>Get It Know</b>
                            </h2>
                        </div>
                    </div>

                    <div class="row pt-45">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-property">
                                <div class="images">
                                    <a href="project-details.html">
                                        <img src="assets/img/property/1.jpg" alt="Images">
                                    </a>
                                    <div class="property-content">
                                        <span>DEVELOPED</span>
                                        <a href="project-details.html">
                                            <h3>69 Alfred Apartment</h3>
                                        </a>
                                        <p>Details ipsum dolor sitameLorem adipiscing cnsectetur adipiscing mod</p>
                                        <a href="project-details.html" class="learn-more-btn">
                                            <i class='bx bx-right-arrow-alt'></i>
                                            Learn More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="single-property">
                                <div class="images">
                                    <a href="project-details.html">
                                        <img src="assets/img/property/2.jpg" alt="Images">
                                    </a>
                                    <div class="property-content">
                                        <span>FINISHED</span>
                                        <a href="project-details.html">
                                            <h3>Congregation Building</h3>
                                        </a>
                                        <p>Details ipsum dolor sitameLorem adipiscing cnsectetur adipiscing mod</p>
                                        <a href="project-details.html" class="learn-more-btn">
                                            <i class='bx bx-right-arrow-alt'></i>
                                            Learn More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                            <div class="single-property">
                                <div class="images">
                                    <a href="project-details.html">
                                        <img src="assets/img/property/3.jpg" alt="Images">
                                    </a>
                                    <div class="property-content">
                                        <span>IN PROGRESS</span>
                                        <a href="project-details.html">
                                            <h3>C Block Room</h3>
                                        </a>
                                        <p>Details ipsum dolor sitameLorem adipiscing cnsectetur adipiscing mod</p>
                                        <a href="project-details.html" class="learn-more-btn">
                                            <i class='bx bx-right-arrow-alt'></i>
                                            Learn More
                                        </a>
                                        <div class="plus-dots">
                                            <img src="assets/img/property/plus-dots.png" alt="Images">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Property Section End -->

        <!-- Project Area -->
        <div class="project-area project-bg1">
            <div class="container">
                <div class="project-card">
                    <span>NEW PROJECT IN PROGRESS</span>
                    <h2>751 Vilkoma Street View  Luxury Project</h2>
                    <ul>
                        <li>
                             <b>PROPERTY SIZE:</b>
                                700sq ft
                        </li>
                        <li>
                            <b>START DATE:</b>
                            July 12th 2020
                        </li>
                        <li>
                            <b>FINISH DATE:</b>
                            July 12th 2021
                        </li>
                        <li>
                            <b>INVESTOR:</b>
                            Jaeuin Group Inc
                        </li>
                    </ul>

                    <div class="project-card-btn">
                        <a href="property-details.html" class="default-btn default-bg-buttercup">View Details <i class='bx bx-right-arrow-alt'></i></a>
                        <a href="#" class="default-btn default-regal-blue active">Download Brochure <i class='bx bx-right-arrow-alt'></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project Area End -->

        <!-- Orgin Area -->
        <div class="orgin-area pt-100 pb-70">
            <div class="container-fluid">
                <div class="container-max">
                    <div class="orgin-title">
                        <div class="section-title">
                            <span>power resources</span>
                            <h2>Enough Energy <b>Origin</b> </h2>
                            <p>
                                Lorem ipsum dolor sit ame consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliquaUt enim ad minim veniaquis nostrud exercitation
                            </p>
                        </div>
                    </div>

                    <div class="row pt-45">
                        <div class="col-lg-3 col-sm-6">
                            <div class="orgin-card">
                                <h2>60%</h2>
                                <h3>Project 03 Due Date 2021</h3>
                                <p>
                                    Details ipsum dolor sitameLorem adip
                                    iscing cnsectetur adipiscing mod
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="orgin-card">
                                <h2>50%</h2>
                                <h3>Project 14 Due Date 2031</h3>
                                <p>
                                    Details ipsum dolor sitameLorem adip
                                    iscing cnsectetur adipiscing mod
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="orgin-card">
                                <h2>30%</h2>
                                <h3>Project 12 Due Date 2021</h3>
                                <p>
                                    Details ipsum dolor sitameLorem adip
                                    iscing cnsectetur adipiscing mod
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="orgin-card">
                                <h2>20%</h2>
                                <h3>Project 16 Due Date 2021</h3>
                                <p>
                                    Details ipsum dolor sitameLorem adip
                                    iscing cnsectetur adipiscing mod
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Orgin Area End -->

        <!-- Room Details Area-->
        <div class="room-details-area pb-70">
            <div class="container-fluid">
                <div class="container-max">
                    <div class="section-title text-center">
                        <span>ROOM DETAILS</span>
                        <h2 class="margin-auto">Real Value is<b> Inside</b></h2>
                    </div>

                    <div class="tab room-details-tab">
                        <ul class="tabs">
                            <li>
                                <a href="#">01. FLOORS</a>
                            </li>

                            <li>
                                <a href="#">02. WINDOWS</a>
                            </li>

                            <li>
                                <a href="#">03. WALLS</a>
                            </li>

                            <li>
                                <a href="#">04. KITCHEN FAUCET</a>
                            </li>

                            <li>
                                <a href="#">05. KITCHEN APPLIANCES</a>
                            </li>
                        </ul>

                        <div class="tab_content current active pt-45">
                            <div class="tabs_item current">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="room-details-card">
                                            <a href="property-details.html">
                                                <img src="assets/img/room-details/3.jpg" alt="Images">
                                            </a>
                                            <div class="content">
                                                <a href="property-details.html"><h3>01. FLOORS DETAILS</h3></a>
                                                <p>
                                                    Lorem ipsum dolor sit ame consectetur adipisicing elit, sed do eiusmod tempor
                                                    incididunt ut labore et dolore magna aliquaUt enim ad minim veniaquis
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="room-details-card">
                                            <a href="property-details.html">
                                                <img src="assets/img/room-details/1.jpg" alt="Images">
                                            </a>
                                            <div class="content">
                                                <a href="property-details.html"><h3>01. FLOORS DETAILS</h3></a>
                                                <p>
                                                    Lorem ipsum dolor sit ame consectetur adipisicing elit, sed do eiusmod tempor
                                                    incididunt ut labore et dolore magna aliquaUt enim ad minim veniaquis
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                                        <div class="room-details-card">
                                            <a href="property-details.html">
                                                <img src="assets/img/room-details/2.jpg" alt="Images">
                                            </a>
                                            <div class="content">
                                                <a href="property-details.html"><h3>01. FLOORS DETAILS</h3></a>
                                                <p>
                                                    Lorem ipsum dolor sit ame consectetur adipisicing elit, sed do eiusmod tempor
                                                    incididunt ut labore et dolore magna aliquaUt enim ad minim veniaquis
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tabs_item">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="room-details-card">
                                            <a href="property-details.html">
                                                <img src="assets/img/room-details/2.jpg" alt="Images">
                                            </a>
                                            <div class="content">
                                                <a href="property-details.html"><h3>02. WINDOWS</h3></a>
                                                <p>
                                                    Lorem ipsum dolor sit ame consectetur adipisicing elit, sed do eiusmod tempor
                                                    incididunt ut labore et dolore magna aliquaUt enim ad minim veniaquis
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="room-details-card">
                                            <a href="property-details.html">
                                                <img src="assets/img/room-details/1.jpg" alt="Images">
                                            </a>
                                            <div class="content">
                                                <a href="property-details.html"><h3>02. WINDOWS</h3></a>
                                                <p>
                                                    Lorem ipsum dolor sit ame consectetur adipisicing elit, sed do eiusmod tempor
                                                    incididunt ut labore et dolore magna aliquaUt enim ad minim veniaquis
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                                        <div class="room-details-card">
                                            <a href="property-details.html">
                                                <img src="assets/img/room-details/3.jpg" alt="Images">
                                            </a>
                                            <div class="content">
                                                <a href="property-details.html"><h3>02. WINDOWS</h3></a>
                                                <p>
                                                    Lorem ipsum dolor sit ame consectetur adipisicing elit, sed do eiusmod tempor
                                                    incididunt ut labore et dolore magna aliquaUt enim ad minim veniaquis
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tabs_item">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="room-details-card">
                                            <a href="property-details.html">
                                                <img src="assets/img/room-details/1.jpg" alt="Images">
                                            </a>
                                            <div class="content">
                                                <a href="property-details.html"><h3>03. WALLS</h3></a>
                                                <p>
                                                    Lorem ipsum dolor sit ame consectetur adipisicing elit, sed do eiusmod tempor
                                                    incididunt ut labore et dolore magna aliquaUt enim ad minim veniaquis
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="room-details-card">
                                            <a href="property-details.html">
                                                <img src="assets/img/room-details/2.jpg" alt="Images">
                                            </a>
                                            <div class="content">
                                                <a href="property-details.html"><h3>03. WALLS</h3></a>
                                                <p>
                                                    Lorem ipsum dolor sit ame consectetur adipisicing elit, sed do eiusmod tempor
                                                    incididunt ut labore et dolore magna aliquaUt enim ad minim veniaquis
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                                        <div class="room-details-card">
                                            <a href="property-details.html">
                                                <img src="assets/img/room-details/3.jpg" alt="Images">
                                            </a>
                                            <div class="content">
                                                <a href="property-details.html"><h3>03. WALLS</h3></a>
                                                <p>
                                                    Lorem ipsum dolor sit ame consectetur adipisicing elit, sed do eiusmod tempor
                                                    incididunt ut labore et dolore magna aliquaUt enim ad minim veniaquis
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tabs_item">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="room-details-card">
                                            <a href="property-details.html">
                                                <img src="assets/img/room-details/1.jpg" alt="Images">
                                            </a>
                                            <div class="content">
                                                <a href="property-details.html"><h3>04. KITCHEN FAUCET</h3></a>
                                                <p>
                                                    Lorem ipsum dolor sit ame consectetur adipisicing elit, sed do eiusmod tempor
                                                    incididunt ut labore et dolore magna aliquaUt enim ad minim veniaquis
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="room-details-card">
                                            <a href="property-details.html">
                                                <img src="assets/img/room-details/3.jpg" alt="Images">
                                            </a>
                                            <div class="content">
                                                <a href="property-details.html"><h3>04. KITCHEN FAUCET</h3></a>
                                                <p>
                                                    Lorem ipsum dolor sit ame consectetur adipisicing elit, sed do eiusmod tempor
                                                    incididunt ut labore et dolore magna aliquaUt enim ad minim veniaquis
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                                        <div class="room-details-card">
                                            <a href="property-details.html">
                                                <img src="assets/img/room-details/2.jpg" alt="Images">
                                            </a>
                                            <div class="content">
                                                <a href="property-details.html"><h3>04. KITCHEN FAUCET</h3></a>
                                                <p>
                                                    Lorem ipsum dolor sit ame consectetur adipisicing elit, sed do eiusmod tempor
                                                    incididunt ut labore et dolore magna aliquaUt enim ad minim veniaquis
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tabs_item">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="room-details-card">
                                            <a href="property-details.html">
                                                <img src="assets/img/room-details/1.jpg" alt="Images">
                                            </a>
                                            <div class="content">
                                                <a href="property-details.html"><h3>05. KITCHEN APPLIANCES</h3></a>
                                                <p>
                                                    Lorem ipsum dolor sit ame consectetur adipisicing elit, sed do eiusmod tempor
                                                    incididunt ut labore et dolore magna aliquaUt enim ad minim veniaquis
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="room-details-card">
                                            <a href="property-details.html">
                                                <img src="assets/img/room-details/2.jpg" alt="Images">
                                            </a>
                                            <div class="content">
                                                <a href="property-details.html"><h3>05. KITCHEN APPLIANCES</h3></a>
                                                <p>
                                                    Lorem ipsum dolor sit ame consectetur adipisicing elit, sed do eiusmod tempor
                                                    incididunt ut labore et dolore magna aliquaUt enim ad minim veniaquis
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                                        <div class="room-details-card">
                                            <a href="property-details.html">
                                                <img src="assets/img/room-details/3.jpg" alt="Images">
                                            </a>
                                            <div class="content">
                                                <a href="property-details.html"><h3>05. KITCHEN APPLIANCES</h3></a>
                                                <p>
                                                    Lorem ipsum dolor sit ame consectetur adipisicing elit, sed do eiusmod tempor
                                                    incididunt ut labore et dolore magna aliquaUt enim ad minim veniaquis
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Room Details Area End -->

        <!-- Innovation Area -->
        <div class="innovation-area pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="innovation-content">
                            <div class="section-title">
                                <span>DELIVERING INNOVATION</span>
                                <h2>Sustainability Property <b>Goals As Expected</b></h2>
                                <p>
                                    Lorem ipsum dolor sit ame consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliquaUt enim ad minim vequis nostrud exercitation
                                </p>
                            </div>
                            <div class="innovation-btn">
                                <a href="#" class="default-btn default-bg-buttercup">View Details <i class='bx bx-right-arrow-alt'></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="innovation-bg">
                            <div class="innovation-slider owl-carousel owl-theme">
                                <div class="innovation-item">
                                    <i class='flaticon-smartphone'></i>
                                    <h3>Quality Management</h3>
                                    <p>
                                        Lorem ipsum doconsectetur adipisicing elit sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.Ut eveniam
                                    </p>
                                </div>

                                <div class="innovation-item">
                                    <i class='flaticon-growth'></i>
                                    <h3>Designed Marvel</h3>
                                    <p>
                                        Lorem ipsum doconsectetur adipisicing elit sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.Ut eveniam
                                    </p>
                                </div>

                                <div class="innovation-item">
                                    <i class='flaticon-smartphone'></i>
                                    <h3>Quality Management</h3>
                                    <p>
                                        Lorem ipsum doconsectetur adipisicing elit sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.Ut eveniam
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Innovation Area End -->

        <!-- Efficiency Area -->
        <div class="efficiency-area pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="efficiency-card">
                            <span>EFFICIENCY ENERGY</span>
                            <a href="service-details.html">
                                <h3>Heating and Cooling You Need Realy this</h3>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur isicing elit, est, qui dolorem ipsum</p>
                            <i class='flaticon-buildings'></i>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="efficiency-card">
                            <span>EFFICIENCY ENERGY</span>
                            <a href="service-details.html">
                                <h3>Ventilation Is Superior Support For Property</h3>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur isicing elit, est, qui dolorem ipsum</p>
                            <i class='flaticon-buildings'></i>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                        <div class="efficiency-card">
                            <span>EFFICIENCY ENERGY</span>
                            <a href="service-details.html">
                                <h3>Glazing system You Need Realy this</h3>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur isicing elit, est, qui dolorem ipsum</p>
                            <i class='flaticon-buildings'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Efficiency Area End -->

        <!-- Contact Area -->
        <div class="contact-area">
            <div class="container">
                <div class="contact-option">
                    <div class="contact-form">
                        <span>SEND MESSAGE</span>
                        <h2>Contact With Us</h2>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <i class='bx bx-user'></i>
                                        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name*">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <i class='bx bx-user'></i>
                                        <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email*">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-12">
                                    <div class="form-group">
                                        <i class='bx bx-phone'></i>
                                        <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <i class='bx bx-envelope'></i>
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Your Message"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn default-bg-buttercup">
                                        Send Message
                                        <i class='bx bx-right-arrow-alt'></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Area End -->

        <!-- Testimonial Area -->
        <div class="testimonial-area ptb-100">
            <div class="container">
                <div class="testimonial-slider owl-carousel owl-theme">
                    <div class="testimonial-item">
                        <h3>A Precious Journey</h3>
                        <p>
                            Lorem ipsum dolor sit ame consectetur adipisicing elitsed
                            do eiusmod tempor labore et dolore magna aliquaUt
                        </p>
                    </div>

                    <div class="testimonial-item">
                        <h3>Very Much Useful Support</h3>
                        <p>
                            Lorem ipsum dolor sit ame consectetur adipisicing elitsed
                            do eiusmod tempor labore et dolore magna aliquaUt
                        </p>
                    </div>

                    <div class="testimonial-item">
                        <h3>Awesome Experiences Ever</h3>
                        <p>
                            Lorem ipsum dolor sit ame consectetur adipisicing elitsed
                            do eiusmod tempor labore et dolore magna aliquaUt
                        </p>
                    </div>

                    <div class="testimonial-item">
                        <h3>Very Much Useful Support</h3>
                        <p>
                            Lorem ipsum dolor sit ame consectetur adipisicing elitsed
                            do eiusmod tempor labore et dolore magna aliquaUt
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Area End -->

        <!-- Forward Area -->
        <div class="forward-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="forward-img">
                            <img src="assets/img/2.jpg" alt="Images">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="forward-content">
                            <div class="section-title">
                                <span>Message FRom Company</span>
                                <h2>Go Forward With <b>Us</b></h2>
                                <p>
                                    Lorem ipsum dolor sit ame consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliquaUt enim ad minim vequis nostrud exercitation
                                </p>
                            </div>

                            <div class="signature">
                                <ul>
                                    <li>
                                        <img src="assets/img/signature.png" alt="Images">
                                    </li>
                                    <li>
                                        <h3>JORDHAN LEON</h3>
                                        <span>Company Owner</span>
                                    </li>
                                </ul>
                            </div>

                            <a href="#" class="default-btn default-bg-buttercup">
                                Finalize Meeting
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Forward Area End -->

        <!-- Blog Area -->
        <div class="blog-area pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span>BLOG & NEWS</span>
                    <h2 class="margin-auto">News & <b>Updates</b></h2>
                </div>
                <div class="row pt-45">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/1.jpg" alt="Blog Images">
                            </a>
                            <div class="content">
                                <span>April 19, 2020</span>
                                <a href="blog-details.html">
                                    <h3>Real Estate Is Being Came In The Place Of Expectation</h3>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/2.jpg" alt="Blog Images">
                            </a>
                            <div class="content">
                                <span>March 19, 2020</span>
                                <a href="blog-details.html">
                                    <h3>Luxury Property Is Might Be First Choose?</h3>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                        <div class="blog-card">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/3.jpg" alt="Blog Images">
                            </a>
                            <div class="content">
                                <span>January 15, 2020</span>
                                <a href="blog-details.html">
                                    <h3>How It Would Be In My List If I Don’t Know!</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Area End -->

        <!-- newsletter Area -->
        <div class="newsletter-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="newsletter-content">
                            <i class='flaticon-email'></i>
                            <h2>Join our weekly <b>Newsletter</b></h2>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="newsletter-form-area">
                            <form class="newsletter-form" data-toggle="validator" method="POST">
                                <input type="email" class="form-control" placeholder="Your Email*" name="EMAIL" required autocomplete="off">
                                <button class="default-btn" type="submit">
                                    Subscribe
                                    <i class='bx bx-right-arrow-alt'></i>
                                </button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- newsletter Area End -->

        <!-- Map Area -->
        <div class="map-area">
            <div class="container-fluid m-0 p-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1887.3734131639715!2d-96.95588917878352!3d18.89830951964275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c4e51eb45eacad%3A0x465ac54aa2735573!2zUmluY29uIGRlbCBCb3NxdWUsIOCmleCmsOCnjeCmoeCni-CmrOCmviwg4Kat4KeH4Kaw4Ka-4KaV4KeN4Kaw4KeB4KacLCDgpq7gp4fgppXgp43gprjgpr_gppXgp4s!5e0!3m2!1sbn!2sbd!4v1594641366896!5m2!1sbn!2sbd"  allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <div class="map-content">
                    <span>CONTACT FOR PROJECT</span>
                    <h2>Do You Have A Project In <b>Mind?</b></h2>
                    <div class="map-content-left">
                        <span>CALL US NOW</span>
                        <h3><a href="tel:+5678555178">+5 678 555 178</a></h3>
                    </div>
                    <div class="map-content-right">
                        <span>GET IN TOUCH</span>
                        <h3><a href="mailto:info@oftop.com">info@oftop.com</a></h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- Map Area End -->
@endsection
