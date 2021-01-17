<?php 
    include "view/layout/head-tour-detail.php";
    require "dao/tour.php";
?>

    <div class="app__content">
        <div class="content_header">
            <div class="grid wide">
                <div class="row">
                    <div class="col l-12">
                        <ul class="content__top">
                            <li class="content__item"><i class="fas fa-home"></i></li>
                            <li class="content__item"><a href="">Trang chủ </a></li>
                            <li class="content__item">/</li>
                            <li class="content__item">Trang cá nhân</li>
                            <li class="content__item">/</li>
                            <li class="content__item">Kỳ nghĩ của tôi</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="content_profile">
            <div class="grid wide">
                <div class="row">
                    <div class="col l-3 m-12 c-12">
                        <div class="navbar-profile">
                            <div class="user-navigation-wrap">
                                <div class="circle-user">
                                    <div class="circle-user__wrapper">
                                        <img class="circle-user__img" src="https://lh3.googleusercontent.com/-D5zCwRaRtCU/AAAAAAAAAAI/AAAAAAAAAAA/AMZuuclxYra4gxkmnKXykmIfDmJRpGY16Q/s96-c/photo.jpg" alt="">
                                    </div>
                                </div>
                                <div class="user-info">
                                    <p class="user-name">Thiên</p>
                                </div>
                                <ul class="user-menu">
                                    <a class="user-link" href="index.php?page=trip"><li class="user-content">Kỳ nghĩ của tôi</li></a>
                                    <a class="user-link" href="index.php?page=reward"><li class="user-content">Ưu đãi cho bạn</li></a>
                                    <a class="user-link" href="index.php?page=profile"><li class="user-content">Hồ sơ của tôi</li></a>
                                </ul>
                            </div>           
                        </div>
                    </div>
                    <div class="col l-9 m-12 c-12 hide-on-moblile-tablet">
                        <div class="table-line">
                            <div class="table-head">
                                <ul class="table-item">
                                    <li class="table-padding table--active">
                                        <a class="table-link table--active"  href="">Kỳ nghĩ sắp tới</a>
                                    </li>
                                    <li class="table-padding">
                                        <a class="table-link" href="">Kỳ nghĩ đã đi</a>
                                    </li>
                                    <li class="table-padding">
                                        <a class="table-link" href="">Voucher</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="trip-content">
                            <div class="trip-item">
                                <img class="trip-img" src="https://member.ivivu.com/assets/img/user-dashboard/emptytrip.png" alt="">
                                <p  class="empty-text">Quý khách chưa có kế hoạch cho chuyến đi sắp tới.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    require "view/layout/footer-detail.php";
?>

