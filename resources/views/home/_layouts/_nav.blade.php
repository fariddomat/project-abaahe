<!-- Preloader -->
        <div class="preloader">
            <div class=" offset-md-3 offset-lg-0" style="text-align: center; padding-top: 150px">
                    <img src="{{ asset('abahee.png') }}" style="max-width: 250px;" alt="">

            </div>
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="spinner">
                        <div class="circle1"></div>
                        <div class="circle2"></div>
                        <div class="circle3"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Preloader -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
            {{-- <div class="mobile-nav">
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ asset('logo.PNG') }}" alt="Logo">
                </a>
            </div> --}}

            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <div class="container-fluid">
                    <nav class="container-max navbar navbar-expand-md navbar-light ">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img src="{{ asset('abahee.png') }}" alt="Logo" style="max-height: 60px">
                        </a>

                        <div class=" navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="{{ route('home') }}" class="nav-link {{ Request::is('/') ? 'active' : '' }} ">
                                        تحديثات المشاريع
                                        <i class='bx bx-home'></i>
                                    </a>

                                </li>
                                {{-- <li class="nav-item">
                                    <a href="{{ route('categories') }}" class="nav-link  {{ Request::is('categories') ? 'active' : '' }} ">
                                        @lang('site.categories')
                                        <i class='bx bx-buildings'></i>

                                    </a>
                                </li> --}}

                                {{-- <li class="nav-item">
                                    <a href="{{ route('categories') }}" class="nav-link  {{ Request::is('project*') ? 'active' : '' }}  {{ Request::is('projects') ? 'active' : '' }} ">
                                        @lang('site.projects')
                                        <i class="bx bx-building"></i>
                                    </a>
                                </li> --}}
                                {{-- <li class="nav-item">
                                    <a href="{{ route('home') }}#about" class="nav-link">
                                       من نحن؟
                                       <i class="bx bx-edit"></i>
                                    </a>
                                </li> --}}
                                <li class="nav-item">
                                    <a href="{{ route('contactPage') }}" class="nav-link">
                                        اتصل بنا
                                        <i class="bx bx-phone"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('login') }}">
                                    <i class="fa fa-sign-in "></i></a>
                                </li>
                            </ul>


                            {{-- <div class="appointment-btn">
                                <a href="#" class="default-btn default-bg-buttercup">
                                    Schedule appointment
                                    <i class='bx bx-right-arrow-alt'></i>
                                </a>
                            </div> --}}
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->
