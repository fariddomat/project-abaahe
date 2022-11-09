<!-- Preloader -->
        {{-- <div class="preloader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="spinner">
                        <div class="circle1"></div>
                        <div class="circle2"></div>
                        <div class="circle3"></div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- End Preloader -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="index.html" class="logo">
                    <img src="{{ asset('home/assets/img/logos/footer-logo.png') }}" alt="Logo">
                </a>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <div class="container-fluid">
                    <nav class="container-max navbar navbar-expand-md navbar-light ">
                        <a class="navbar-brand" href="index.html">
                            <img src="{{ asset('logo.png') }}" alt="Logo" style="max-height: 100px">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="{{ route('home') }}" class="nav-link active">
                                        @lang('site.home')
                                        <i class='bx bx-home'></i>
                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('categories') }}" class="nav-link">
                                        @lang('site.categories')
                                        <i class='bx bx-buildings'></i>

                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('projects') }}" class="nav-link">
                                        @lang('site.projects')
                                        <i class="bx bx-building"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="about.html" class="nav-link">
                                       من نحن؟
                                       <i class="bx bx-edit"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="about.html" class="nav-link">
                                        تواصل بنا
                                        <i class="bx bx-phone"></i>
                                    </a>
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
