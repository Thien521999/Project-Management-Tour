
</head>
<body>
<?php 
	if(isset($_GET['clear'])){
        unset($_SESSION['customer']);// Xóa session khach_hang
        echo'<script>
                window.location.assign("index.php?page=main")
            </script>';
	}
?>  
    <div class="app">
        <div class="header">
            <div class="grid wide">
              <nav class="header__navbar">
                <?php if(isset($_SESSION['customer'])){  ?>
                    <ul class="header__navbar-list hide-on-moblile-tablet">
                        <li class="header__navbar-item <?php if(isset($_GET['page'])){ $page=$_GET['page']; }else { $page = 'main'; }?>">
                            <a href="index.php?page=main"></a>
                        </li>
                        <li class="header__navbar-item">
                            <a class="header__navbar-link-icon" href="index.php?page=main">
                                <div class="logo ">
                                    <div class="logo__content">Nicetrip</div>
                                    <div class="logo__content-small">travel agency</div>
                                    <div class="logo_image">
                                        <img class="logo-icon" src="view/img/logo/logo.png" alt="">
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="header__navbar-item header__navbar--tour hide-on-moblile-tablet <?php if($page == 'main') echo 'active' ?>">
                            
                            <a href="index.php?page=main" class="header__navbar-link header__navbar-active <?php if($page == 'main') echo 'active-color' ?>" id="myTour" href="" >Tours</a>
                    
                        </li>
                        <li class="header__navbar-item header__navbar--intour hide-on-moblile-tablet <?php if($page == 'in-tour') echo 'active' ?>" >
                            <a class="header__navbar-link <?php if($page == 'in-tour') echo 'active-color' ?>" id="booking_sticket" href="index.php?page=in-tour">Tours trong nước</a>

                            <div class="header-navbar__content-intour">
                                <ul class="row dropdown-menu-intour">
                                    <li class="col l-3 m-12 c-12 tour__item ">
                                        <ul class="list-unstyled">
                                            <li class="tour__item  header__tour">Miền Bắc</li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-ha-noi">
                                                    Hà Nội
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-ha-long">
                                                    Hạ Long
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-sapa">
                                                    Sapa
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-ninh-binh">
                                                    Ninh Bình
                                                </a>
                                            </li>                                        
                                        </ul>
                                    </li>
                                    <li class="col l-3 m-12 c-12 tour__item  ">                     
                                        <ul class="list-unstyled">
                                            <li class="tour__item header__tour">Miền Trung</li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-phan-thiet">
                                                    Phan Thiết
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-nha-trang">
                                                    Nha Trang
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-da-lat">
                                                    Đà Lạt
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-tay-nguyen">
                                                    Tây Nguyên
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-quy-nhon">
                                                    Tuy Hoà - Quy Nhơn - Quảng Ngãi
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-hue">
                                                    Huế - Quảng Bình
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-nghe-an">
                                                    Nghệ An
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-da-nang">
                                                    Đà Nẵng
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-phan-rang">
                                                    Phan Rang
                                                </a>
                                            </li>
                                        </ul>
                                    </li>  
                                    <li class="col l-3 m-12 c-12 tour__item ">
                                        <ul class="list-unstyled">
                                            <li class="tour__item header__tour">Miền Nam</li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-phu-quoc">
                                                    Phú Quốc
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-mien-tay">
                                                    Miền Tây
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-con-dao">
                                                    Côn Đảo
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-ho-tram">
                                                    Hồ Tràm - Vũng Tàu
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-ho-chi-minh">
                                                    Tour Tp. Hồ Chí Minh
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-tay-ninh">
                                                    Tây Ninh
                                                </a>
                                            </li>
                                        </ul>
                                    </li>            
                                    <li class="col l-3 m-12 c-12 tour__item ">
                                        <ul class="list-unstyled">
                                            <li class="tour__item header__tour">Chùm tour</li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-trong-nuoc-tet-nguyen-dan-2021">
                                                    Tour Tết Nguyên Đán 2021
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/du-lich-tet-cao-cap">
                                                    Du lịch Tết cao cấp
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-dong-tay-bac">
                                                    Đông Bắc - Tây Bắc
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/cac-mua-hoa-trong-nuoc">
                                                    Các mùa Hoa trong nước
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/dich-vu-di-kem/tour-tu-do">
                                                    Tour tự do
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-trong-nuoc-truoc-tet">
                                                    Tour trước Tết
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-hanh-huong-trong-nuoc">
                                                    Tour Hành Hương
                                                </a>
                                            </li>
                                        </ul>
                                    </li>            
                                </ul>
                            </div>
                        </li>
                        <li class="header__navbar-item header__navbar--outtour hide-on-moblile-tablet <?php if($page == 'out-tour') echo 'active' ?>">
                            <a class="header__navbar-link <?php if($page == 'out-tour') echo 'active-color' ?>" id="booking_room <?php if($page == 'main') echo 'active-color' ?>" href="index.php?page=out-tour">Tour ngoài nước</a>

                            <div class="header-navbar__content-outtour">
                                <ul class="row dropdown-menu-outtour">
                                    <li class="col l-3 m-12 c-12 tour__item ">
                                        <ul class="list-unstyled">
                                            <li class="tour__item  header__tour">Châu Á</li>
                                            <li class="tour__item tour_location">
                                                <a href="">
                                                    Du lịch Campuchia
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="">
                                                    Du lịch Đài Loan
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-sapa">
                                                    Du lịch Hàn Quốc
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-ninh-binh">
                                                    Du lịch HongKong
                                                </a>
                                            </li>                                        
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-ninh-binh">
                                                    Du lịch Malaysia
                                                </a>
                                            </li>                                        
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-ninh-binh">
                                                    Du lịch Myanmar
                                                </a>
                                            </li>                                        
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-ninh-binh">
                                                    Du lịch Nhật Bản
                                                </a>
                                            </li>                                        
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-ninh-binh">
                                                    Du lịch Singabo
                                                </a>
                                            </li>                                        
                                        </ul>
                                    </li>
                                    <li class="col l-3 m-12 c-12 tour__item  ">                     
                                        <ul class="list-unstyled">
                                            <li class="tour__item header__tour">Châu Âu</li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-phan-thiet">
                                                Du lịch Anh
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-nha-trang">
                                                Du lịch Nga
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-da-lat">
                                                Du lịch Scotland
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-tay-nguyen">
                                                Du lịch Thỗ Nhĩ Kì
                                                </a>
                                            </li>
                                            
                                        </ul>
                                    </li>  
                                    <li class="col l-3 m-12 c-12 tour__item ">
                                        <ul class="list-unstyled">
                                            <li class="tour__item header__tour">Châu Mỹ - Châu Úc - Châu Phi</li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-phu-quoc">
                                                    Du lịch Úc
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-mien-tay">
                                                    Du lịch Mỹ
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-con-dao">
                                                    Du lịch Nam Phi
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-ho-tram">
                                                Du lịch New Zealand
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-ho-chi-minh">
                                                Du lịch Ma-rốc
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-tay-ninh">
                                                Du lịch Canada
                                                </a>
                                            </li>
                                        </ul>
                                    </li>            
                                    <li class="col l-3 m-12 c-12 tour__item ">
                                        <ul class="list-unstyled">
                                            <li class="tour__item header__tour">Chùm tour</li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-trong-nuoc-tet-nguyen-dan-2021">
                                                    Sim du lịch
                                                </a>
                                            </li>
                                            
                                        </ul>
                                    </li>            
                                </ul>
                            </div>
                        </li>
                        <li class="header__navbar-item hide-on-moblile-tablet <?php if($page == 'service') echo 'active' ?>">
                            <a class="header__navbar-link <?php if($page == 'service') echo 'active-color' ?>" id="cam_nang" href="">Dịch vụ du lịch</a>
                        </li>
                        <li class="header__navbar-item header__navbar--navbar hide-on-moblile-tablet ">
                            <a class="header__navbar-link " id="three_dot" href="" ><i class="fa fa-ellipsis-h"></i></a>
                            
                            <ul class="header__navbar-menu">
                                <li class="header__navbar-menu-item">
                                    <a class="header__navbar-text" href="">Tài khoản đặt phòng </a>
                                </li>
                                <li class="header__navbar-menu-item">
                                    <a class="header__navbar-text" href="">Cẩm nang du lịch</a>
                                </li>
                                <li class="header__navbar-menu-item">
                                    <a class="header__navbar-text" href="">Giới thiệu</a>
                                </li>
                                <li class="header__navbar-menu-item <?php if($page == 'contact') echo 'active' ?>">
                                    <a class="header__navbar-text" href="index.php?page=contact">Liên hệ</a>
                                </li>
                                <li class="header__navbar-menu-item">
                                    <a class="header__navbar-text" href="">Cài đặt</a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="header__navbar-list">
                        <li class="header__navbar-item">
                            <label for="nav-mobile-input">
                                <svg class="navbar" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        fill="currentColor"
                                        d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"
                                    ></path>
                                </svg>                                                 
                            </label>
                        </li>
                        <li class="header__navbar-item">
                            <input type="checkbox" name="" class="nav__input" id="nav-mobile-input">
                            <label for="nav-mobile-input" class="nav__overlay"></label>

                            <nav class="nav__mobile">
                                <ul class="nav__mobile-list">
                                    <label for="nav-mobile-input" class="nav__mobile-close">
                                        <i class="fas fa-times"></i>
                                    </label>
                                    <li class="nav__pc-item">
                                        <a href="" class="nav__mobile-link">Tours</a>
                                    </li>
                                    <li class="nav__pc-item">
                                        <a href="" class="nav__mobile-link">Tour trong nước</a>
                                    </li>
                                    <li class="nav__pc-item">
                                        <a href="" class="nav__mobile-link">Tour ngoài nước</a>
                                    </li>
                                    <li class="nav__pc-item">
                                        <a href="" class="nav__mobile-link">Dịch vụ du lịch</a>
                                    </li>
                                    <li class="nav__pc-item">
                                        <a href="" class="nav__mobile-link">Đăng xuất</a>
                                    </li>
                                    
                                </ul>
                            </nav>
                        </li>                       
                    </ul>
                    
                    <ul class="header__navbar-list">
                        <li class="header__navbar-item header__navbar-user">
                            <img class="header__navbar-user-img" src="https://res.ivivu.com/hotel/img/avatars/avatar-default-white.svg" alt="">
                            <span class="header__navbar-user-name" id="account"><?php echo $_SESSION['customer']['email'] ?>&nbsp;<i class="fas fa-chevron-down"></i></span>                       

                            <ul class="header__navbar-login-success" id="box-form">
                                <li class="header__navbar-logout__item <?php if($page == 'trip') echo '' ?>">
                                    <a class="header__navbar-profile" href="index.php?page=trip">Kỳ nghĩ của tôi</a>                                       
                                </li>
                                <li class="header__navbar-logout__item <?php if($page == 'profile') echo 'active' ?>">
                                    <a class="header__navbar-profile" href="index.php?page=profile">Hồ sơ của tôi</a>
                                </li>
                                <li class="header__navbar-logout__item <?php if($page == 'comment') echo 'active' ?>">
                                    <a class="header__navbar-profile" href="index.php?page=comment">Nhận xét của tôi</a>
                                </li>
                                <li class="header__navbar-logout__item ">
                                    <button class="header-logout " id="logout"><a href="?clear=true">Đăng xuất</a></button>
                                </li>
                            </ul>
                        </li>                     
                    </ul> 
                <?php 
                }
                else{
                ?>  
                    <ul class="header__navbar-list hide-on-moblile-tablet">
                        <li class="header__navbar-item <?php if(isset($_GET['page'])){ $page=$_GET['page']; }else { $page = 'main'; }?>">
                            <a href="index.php?page=main"></a>
                        </li>
                        <li class="header__navbar-item ">
                            <a class="header__navbar-link-icon" href="index.php?page=main">
                                <div class="logo ">
                                    <div class="logo__content">Nicetrip</div>
                                    <div class="logo__content-small">travel agency</div>
                                    <div class="logo_image">
                                        <img class="logo-icon" src="view/img/logo/logo.png" alt="">
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="header__navbar-item header__navbar--tour hide-on-moblile-tablet <?php if($page == 'main') echo 'active' ?>">
                            
                            <a href="index.php?page=main" class="header__navbar-link header__navbar-active <?php if($page == 'main') echo 'active-color' ?>" id="myTour" href="" >Tours</a>
                
                        </li>
                        <li class="header__navbar-item header__navbar--intour hide-on-moblile-tablet <?php if($page == 'in-tour') echo 'active' ?>">
                            <a class="header__navbar-link <?php if($page == 'in-tour') echo 'active-color' ?>" id="booking_sticket" href="index.php?page=in-tour">Tour trong nước</a>

                            <div class="header-navbar__content-intour">
                                <ul class="row dropdown-menu-intour">
                                    <li class="col l-3 m-12 c-12 tour__item ">
                                        <ul class="list-unstyled">
                                            <li class="tour__item  header__tour">Miền Bắc</li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-ha-noi">
                                                    Hà Nội
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-ha-long">
                                                    Hạ Long
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-sapa">
                                                    Sapa
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-ninh-binh">
                                                    Ninh Bình
                                                </a>
                                            </li>                                        
                                        </ul>
                                    </li>
                                    <li class="col l-3 m-12 c-12 tour__item  ">                     
                                        <ul class="list-unstyled">
                                            <li class="tour__item header__tour">Miền Trung</li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-phan-thiet">
                                                    Phan Thiết
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-nha-trang">
                                                    Nha Trang
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-da-lat">
                                                    Đà Lạt
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-tay-nguyen">
                                                    Tây Nguyên
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-quy-nhon">
                                                    Tuy Hoà - Quy Nhơn - Quảng Ngãi
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-hue">
                                                    Huế - Quảng Bình
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-nghe-an">
                                                    Nghệ An
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-da-nang">
                                                    Đà Nẵng
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-phan-rang">
                                                    Phan Rang
                                                </a>
                                            </li>
                                        </ul>
                                    </li>  
                                    <li class="col l-3 m-12 c-12 tour__item ">
                                        <ul class="list-unstyled">
                                            <li class="tour__item header__tour">Miền Nam</li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-phu-quoc">
                                                    Phú Quốc
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-mien-tay">
                                                    Miền Tây
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-con-dao">
                                                    Côn Đảo
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-ho-tram">
                                                    Hồ Tràm - Vũng Tàu
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-ho-chi-minh">
                                                    Tour Tp. Hồ Chí Minh
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-tay-ninh">
                                                    Tây Ninh
                                                </a>
                                            </li>
                                        </ul>
                                    </li>            
                                    <li class="col l-3 m-12 c-12 tour__item ">
                                        <ul class="list-unstyled">
                                            <li class="tour__item header__tour">Chùm tour</li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-trong-nuoc-tet-nguyen-dan-2021">
                                                    Tour Tết Nguyên Đán 2021
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/du-lich-tet-cao-cap">
                                                    Du lịch Tết cao cấp
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-dong-tay-bac">
                                                    Đông Bắc - Tây Bắc
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/cac-mua-hoa-trong-nuoc">
                                                    Các mùa Hoa trong nước
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/dich-vu-di-kem/tour-tu-do">
                                                    Tour tự do
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-trong-nuoc-truoc-tet">
                                                    Tour trước Tết
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-hanh-huong-trong-nuoc">
                                                    Tour Hành Hương
                                                </a>
                                            </li>
                                        </ul>
                                    </li>            
                                </ul>
                            </div>
                        </li>
                        <li class="header__navbar-item header__navbar--outtour hide-on-moblile-tablet <?php if($page == 'out-tour' ) echo 'active' ?>">
                            <a class="header__navbar-link <?php if($page == 'out-tour') echo 'active-color' ?>" id="booking_room" href="index.php?page=out-tour">Tour ngoài nước</a>
                            
                            <div class="header-navbar__content-outtour">
                                <ul class="row dropdown-menu-outtour">
                                    <li class="col l-3 m-12 c-12 tour__item ">
                                        <ul class="list-unstyled">
                                            <li class="tour__item  header__tour">Châu Á</li>
                                            <li class="tour__item tour_location">
                                                <a href="">
                                                    Du lịch Campuchia
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="">
                                                    Du lịch Đài Loan
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-sapa">
                                                    Du lịch Hàn Quốc
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-ninh-binh">
                                                    Du lịch HongKong
                                                </a>
                                            </li>                                        
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-ninh-binh">
                                                    Du lịch Malaysia
                                                </a>
                                            </li>                                        
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-ninh-binh">
                                                    Du lịch Myanmar
                                                </a>
                                            </li>                                        
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-ninh-binh">
                                                    Du lịch Nhật Bản
                                                </a>
                                            </li>                                        
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-ninh-binh">
                                                    Du lịch Singabo
                                                </a>
                                            </li>                                        
                                        </ul>
                                    </li>
                                    <li class="col l-3 m-12 c-12 tour__item  ">                     
                                        <ul class="list-unstyled">
                                            <li class="tour__item header__tour">Châu Âu</li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-phan-thiet">
                                                Du lịch Anh
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-nha-trang">
                                                Du lịch Nga
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-da-lat">
                                                Du lịch Scotland
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-tay-nguyen">
                                                Du lịch Thỗ Nhĩ Kì
                                                </a>
                                            </li>
                                            
                                        </ul>
                                    </li>  
                                    <li class="col l-3 m-12 c-12 tour__item ">
                                        <ul class="list-unstyled">
                                            <li class="tour__item header__tour">Châu Mỹ - Châu Úc - Châu Phi</li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-phu-quoc">
                                                    Du lịch Úc
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-mien-tay">
                                                    Du lịch Mỹ
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-con-dao">
                                                    Du lịch Nam Phi
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-ho-tram">
                                                Du lịch New Zealand
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-ho-chi-minh">
                                                Du lịch Ma-rốc
                                                </a>
                                            </li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-tay-ninh">
                                                Du lịch Canada
                                                </a>
                                            </li>
                                        </ul>
                                    </li>            
                                    <li class="col l-3 m-12 c-12 tour__item ">
                                        <ul class="list-unstyled">
                                            <li class="tour__item header__tour">Chùm tour</li>
                                            <li class="tour__item tour_location">
                                                <a href="/vi/tour/tour-trong-nuoc-tet-nguyen-dan-2021">
                                                    Sim du lịch
                                                </a>
                                            </li>
                                            
                                        </ul>
                                    </li>            
                                </ul>
                            </div>
                        </li>
                        <li class="header__navbar-item hide-on-moblile-tablet">
                            <a class="header__navbar-link" id="cam_nang" href="">Dịch vụ du lịch</a>
                        </li>
                        <li class="header__navbar-item header__navbar--navbar hide-on-moblile-tablet">
                            <a class="header__navbar-link " id="three_dot" href="" ><i class="fa fa-ellipsis-h"></i></a>
                            
                            <ul class="header__navbar-menu">
                                <li class="header__navbar-menu-item">
                                    <a class="header__navbar-text" href="">Tài khoản đặt phòng </a>
                                </li>
                                <li class="header__navbar-menu-item">
                                    <a class="header__navbar-text" href="">Cẩm nang du lịch</a>
                                </li>
                                <li class="header__navbar-menu-item">
                                    <a class="header__navbar-text" href="index.php?page=contact">Liên hệ</a>
                                </li>
                                <li class="header__navbar-menu-item">
                                    <a class="header__navbar-text" href="">Hỏi đáp </a>
                                </li>
                                <li class="header__navbar-menu-item">
                                    <a class="header__navbar-text" href="">Hỗ trợ</a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="header__navbar-list">
                        <li class="header__navbar-item">
                            <label for="nav-mobile-input">
                                <svg class="navbar" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        fill="currentColor"
                                        d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"
                                    ></path>
                                </svg>                                                 
                            </label>
                        </li>
                        <li class="header__navbar-item">
                            <input type="checkbox" name="" class="nav__input" id="nav-mobile-input">
                            <label for="nav-mobile-input" class="nav__overlay"></label>

                            <nav class="nav__mobile">
                                <ul class="nav__mobile-list">
                                    <label for="nav-mobile-input" class="nav__mobile-close">
                                        <i class="fas fa-times"></i>
                                    </label>
                                    <li class="nav__pc-item">
                                        <a href="" class="nav__mobile-link">Tours</a>
                                    </li>
                                    <li class="nav__pc-item">
                                        <a href="" class="nav__mobile-link">Book vé máy bay</a>
                                    </li>
                                    <li class="nav__pc-item">
                                        <a href="" class="nav__mobile-link">Book phòng</a>
                                    </li>
                                    <li class="nav__pc-item">
                                        <a href="" class="nav__mobile-link">Cẩm nang du lịch</a>
                                    </li>
                                    <li class="nav__pc-item">
                                        <a href="" class="nav__mobile-link">Đăng xuất</a>
                                    </li>
                                    
                                </ul>
                            </nav>
                        </li>                       
                    </ul>
                    
                    <ul class="header__navbar-list">
                        <li class="header__navbar-item header__navbar-user">
                            <img class="header__navbar-user-img" src="https://res.ivivu.com/hotel/img/avatars/avatar-default-white.svg" alt="">
                            <span class="header__navbar-user-name" id="account">Tài khoản&nbsp;<i class="fas fa-chevron-down"></i></span>
                            

                            <ul class="header__navbar-user-menu" id="box-form">
                                <li class="header__navbar-user-item header__navbar-user-login">
                                    <button class="header-login" id="login">Đăng nhập</button>
                                </li>               
                                <li class="header__navbar-user-item header__navbar-user-register">
                                    <span class="text">Chưa có tài khoản?</span>
                                    <span><span class="register-link text" id="register">Đăng ký</span></span>
                                    <span class="text">ngay</span>
                                </li>
                            </ul>                           
                        </li>                     
                    </ul>
                <?php } ?> 
              </nav>
            </div>
        </div>
    