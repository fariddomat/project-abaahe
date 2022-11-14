<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true"
        data-img="theme-assets/images/backgrounds/02.jpg">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('admin.home') }}">
                    <i class="fa fa-tachometer"></i>
                        <h3 class="brand-text">@lang('site.Admin_panel')</h3>
                    </a></li>
                <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
            </ul>
        </div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" {{ Request::is('admin/dashboard') ? 'active' : '' }} "><a href="{{ route('admin.home')}}"><i class="ft-home"></i><span class="menu-title"
                            data-i18n="">@lang('site.dashboard')</span></a>
                </li>
                <li class=" nav-item  {{ Request::is('admin/categories*') ? 'active' : '' }} "><a href="{{ route('admin.categories.index') }}"><i class="fa fa-building-o"></i><span class="menu-title"
                            data-i18n="">@lang('site.categories')</span></a>
                </li>
                <li class=" nav-item  {{ Request::is('admin/projects*') ? 'active' : '' }} "><a href="{{ route('admin.projects.index') }}"><i class="fa fa-institution"></i><span class="menu-title"
                            data-i18n="">@lang('site.projects')</span></a>
                </li>
                <li class=" nav-item"><a href=""><i class="ft-users"></i><span class="menu-title"
                            data-i18n="">@lang('site.users')</span></a>
                </li>
            </ul>
        </div><a class="btn btn-danger btn-block btn-glow btn-upgrade-pro mx-1" href="/"
            target="_blank">@lang('site.home')!</a>
        <div class="navigation-background"></div>
    </div>
