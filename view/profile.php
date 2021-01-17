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
                            <li class="content__item">Hồ sơ của tôi</li>
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
                        <div class="navbar-info">
                            <div class="user-upload-img">
                                <div class="user-upload-img-name">
                                    <img class="upload-img" src="https://lh3.googleusercontent.com/-D5zCwRaRtCU/AAAAAAAAAAI/AAAAAAAAAAA/AMZuuclxYra4gxkmnKXykmIfDmJRpGY16Q/s96-c/photo.jpg" alt="">
                                    <p class="text-upload">
                                        <label class="btn-upload" for="">
                                            <a href="">Upload hình mới</a>
                                        </label>
                                    </p>
                                </div>
                            </div>
                            <div class="col l-12 dashboard-form">
                                <form action="">
                                    <div class="dashboard-item">
                                        <label class="col l-3 m-3 c-12 fullname-label" for="">Tên đầy đủ:</label>
                                        <div class="col l-9 m-3 c-12 form-name">
                                            <input class="form-input" type="text" class="input-name">
                                        </div>
                                    </div>
                                    <div class="dashboard-item">
                                        <div class="col l-3 m-3 c-12 phone-label"><label for="">Số di động:</label></div>
                                        <div class="col l-9 m-3 c-12 form-phone">
                                            <input class="form-input" type="text" class="input-phone">
                                        </div>
                                    </div>
                                    <div class="dashboard-item">
                                        <div class="col l-3 m-3 c-12 email-label"><label for="">Email:</label></div>
                                        <div class="col l-9 m-3 c-12 form-email">
                                            <input class="form-input" type="text" class="input-email">
                                        </div>
                                    </div>
                                    <div class="dashboard-item">
                                        <div class="col l-12 m-12 c-12 checkbox-password">
                                            <input type="checkbox" class="dashboard__checkbox">
                                            <label class="setting-password" for="">Đặt mật khẩu ( đăng nhập bằng email )</label>
                                        </div>
                                    </div>
                                    <div class="dashboard-item">
                                        
                                            <div class="col l-6 m-6 c-6 form-save">
                                                <button class="get-info" type="button">Lấy lại thông tin cũ</button>
                                            </div>
                                            <div class="col l-6 m-6 c-6 form-save">
                                                <button class="save-info" type="button">Lưu thay đổi</button>
                                            </div>
                                    </div>
                                </form>
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

