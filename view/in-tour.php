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
                        <li class="content__item">-</li>
                        <li class="content__item">Tour trong nước</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="content_search">
        <div class="grid wide">
            <div class="row">
                <div class="col l-12 m-12 c-12">
                    <form action="" class="form-search" method="POST">
                        <div class="row">
                            <div class="col l-2-4 m-12 c-12">
                                <div class="content-col" title="" style="width: 100%;">
                                    <select name="Place" id="start-go" class="content-col__item">
                                        <option value="" disabled selected>Nơi khởi hành</option>
                                        <option value="Hà Nội">Hà Nội</option>
                                        <option value="Thành Phố HCM">Thành Phố HCM</option>  
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
                                        <option value="Sapa">Sapa</option>                                 
                                        <option value="Ninh Bình">Ninh Bình</option>                                 
                                        <option value="Phú Quốc">Hà Nội</option>                                 
                                        <option value="Phú Quốc">Huế</option>                                 
                                    </select>                          
                                </div> 
                            </div>
                            <div class="col l-2-4 m-12 c-12">
                                <div class="content-col" title="" style="width: 100%;">
                                    <input type="date" value="mm-dd-yyyy" name="date" class="content-col__item" />
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
                </div>
            </div>
        </div>
    </div>

    <div class="content_container">
        <div class="grid wide">
            <div class="row filter__content">
                <div class="col l-9 m-12 c-12">
                    <div class="filter-list-tour">
                        <div class="filter-text">Sắp xếp :</div>
                        <div class="filter-tour">
                            <a class="filter-div actives" href="">
                                [ Ngày gần nhất ]
                            </a>
                            <a class="filter-div" href="">
                                [ Giá thấp nhất ]
                            </a>
                            <a class="filter-div" href="">
                                [ Hấp dẫn nhất ]
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col l-3 m-12 c-12">
                    <div class="view-list-tour">
                        <i onclick="return viewTour('grid')" class="fa fa-th actives" aria-hidden="true"></i>
                        <span> | </span>
                        <i onclick="return viewTour('list')" class="fa fa-th-list" aria-hidden="true"></i>
                    </div>
                </div>
            </div>

            <div class="list-tour">
                <div class="grid wide">
                    <div class="tour-item">
                    <?php
                        if(isset($_POST['submit'])) {
                            if( !empty($_POST['Place']) ){
                                $place_start = $_POST['Place'];

                                $tour_search_by_place_start = tour_search_by_place_start($place_start);
                                if(count($tour_search_by_place_start)==0) {
                                    echo'
                                    <div class="col l-12 m-12 c-12">
                                        <div class="vnt-tour" id="row_search">
                                            <div class="alert alert-danger"><div class="noItem">Không có tour nào thỏa yêu cầu</div></div>
                                        </div>
                                    </div>
                                ';  
                                }else{
                                    foreach($tour_search_by_place_start as $value) {
                                        extract($value);
                                        echo '
                                            <div class="row box-search-tour">                     
                                                <div class="col l-4 m-4 c-12">
                                                    <div class="box-search-tour-image">
                                                        <a href="/vi/tour-trong-nuoc/3847/dulich-nha-trang-da-lat" class="isotopeSelector image-box-relative image-box-3x2">
                                                            <img class="tour-image" src="'.$Image.'" alt="Image" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col l-8 m-8 c-12">
                                                    <div class="row">
                                                        <div class="col l-8 m-8 c-12">
                                                        
                                                            <div class="tour-title">
                                                                <a class="tour-title__text" href="">'.$NameTour.'</a>
                                                            </div>
                                                            <div class="destination-tour">
                                                                '.$Detail.'
                                                            </div>
                                                            <div class="detail-tour">
                                                                Thời gian : '.$TimeTour.'<br />
                                                                Phương tiện : '.$Vehicle.' <br />
                                                                '.$Description.'
                                                            </div>
                                                        </div>
                                                        <div class="col l-4 m-4 c-12">
                                                            <div class="row">
                                                                <div class="col l-12 m-12 c-12 row-box-price">
                                                                    <a class="row-box__content" href="">
                                                                        <span class="price-text">Giá từ</span>
                                                                        <span class="price-price">'.$Price.'đ</span>
                                                                    </a>
                                                                </div>
                                                                <div class="col l-12 m-12 c-12 row-box-views">
                                                                    <div class="row-box-cd">
                                                                        <ul class="list-inline detailsBtn" >
                                                                            <li>
                                                                                <span class="textInfo">
                                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                                    '.$Day_Start.'
                                                                                </span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="textInfo">
                                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                                    '.$Day_End.'
                                                                                </span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>                                                            
                                                                    <a class="box-view-more select-tour-action">
                                                                        <i class="fa fa-calendar"></i>
                                                                        <span class="text">Xem thêm</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        ';
                                    }
                                }
                            }else if( !empty($_POST['Destination']) ) {
                                $destination = $_POST['Destination'];
                                $tour_search_by_name_tour = tour_search_by_name_tour($destination);
                                if(count($tour_search_by_name_tour)==0) {
                                    echo'
                                    <div class="col l-12 m-12 c-12">
                                        <div class="vnt-tour" id="row_search">
                                            <div class="alert alert-danger"><div class="noItem">Không có tour nào thỏa yêu cầu</div></div>
                                        </div>
                                    </div>
                                ';  
                                }else {
                                    foreach($tour_search_by_name_tour as $value) {
                                        extract($value);
                                        echo '
                                            <div class="row box-search-tour">                     
                                                <div class="col l-4 m-4 c-12">
                                                    <div class="box-search-tour-image">
                                                        <a href="/vi/tour-trong-nuoc/3847/dulich-nha-trang-da-lat" class="isotopeSelector image-box-relative image-box-3x2">
                                                            <img class="tour-image" src="'.$Image.'" alt="Image" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col l-8 m-8 c-12">
                                                    <div class="row">
                                                        <div class="col l-8 m-8 c-12">
                                                        
                                                            <div class="tour-title">
                                                                <a class="tour-title__text" href="">'.$NameTour.'</a>
                                                            </div>
                                                            <div class="destination-tour">
                                                                '.$Detail.'
                                                            </div>
                                                            <div class="detail-tour">
                                                                Thời gian : '.$TimeTour.'<br />
                                                                Phương tiện : '.$Vehicle.' <br />
                                                                '.$Description.'
                                                            </div>
                                                        </div>
                                                        <div class="col l-4 m-4 c-12">
                                                            <div class="row">
                                                                <div class="col l-12 m-12 c-12 row-box-price">
                                                                    <a class="row-box__content" href="">
                                                                        <span class="price-text">Giá từ</span>
                                                                        <span class="price-price">'.$Price.'đ</span>
                                                                    </a>
                                                                </div>
                                                                <div class="col l-12 m-12 c-12 row-box-views">
                                                                    <div class="row-box-cd">
                                                                        <ul class="list-inline detailsBtn" >
                                                                            <li>
                                                                                <span class="textInfo">
                                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                                    '.$Day_Start.'
                                                                                </span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="textInfo">
                                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                                    '.$Day_End.'
                                                                                </span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>                                                            
                                                                    <a class="box-view-more select-tour-action">
                                                                        <i class="fa fa-calendar"></i>
                                                                        <span class="text">Xem thêm</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        ';
                                    }
                                }
                            }else if(!empty($_POST['date'])) {
                                $date_start = $_POST['date'];

                                $tour_search_by_date_start = tour_search_by_date_start($date_start);
                                if(count($tour_search_by_date_start)==0) {
                                    echo'
                                    <div class="col l-12 m-12 c-12">
                                        <div class="vnt-tour" id="row_search">
                                            <div class="alert alert-danger"><div class="noItem">Không có tour nào thỏa yêu cầu</div></div>
                                        </div>
                                    </div>
                                ';  
                                }else {
                                    foreach($tour_search_by_date_start as $value) {
                                        extract($value);
                                        echo '
                                            <div class="row box-search-tour">                     
                                                <div class="col l-4 m-4 c-12">
                                                    <div class="box-search-tour-image">
                                                        <a href="/vi/tour-trong-nuoc/3847/dulich-nha-trang-da-lat" class="isotopeSelector image-box-relative image-box-3x2">
                                                            <img class="tour-image" src="'.$Image.'" alt="Image" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col l-8 m-8 c-12">
                                                    <div class="row">
                                                        <div class="col l-8 m-8 c-12">
                                                        
                                                            <div class="tour-title">
                                                                <a class="tour-title__text" href="">'.$NameTour.'</a>
                                                            </div>
                                                            <div class="destination-tour">
                                                                '.$Detail.'
                                                            </div>
                                                            <div class="detail-tour">
                                                                Thời gian : '.$TimeTour.'<br />
                                                                Phương tiện : '.$Vehicle.' <br />
                                                                '.$Description.'
                                                            </div>
                                                        </div>
                                                        <div class="col l-4 m-4 c-12">
                                                            <div class="row">
                                                                <div class="col l-12 m-12 c-12 row-box-price">
                                                                    <a class="row-box__content" href="">
                                                                        <span class="price-text">Giá từ</span>
                                                                        <span class="price-price">'.$Price.'đ</span>
                                                                    </a>
                                                                </div>
                                                                <div class="col l-12 m-12 c-12 row-box-views">
                                                                    <div class="row-box-cd">
                                                                        <ul class="list-inline detailsBtn" >
                                                                            <li>
                                                                                <span class="textInfo">
                                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                                    '.$Day_Start.'
                                                                                </span>
                                                                            </li>
                                                                            <li>
                                                                                <span class="textInfo">
                                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                                    '.$Day_End.'
                                                                                </span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>                                                            
                                                                    <a class="box-view-more select-tour-action">
                                                                        <i class="fa fa-calendar"></i>
                                                                        <span class="text">Xem thêm</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        ';
                                    }
                                }
                            }
                            else if(empty($_POST['Place']) && empty($_POST['Destination']) && empty($_POST['date']) && empty($_POST['TourPrice'])) {
                                echo'
                                    <div class="col l-12 m-12 c-12">
                                        <div class="vnt-tour" id="row_search">
                                            <div class="alert alert-danger"><div class="noItem">Không có tour nào thỏa yêu cầu</div></div>
                                        </div>
                                    </div>
                                ';  
                            }else {
                                echo'
                                    <div class="col l-12 m-12 c-12">
                                        <div class="vnt-tour" id="row_search">
                                            <div class="alert alert-danger"><div class="noItem">Không có tour nào thỏa yêu cầu</div></div>
                                        </div>
                                    </div>
                                ';  
                            }                            
                        }else { ?>
                            <?php
                            $tourIn = tour_select_loaitour_1();
                            foreach ($tourIn as $value) {
                            extract($value);
                            echo '
                                <div class="row box-search-tour">                    
                                    <div class="col l-4 m-4 c-12">
                                        <div class="box-search-tour-image">
                                            <a href="/vi/tour-trong-nuoc/3847/dulich-nha-trang-da-lat" class="isotopeSelector image-box-relative image-box-3x2">
                                                <img class="tour-image" src="'.$Image.'" alt="Image" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col l-8 m-8 c-12">
                                        <div class="row">
                                            <div class="col l-8 m-8 c-12">
                                            
                                                <div class="tour-title">
                                                    <a class="tour-title__text" href="">'.$NameTour.'</a>
                                                </div>
                                                <div class="destination-tour">
                                                    '.$Detail.'
                                                </div>
                                                <div class="detail-tour">
                                                    Thời gian : '.$TimeTour.'<br />
                                                    Phương tiện : '.$Vehicle.' <br />
                                                    '.$Description.'
                                                </div>
                                            </div>
                                            <div class="col l-4 m-4 c-12">
                                                <div class="row">
                                                    <div class="col l-12 m-12 c-12 row-box-price">
                                                        <a class="row-box__content" href="">
                                                            <span class="price-text">Giá từ</span>
                                                            <span class="price-price">'.$Price.'đ</span>
                                                        </a>
                                                    </div>
                                                    <div class="col l-12 m-12 c-12 row-box-views">
                                                        <div class="row-box-cd">
                                                            <ul class="list-inline detailsBtn" >
                                                                <li>
                                                                    <span class="textInfo">
                                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                        '.$Day_Start.'
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <span class="textInfo">
                                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                        '.$Day_End.'
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        
                                                        <a class="box-view-more select-tour-action">
                                                            <i class="fa fa-calendar"></i>
                                                            <span class="text">Xem thêm</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                ';
                            }                       
                        }   ?>  
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col l-12 m-12 c-12">
                    <div class="paginationCenter">
                        <ul class="pagination">
                            <li></li>
                            <li class="active">
                                <a class="active" href="">
                                    1
                                </a>
                            </li>
                            <li class="">
                                <a href="">
                                    2
                                </a>
                            </li>
                            <li class="">
                                <a href="">
                                    3
                                </a>
                            </li>
                            <li class="">
                                <a href="">
                                    4
                                </a>
                            </li>
                            <li>
                                <a href="" aria-label="Next">
                                    <span aria-hidden="true">
                                        Tiếp
                                        <i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    require "view/layout/footer-detail.php";
?>


