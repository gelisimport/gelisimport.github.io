<?php
$Sayfa = "Gelişimport ";
include("inc/gelisimport/gelisimportHead.php");
include("inc/gelisimport/gelisimportPageWrapper.php");
include("inc/gelisimport/gelisimportPageSlider.php");
include("inc/gelisimport/gelisimportPageContainer.php");
?>


<!-- Content wrapper scroll start -->
<div class="content-wrapper-scroll">
    <!-- Content wrapper start -->
    <div class="content-wrapper">
        <!-- Row start -->
        <div class="row gutters">
            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="card gradient-teal card-450">
                    <div class="gradient-vertical-strip"></div>
                    <button type="button" class="download-icon download-reports">
                        <img src="img/download.svg" alt="Download"/>
                    </button>
                    <div class="card-body">
                        <div class="card-title">
                            Raporlar
                        </div>
                        <div id="earningsGraph"></div>
                    </div>
                </div>
                <div class="card gradient-teal-cream card-170">
                    <div class="card-body">
                        <div class="notifications-container">
                            <div class="notify-details-block">
                                <div class="notify-icon">
                                    <i
                                        class="icon-notifications_none blocks-img animate__animated animate__swing animate__infinite infinite"
                                    ></i>
                                </div>
                                <div class="notify-details">
                                    <h5>Bildirimler</h5>
                                    <h3>125</h3>
                                    <div class="notify-high-low">+7.8%</div>
                                </div>
                            </div>
                            <div
                                id="notificationsGraph"
                                class="apex-hide-lines"
                            ></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="card gradient-orange2 card-270">
                    <div class="gradient-vertical-strip"></div>
                    <button type="button" class="download-icon download-reports">
                        <img src="img/download.svg" alt="Download"/>
                    </button>
                    <div class="card-body">
                        <div class="card-title">Müşteriler</div>
                        <div class="subscribers">
                            <div class="total-subscribers">695</div>
                            <a href="subscribers.html" class="subscribers-status" target="_blank"
                            >Tüm Müşterileri Gör</a
                            >
                        </div>
                    </div>
                </div>
                <div class="card gradient-green card-330">
                    <div class="gradient-vertical-strip"></div>
                    <button type="button" class="download-icon download-reports">
                        <img src="img/download.svg" alt="Download"/>
                    </button>
                    <div class="card-body">
                        <div class="card-title">Aylık<br/>Siparişler</div>
                        <div id="ordersGraph" class="apex-hide-lines"></div>
                        <div class="orders-badge">2765</div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="card gradient-teal-cream card-210">
                    <div class="card-body">
                        <!-- Row start -->
                        <div class="row gutters">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="earnings">
                                    <div id="weeklyEarnings"></div>
                                    <p>Haftalık Kazançlar</p>
                                    <h3>$2,590</h3>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="earnings">
                                    <div id="monthlyEarnings"></div>
                                    <p>Aylık Kazançlar</p>
                                    <h3>$9,750</h3>
                                </div>
                            </div>
                        </div>
                        <!-- Row end -->
                    </div>
                </div>
                <div class="card gradient-yellow card-170">
                    <div class="card-body">
                        <div class="active-users-container">
                            <div class="active-users-details">
                                <div class="details">
                                    <h6>Aktif Kullanıcılar</h6>
                                    <h3>6500</h3>
                                    <span class="active-users-high-low">+21.5%</span>
                                </div>
                                <div id="signupsGraph" class="apex-hide-lines"></div>
                                <div class="active-users-icon">
                                    <i class="icon-av_timer"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="card gradient-teal-brown card-390">
                    <div class="gradient-vertical-strip"></div>
                    <a href="contacts.html" class="download-icon" target="_blank">
                        <img src="img/settings.svg" alt="Settings"/>
                    </a>
                    <div class="card-body">
                        <div class="card-title">
                            Adminler &amp;<br/>
                            Üyeler
                        </div>
                        <ul class="admins-container">
                            <li>
                                <a href="account-settings.html" target="_blank">
                                    <img src="img/user5.png" class="avatar" alt="Admin"/>
                                    <div class="admin-details">
                                        <h6>Ömer Şamil Doğan</h6>
                                        <div class="admin-type">Admin</div>
                                    </div>
                                    <div class="admin-more">
                                        <i class="icon-arrow_forward_ios"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="account-settings.html" target="_blank">
                                    <img src="img/user.png" class="avatar" alt="Admin"/>
                                    <div class="admin-details">
                                        <h6>Nilay Çezik</h6>
                                        <div class="admin-type">Admin</div>
                                    </div>
                                    <div class="admin-more">
                                        <i class="icon-arrow_forward_ios"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="account-settings.html" target="_blank">
                                    <img src="img/user3.png" class="avatar" alt="Admin"/>
                                    <div class="admin-details">
                                        <h6>Yasin Bodur</h6>
                                        <div class="admin-type">Member</div>
                                    </div>
                                    <div class="admin-more">
                                        <i class="icon-arrow_forward_ios"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row end -->

    </div>
    <!-- Content wrapper end -->
    <?php
    include("inc/footer.php");
    ?>
</div>
<!-- Content wrapper scroll end -->
</div>
<!-- *************
    ************ Main container end *************
************* -->
</div>
<!-- Page wrapper end -->

<!-- Required jQuery first, then Bootstrap Bundle JS -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/moment.js"></script>

<!-- Overlay Scroll JS -->
<script src="vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
<script src="vendor/overlay-scroll/custom-scrollbar.js"></script>

<!-- Apex Charts -->
<script src="vendor/apex/apexcharts.min.js"></script>
<script src="vendor/apex/custom/home/earningsGraph.js"></script>
<script src="vendor/apex/custom/home/ordersGraph.js"></script>
<script src="vendor/apex/custom/home/notificationsGraph.js"></script>
<script src="vendor/apex/custom/home/signupsGraph.js"></script>

<!-- Circleful Charts -->
<script src="vendor/circliful/circliful.min.js"></script>
<script src="vendor/circliful/circliful.custom.js"></script>

<!-- Main Js Required -->
<script src="js/main.js"></script>
</body>
</html>

