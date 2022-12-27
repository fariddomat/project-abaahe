@extends('home._layouts._app')

@section('content')







    <!-- Contacnt Area -->
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
    <!-- Contact Area End -->
@endsection
