@extends('home._layouts._app')

@section('content')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg8">
        <div class="container-fluid">
            <div class="container-max">
                <div class="inner-title">
                    {{-- <span>@lang('site.categories')</span> --}}
                    <h2>
                        <b class="section-color2">
تحديثات
                        </b> أباهي
                    </h2>
                    {{-- <a href="{{ route('profileDownload') }}" target="_blank" class="default-btn default-hot-toddy text-white">
                        تحميل البروفايل
                        <i class='bx bx-save'></i>
                    </a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Property Section Two -->
    <section class="property-section-two pt-100 pb-70">
        <div class="container-fluid">
            <div class="container-max">
                <div class="property-section-title-two">
                    <div class="section-title-two text-center">
                        <h2>
                            تصفح تصنيفات المشاريع المنفذة <b class="section-color2">و قيد الإنشاء</b>
                        </h2>
                    </div>
                </div>

                <div class="row pt-45">

                    @if ($categories->count() > 0)
                        @foreach ($categories as $item)
                            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                                <div class="property-card">
                                    <a href="{{ route('category', $item->id) }}">
                                        <img src="{{ $item->image_path }}" alt="Images">
                                    </a>
                                    <div class="content">
                                        <span>عدد المشاريع {{ $item->projects->count() }}</span>
                                        <a href="{{ route('category', $item->id) }}">
                                            <h3>{{ $item->name }}</h3>
                                        </a>
                                        <p>{{ $item->description }}</p>
                                        <a href="{{ route('category', $item->id) }}" class="learn-more-btn">
                                            <i class='bx bx-right-arrow-alt'></i>
                                            تصفح المشاريع
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h4>لم يتم إضافة تصنيفات بعد</h4>
                    @endif



                    <div class="col-lg-12 col-md-12">
                        <div class="pagination-area text-center">
                            {{ $categories->links() }}


                            {{-- link --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Property Section Two End -->

    {{-- contact area --}}
    <div id="contact" class="map-area-two">
        <div class="container-fluid m-0 p-0 maps">
            {{-- <iframe
                src="https://www.google.com/maps/d/embed?mid=1Dt0DAlVYal47pNOXy20K08p3qpE&hl=en&ehbc=2E312"
                allowfullscreen="" aria-hidden="false" tabindex="0" style="pointer-events: none;"></iframe> --}}
                <img src="{{ asset('w.jpg') }}" style="width: 100%; height: 90vh;; min-height: 580px" alt="">

            <div class="contact-wrap" style="top: 15px !important;">
                <div class="contact-form" style="border-radius: 25px; padding-top: 35px">
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
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message" placeholder="رسالتك هنا"></textarea>
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
    {{-- end contact area --}}
@endsection
