@include('admin.layouts.head')

<body>
<!-- Preloader -->
<div id="droba-loader">
    <div class="loader"></div>
</div>
<!--Preloader-->

<!-- ======================================
******* Page Wrapper Area Start **********
======================================= -->
<div class="ecaps-page-wrapper">
    <!-- Sidemenu Area -->
    <div class="ecaps-sidemenu-area">
        <!-- Desktop Logo -->
        <div class="ecaps-logo">
            <a href="{{'/'}}"><img class="desktop-logo" src="{{asset('backend/img/core-img/logo.png')}}" alt="Desktop Logo"> <img class="small-logo" src="{{asset('backend/img/core-img/small-logo.png')}}" alt="Mobile Logo"></a>
        </div>

        <!-- Side Nav -->
        <div class="ecaps-sidenav" id="ecapsSideNav">
            <!-- Side Menu Area -->
            <div class="side-menu-area">
                <!-- Sidebar Menu -->
@include('admin.layouts.navbar')
            </div>
        </div>
    </div>

    <!-- Page Content -->
    <div class="ecaps-page-content">
        <!-- Top Header Area -->
      @include('admin.layouts.header')

@yield('content')
    </div>

   @include('admin.layouts.footer')
        </div>
<!-- ======================================
********* Page Wrapper Area End ***********
======================================= -->

@include('admin.layouts.script')
