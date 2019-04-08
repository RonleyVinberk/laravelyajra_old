<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.2
Version: 3.7.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Metronic | Dashboard</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('global/plugins/font-awesome/css/font-awesome.min.css')}}" />
<link rel="stylesheet" href="{{asset('global/plugins/simple-line-icons/simple-line-icons.min.css')}}" />
<link rel="stylesheet" href="{{asset('global/plugins/bootstrap/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('global/plugins/uniform/css/uniform.default.css')}}" />
<link rel="stylesheet" href="{{asset('global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" />
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link rel="stylesheet" href="{{asset('global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css')}}" />
<link rel="stylesheet" href="{{asset('global/plugins/fullcalendar/fullcalendar.min.css')}}" />
<link rel="stylesheet" href="{{asset('global/plugins/jqvmap/jqvmap/jqvmap.css')}}" />
<!-- END PAGE LEVEL PLUGIN STYLES -->

<!-- BEGIN PAGE STYLES -->
<link href="https://datatables.yajrabox.com/css/datatables.bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('admin/pages/css/tasks.css')}}" />
<!-- END PAGE STYLES -->

<!-- BEGIN THEME STYLES -->
<link rel="stylesheet" href="{{asset('global/css/components.css')}}">
<link rel="stylesheet" href="{{asset('global/css/plugins.css')}}">
<link rel="stylesheet" href="{{asset('admin/layout/css/layout.css')}}">
<link rel="stylesheet" href="{{asset('admin/layout/css/themes/darkblue.css')}}">
<link rel="stylesheet" href="{{asset('admin/layout/css/custom.css')}}">
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="{{asset('../favicon.ico')}}"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<!-- BEGIN HEADER -->
<body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo page-container-bg-solid">
    @include('partial.header')

    {{-- start clearfix --}}
    <div class="clearfix"></div>
    {{-- end clearfix --}}

    {{-- start page-container --}}
    <div class="page-container">
        @include('partial.sidebar')
        @yield('master_index')
        
        {{-- start master data content --}}
        @yield('item_content')
        @yield('coupon_content')
        @yield('discount_content')
        @yield('customer_content')
        @yield('supplier_content')
        @yield('item_cat_content')
        {{-- end master data content --}}

        {{-- start transaction data content --}}
        @yield('sales_content')
        @yield('purchase_content')
        {{-- end transaction data content --}}
    </div>
    {{-- end page-container --}}

    @include('partial.footer')
</body>
</html>