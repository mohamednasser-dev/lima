<!--begin::Aside Menu-->
<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
    <!--begin::Menu Container-->
    <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1"
         data-menu-dropdown-timeout="500">
        <!--begin::Menu Nav-->
        <ul class="menu-nav">
            <li class="menu-item @if(request()->segment(1) == 'dashboard') menu-item-active  @endif"
                aria-haspopup="true">
                <a href="{{url('/dashboard')}}" class="menu-link">
                    <i class="menu-icon flaticon-home">
                        <span></span>
                    </i>
                    <span class="menu-text">الصفحة الرئيسية</span>
                </a>
            </li>

            @can('read-sliders')
                <li class="menu-item menu-item-submenu @if( Request::segment(1)== 'sliders' ) menu-item-open @endif"
                    aria-haspopup="true" data-menu-toggle="hover">
                    <a href="{{route('sliders')}}" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon-web"></i>
                        <span class="menu-text">صور العرض</span>
                    </a>
                </li>
            @endcan
            @can('read-cities')
                <li class="menu-item menu-item-submenu @if( Request::segment(1)== 'city' ) menu-item-open @endif"
                    aria-haspopup="true" data-menu-toggle="hover">
                    <a href="{{route('cities')}}" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon2-location"></i>
                        <span class="menu-text">الدول</span>
                    </a>
                </li>
            @endcan
            <li class="menu-item menu-item-submenu @if( Request::segment(1)== 'city' ) menu-item-open @endif"
                aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('cities')}}" class="menu-link menu-toggle">
                    <i class="menu-icon flaticon2-location"></i>
                    <span class="menu-text">الاقسام</span>
                </a>
            </li>
            <li class="menu-item menu-item-submenu @if( Request::segment(1)== 'city' ) menu-item-open @endif"
                aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('cities')}}" class="menu-link menu-toggle">
                    <i class="menu-icon flaticon2-location"></i>
                    <span class="menu-text">الفيديوهات</span>
                </a>
            </li>
            <li class="menu-item menu-item-submenu @if( Request::segment(1)== 'city' ) menu-item-open @endif"
                aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('cities')}}" class="menu-link menu-toggle">
                    <i class="menu-icon flaticon2-location"></i>
                    <span class="menu-text">المقالات</span>
                </a>
            </li>
            <li class="menu-item menu-item-submenu @if( Request::segment(1)== 'city' ) menu-item-open @endif"
                aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('cities')}}" class="menu-link menu-toggle">
                    <i class="menu-icon flaticon2-location"></i>
                    <span class="menu-text">الصفحات</span>
                </a>
            </li>
            @can('read-users')
                <li class="menu-item menu-item-submenu @if(request()->segment(1) == 'users') menu-item-open @endif "
                    aria-haspopup="true" data-menu-toggle="hover">
                    <a href="{{route('users')}}" class="menu-link menu-toggle">
                        <i class="menu-icon fas fa-user"></i>
                        <span class="menu-text">العملاء</span>
                    </a>
                </li>
            @endcan
            @can('read-admins')
                <li class="menu-item menu-item-submenu @if(request()->segment(1) == 'admins') menu-item-open @endif "
                    aria-haspopup="true" data-menu-toggle="hover">
                    <a href="{{route('admins')}}" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon-users-1"></i>
                        <span class="menu-text">المديرين</span>
                    </a>
                </li>
            @endcan
            @can('read-roles')
                <li class="menu-item menu-item-submenu @if(request()->segment(1) == 'roles') menu-item-open @endif "
                    aria-haspopup="true" data-menu-toggle="hover">
                    <a href="{{route('roles')}}" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon2-notepad"></i>
                        <span class="menu-text">الصلاحيات</span>
                    </a>
                </li>
            @endcan
            @can('read-settings')
                <li class="menu-item menu-item-submenu @if(request()->segment(1) == 'settings') menu-item-open @endif "
                    aria-haspopup="true" data-menu-toggle="hover">
                    <a href="{{route('settings')}}" class="menu-link menu-toggle">
                        <i class="menu-icon fas fa-cog"></i>
                        <span class="menu-text">الاعدادات</span>
                    </a>
                </li>
            @endcan
        </ul>
        <!--end::Menu Nav-->
    </div>
    <!--end::Menu Container-->
</div>
<!--end::Aside Menu-->
</div>
<!--end::Aside-->
<!--begin::Wrapper-->
<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
    <!--begin::Header-->
    <div id="kt_header" class="header header-fixed">
        <!--begin::Container-->
        <div class="container-fluid d-flex align-items-stretch justify-content-between">
            <!--begin::Header Menu Wrapper-->
            <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                <!--begin::Header Menu-->
            </div>
            <!--end::Header Menu Wrapper-->
            <!--begin::Topbar-->
            <div class="topbar">
                <!--begin::User-->
                <div class="topbar-item">
                    <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2"
                         id="kt_quick_user_toggle">
                        {{--                        <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>--}}
                        <span
                            class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{auth()->user()->name}}</span>
                        <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
											<span class="symbol-label font-size-h5 font-weight-bold">
                                            </span>
										</span>
                    </div>
                </div>
                <!--end::User-->
            </div>
            <!--end::Topbar-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Header-->

    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Page Heading-->
                @yield('breadcrumb')
                <!--end::Page Heading-->
                </div>
                <!--end::Info-->
            </div>
        </div>
        <!--end::Subheader-->


        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
