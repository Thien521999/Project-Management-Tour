<?php 
    include "view/layout/head-tour-detail.php";
    require "dao/tour.php"
?>

    <div class="app__content">
        <div class="content_header">
            <div class="grid wide">
                <div class="row">
                    <div class="col l-12">
                        <ul class="content__top">
                            <li class="content__item"><i class="fas fa-home"></i></li>
                            <li class="content__item"><a href="index.php?page=main">Trang chủ </a></li>
                            <li class="content__item">-</li>
                            <li class="content__item">Đặt tour</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="content_container">
            <div class="wrapCont">
                <div class="grid wide">
                    <div class="wrapSuccess">
                        <div class="row">
                            <div class="col l-6 m-12 c-12">
                                <div class="thongbao">
                                    <div class="thongbao__ms1">Đặt Tour thành công</div>
                                    <div class="thongbao__ms2">
                                        <p>Cảm ơn Quý khách hàng quan tâm đến: <strong>NiceTrip</strong></p>
                                    </div>
                                    <div class="thongbao__ms3">Đơn hàng của quý khách đang được xử lý</div>
                                    <div class="code">
                                        <div class="ct">Mã số đặt tour của Quý khách là:</div>   
                                    <?php
                                        $matour = $_GET['matour'];
                                        $chitiettour = tour_select_by_id($matour);
                                        extract($chitiettour);
                                        echo '
                                        <div class="co">'.$TourID.'</div>   
                                        ';
                                        ?>                                                       
                                    </div>
                                    <div class="thongbao__ms4">
                                        <p>Nhân viên của chúng tôi sẽ liên hệ với Quý khách trong thời gian sớm nhất.</p>
                                        <p>Nếu có thắc mắc, Quý khách vui lòng liên hệ qua số hotline <span>0387878335</span></p>
                                        <p>Xin chân thành cảm ơn quý khách hàng !</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col l-6 m-12 c-12">
                                <div class="img__thongbao"><img class="img__img"  src="//dulichviet.com.vn/images/globe.png" alt="Hoan tat" /></div>
                            </div>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        require "view/layout/footer-index.php";
    ?>
    