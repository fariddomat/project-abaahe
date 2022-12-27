<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true"
    data-img="theme-assets/images/backgrounds/02.jpg">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('admin.home') }}">
                    <i class="fa fa-tachometer"></i>
                    <h3 class="brand-text">@lang('site.Admin_panel')</h3>
                </a></li>
            <li class="nav-item d-md-none"><a class="nav-link close-navbar"  data-toggle="main-menu-content" data-target=".main-menu-content" aria-haspopup="true" aria-expanded="false"><i class="ft-x"></i></a></li>
        </ul>
    </div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" {{ Request::is('admin/dashboard') ? 'active' : '' }} "><a href="{{ route('admin.home') }}"><i
                        class="ft-home"></i><span class="menu-title" data-i18n="">@lang('site.dashboard')</span></a>
            </li>
            <li class=" nav-item  {{ Request::is('admin/categories*') ? 'active' : '' }} "><a
                    href="{{ route('admin.categories.index') }}"><i class="fa fa-building-o"></i><span
                        class="menu-title" data-i18n="">@lang('site.categories')</span></a>
            </li>
            <li class=" nav-item  {{ Request::is('admin/projects*') ? 'active' : '' }} "><a
                    href="{{ route('admin.projects.index') }}"><i class="fa fa-institution"></i><span class="menu-title"
                        data-i18n="">@lang('site.projects')</span></a>
            </li>

            <li class=" nav-item"><a href="{{ route('admin.setting.logs') }}"><i class="fa fa-history"></i><span
                        class="menu-title" data-i18n="">سجل العمليات</span></a>
            </li>
            <li class=" nav-item"><a href="{{ route('admin.promoters.index') }}"><i class="fa fa-users"></i><span
                        class="menu-title" data-i18n="">الوسطاء</span></a>
            <li class=" nav-item"><a href="{{ route('admin.setting.contact') }}"><i class="fa fa-book"></i><span
                        class="menu-title" data-i18n="">الرسائل</span></a>
            </li>
            {{-- <li class=" nav-item"><a href="{{ route('admin.setting.cover') }}"><i class="fa fa-image"></i><span
                        class="menu-title" data-i18n="">الصور</span></a>
            </li> --}}

            {{-- <li class=" nav-item"><a href="{{ route('admin.setting.settingsText') }}"><i class="fa fa-cogs"></i><span
                        class="menu-title" data-i18n="">اعدادات المحتوى</span></a>
            </li> --}}

            <li class=" nav-item"><a href="{{ route('admin.setting.social') }}"><i class="fa fa-link"></i><span
                        class="menu-title" data-i18n="">مواقع التواصل</span></a>
            </li>


            <li class=" nav-item"><a href="{{ route('admin.setting.changePassword') }}"><i class="fa fa-lock"></i><span
                        class="menu-title" data-i18n="">تغيير كلمة السر</span></a>
            </li>
        </ul>
    </div><a class="btn btn-danger btn-block btn-glow btn-upgrade-pro mx-1" href="{{ route('home') }}"
        target="_blank">@lang('site.home')!</a>
    <div class="navigation-background"></div>
</div>
