<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>SARA Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Changa:wght@400;700&display=swap" rel="stylesheet">
        <style>
            * {
                font-family: 'Changa', sans-serif;
            }

            h1, h2, h3, h4, h5, h6 {
                font-family: 'Changa', sans-serif !important;
            }
        </style>
        
        <link rel="shortcut icon" href="{{ asset('../assets_' . app()->getLocale() . '/images/favicon.ico') }}"  />
        

        <link href="{{ asset('../assets_' . app()->getLocale() . '/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('../assets_' . app()->getLocale() . '/css/core.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('../assets_' . app()->getLocale() . '/css/components.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('../assets_' . app()->getLocale() . '/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('../assets_' . app()->getLocale() . '/css/pages.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('../assets_' . app()->getLocale() . '/css/menu.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('../assets_' . app()->getLocale() . '/css/responsive.css') }}" rel="stylesheet" type="text/css" />
        {{-- <link href="{{ asset('../assets_' . app()->getLocale() . '/css/style.css') }}" rel="stylesheet" type="text/css" /> --}}
        

        

        
        <script src="{{ asset('../assets_' . app()->getLocale() . '/js/modernizr.min.js') }}"></script>

    </head>


    <body>


        <!-- Navigation Bar-->
        <header id="topnav">

            <div class="topbar-main " >
                <div class="container">
        
                    <!-- Logo container-->
                    <div class="logo">
                        <a href="#" class="logo">
                            <span>@lang('dashboard.bacora')</span>
                        </a>
                    </div>
                    <!-- End Logo container-->
                    <div class="menu-extras">
        
                        <ul class="nav navbar-nav navbar-right pull-right ">
        
                            <li class="dropdown navbar-c-items">
                                <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><img src="{{ asset('../assets_' . app()->getLocale() . '/images/users/avatar-1.jpg') }}" alt="user-img" class="img-circle"> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="user_edit.php?id=<?php echo ''; ?>"><i class="ti-user text-custom m-r-10"></i> @lang('dashboard.profile')</a></li>
                                    <li class="divider"></li>
                                    <li><a href="logout" onclick="logout(event)"><i class="ti-power-off text-danger m-r-10"></i>@lang('dashboard.logout')</a></li>
                                </ul>
                            </li>
                        </ul>
                        {{-- <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div> --}}
                    </div>
        
                </div>
            </div>


            <div class="navbar-custom">
                <div class="container">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                            <li class="has-submenu">
                                <a href="{{route('dashboard')}}"><i class="fa fa-home"></i>@lang('dashboard.home')</a>
                            </li>
                            <li id="itemCategory" class="has-submenu">
                                <a href="#"><i class="fa fa-sitemap"></i>@lang('dashboard.categories')</a>
                                <ul class="submenu">
                                    <li><a href="{{route('categories.index')}}">@lang('dashboard.viewAll')</a></li>
                                    <li><a href="{{route('categories.create')}}">@lang('dashboard.addCategory')</a></li>
                                </ul>
                            </li>
                            <li id="itemProducts" class="has-submenu">
                                <a href="#"><i class="fa fa-product-hunt"></i>@lang('dashboard.products')</a>
                                <ul class="submenu">
                                    <li><a href="{{route('products.index')}}">@lang('dashboard.viewAll')</a></li>
                                    <li><a href="{{route('products.create')}}">@lang('dashboard.addProduct')</a></li>
                                </ul>
                            </li>
                            <li id="itemSlider" class="has-submenu">
                                <a href="#"><i class="fa fa-picture-o"></i>@lang('dashboard.sliders')</a>
                                <ul class="submenu">
                                    <li><a href="{{route('sliders.index')}}">@lang('dashboard.viewAll')</a></li>
                                    <li><a href="{{route('sliders.create')}}">@lang('dashboard.addImage')</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('lang', app()->getLocale() == 'en' ? 'ar' : 'en') }}"><i class="md md-language"></i> <span style="color: black;">@lang('dashboard.lang')</span></a></li>
                            <li class="has-submenu">
                                <a href="{{route('dashboard.logout')}}" onclick="logout(event)"><i class="md md-swap-vert"></i>@lang('dashboard.logout')</a>
                            </li>
                        </ul>
                        <!-- End navigation menu -->
                    </div>
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        

            <form id="logout" method="POST" action="{{ route('dashboard.logout') }}">
                @csrf
            </form>

        </header>
        <!-- End Navigation Bar-->


     