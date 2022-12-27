@extends('home._layouts._app')

@section('content')
    <!-- Home Slider Area -->
    <div class="home-slider-two owl-carousel owl-theme" style="">
        <div class="home-slider-item item-bg1">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container-fluid" style="min-height: 100vh;">
                        <div class="container-max">
                            <div class="slider-content ">
                                <h1>أباهي.. <b>بمسكنك تُباهي</b></h1>
                                <p></p>
                                <div class="slider-btn-area">
                                    <a href="{{ route('projects') }}" class="discover-btn">
                                        المشاريع
                                        <i class='bx bx-right-arrow-alt'></i>
                                    </a>
                                    <a href="tel:{{ setting('site_phone') }}" class="slider-cell-btn">
                                        <i class='flaticon-phone'></i>
                                        {{ setting('site_phone') }}
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
                    <div class="container-fluid" style="min-height: 100vh;">
                        <div class="container-max">
                            <div class="slider-content">
                                <h1>بناء عصري <b>وأنيق</b></h1>

                                <div class="slider-btn-area">
                                    <a href="{{ route('projects') }}" class="discover-btn">
                                        المشاريع
                                        <i class='bx bx-right-arrow-alt'></i>
                                    </a>
                                    <a href="tel:{{ setting('site_phone') }}" class="slider-cell-btn">
                                        <i class='flaticon-phone'></i>

                                        {{ setting('site_phone') }}
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
                    <div class="container-fluid" style="min-height: 100vh;">
                        <div class="container-max">
                            <div class="slider-content">
                                <h1>منازل الأحلام</h1>
                                <div class="slider-btn-area">
                                    <a href="{{ route('projects') }}" class="discover-btn">
                                        المشاريع
                                        <i class='bx bx-right-arrow-alt'></i>
                                    </a>
                                    <a href="tel:{{ setting('site_phone') }}" class="slider-cell-btn">
                                        <i class='flaticon-phone'></i>

                                        {{ setting('site_phone') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Home Slider Area End -->


    <!-- Property Area -->
    <div class="property-area pt-100 pb-70 ">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-5 pl-0">
                    <div class="property-img">
                            <img src="{{ asset('home.PNG') }}" alt="Images">

                    </div>
                </div>

                <div id="about" class="col-lg-7  ">
                    <div class="property-item ml-50">
                        <div class="section-title">
                            <h2>
                                    عن الشركة

                            </h2>
                            <p>
                                {{ setting('site_about')}}
                            </p>
                        </div>

                        <div class="property-counter">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-md-6  offset-md-4 offset-lg-0">
                                    <div class="counter-card">
                                        <h2>{{ $projects->count() }}</h2><br>
                                        <h3>مشاريع مكتملة</h3>

                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6 col-md-6  offset-md-4 offset-lg-0">
                                    <div class="counter-card">
                                        <a href="{{ route('profileDownload') }}" target="_blank" class="default-btn default-hot-toddy text-white">
                                            تحميل البروفايل
                                            <i class='bx bx-save'></i>
                                        </a>
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
    {{-- <div class="service-area pt-100 pb-70">
        <div class="container">
            <div class="row ">
                <div class="col-lg-3 col-sm-6">
                    <div class="service-card service-card-bg">
                        <i class='flaticon-bankrupt'></i>
                        <a>
                            <h3>الجودة </h3>
                        </a>
                        <p class="text-break">نوفر الدعم الفني للإجابة على أي استفسار يخص العقار بعد البيع<br><br>
                        </p>

                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="service-card service-card-bg ">
                        <i class='flaticon-value'></i>
                        <a>
                            <h3>الالهام </h3>
                        </a>
                        <p class="text-break">لأن أهدافنا وطموحاتنا كبيرة , فلا بد للحلم أن تكون خطواته أكبر, وللحلم بقية
                        </p>

                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="service-card service-card-bg">
                        <i class='flaticon-time-management'></i>
                        <a>
                            <h3>الدقة</h3>
                        </a>
                        <p class="text-break"> أكثر ما يميز شركة أباهي الدقة في تأمين ما يطلبه العميل بالوقت المحدد
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="service-card service-card-bg">
                        <i class='flaticon-house'></i>
                        <a>
                            <h3>المصداقية </h3>
                        </a>
                        <p class="text-break">نتعامل بشفافية كاملة وبصدق وأمانة مع عملائنا مما جعل لسمعتنا صدى قبل اسمنا
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Service Area End -->
 <div class="orgin-area pt-100 " style="  background-color: #234467;">
    </div>
    <!-- Project Section -->
    <section class="property-section pb-70 mt-5">
        <div class="container-fluid">
            <div class="container-max">
                <div class="property-section-text ">
                    <div class="section-title">
                        <h2>
                            المشاريع
                            <br><b>ما يناسب طموحك</b>
                        </h2>
                    </div>
                </div>

                <div class="row pt-45">
                   @if ($projects->count() > 0)
                   @foreach ($projects as $project)
                   <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                       <div class="single-property">
                           <div class="images">
                            <span
                                        class="badge @if ($project->status == 'مكتمل') badge-secondary
                                    @elseif($project->status == 'جاهز')
                                    badge-success
                                    @else
                                    badge-warning text-white @endif"
                                        style="padding: 5px 15px; font-size: 14px;  top: 26px;
                                    position: relative;">{{ $project->status }} @if ($project->status == 'مكتمل') <i class="bx bx-lock"></i> @endif</span>
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
                   @else
                   <h3 class=" offset-md-4 offset-lg-0">لايوجد مشاريع مكتملة بعد</h3>

                   @endif
                </div>
            </div>
        </div>
    </section>
    <!-- Property Section End -->


    <!-- Feature Project Area -->
    {{-- <div class="orgin-area pt-100 pb-70" style="  background-color: #234467;">
        <div class="container-fluid">
            <div class="container-max">
                <div class="orgin-title">
                    <div class="section-title ">
                        <h2 style="color: white"> مشاريع <b> قادمة</b> </h2>
                        <p style="color: white">
                            المشاريع المستقبلية أو التي لم تكتمل بعد
                        </p>
                    </div>
                </div>

                <div class="row pt-45">
                    @if ($pending_projects->count()>0)
                    @foreach ($pending_projects as $project)

                    <div class="col-lg-3 col-sm-6  offset-md-4 offset-lg-0">
                        <div class="orgin-card">
                            <a href="{{ route('project', $project->id) }}">
                                <h2 style="color:#f4d52e">{{ $project->status_percent }}%</h2>
                            <h3 style="color:#f4d52e">{{ $project->name }}</h3>
                            <p>
                               {!! $project->details !!}
                            </p>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    @else

                    <h3 class=" offset-md-4 offset-lg-0">لايوجد مشاريع مستقبلية بعد</h3>
                    @endif
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Orgin Area End -->




    <!-- Innovation Area -->
    {{-- <div class="innovation-area pb-70 mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="innovation-content ">
                        <div class="section-title">
                            <h2>أهدافنا
                                <br>
                                <b>السعي دائماً نحو الأفضل</b>
                            </h2>

                        </div>

                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="innovation-bg">
                        <div class="innovation-slider owl-carousel owl-theme">
                            <div class="innovation-item">
                                <i class='flaticon-smartphone'></i>
                                <h5>نسعى دائما لمواكبة احتياجات وتطلعات عملائنا المتجددة والمتزايدة بتقديم المزيد من الخدمات العقارية   المتنوعة والأكثر تطورا وحداثة تواكب عصر السرعة والتطور الذي نعيشه</h5>

                            </div>

                            <div class="innovation-item">
                                <i class='flaticon-growth'></i>
                                <h3>حرصنا الشديد على خدمة المجتمع وأبنائه وبأن نكون يد تساهم في ارتقائه وتقدمه</h3>
                            </div>

                            <div class="innovation-item">
                                <i class='flaticon-smartphone'></i>
                                <h3>السعي المتواصل للارتقاء بمستوى الخدمات العقارية في جدة والسعودية كاملة</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Innovation Area End -->


    <!-- Apartment Offer two -->
    {{-- <div class="apartment-offer-two pt-100 pb-70"  style="  background-color: #234467 !important;">
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
                        <h3>شقق مريحة</h3>
                        <i class="flaticon-bankrupt"></i>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="offer-item offer-item-bg2">
                        <h3>أقفال متطورة</h3>
                        <i class="flaticon-key"></i>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="offer-item offer-item-bg2">
                        <h3>حماية عالية</h3>
                        <i class="flaticon-padlock"></i>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="offer-item offer-item-bg2 active">
                        <h3>مواقف سيارات</h3>
                        <i class="flaticon-garage"></i>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="offer-item offer-item-bg2">
                        <h3>مساحة للنشاطات</h3>
                        <i class="flaticon-exercise"></i>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="offer-item offer-item-bg2 active">
                        <h3>مواقع جميلة</h3>
                        <i class="flaticon-route"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Apartment Offer Area End -->
    <!-- Forward Area -->
    {{-- <div class="forward-area mt-5 mb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="forward-img">
                        <img src="{{ asset('home/assets/img/2.jpg') }}" alt="Images">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="forward-content ">
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
    </div> --}}
    <!-- Forward Area End -->



    <!-- Map Area -->
    <div id="contact" class="map-area-two">
        <div class="container-fluid m-0 p-0 maps">
            {{-- <iframe
                src="https://www.google.com/maps/d/embed?mid=1Dt0DAlVYal47pNOXy20K08p3qpE&hl=en&ehbc=2E312"
                allowfullscreen="" aria-hidden="false" tabindex="0" style="pointer-events: none;"></iframe> --}}
                <img src="{{ asset('w.jpg') }}" style="width: 100%; min-height: 700px" alt="">

            <div class="contact-wrap">
                <div class="contact-form">
                    <h2>هل ترغب <b> بالتواصل معنا </b></h2>
                    <form id="contactForm" action="{{ route('contact') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="row">
                            @extends('admin._layouts._error')
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <i class='bx bx-user'></i>
                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="اسمك بالكامل*">
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <i class='bx bx-user'></i>
                                    <input type="email" name="email" id="email" class="form-control"  data-error="Please enter your email" placeholder="البريد الإلكتروني">
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <i class='bx bx-phone'></i>
                                    <input type="text" name="phone" id="phone" required data-error="Please enter your number" class="form-control" placeholder="رقم الهاتف*" required>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <i class='bx bx-envelope'></i>
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="رسالتك هنا"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn default-hot-toddy">
                                    إرسال
                                    <i class='bx bx-right-arrow-alt'></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Map Area End -->
@endsection
