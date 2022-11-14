@extends('home._layouts._app')

@section('content')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg12">
        <div class="container-fluid">
            <div class="container-max">
                <div class="inner-title">
                    <span>تفاصيل المشروع</span>
                    <h2>مشروع {{ $project->name }}</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Property Area Three -->
    <div class="property-area-three pt-100 pb-70">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 pl-0">
                    @if ($project->projectImages->count() > 1)
                        <div class="house-slider-three owl-carousel owl-theme">
                            @foreach ($project->images_path as $item)
                                <div class="house-three-item">
                                    <img src="{{ $item }}" alt="Images">
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="property-img-three">
                            <a href="property-details.html">
                                <img src="{{ $project->image_path }}" alt="Images">
                            </a>
                        </div>
                    @endif
                </div>

                <div class="col-lg-6">
                    <div class="property-item property-item-two">
                        <div class="section-title-two">

                            <h2>مشروع
                                {{ $project->name }} <br>
                                <b class="section-color2">مخطط {{ $project->scheme_name }}</b>
                            </h2>
                            <h3>
                                <i class="bx bx-map"></i>{{ $project->address }}
                            </h3>
                            <p> <i class="bx bx-note"></i>
                                {{ $project->details }}
                            </p>
                        </div>

                        <div class="property-btn">
                            <a href="#cca" class="default-btn default-hot-toddy">
                                مشاهدة التفاصيل
                                <i class='bx bx-down-arrow-alt'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Property Area Three End -->

    <!-- Counter Area -->
    <div class="counter-area counter-bg2" id="cca">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-sm-6 col-md-4 offset-md-4 offset-lg-0">
                    <div class="single-counter pl-2">
                        <i class="flaticon-carpet counter-color"></i>
                        <div class="content">
                            <h3 class="counter-color">{{ $project->floors_count }}</h3>
                            <span>الأدوار</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-4 offset-md-4 offset-lg-0">
                    <div class="single-counter">
                        <i class="bx bx-building counter-color"></i>
                        <div class="content">
                            <h3 class="counter-color">{{ $project->front_apartments_count }}</h3>
                            <span>الشقق الأمامية</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-4 offset-md-4 offset-lg-0">
                    <div class="single-counter">
                        <i class="bx bx-building counter-color"></i>
                        <div class="content">
                            <h3 class="counter-color">{{ $project->back_apartments_count }}</h3>
                            <span>الشقق الخلفية</span>
                        </div>
                    </div>
                </div>

                @if ($project->appendix_count > 0)
                    <div class="col-lg-3 col-sm-6 col-md-4 offset-md-4 offset-lg-0">
                        <div class="single-counter pl-5">
                            <i class="bx bx-chevron-up counter-color"></i>
                            <div class="content">
                                <h3 class="counter-color">{{ $project->appendix_count }}</h3>
                                <span>الملاحق</span>
                            </div>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
    <!-- Counter Area End -->

    <!-- Propertie Area-->
    <div class="room-details-area pt-100 pb-70">
        <div class="container-fluid m-0 p-0">
            <div class="section-title-two text-center">
                <h2 class="margin-auto">مميزات <b class="section-color">المشروع</b></h2>
            </div>
            <div class="tab room-details-tab tab-color">
                <div class="tab_content current active pt-45">
                    <div class="tabs_item current">
                        <div class="room-details-item">
                            <div class="room-details-slider owl-carousel owl-theme">
                                <div class="room-details-content">
                                    <p>
                                        {{ $project->propertie->details }}
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End -->

    <!-- Facility Area-->
    <div class="room-details-area pt-100 pb-70" style="background-color: #004848;">
        <div class="container-fluid m-0 p-0">
            <div class="section-title-two text-center">
                <h2 class="margin-auto" style="color: #cc9933">الضمانات</h2>
            </div>
            <div class="tab room-details-tab tab-color">
                <div class="tab_content current active pt-45" style="  margin-left: 50px;">
                    <div class="tabs_item current">
                        <div class="room-details-item">
                            <div class="room-details-slider owl-carousel owl-theme" style="background-color: #cc9933">
                                <div class="room-details-content">
                                    <p
                                        style="color: white;
                                font-weight: bold;
                                float: right;
                                font-size: 18px;">
                                        على الهيكل الإنشائي
                                        {{ $project->facility->f1 }}
                                    </p>
                                    <i class="bx bx-home"
                                        style="float: left;
                                font-size: 30px;
                                color: #004848;"></i>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab_content current active pt-45" style="  margin-right: 50px;">
                    <div class="tabs_item current">
                        <div class="room-details-item">
                            <div class="room-details-slider owl-carousel owl-theme" style="background-color: #cc9933">
                                <div class="room-details-content">
                                    <i class="bx bx-plug"
                                        style="float: right;
                                font-size: 30px;
                                color: #004848;"></i>
                                    <p
                                        style="color: white;
                                font-weight: bold;
                                float: left;
                                font-size: 18px;">
                                        على القواطع والأفياش
                                        {{ $project->facility->f2 }}
                                    </p>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab_content current active pt-45" style="  margin-left: 50px;">
                    <div class="tabs_item current">
                        <div class="room-details-item">
                            <div class="room-details-slider owl-carousel owl-theme" style="background-color: #cc9933">
                                <div class="room-details-content">
                                    <p
                                        style="color: white;
                                font-weight: bold;
                                float: right;
                                font-size: 18px;">
                                        على الكهرباء والسباكة
                                        {{ $project->facility->f3 }}
                                    </p>

                                    <i class="bx bx-cog"
                                        style="float: left;
                                font-size: 30px;
                                color: #004848;"></i>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab_content current active pt-45" style="  margin-right: 50px;">
                    <div class="tabs_item current">
                        <div class="room-details-item">
                            <div class="room-details-slider owl-carousel owl-theme" style="background-color: #cc9933">
                                <div class="room-details-content">
                                    <i class="bx bx-user"
                                        style="float: right;
                                font-size: 30px;
                                color: #004848;"></i>
                                    <p
                                        style="color: white;
                                font-weight: bold;
                                float: left;
                                font-size: 18px;">
                                        اتحاد الملاك مجاناَ
                                        {{ $project->facility->f4 }}
                                    </p>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                @if ($project->facility->f5 != '')
                    <div class="tab_content current active pt-45" style="  margin-left: 50px;">
                        <div class="tabs_item current">
                            <div class="room-details-item">
                                <div class="room-details-slider owl-carousel owl-theme" style="background-color: #cc9933">
                                    <div class="room-details-content">
                                        <p
                                            style="color: white;
                            font-weight: bold;
                            float: right;
                            font-size: 18px;">
                                            ضمانات إضافية
                                            {{ $project->facility->f5 }}
                                        </p>

                                        <i class="bx bx-plus"
                                            style="float: left;
                            font-size: 30px;
                            color: #004848;"></i>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- End -->

    @if ($project->front_apartment || $project->back_apartment)
        <!-- House Details Area -->
        <div class="house-details-area pt-5 pb-5">
            <div class="container-fluid">
                <div class="row align-items-center">
                    @if ($project->front_apartment)
                        <div class="col-lg-6">
                            <div class="house-content margin-left">

                                <h2>تفاصيل الشقق الأمامية:</h2>
                                <ul class="house-list">
                                    <li>التفاصيل <b>{{ $project->front_apartment->details }}</b></li>
                                    <li>السعر<b>{{ $project->front_apartment->price }} ريال</b></li>
                                    <li> المساحة <b>{{ $project->front_apartment->area }} متر</b></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6 p-0 m-0" style="text-align: center">
                            <div class="">
                                <div class="house-item">
                                    <img src="{{ $project->front_apartment->image_path }}" alt="Images">
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($project->back_apartment)
                        <div class="col-lg-6 p-0 m-0 mt-3" style="  text-align: center;">
                            <div class="">
                                <div class="house-details-item">
                                    <img src="{{ $project->back_apartment->image_path }}" alt="Images">

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-3">
                            <div class="house-content house-margin">
                                <h2>تفاصيل الشقق الخلفية</h2>
                                <ul class="house-list">
                                    <li>التفاصيل <b>{{ $project->back_apartment->details }}</b></li>
                                    <li>السعر<b>{{ $project->back_apartment->price }} ريال</b></li>
                                    <li> المساحة <b>{{ $project->back_apartment->area }} متر</b></li>
                                </ul>
                            </div>
                        </div>
                    @endif
                    {{-- appendix --}}
                    @if ($project->appendix_apartment)
                        <div class="col-lg-6">
                            <div class="house-content margin-left">

                                <h2>تفاصيل الملاحق:</h2>
                                <ul class="house-list">
                                    <li>التفاصيل <b>{{ $project->appendix_apartment->details }}</b></li>
                                    <li>السعر<b>{{ $project->appendix_apartment->price }} ريال</b></li>
                                    <li> المساحة <b>{{ $project->appendix_apartment->area }} متر</b></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6 p-0 m-0" style="text-align: center">
                            <div class="">
                                <div class="house-item">
                                    <img src="{{ $project->appendix_apartment->image_path }}" alt="Images">
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @endif
    <!-- House Details Area End -->
@endsection
