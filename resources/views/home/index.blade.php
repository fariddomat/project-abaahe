@extends('home._layouts._app')

@section('content')
    <!-- Home Slider Area -->
    <div class="home-slider-two owl-carousel owl-theme">
        <div class="home-slider-item item-bg1">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container-fluid">
                        <div class="container-max">
                            <div class="slider-content  wow slideInRight" data-wow-duration="1s">
                                <h1>أباهي.. <b>بمسكنك تُباهي</b></h1>
                                <p></p>
                                <div class="slider-btn-area">
                                    <a href="{{ route('projects') }}" class="discover-btn">
                                        المشاريع
                                        <i class='bx bx-right-arrow-alt'></i>
                                    </a>
                                    <a href="tel:+1(778)453221" class="slider-cell-btn">
                                        <i class='flaticon-phone'></i>
                                        +1 (778) 453 221
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-slider-item item-bg2">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container-fluid">
                        <div class="container-max">
                            <div class="slider-content">
                                <h1>بناء عصري <b>وأنيق</b></h1>

                                <div class="slider-btn-area">
                                    <a href="{{ route('projects') }}" class="discover-btn">
                                        المشاريع
                                        <i class='bx bx-right-arrow-alt'></i>
                                    </a>
                                    <a href="tel:+1(778)453221" class="slider-cell-btn">
                                        <i class='flaticon-phone'></i>
                                        +1 (778) 453 221
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-slider-item item-bg3">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container-fluid">
                        <div class="container-max">
                            <div class="slider-content">
                                <h1>منازل الأحلام</h1>
                                <div class="slider-btn-area">
                                    <a href="{{ route('projects') }}" class="discover-btn">
                                        المشاريع
                                        <i class='bx bx-right-arrow-alt'></i>
                                    </a>
                                    <a href="tel:+1(778)453221" class="slider-cell-btn">
                                        <i class='flaticon-phone'></i>
                                        +1 (778) 453 221
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="home-slider-area">
        <div class="container-fluid m-0 p-0">
            <div class="home-slider owl-carousel owl-theme" data-slider-id="1">

                <div class="slider-item">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="home-slider-content">
                                <span>أباهي للتمليك</span>
                                <h1>اختيارك لمنزلك هو <b>اختيار مكان راحتك</b></h1>
                                <p>Lorem ipsum dolor sit ame consectetur adipisicing elit sed do eiusmod tempor incididunt
                                    ut labore et dolore magna </p>
                                <div class="home-slider-btn">
                                    <a href="{{ route('projects') }}" class="default-btn">
                                        تصفح المشاريع
                                        <i class='bx bx-right-arrow-alt'></i>
                                    </a>
                                    <a href="#contact" class="default-btn active">
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
    </div> --}}
    <!-- Home Slider Area End -->


    <!-- Property Area -->
    <div class="property-area pt-100 pb-70 ">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-5 pl-0">
                    <div class="property-img">
                            <img src="{{ asset('home/assets/img/property/p-1.jpg') }}" alt="Images">

                    </div>
                </div>

                <div class="col-lg-7   wow slideInLeft" data-wow-delay="0.5s" data-wow-duration="1s">
                    <div class="property-item ml-50">
                        <div class="section-title">
                            <h2>
                                    عن الشركة

                            </h2>
                            <p>
                                Lorem ipsum dolor sit ame consectetur adipisicing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliquaUt enim
                                ad minim veniaquis nostrud exercitation
                            </p>
                        </div>

                        <div class="property-counter">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 col-md-3  offset-md-4 offset-lg-0">
                                    <div class="counter-card">
                                        <h2>{{ $projects->count() }}</h2><br>
                                        <h3>مشاريع مكتملة</h3>

                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-md-3  offset-md-4 offset-lg-0">
                                    <div class="counter-card">
                                        <h2>{{ $pending_projects->count() }}</h2><br>
                                        <h3>مشاريع قيد التنفيذ</h3>

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
    <!-- Service Area -->
    <div class="service-area pt-100 pb-70">
        <div class="container">
            <div class="row wow bounceInUp" data-wow-delay="0.5s" data-wow-duration="1s">
                <div class="col-lg-3 col-sm-6">
                    <div class="service-card service-card-bg">
                        <i class='flaticon-bankrupt'></i>
                        <a href="">
                            <h3>إدارة العقارات</h3>
                        </a>
                        <p class="text-break">Lorem ipsum dolor sitameem adipiscing cnsectetur adisci- mod tur adipiscing
                        </p>

                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="service-card service-card-bg active">
                        <i class='flaticon-value'></i>
                        <a href="">
                            <h3>التطوير العقاري</h3>
                        </a>
                        <p class="text-break">Lorem ipsum dolor sitameem adipiscing cnsectetur adisci- mod tur adipiscing
                        </p>

                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="service-card service-card-bg">
                        <i class='flaticon-time-management'></i>
                        <a href="">
                            <h3>الدقة والالتزام</h3>
                        </a>
                        <p class="text-break">Lorem ipsum dolor sitameem adipiscing cnsectetur adisci- mod tur adipiscing
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="service-card service-card-bg">
                        <i class='flaticon-house'></i>
                        <a href="">
                            <h3>تشيّد العقارات</h3>
                        </a>
                        <p class="text-break">Lorem ipsum dolor sitameem adipiscing cnsectetur adisci- mod tur adipiscing
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Area End -->

    <!-- Property Section -->
    <section class="property-section pb-70 mt-5">
        <div class="container-fluid">
            <div class="container-max">
                <div class="property-section-text   wow slideInRight" data-wow-delay="0.5s" data-wow-duration="1s">
                    <div class="section-title">
                        <h2>
                            المشاريع
                            <br><b>ما يناسب طموحك</b>
                        </h2>
                    </div>
                </div>

                <div class="row pt-45">
                    @foreach ($projects as $project)
                        <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                            <div class="single-property">
                                <div class="images">
                                    <a href="{{ route('project', $project->id) }}">
                                        <img src="{{ $project->poster_path }}" alt="Images">
                                    </a>
                                    <div class="property-content">
                                        <a href={{ route('project', $project->id) }}">
                                            <h3>{{ $project->name }}</h3>
                                        </a>
                                        <p>{!! $project->details !!}</p>
                                        <a href="{{ route('project', $project->id) }}" class="learn-more-btn">
                                            <i class='bx bx-right-arrow-alt'></i>
                                            تفاصيل
                                        </a>
                                        <div class="plus-dots">
                                            <img src="{{ asset('home/assets/img/property/plus-dots.png') }}"
                                                alt="Images">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Property Section End -->



    <!-- Orgin Area -->
    <div class="orgin-area pt-100 pb-70" style="  background-color: #fbf3e9;">
        <div class="container-fluid">
            <div class="container-max">
                <div class="orgin-title">
                    <div class="section-title wow bounceInDown"  data-wow-delay="0.5s" data-wow-duration="1s">
                        <h2> مشاريع <b> قادمة</b> </h2>
                        <p>
                            Lorem ipsum dolor sit ame consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliquaUt enim ad minim veniaquis nostrud exercitation
                        </p>
                    </div>
                </div>

                <div class="row pt-45">
                    @foreach ($pending_projects as $project)

                    <div class="col-lg-3 col-sm-6  offset-md-4 offset-lg-0">
                        <div class="orgin-card">
                            <h2>{{ $project->status_percent }}%</h2>
                            <h3>{{ $project->name }}</h3>
                            <p>
                               {!! $project->details !!}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Orgin Area End -->




    <!-- Innovation Area -->
    <div class="innovation-area pb-70 mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="innovation-content wow slideInRight" data-wow-delay="0.5s" data-wow-duration="1s">
                        <div class="section-title">
                            <span>DELIVERING INNOVATION</span>
                            <h2>Sustainability Property <b>Goals As Expected</b></h2>
                            <p>
                                Lorem ipsum dolor sit ame consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliquaUt enim ad minim vequis nostrud exercitation
                            </p>
                        </div>
                        <div class="innovation-btn">
                            <a href="#" class="default-btn default-bg-buttercup">View Details <i
                                    class='bx bx-right-arrow-alt'></i></a>
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


    <!-- Apartment Offer two -->
    <div class="apartment-offer-two pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="offer-content">
                        <div class="section-title-two">
                            <h2 class="section-white">وسائل الراحة التي نقدمها <b>لدى أباهي !</b></h2>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="offer-item offer-item-bg2 active">
                        <h3>Comfortable Flat</h3>
                        <p>Lorem ipsum dolor sitameem adipiscing cnsectetur adimod tur adipiscing</p>
                        <i class="flaticon-bankrupt"></i>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="offer-item offer-item-bg2">
                        <h3>Sophisticated Door</h3>
                        <p>Lorem ipsum dolor sitameem adipiscing cnsectetur adimod tur adipiscing</p>
                        <i class="flaticon-key"></i>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="offer-item offer-item-bg2">
                        <h3>Private Security</h3>
                        <p>Lorem ipsum dolor sitameem adipiscing cnsectetur adimod tur adipiscing</p>
                        <i class="flaticon-padlock"></i>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="offer-item offer-item-bg2 active">
                        <h3>Parking Space</h3>
                        <p>Lorem ipsum dolor sitameem adipiscing cnsectetur adimod tur adipiscing</p>
                        <i class="flaticon-garage"></i>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="offer-item offer-item-bg2">
                        <h3>Fitness Center</h3>
                        <p>Lorem ipsum dolor sitameem adipiscing cnsectetur adimod tur adipiscing</p>
                        <i class="flaticon-exercise"></i>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="offer-item offer-item-bg2 active">
                        <h3>Good Location</h3>
                        <p>Lorem ipsum dolor sitameem adipiscing cnsectetur adimod tur adipiscing</p>
                        <i class="flaticon-route"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Apartment Offer Area End -->
    <!-- Forward Area -->
    <div class="forward-area mt-5 mb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="forward-img">
                        <img src="{{ asset('home/assets/img/2.jpg') }}" alt="Images">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="forward-content  wow slideInLeft" data-wow-delay="0.5s" data-wow-duration="1s">
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



    <!-- Map Area -->
    <div class="map-area">
        <div class="container-fluid m-0 p-0">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1887.3734131639715!2d-96.95588917878352!3d18.89830951964275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c4e51eb45eacad%3A0x465ac54aa2735573!2zUmluY29uIGRlbCBCb3NxdWUsIOCmleCmsOCnjeCmoeCni-CmrOCmviwg4Kat4KeH4Kaw4Ka-4KaV4KeN4Kaw4KeB4KacLCDgpq7gp4fgppXgp43gprjgpr_gppXgp4s!5e0!3m2!1sbn!2sbd!4v1594641366896!5m2!1sbn!2sbd"
                allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <div class="map-content">
                <h2>هل ترغب بالاستفادة من <b> خدماتنا؟ </b></h2>
                <div class="map-content-left">
                    <span>اتصل بنا</span>
                    <h3><a href="tel:+5678555178">+9000000000</a></h3>
                </div>
                <div class="map-content-right">
                    <span>تواصل عبر البريد الإلكتروني</span>
                    <h3><a href="mailto:info@oftop.com">info@abahee.com</a></h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Map Area End -->
@endsection
