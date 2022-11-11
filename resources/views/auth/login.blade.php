@extends('home._layouts._app')

@section('content')
    <!-- Sign In Area -->
    <div class="sign-in-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="user-all-content">
                        <div class="section-title-two text-center">
                            <span class="section-span-bg2">@lang('site.login')</span>
                            <h2>@lang('site.login') <b class="section-color2">إلى @lang('site.Admin_panel')</b></h2>
                        </div>
                    </div>

                </div>
                <div class="col-lg-7">
                    <div class="user-all-form">
                        <div class="contact-form">
                            <form id="" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <i class='bx bx-user'></i>
                                            <input type="text" name="email" id="name"
                                                class="form-control  @error('email') is-invalid @enderror" required
                                                data-error="Please enter your Username or Email"
                                                placeholder="@lang('site.email')">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert" style="margin-top: 25px;">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <i class='bx bx-lock-alt'></i>
                                            <input class="form-control @error('password') is-invalid @enderror"
                                                type="password" name="password" placeholder="@lang('site.password')">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert" style="margin-top: 25px;">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6 form-condition">
                                        <div class="agree-label">
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}
                                                id="chb1">
                                            <label for="chb1">
                                                تذكرني
                                            </label>
                                        </div>
                                    </div>



                                    <div class="col-lg-12 col-md-12 text-center">
                                        <button type="submit" class="default-btn default-bg-buttercup user-all-btn">
                                            @lang('site.login')
                                        </button>
                                    </div>


                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign In Area End -->
@endsection
