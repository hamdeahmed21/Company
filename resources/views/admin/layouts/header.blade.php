<header class="top-header-area d-flex align-items-center justify-content-between">
    <div class="left-side-content-area d-flex align-items-center">
        <!-- Mobile Logo -->
        <div class="mobile-logo mr-3 mr-sm-4">
            <a href="{{'/'}}"><img src="{{asset('backend/img/core-img/small-logo.png')}}" alt="Mobile Logo"></a>
        </div>

        <!-- Triggers -->
        <div class="ecaps-triggers mr-1 mr-sm-3">
            <div class="menu-collasped" id="menuCollasped">
                <i class="zmdi zmdi-menu"></i>
            </div>
            <div class="mobile-menu-open" id="mobileMenuOpen">
                <i class="zmdi zmdi-menu"></i>
            </div>
        </div>

        <!-- Left Side Nav -->
        <ul class="left-side-navbar d-flex align-items-center">
            <li class="nav-item dropdown ml-1 ml-sm-3">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Apps <i class="fa fa-angle-down"></i></button>
                <!-- Dropdown Menu -->
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                    <a href="#" class="dropdown-item">- Profile</a>
                    <a href="#" class="dropdown-item">- Messages</a>
                    <a href="#" class="dropdown-item">- Settings</a>
                </div>
            </li>
            <li class="hide-phone app-search">
                <form role="search" class=""><input type="text" placeholder="Search..." class="form-control"> <button type="submit" class="mr-0"><i class="fa fa-search"></i></button></form>
            </li>
        </ul>
    </div>

    <div class="right-side-navbar d-flex align-items-center justify-content-end">
        <!-- Mobile Trigger -->
        <div class="right-side-trigger" id="rightSideTrigger">
            <i class="ti-align-left"></i>
        </div>

        <!-- Top Bar Nav -->
        <ul class="right-side-content d-flex align-items-center">
            <li class="nav-item dropdown">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-notifications-active" aria-hidden="true"></i> <span class="active-status"></span></button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- Top Notifications Area -->
                    <div class="top-notifications-area">
                        <!-- Heading -->
                        <div class="notifications-heading">
                            <div class="heading-title">
                                <h6>Notifications</h6>
                            </div>
                            <span>5 New</span>
                        </div>

                        <div class="notifications-box" id="notificationsBox">
                            <a href="#" class="dropdown-item"><i class="ti-face-smile bg-success"></i><span>We've got something for you!</span></a>
                            <a href="#" class="dropdown-item"><i class="zmdi zmdi-notifications-active bg-danger"></i><span>Domain names expiring on Tuesday</span></a>
                            <a href="#" class="dropdown-item"><i class="ti-check"></i><span>Your commissions has been sent</span></a>
                            <a href="#" class="dropdown-item"><i class="ti-heart bg-success"></i><span>You sold an item!</span></a>
                            <a href="#" class="dropdown-item"><i class="ti-bolt bg-warning"></i><span>Security alert for your linked Google account</span></a>
                            <a href="#" class="dropdown-item"><i class="ti-face-smile bg-success"></i><span>We've got something for you!</span></a>
                            <a href="#" class="dropdown-item"><i class="zmdi zmdi-notifications-active bg-danger"></i><span>Domain names expiring on Tuesday</span></a>
                            <a href="#" class="dropdown-item"><i class="ti-check"></i><span>Your commissions has been sent</span></a>
                            <a href="#" class="dropdown-item"><i class="ti-heart bg-success"></i><span>You sold an item!</span></a>
                            <a href="#" class="dropdown-item"><i class="ti-bolt bg-warning"></i><span>Security alert for your linked Google account</span></a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/member-img/mail-6.jpg" alt=""></button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- User Profile Area -->
                    <div class="user-profile-area">
                        <div class="user-profile-heading">
                            <!-- Thumb -->
                            <div class="profile-thumbnail">
                                <img src="{{asset('backend/img/member-img/mail-6.jpg')}}" alt="">
                            </div>
                            <!-- Profile Text -->
                            <div class="profile-text">
                                <h6>Ajoy Das</h6>
                                <span>ajoydas@example.com</span>
                            </div>
                        </div>
                        <a href="#" class="dropdown-item"><i class="ti-user text-default" aria-hidden="true"></i> My profile</a>
                        <a href="#" class="dropdown-item"><i class="zmdi zmdi-email-open text-success" aria-hidden="true"></i> Messages</a>
                        <a href="#" class="dropdown-item"><i class="ti-settings text-default" aria-hidden="true"></i> Account settings</a>
                        <a href="#" class="dropdown-item"><i class="ti-heart text-purple" aria-hidden="true"></i> Support</a>
                        <a href="#" class="dropdown-item"><i class="ti-unlink text-warning" aria-hidden="true"></i> Sign-out</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>
