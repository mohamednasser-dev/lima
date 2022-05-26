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
            @can('read-categories')
                <li class="menu-item menu-item-submenu @if( Request::segment(1)== 'categories' ) menu-item-open @endif"
                    aria-haspopup="true" data-menu-toggle="hover">
                    <a href="{{route('categories')}}" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon-app"></i>
                        <span class="menu-text">الاقسام</span>
                    </a>
                </li>
            @endcan
            @can('read-posts')
            <li class="menu-item menu-item-submenu  @if( Request::segment(1)== 'posts')  menu-item-open @endif "
                aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                <span class="svg-icon menu-icon">
                <span class="svg-icon svg-icon-success svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Devices\TV1.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"/>
                        <path d="M4.5,6 L19.5,6 C20.8807119,6 22,6.97004971 22,8.16666667 L22,16.8333333 C22,18.0299503 20.8807119,19 19.5,19 L4.5,19 C3.11928813,19 2,18.0299503 2,16.8333333 L2,8.16666667 C2,6.97004971 3.11928813,6 4.5,6 Z M4,8 L4,17 L20,17 L20,8 L4,8 Z" fill="#000000" fill-rule="nonzero"/>
                        <polygon fill="#000000" opacity="0.3" points="4 8 4 17 20 17 20 8"/>
                        <rect fill="#000000" opacity="0.3" x="7" y="20" width="10" height="1" rx="0.5"/>
                    </g>
                </svg><!--end::Svg Icon-->
                </span>
            </span>
                    <span class="menu-text">المحتوى
                </span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item menu-item-parent" aria-haspopup="true">
                            <span class="menu-link">
                                <span class="menu-text">المحتوى</span>
                            </span>
                        </li>
                        <li class="menu-item @if( Request::segment(1)== 'posts' && Request::segment(2)== 'video') menu-item-active @endif "
                                aria-haspopup="true">
                            <a href="{{route('posts.index',['type'=>'video'])}}" class="menu-link">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="svg-icon menu-icon">
                                    <span class="svg-icon svg-icon-success svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Devices\Video-camera.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <rect fill="#000000" x="2" y="6" width="13" height="12" rx="2"/>
                                                <path d="M22,8.4142119 L22,15.5857848 C22,16.1380695 21.5522847,16.5857848 21,16.5857848 C20.7347833,16.5857848 20.4804293,16.4804278 20.2928929,16.2928912 L16.7071064,12.7071013 C16.3165823,12.3165768 16.3165826,11.6834118 16.7071071,11.2928877 L20.2928936,7.70710477 C20.683418,7.31658067 21.316583,7.31658098 21.7071071,7.70710546 C21.8946433,7.89464181 22,8.14899558 22,8.4142119 Z" fill="#000000" opacity="0.3"/>
                                            </g>
                                        </svg><!--end::Svg Icon-->
                                    </span>
                                </span>
                                <span class="menu-text">
                                    الفيديوهات
                                </span>
                            </a>
                        </li>
                        <li class="menu-item @if( Request::segment(1)== 'posts' && Request::segment(2)== 'article') menu-item-active @endif"
                            aria-haspopup="true">
                            <a href="{{route('posts.index',['type'=>'article'])}}" class="menu-link">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="svg-icon menu-icon">
                                    <span class="svg-icon svg-icon-success svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Clipboard-list.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3"/>
                                                <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000"/>
                                                <rect fill="#000000" opacity="0.3" x="10" y="9" width="7" height="2" rx="1"/>
                                                <rect fill="#000000" opacity="0.3" x="7" y="9" width="2" height="2" rx="1"/>
                                                <rect fill="#000000" opacity="0.3" x="7" y="13" width="2" height="2" rx="1"/>
                                                <rect fill="#000000" opacity="0.3" x="10" y="13" width="7" height="2" rx="1"/>
                                                <rect fill="#000000" opacity="0.3" x="7" y="17" width="2" height="2" rx="1"/>
                                                <rect fill="#000000" opacity="0.3" x="10" y="17" width="7" height="2" rx="1"/>
                                            </g>
                                        </svg><!--end::Svg Icon-->
                                    </span>
                                </span>
                                <span class="menu-text">
                            المقالات
                        </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            @endcan

            @can('read-users')
                <li class="menu-item menu-item-submenu @if(request()->segment(1) == 'users') menu-item-open @endif "
                    aria-haspopup="true" data-menu-toggle="hover">
                    <a href="{{route('users')}}" class="menu-link menu-toggle">
                        <i class="menu-icon fas fa-user"></i>
                        <span class="menu-text">العملاء</span>
                    </a>
                </li>
            @endcan
            @can('read-subscriptions')
                <li class="menu-item menu-item-submenu @if(request()->segment(1) == 'subscriptions') menu-item-open @endif "
                    aria-haspopup="true" data-menu-toggle="hover">
                    <a href="{{route('subscriptions')}}" class="menu-link menu-toggle">
                        <i class="menu-icon fa fa-rocket"></i>
                        <span class="menu-text">
                            الاشتراكات
                             @if(new_subscription() > 0)
                                &nbsp;
                                &nbsp;
                                <span style="width: 20px;height: 20px;"
                                      href="#" class="btn btn-icon btn-danger btn-circle pulse pulse-danger">
                                    {{new_subscription()}}
                                </span>
                            @endif
                        </span>
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
            @can('read-pages')
            <li class="menu-item menu-item-submenu @if( Request::segment(1)== 'pages' ) menu-item-open @endif"
                aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('pages')}}" class="menu-link menu-toggle">
                    <i class="menu-icon flaticon2-paper"></i>
                    <span class="menu-text">صفحات التطبيق</span>
                </a>
            </li>
            <li class="menu-item menu-item-submenu @if( Request::segment(1)== 'screens' ) menu-item-open @endif"
                aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('screens')}}" class="menu-link menu-toggle">
                    <i class="menu-icon flaticon2-browser"></i>
                    <span class="menu-text">الشاشات الترحيبية</span>
                </a>
            </li>
            @endcan
            @can('read-teams')
            <li class="menu-item menu-item-submenu @if( Request::segment(1)== 'teams' ) menu-item-open @endif"
                aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('teams')}}" class="menu-link menu-toggle">
                    <i class="menu-icon flaticon2-user-1"></i>
                    <span class="menu-text">فريق العمل</span>
                </a>
            </li>
            @endcan
            @can('read-links')
                <li class="menu-item menu-item-submenu @if( Request::segment(1)== 'links' ) menu-item-open @endif"
                    aria-haspopup="true" data-menu-toggle="hover">
                    <a href="{{route('links')}}" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon-tool-1"></i>
                        <span class="menu-text">الروابط</span>
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
