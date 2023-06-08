<!-- *************
    ************ Main container start *************
************* -->
<div class="main-container">
    <!-- Page header starts -->
    <div class="page-header">
        <!-- Breadcrumb container start -->
        <div class="breadcrumb-container">
            <!-- Toggle sidebar start -->
            <div class="toggle-sidebar" id="toggle-sidebar">
                <i class="icon-menu"></i>
            </div>
            <!-- Toggle sidebar end -->

            <!-- Breadcrumb start -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <i class="icon-house_siding"></i>
                    <a href="dashboard.php"><?php echo $Sayfa ?> Anasayfa</a>
                </li>
                <li class="breadcrumb-item breadcrumb-active" aria-current="page">
                    Yönetim Paneli
                </li>
            </ol>
            <!-- Breadcrumb end -->
        </div>
        <!-- Breadcrumb container end -->

        <!-- Header actions ccontainer start -->
        <div class="header-actions-container">
            <!-- Search container start -->
            <div class="search-container">
                <!-- Search input group start -->
                <div class="input-group">
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Search..."
                    />
                    <button class="btn" type="button">
                        <i class="icon-search"></i>
                    </button>
                </div>
                <!-- Search input group end -->
            </div>
            <!-- Search container end -->

            <!-- Header actions start -->
            <ul class="header-actions">
                <li class="dropdown d-none d-md-block">
                    <a
                        href="#"
                        id="countries"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                    >
                        <img
                            src="img/flags/1x1/tr.svg"
                            class="flag-img"
                            alt="Turkey"
                        />
                    </a>
                    <div
                        class="dropdown-menu dropdown-menu-end mini"
                        aria-labelledby="countries"
                    >
                        <div class="country-container">
                            <a href="index.html">
                                <img src="img/flags/1x1/tr.svg" alt="Turkey"/>
                            </a>
                            <a href="index.html">
                                <img src="img/flags/1x1/us.svg" alt="USA"/>
                            </a>
                        </div>
                    </div>
                </li>
                </li>
                <li class="dropdown d-none d-md-block">
                    <a
                        href="#"
                        id="bookmarks"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                    >
                        <i class="icon-star_outline"></i>
                    </a>
                    <div
                        class="dropdown-menu dropdown-menu-end lrg"
                        aria-labelledby="bookmarks"
                    >
                        <div class="bookmarks-container">
                            <a href="https://www.facebook.com/girisimport" class="bookmark-block" target="_blank">
                                <img src="img/social/facebook.svg" alt="Facebook"/>
                                <h5>Facebook</h5>
                            </a>
                            <a href="https://www.instagram.com/girisimport/" class="bookmark-block" target="_blank">
                                <img src="img/social/instagram.svg" alt="Instagram"/>
                                <h5>Instagram</h5>
                            </a>
                            <a href="https://www.youtube.com/@GirisimPort" class="bookmark-block" target="_blank">
                                <img src="img/social/youtube.svg" alt="Youtube"/>
                                <h5>Youtube</h5>
                            </a>
                            <a href="https://www.linkedin.com/company/girisimport/" class="bookmark-block"
                               target="_blank">
                                <img src="img/social/linkedin.svg" alt="Linked-In"/>
                                <h5>Linked-In</h5>
                            </a>
                            <a href="https://girisimport.com/" class="bookmark-block" target="_blank">
                                <img src="img/social/website.svg" alt="Girişimport Website"/>
                                <h5>Girişimport</h5>
                            </a>
                            <a href="https://gelisimport.com/" class="bookmark-block" target="_blank">
                                <img src="img/social/website.svg" alt="Gelisimport Website"/>
                                <h5>Gelişimport</h5>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="dropdown d-none d-md-block">
                    <a
                        href="#"
                        id="notifications"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                    >
                        <i
                            class="icon-notifications_none animate__animated animate__swing animate__infinite infinite"
                        ></i>
                        <span
                            class="count-label gradient-red animate__animated animate__heartBeat animate__infinite infinite"
                        >2</span
                        >
                    </a>
                    <div
                        class="dropdown-menu dropdown-menu-end lrg"
                        aria-labelledby="notifications"
                    >
                        <div class="scroll240">
                            <ul class="header-notifications">
                                <li class="gradient-grey">
                                    <a href="#">
                                        <div class="user-img">
                                            <img src="img/user.png" alt="User"/>
                                        </div>
                                        <div class="details">
                                            <div class="user-title">Larkyn</div>
                                            <div class="noti-details">
                                                Check out every table in detail.
                                            </div>
                                            <div class="noti-date">Aug 25, 03:00 pm</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="gradient-grey">
                                    <a href="#">
                                        <div class="user-img">
                                            <img src="img/user2.png" alt="User"/>
                                        </div>
                                        <div class="details">
                                            <div class="user-title">Braxten</div>
                                            <div class="noti-details">Approved new design.</div>
                                            <div class="noti-date">Aug 21, 12:00 am</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="gradient-grey">
                                    <a href="#">
                                        <div class="user-img">
                                            <img src="img/user3.png" alt="User"/>
                                        </div>
                                        <div class="details">
                                            <div class="user-title">Maria</div>
                                            <div class="noti-details">
                                                Membership has been ended.
                                            </div>
                                            <div class="noti-date">Aug 18, 09:30 am</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="gradient-grey">
                                    <a href="#">
                                        <div class="user-img">
                                            <img src="img/user5.png" alt="User"/>
                                        </div>
                                        <div class="details">
                                            <div class="user-title">Alex</div>
                                            <div class="noti-details">Design Review.</div>
                                            <div class="noti-date">Aug 15, 09:30 am</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="gradient-green">
                                    <a href="#">
                                        <div class="user-img">
                                            <img src="img/user6.png" alt="User"/>
                                        </div>
                                        <div class="details">
                                            <div class="user-title">Sunny</div>
                                            <div class="noti-details">UI Discussion</div>
                                            <div class="noti-date">Aug 10, 09:30 am</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <a
                        href="#"
                        id="userSettings"
                        class="user-settings"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                    >
                        <span class="user-name d-none d-md-block">Ömer Şamil Doğan</span>
                        <span class="avatar">
										<img src="img/user5.png" alt="User Avatar"/>
										<span class="status online"></span>
									</span>
                    </a>
                    <div
                        class="dropdown-menu dropdown-menu-end md"
                        aria-labelledby="userSettings"
                    >
                        <div class="header-profile-avatar">
                            <img src="img/user.png" alt="Avatar"/>
                        </div>
                        <div class="header-profile-block">
                            <h5>Ömer Şamil Doğan</h5>
                            <p>Admin</p>
                        </div>
                        <div class="header-profile-actions">
                            <a href="profile.html" class="gradient-blue"
                            ><i class="icon-person_outline"></i>Profile</a
                            >
                            <a href="account-settings.html" class="gradient-green"
                            ><i class="icon-edit_road"></i>Settings</a
                            >
                            <a href="login.html" class="gradient-red"
                            ><i class="icon-power_settings_new"></i>Logout</a
                            >
                        </div>
                    </div>
                </li>
            </ul>
            <!-- Header actions end -->
        </div>
        <!-- Header actions ccontainer end -->
    </div>
    <!-- Page header ends -->