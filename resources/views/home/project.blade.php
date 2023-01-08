@extends('home._layouts._app')

@section('content')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg12">
        <div class="container-fluid">
            <div class="container-max">
                <div class="inner-title ">
                    <b class="section-color2">تفاصيل المشروع</b>

                    {{-- <h2>مشروع {{ $project->name }}</h2> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Property Area Three -->
    <div class="property-area-three pb-70 container" style="  padding-top: 25px;">
        <div class="container-fluid">
            <div class="row align-items-center">

                <div class="col-lg-6 pl-0">
                    <div class="property-item property-item-two ">
                        <div class="section-title-two">

                            <h2>مشروع
                                {{ $project->name }}
                                <br>

                            </h2>
                            <b class="section-color2">مخطط {{ $project->scheme_name }}</b>

                            <h3 class="row" style="">
                                <div class="col-lg-1" style="  padding-top: 15px;">
                                    <i class="bx bx-map"></i>
                                </div>
                                <div class="col-lg-11" style="  font-size: 16px; padding-top: 15px">
                                    {!! $project->address !!}
                                </div>
                            </h3>
                            <h4 class="row">
                                <div class="col-lg-1" style="  padding-top: 5px;"> <i class="bx bx-note"></i></div>
                                <div class="col-lg-11" style="  font-size: 16px; padding-top: 5px">
                                    {!! $project->details !!}
                                </div>
                            </h4>
                        </div>

                        <div class="property-btn">
                            <a href="#cca" class="default-btn default-hot-toddy">
                                مشاهدة التفاصيل
                                <i class='bx bx-down-arrow-alt'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl-0">
                    <div class="property-img-three">

                        <span
                            class="badge @if ($project->status == 'مكتمل') badge-success
                    @elseif($project->status == 'على وشك الانتهاء')
                    badge-secondary
                    @else
                    badge-warning text-white @endif"
                            style="padding: 5px 15px; font-size: 14px;  top: 26px;
                    position: relative;">{{ $project->status }}
                            @if ($project->status == 'على وشك الانتهاء')
                                <i class="bx bx-lock"></i>
                            @endif
                        </span>
                        <a>
                            <img src="{{ $project->poster_path }}" alt="Images">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Property Area Three End -->

    {{-- Google Map --}}
    @if ($project->address_location)
    <div id="contact" class="map-area-two" style="">
        <h2 class="container mb-3" style="text-align: center">
            الموقع على الخريطة
        </h2>
        <div class="container-fluid m-0 p-0 maps mb-5">
            {!! $project->address_location !!}

        </div>
    </div>
    @endif
    {{-- Google Map End --}}

    <!-- Gallery Area -->
    <div class="gallery-area pt-70 pb-70  ">
        <div class="container">
            <div class="section-title-two text-center">
                <h2 class="margin-auto">معرض <b class="section-color2"> الصور</b></h2>
            </div>

            <div class="gallery-view pt-45">
                <div class="row" style="display: flex;flex-wrap: wrap; ">
                    @foreach ($project->images_path as $item)
                        <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">

                            <div
                                class="single-gallery"style="display: flex;
                        flex-direction: column;">
                                <img src="{{ $item }}" alt="Images" style="max-height: 300px">
                                <a href="{{ $item }}" class="gallery-icon">
                                    <i class='bx bx-plus'></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Area End -->

    {{-- Updates --}}

    @if ($project->floors->count() > 0)
        <!-- apartment check Area-->
        <div class="room-details-area pt-100 pb-70  " style="background: url({{ asset('b.png') }});">
            <div class="container-fluid m-0 p-0">
                <div class="section-title-two text-center">
                    <h2 class="margin-auto" style="color: #cc9933; margin-bottom: 35px;margin-right: 25px;">حالة الشقق
                    </h2>
                </div>
                <div class="container" style="color: white">
                    <div class="table-responsive">



                        <table class="table mt-2 center"
                            style="  margin-left: auto !important;
                        margin-right: auto !important;
                        width: fit-content;
                        margin-bottom: 35px;">
                            @if ($project->FloorRow($project->floors_count)->count() > 0)
                                <tr>
                                    <td>
                                        الملاحق
                                    </td>
                                    @foreach ($project->FloorRow($project->floors_count) as $key => $floor)
                                        <td
                                            class=" @if ($floor->status == 'متاح') td1
                                    @elseif ($floor->status == 'محجوز')
                                    td2
                                    @else
                                    td3 @endif">
                                            {{-- {{ $floor->apartment->count() }} --}}
                                            {{ $floor->apartment->type }}
                                            {{-- -
                                            {{ $floor->apartment->code }} --}}
                                        </td>

                                        @if ($key == 0)
                                            {{-- <td class="m1">.</td> --}}
                                            <td
                                                style="width: 33% !important; color:transparent!important;box-shadow: none !important; translate: 0px 24px;">
                                                .</td>
                                        @endif
                                    @endforeach
                                </tr>
                            @endif

                            @for ($i = $project->floors_count - 1; $i >= 1; $i--)
                                <tr>
                                    <td>
                                        الدور {{ $i }}
                                    </td>
                                    @php
                                        $check = false;
                                    @endphp
                                    @foreach ($project->FloorRow($i) as $key => $floor)
                                        @if ($key == $project->FloorRow($i)->count() - 1 &&
                                            $floor->apartment->type == 'أمامية' &&
                                            $project->backCount2($i) > 0)
                                            <td class="m2">.</td>
                                        @endif

                                        @if (!$check && $floor->apartment->type == 'خلفية')
                                            <td class="m1">.</td>
                                        @endif
                                        <td style="width:@if ($project->backCount2($i) == 2 && $floor->apartment->type == 'خلفية') 69px !important @endif;   border-radius: @if ($key == 0) 0 15px 15px 0px
                                        @elseif ($key == $project->FloorRow($i)->count() - 1)
                                        15px 0 0 15px
                                        @elseif($project->backCount2($i) == 2 && $key == 1)
                                        15px 0 0 15px
                                        @elseif($project->backCount2($i) == 2 && $key == 2)
                                        0 15px 15px 0px @endif;"
                                            class=" @if ($floor->status == 'متاح') td1
                                        @elseif ($floor->status == 'محجوز')
                                        td2
                                        @else
                                        td3 @endif @if ($floor->apartment->type == 'خلفية') back @endif">
                                            {{ $floor->apartment->room_count }}
                                            {{ $floor->apartment->type }}
                                            {{-- - {{ $floor->apartment->code }} --}}
                                        </td>


                                        @if ($project->backCount2($i) == 2 && $check == false && $floor->apartment->type == 'خلفية')
                                            @php
                                                $check = true;
                                            @endphp
                                            <td
                                                style="color: transparent; width: 10px !important; border:none !important; box-shadow: none !important;">
                                                .</td>
                                        @endif
                                    @endforeach
                                </tr>
                            @endfor
                        </table>


                    </div>
                    <div style="text-align: center">

                        <img src="{{ asset('1.png') }}" style="width: 60%; min-width: 300px; margin-top: 5px">
                    </div>
                </div>
            </div>
        </div>
        <!-- End -->
    @endif
    {{-- Updates End --}}
    <!-- Counter Area -->
    <div class="counter-area counter-bg1 " id="cca">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-sm-6 col-md-4 offset-md-4 offset-lg-0">
                    <div class="single-counter pl-2">
                        <i class="flaticon-carpet"></i>
                        <div class="content">
                            <h3 class="">{{ $project->floors_count }}</h3>
                            <span>الأدوار</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-4 offset-md-4 offset-lg-0">
                    <div class="single-counter">
                        <i class="bx bx-building "></i>
                        <div class="content">
                            <h3 class="">{{ $project->floors->count() }}</h3>
                            <span>الشقق </span>
                        </div>
                    </div>
                </div>


                @if ($project->appendix_count > 0)
                    <div class="col-lg-3 col-sm-6 col-md-4 offset-md-4 offset-lg-0">
                        <div class="single-counter pl-5">
                            <i class="bx bx-chevron-up "></i>
                            <div class="content">
                                <h3 class="">{{ $project->appendix_count }}</h3>
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
    @if ($project->propertie->details)
        <div class="room-details-area pt-100 pb-70">
            <div class="container-fluid m-0 p-0">
                <div class="section-title-two text-center">
                    <h2 class="margin-auto">مميزات <b class="section-color">المشروع</b></h2>
                </div>
                <div class="tab room-details-tab tab-color ">
                    <div class="tab_content current active pt-45">
                        <div class="tabs_item current">
                            <div class="room-details-item">
                                <div class="room-details-slider owl-carousel owl-theme">
                                    <div class="room-details-content"
                                        style="  font-size: 18px;
                                font-weight: bold;">
                                        <p>
                                            {!! $project->propertie->details !!}
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- End -->

    <!-- Facility Area-->
    <div class="room-details-area pt-100 pb-70" style="background-color: #004848;">
        <div class="container-fluid m-0 p-0">
            <div class="section-title-two text-center ">
                <h2 class="margin-auto" style="color: #cc9933">الضمانات</h2>
            </div>
            <div class=" room-details-tab tab-color  ">
                <div class=" current active pt-45" style="  margin-left: 50px;">
                    <div class="tabs_item current">
                        <div class="room-details-item">
                            <div class="room-details-slider owl-carousel owl-theme" style="background-color: #cc9933">
                                <div class="room-details-content" style="  padding-bottom: 45px;">
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
                                <div class="room-details-content" style="  padding-bottom: 45px;">
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
                                <div class="room-details-content" style="  padding-bottom: 45px;">
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
                                <div class="room-details-content" style="  padding-bottom: 45px;">
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
                                    <div class="room-details-content" style="  padding-bottom: 45px;">
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

    @if ($project->apartments->count() > 0)
        @foreach ($project->apartments as $index => $item)
            <!-- House Details Area -->
            <div class="house-details-area pt-5 pb-5  ">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        @if ($index % 2 == 0)
                            <div class="col-lg-6">
                                <div class="house-content margin-left">

                                    <h2>تفاصيل {{ $item->type }} ({{ $item->code }}):</h2>
                                    <ul class="house-list">
                                        {!! $item->details !!}
                                        @if ($item->price)
                                            <li>السعر : <b>{{ $item->price }} ريال</b></li>
                                        @endif
                                        <li> المساحة : <b>{{ $item->area }} متر</b></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-6 p-0 m-0" style="text-align: center">
                                <div class="">
                                    <div class="house-item">
                                        <img src="{{ $item->image_path }}" alt="Images">
                                    </div>
                                </div>
                            </div>
                        @else
                        <div class="col-lg-6 project-mobile">
                            <div class="house-content margin-left">

                                <h2>تفاصيل {{ $item->type }} ({{ $item->code }}):</h2>
                                <ul class="house-list">
                                    {!! $item->details !!}
                                    @if ($item->price)
                                        <li>السعر : <b>{{ $item->price }} ريال</b></li>
                                    @endif
                                    <li> المساحة : <b>{{ $item->area }} متر</b></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6 p-0 m-0 project-mobile" style="text-align: center">
                            <div class="">
                                <div class="house-item">
                                    <img src="{{ $item->image_path }}" alt="Images">
                                </div>
                            </div>
                        </div>
                        {{-- hidden --}}
                            <div class="col-lg-6 p-0 m-0 mt-3 project-desktop" style="  text-align: center;">
                                <div class="">
                                    <div class="house-details-item">
                                        <img src="{{ $item->image_path }}" alt="Images">

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mt-3 project-desktop">
                                <div class="house-content house-margin">
                                    <h2>تفاصيل {{ $item->type }} ({{ $item->code }}):</h2>
                                    <ul class="house-list">
                                        {!! $item->details !!}
                                        @if ($item->price)
                                            <li>السعر : <b>{{ $item->price }} ريال</b></li>
                                        @endif
                                        <li> المساحة : <b>{{ $item->area }} متر</b></li>
                                    </ul>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    @endif
    <!-- House Details Area End -->


@endsection
