<?php 
    require "view/layout/head-index.php";
    require "dao/tour.php";
?>

<div class="app__content">
    <header class="header-img" style="background-image:url(view/img/home.jpg)"> 
        <div class="grid wide">
            <div class="row">
                <div class="col l-12 m-12 c-12">
                    <div class="home_content">
                        <div class="home_content_inner">
                            <div class="home_text_large">TRAVER</div>
                            <div class="home_text_small">It's time to</div>
                        </div>
                    </div>          
                </div>
            </div>
        </div>
        <div class="grid wide grid-form">
            <div class="row">
                <!-- <div class="col l-12 m-12 c-12">
                    <form action="">
                        <input type="text" name="search" class="input-search-kiritm" id="inputSearchHomepage" autocomplete="off" placeholder="Tìm kiếm..." aria-describedby="basic-addon2" />
                    </form>
                </div> -->
               
                <div class="col l-4 m-12 c-12 column1">
                    <div class="column-search column-search--col-one" id="search__intour">
                        <div class="col-img" style="background-color: #ed0080;"><img src="//dulichviet.com.vn/images/icon-p-4.svg" alt="" /></div>
                        <div class="col-t1">Tìm tour</div>
                        <div class="col-t2" >Trong nước</div>
                    </div> 
                    <!--<div class="modal" id="modal">
                        <div class="modal__overlay">
                            <div class="modal__body">
                                <div class="grid__content" id="content__one">  
                                    <div class="grid wide">
                                        <div class="row">
                                            <div class="col l-12">
                                                <div class="content content--one">
                                                    <div class="txt">Xin mời Quý khách chọn thông tin cần tìm kiếm</div>
                                                    <form action="" class="form-search" method="POST">
                                                        <div class="row">
                                                            <div class="col l-2-4 m-12 c-12">
                                                                <div class="content-col" title="" style="width: 100%;">
                                                                    <select name="Place" id="start-go" class="content-col__item">
                                                                        <option value="" disabled selected>Nơi khởi hành</option>
                                                                        <option value="Hà Nội">Hà Nội</option>
                                                                        <option value="Thành Phố HCM">Thành Phố HCM</option>  
                                                                        <option value="Nha Trang">Nha Trang</option> 
                                                                    </select>                          
                                                                </div>                                                              
                                                            </div>
                                                            <div class="col l-2-4 m-12 c-12">
                                                                <div class="content-col" title="" style="width: 100%;">                                                      
                                                                    <select name="Destination" id="" class="content-col__item" >
                                                                        <option value="" disabled selected>Điểm đến</option>
                                                                        <option value="Ninh Thuận">Ninh Thuận</option>
                                                                        <option value="Hà Giang">Hà Giang</option>                                    
                                                                        <option value="SaPa">SaPa</option>                                    
                                                                        <option value="Phú Quốc">Phú Quốc</option>                                    
                                                                    </select>                          
                                                                </div>                                    
                                                            </div>
                                                            <div class="col l-2-4 m-12 c-12">
                                                                <div class="content-col" title="" style="width: 100%;">                                           
                                                                    <input type="date" value="yyyy-mm-dd" name="date" class="content-col__item">
                                                                </div>
                                                            </div>
                                                            <div class="col l-2-4 m-12 c-12">
                                                                <div class="content-col" title="" style="width: 100%;">
                                                                    <select class="content-col__item" name="TourPrice">  
                                                                        <option value="" disabled selected>Chọn giá tour</option>                        
                                                                        <option value="0 - 2000000">Dưới 2tr</option>
                                                                        <option value="2000000 - 4000000">Từ 2tr - 4tr</option>
                                                                        <option value="4000000 - 6000000">Từ 4tr - 6tr</option>
                                                                        <option value="6000000 - 10000000">Từ 6tr - 10tr</option>
                                                                        <option value="10000000 - 20000000">Từ 10tr - 20tr</option>
                                                                        <option value="20000000 - 50000000">Từ 20tr - 50tr</option>
                                                                        <option value="20000000 - 80000000">Trên 50tr</option>
                                                                    </select>                                                   
                                                                </div>                                                  
                                                            </div>
                                                            <div class="col l-2-4 m-12 c-12">
                                                                <button type="submit" name="submit" class="content-btn">
                                                                    <i class="content-btn__icon fas fa-search"></i>                                                   
                                                                    <span class="content-btn__icon content-text-text">Tìm kiếm</span>
                                                                </button>
                                                            </div>      
                                                        </div>
                                                    </form>  
                                                    
                                                    <?php
                                                        // if(isset($_POST['submit'])) {
                                                        //     if( !empty($_POST['Place']) && !empty($_POST['Destination']) && !empty($_POST['date']) && !empty($_POST['TourPrice']) ) {
                                                                
                                                        //         $place_start = $_POST['Place'];
                                                        //         $destination = $_POST['Destination'];   
                                                        //         $day_start = $_POST['date'];
                                                        //         $price = $_POST['TourPrice'];

                                                        //         $tour_date = tour_search_by_place_start($day_start);                                                             

                                                        //         $tourID = 1;
                                                        //         $tour_all = tour_select_by_id($tourID);
                                                        //         foreach($tour_all as $value) {
                                                        //             extract($value);
                                                        //             echo '<script language="javascript">';
                                                        //             echo 'alert('.$Day_Start.')';
                                                        //             echo '</script>';
                                                        //         }                                             
                                                        //     }else if(empty($_POST['Place']) && empty($_POST['Destination'])) {
                                                        //         echo'<script>
                                                        //                     window.location.assign("index.php?page=search")
                                                        //                 </script>';
                                                        //     }    
                                                        // }                          
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>-->
                    <div class="grid__content" id="content__one">  
                        <div class="grid wide">
                            <div class="row">
                                <div class="col l-12">
                                    <div class="content content--one">
                                        <div class="txt">Xin mời Quý khách chọn thông tin cần tìm kiếm</div>
                                        <form action="" class="form-search" method="POST">
                                            <div class="row">
                                                <div class="col l-2-4 m-12 c-12">
                                                    <div class="content-col" title="" style="width: 100%;">
                                                        <select name="Place" id="start-go" class="content-col__item">
                                                            <option value="" disabled selected>Nơi khởi hành</option>
                                                            <option value="Hà Nội">Hà Nội</option>
                                                            <option value="Thành Phố HCM">Thành Phố HCM</option>  
                                                            <option value="Nha Trang">Nha Trang</option> 
                                                        </select>                          
                                                    </div>                                                              
                                                </div>
                                                <div class="col l-2-4 m-12 c-12">
                                                    <div class="content-col" title="" style="width: 100%;">                                                      
                                                        <select name="Destination" id="" class="content-col__item" >
                                                            <option value="" disabled selected>Điểm đến</option>
                                                            <option value="Ninh Thuận">Ninh Thuận</option>
                                                            <option value="Hà Giang">Hà Giang</option>                                    
                                                            <option value="SaPa">SaPa</option>                                    
                                                            <option value="Phú Quốc">Phú Quốc</option>                                    
                                                        </select>                          
                                                    </div>                                    
                                                </div>
                                                <div class="col l-2-4 m-12 c-12">
                                                    <div class="content-col" title="" style="width: 100%;">                                           
                                                        <input type="date" value="yyyy-mm-dd" name="date" class="content-col__item">
                                                    </div>
                                                </div>
                                                <div class="col l-2-4 m-12 c-12">
                                                    <div class="content-col" title="" style="width: 100%;">
                                                        <select class="content-col__item" name="TourPrice">  
                                                            <option value="" disabled selected>Chọn giá tour</option>                        
                                                            <option value="0 - 2000000">Dưới 2tr</option>
                                                            <option value="2000000 - 4000000">Từ 2tr - 4tr</option>
                                                            <option value="4000000 - 6000000">Từ 4tr - 6tr</option>
                                                            <option value="6000000 - 10000000">Từ 6tr - 10tr</option>
                                                            <option value="10000000 - 20000000">Từ 10tr - 20tr</option>
                                                            <option value="20000000 - 50000000">Từ 20tr - 50tr</option>
                                                            <option value="20000000 - 80000000">Trên 50tr</option>
                                                        </select>                                                   
                                                    </div>                                                  
                                                </div>
                                                <div class="col l-2-4 m-12 c-12">
                                                    <button type="submit" name="submit" class="content-btn">
                                                        <i class="content-btn__icon fas fa-search"></i>                                                   
                                                        <span class="content-btn__icon content-text-text">Tìm kiếm</span>
                                                    </button>
                                                </div>      
                                            </div>
                                        </form>  
                                        
                                        <?php
                                            if(isset($_POST['submit'])) {
                                                if( !empty($_POST['Place']) && !empty($_POST['Destination']) && !empty($_POST['date']) && !empty($_POST['TourPrice']) ) {
                                                    
                                                    $place_start = $_POST['Place'];
                                                    $destination = $_POST['Destination'];   
                                                    $day_start = $_POST['date'];
                                                    $price = $_POST['TourPrice'];

                                                    $tour_date = tour_search_by_place_start($day_start);                                            

                                                    $tourID = 1;
                                                    $tour_all = tour_select_by_id($tourID);
                                                    foreach($tour_all as $value) {
                                                        extract($value);
                                                        echo '<script language="javascript">';
                                                        echo 'alert('.$Day_Start.')';
                                                        echo '</script>';
                                                    }                                            
                                                }else if(empty($_POST['Place']) && empty($_POST['Destination'])) {
                                                    echo'<script>
                                                                window.location.assign("index.php?page=search")
                                                            </script>';
                                                }    
                                            }                         
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                                               
                </div>
                <div class="col l-4 m-12 c-12 column2">
                    <div class="column-search column-search--col-two" id="search__outtour">
                        <div class="col-img" style="background-color:#1b448e;"><img src="//dulichviet.com.vn/images/icon-p-4.svg" alt="" /></div>
                        <div class="col-t1">Tìm tour</div>
                        <div class="col-t2" >Nước ngoài</div>
                    </div>   
                    <div class="grid__content " id="content__two">  
                        <div class="grid wide">
                            <div class="row">
                                <div class="col l-12">
                                    <div class="content content--two">
                                        <div class="txt">Xin mời Quý khách chọn thông tin cần tìm kiếm</div>
                                        <form action="" class="form-search">
                                            <div class="row">
                                                <div class="col l-2-4 m-12 c-12 ">
                                                    <div class="content-col" title="" style="width: 100%;">
                                                        <select id="place-start" class="content-col__item" name="cars">
                                                            <option value="Nơi khởi hành">Nơi khởi hành</option>
                                                            <option value="volvo">Hà Nội</option>
                                                            <option value="saab">Thành Phố HCM</option>  
                                                            <option value="saab">Nha Trang</option> 
                                                            <option value="saab">Thành Phố HCM</option> 
                                                        </select>                          
                                                    </div>                                                              
                                                </div>
                                                <div class="col l-2-4 m-12 c-12">
                                                    <div class="content-col" title="" style="width: 100%;">
                                                        <select id="place" class="content-col__item" name="cars">
                                                            <option value="volvo">Điểm đến</option>
                                                            <option value="volvo">Ninh Thuận</option>
                                                            <option value="saab">Hà Giang</option>                                    
                                                            <option value="saab">SaPa</option>                                    
                                                            <option value="saab">Phú Quốc</option>                                    
                                                        </select>                                
                                                    </div>                                    
                                                </div>
                                                <div class="col l-2-4 m-12 c-12">
                                                    <div class="content-col" title="" style="width: 100%;">                                           
                                                        <input type="date" value="2018-07-22" name="date" class="content-col__item">
                                                    </div>
                                                </div>
                                                <div class="col l-2-4 m-12 c-12">
                                                    <div class="content-col" title="" style="width: 100%;">
                                                        <select class="content-col__item" name="TourPrice">  
                                                            <option value="Chọn giá tour">Chọn giá tour</option>                        
                                                            <option value="0 - 2000000">Dưới 2tr</option>
                                                            <option value="2000000 - 4000000">Từ 2tr - 4tr</option>
                                                            <option value="4000000 - 6000000">Từ 4tr - 6tr</option>
                                                            <option value="6000000 - 10000000">Từ 6tr - 10tr</option>
                                                            <option value="10000000 - 20000000">Từ 10tr - 20tr</option>
                                                            <option value="20000000 - 50000000">Từ 20tr - 50tr</option>
                                                            <option value="20000000 - 80000000">Trên 50tr</option>
                                                        </select>                                                  
                                                    </div>                                                  
                                                </div>
                                                <div class="col l-2-4 m-12 c-12">
                                                    <button type="submit" class="content-btn">
                                                        <i class="content-btn__icon fas fa-search"></i>
                                                        <span class="content-text-text">Tìm kiếm</span>
                                                    </button>
                                                </div>      
                                            </div>
                                        </form>                                                         
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                             
                </div>
                <div class="col l-4 m-12 c-12 column3">
                    <div class="column-search column-search--col-three" id="book__tour" >
                        <div class="col-img" style="background-color: #5cb1aa;"><img src="//dulichviet.com.vn/images/icon-p-4.svg" alt="" /></div>
                        <div class="col-t1">Quản lý</div>
                        <div class="col-t2" >Đặt tour</div>
                    </div>  
                    <div class="grid__content" id="content__three">  
                        <div class="grid wide">
                            <div class="row">
                                <div class="col l-12" style="width: 100%;">
                                    <div class="content content--three">
                                        <div class="txt">Xin mời Quý khách chọn thông tin cần tìm kiếm</div>
                                        <form action="" class="form-search">
                                            <div class="row">
                                                <div class="col l-9 m-12 c-12">
                                                    <span class="content-col" title="" style="width: 100%;">
                                                        <input class="content-col__item content-col--book" type="text" placeholder="Mã đặt tour">                                                          
                                                        <span class="or">hoặc</span>                              
                                                        <input class="content-col__item content-col--phone" type="text" placeholder="Số điện thoại của quý khách">                       
                                                    </span>
                                                </div>
                                                <div class="col l-3 m-12 c-12">
                                                    <button type="submit" class="content-btn">
                                                        <i class="content-btn__icon fas fa-search"></i>
                                                        <span class="content-text-text">Tìm kiếm</span>
                                                    </button>
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
            
        </div>
    </header>
    <div class="formMenuTour">
    </div>
    
    <div class="list-tour">
        <div class="grid wide">
            <div class="tour-item">
                <!-- Tour trong nước -->
                <div class="row">
                    <div class="col l-12 m-12 c-12">
                        <h2 class="title-tour">DU LỊCH TRONG NƯỚC</h2>		
                    </div>
                </div>
                <div class="row">
                    <?php
                        $tourIn = tour_select_loaitour_1();
                        foreach ($tourIn as $value) {
                            extract($value);
                            // echo '<script language="javascript">';
                            // echo 'alert("'.$Place_Start.'")';
                            // echo '</script>';
                            echo '
                                <div class="col l-4 m-12 c-12">
                                    <div class="tour">
                                        <div class="tour-item-item">
                                            <a href="index.php?page=tour-detail&matour='.$TourID.'" class="tour-item__img">
                                                <img class="item-img" src="'.$Image.'" alt="">
                                                <div class="tour-item__place">Từ '.$Place_Start.'</div>
                                                <div class="tour-item__time">
                                                    <p class="tour-item__time-content">
                                                        <span class="tour-item__icon"><i class="far fa-clock"></i></span>
                                                        <span class="tour_item__clock">Còn 5 ngày 11:53:42</span>
                                                    </p>
                                                </div>
                                                <div class="tour-item__favorite">
                                                    <i class="fas fa-check"></i>
                                                    <span>Khuyến mãi</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="tour-item__info">
                                            <h3 class="tour-detail-name">
                                                <a class="tour-detail__link" href="">'.$Description.'</a>
                                            </h3>
                                            <div class="tour-wrap">
                                                <p class="tour-time">
                                                    <i class="tour-time__icon far fa-clock"></i>
                                                    <span class="tour-time__shedule">Lịch trình:&nbsp;'.$TimeTour.'</span>
                                                </p>
                                                <p class="start">
                                                    <i class="tour-time__icon far fa-calendar-alt"></i>
                                                    <span>Khởi hành&nbsp;</span><span>'.$Day_Start.'</span>
                                                </p>
                                                
                                                <ul class="place__content">
                                                    <li class="content__left">
                                                        <span class="place-icon"><i class="tour-time__icon far fa-user"></i></span>
                                                        <span class="slot">Số chỗ còn nhận</span>
                                                        <span class="number">10</span>
                                                    </li>
                                                    <li class="content__right">
                                                        <span class="price">'.$Price.'đ</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>	
                                    </div>
                                </div>
                            ';
                        }
                    ?>                                                
                </div>
                <!-- Tour ngoài nước -->
                <div class="row">
                    <div class="col l-12 m-12 c-12">
                        <h2 class="title-tour">DU LỊCH NGOÀI NƯỚC</h2>	
                    </div>
                </div>
                <div class="row">
                    <?php
                        $tourOut = tour_select_loaitour_2();
                        foreach ($tourOut as $value) {
                            extract($value);
                            // echo '<script language="javascript">';
                            // echo 'alert("'.$Place_Start.'")';
                            // echo '</script>';
                            echo '
                                <div class="col l-4 m-12 c-12">
                                    <div class="tour">
                                        <div class="tour-item-item">
                                            <a href="index.php?page=tour-detail&matour='.$TourID.'" class="tour-item__img">
                                                <img class="item-img" src="'.$Image.'" alt="">
                                                <div class="tour-item__place">Từ '.$Place_Start.'</div>
                                                <div class="tour-item__time">
                                                    <p class="tour-item__time-content">
                                                        <span class="tour-item__icon"><i class="far fa-clock"></i></span>
                                                        <span class="tour_item__clock">Còn 5 ngày 11:53:42</span>
                                                    </p>
                                                </div>
                                                <div class="tour-item__favorite">
                                                    <i class="fas fa-check"></i>
                                                    <span>Khuyến mãi</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="tour-item__info">
                                            <h3 class="tour-detail-name">
                                                <a class="tour-detail__link" href="">'.$NameTour.'</a>
                                            </h3>
                                            <div class="tour-wrap">
                                                <p class="tour-time">
                                                    <i class="tour-time__icon far fa-clock"></i>
                                                    <span class="tour-time__shedule">Lịch trình:&nbsp;'.$TimeTour.'</span>
                                                </p>
                                                <p class="start">
                                                    <i class="tour-time__icon far fa-calendar-alt"></i>
                                                    <span>Khởi hành&nbsp;</span><span>'.$Day_Start.'</span>
                                                </p>
                                                
                                                <ul class="place__content">
                                                    <li class="content__left">
                                                        <span class="place-icon"><i class="tour-time__icon far fa-user"></i></span>
                                                        <span class="slot">Số chỗ còn nhận</span>
                                                        <span class="number">10</span>
                                                    </li>
                                                    <li class="content__right">
                                                        <span class="price">'.$Price.'đ</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>	
                                    </div>
                                </div>
                            ';
                        }
                    ?>                                        
                </div>
            </div>
        </div>
    </div>

    <div class="item-folder">
        <div class="grid wide">
            <div class="row">
                <div class="col l-3 m-12 c-12">
                    <div class="commitment-box">
                        <div class="commitment-image">
                            <img width="60px" height="60px" class="icon-commitment" src="https://saigontourist.net/images/price.png" alt="image commitment" />
                        </div>
                        <div class="commitment-content">
                            <span class="commitment-taitle">GIÁ TỐT - NHIỀU ƯU ĐÃI</span>
                            <p class="commitment-description">Ưu đãi và quà tặng hấp dẫn khi mua tour online</p>
                        </div>
                    </div>
                </div>
                <div class="col l-3 m-12 c-12">
                    <div class="commitment-box">
                        <div class="commitment-image">
                            <img width="60px" height="60px" class="icon-commitment" src="https://saigontourist.net/images/pay.png" alt="image commitment" />
                        </div>
                        <div class="commitment-content">
                            <span class="commitment-taitle">THANH TOÁN AN TOÀN</span>
                            <p class="commitment-description">Được bảo mật bởi tổ chức quốc tế Global Sign</p>
                        </div>
                    </div>
                </div>
                <div class="col l-3 m-12 c-12">
                    <div class="commitment-box">
                        <div class="commitment-image">
                            <img width="60px" height="60px" class="icon-commitment" src="https://saigontourist.net/images/promotion.png" alt="image commitment" />
                        </div>
                        <div class="commitment-content">
                            <span class="commitment-taitle">TƯ VẤN MIỄN PHÍ</span>
                            <p class="commitment-description">Hỗ trợ tư vấn online miễn phí</p>
                        </div>
                    </div>
                </div>
                <div class="col l-3 m-12 c-12">
                    <div class="commitment-box">
                        <div class="commitment-image">
                            <img width="60px" height="60px" class="icon-commitment" src="https://saigontourist.net/images/star.png" alt="image commitment" />
                        </div>
                        <div class="commitment-content">
                            <span class="commitment-taitle">THƯƠNG HIỆU UY TÍN</span>
                            <p class="commitment-description">Thương hiệu lữ hành hàng đầu Việt Nam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        require "view/layout/footer-index.php";
    ?>



        