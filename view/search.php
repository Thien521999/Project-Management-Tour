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
                            <li class="content__item"><a href="index.php?page=main">Trang chủ </a></li>
                            <li class="content__item">/</li>
                            <li class="content__item">Tìm tour</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid wide">
            <div class="row">
                <div class="col l-12 m-12 c-12">
                    <div class="header-search">
                        <h2  class="label-search">Tìm tour</h2>
                        <ul class="search-item">
                            <li class="header-comment">Đánh giá:</li>
                            <li class="icon-star">
                                <span class="header-icon-star header-icon--icon"><i class="fas fa-star"></i> </span>
                                <span class="header-icon-star header-icon--icon"><i class="fas fa-star"></i> </span>
                                <span class="header-icon-star header-icon--icon"><i class="fas fa-star"></i> </span>
                                <span class="header-icon-star"><i class="fas fa-star"></i> </span>
                                <span class="header-icon-star"><i class="fas fa-star"></i> </span>
                            </li>
                            <li><span class="header__tb">2.57</span></li>
                            <li><span class="">trong</span></li>
                            <li><span class="header__tb">195</span></li>
                            <li><span class="">Đánh giá</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col l-3 m-3 c-12">
                    <div class="box-search" >
                        <div class="box-search__title">Lọc tour theo</div>
                        <div class="box-search__content">
                            <form action="" method="post" id="formSearchTour">
                                <div class="form-group ">
                                    <label class="label-name" for="">Nơi khởi hành</label>
                                    <div class="formFa">
                                        <select name="Place" id="start-go" class="content-col__item">
                                            <option value="" disabled selected>Nơi khởi hành</option>
                                            <option value="Hà Nội">Hà Nội</option>
                                            <option value="Thành Phố HCM">Thành Phố HCM</option>
                                            <option value="Nha Trang">Nha Trang</option>
                                            
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="label-name" for="">Điểm đến</label>
                                    <div class="formFa">
                                        <select name="Destination" id="" class="content-col__item">
                                            <option value="" disabled selected>Điểm đến</option>
                                            <option value="Ninh Thuận">Ninh Thuận</option>
                                            <option value="Hà Giang">Hà Giang</option>
                                            <option value="SaPa">SaPa</option>
                                            <option value="Phú Quốc">Phú Quốc</option>                                     
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="label-name" for="">Ngày khởi hành</label>
                                    <div class="formFa ">
                                        <input name="date" type="date" value="mm/dd/yyyy" class="content-col__item">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="label-name" for="">Chọn giá tour</label>
                                    <div class="formFa">
                                        <div class="content-col" title="" style="width: 100%;">
                                            <select name="TourPrice" class="content-col__item">
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
                                </div>

                                <div class="formFa">
                                    <div id="slider-range" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                        <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div>
                                        <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;"></span>
                                        <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;"></span>
                                    </div>
                                </div>

                                <!-- <div class="formFa">
                                    <input type="range" id="rangeInput" name="rangeInput" min="0" max="20" value="0" oninput="amount.value=rangeInput.value">                                                       
                                    <output id="amount" name="amount" for="rangeInput">0</output>
                                </div>

                                <div class="formFa">
                                    <script>
                                        function updateTextInput(val) {
                                                document.getElementById('textInput').value=val; 
                                        }                              
                                    </script>
                                    <input type="range" name="rangeInput" min="0" max="20000000" onchange="updateTextInput(this.value);">
                                    <input type="text" id="textInput" value="">
                                </div> -->

                                <div class="form-group">
                                    <button type="submit" name="submit" class="content-btn">
                                        <i class="content-btn__icon fas fa-search"></i>
                                        <span class="content-btn__icon content-text-text">Tìm kiếm</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <?php
                    if(isset($_POST['submit'])) {
                        if( !empty($_POST['Place']) ) {            
                            $place_start = $_POST['Place'];

                            $tour_search_by_place_start = tour_search_by_place_start($place_start);
                            if(count($tour_search_by_place_start)==0) {
                                echo'
                                <div class="col l-9 m-9 c-12">
                                    <div class="vnt-tour" id="row_search">
                                        <div class="alert alert-danger"><div class="noItem">Không có tour nào thỏa yêu cầu</div></div>
                                    </div>
                                </div>
                            ';  
                            }else {
                                echo '<div class="col l-9 m-9 c-12">';
                                foreach($tour_search_by_place_start as $value) {
                                    extract($value);
    
                                    /*if(strlen(strstr($NameTour, $destination)) > 0) {
                                        $n = strlen(strstr($NameTour, $destination));
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
                                                                    Số chỗ còn nhận : 10 <br />
                                                                    Ngày khởi hành : '.$Day_Start.'
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
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        ';
                                        
                                    }else {
                                            echo'
                                            <div class="col l-9 m-9 c-12">
                                                <div class="vnt-tour" id="row_search">
                                                    <div class="alert alert-danger"><div class="noItem">Không có tour nào thỏa yêu cầu</div></div>
                                                </div>
                                            </div>
                                            ';  
                                            
                                    }*/
                                    
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
                                                                Số chỗ còn nhận : 10 <br />
                                                                Ngày khởi hành : '.$Day_Start.'
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
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    ';
                                }  
                                echo '</div>';                                   
                            }
                        }else if( !empty($_POST['Destination']) ) {
                            $destination = $_POST['Destination'];
                            $tour_search_by_name_tour = tour_search_by_name_tour($destination);
                            if(count($tour_search_by_name_tour)==0) {
                                echo'
                                <div class="col l-9 m-9 c-12">
                                    <div class="vnt-tour" id="row_search">
                                        <div class="alert alert-danger"><div class="noItem">Không có tour nào thỏa yêu cầu</div></div>
                                    </div>
                                </div>
                            ';  
                            }else {
                                echo '<div class="col l-9 m-9 c-12">';
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
                                                                Số chỗ còn nhận : 10 <br />
                                                                Ngày khởi hành : '.$Day_Start.'
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
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    ';
                                }  
                                echo '</div>';                                   
                            }
                        }else if(!empty($_POST['date'])) {
                            $date_start = $_POST['date'];

                            $tour_search_by_date_start = tour_search_by_date_start($date_start);
                            if(count($tour_search_by_date_start)==0) {
                                echo'
                                <div class="col l-9 m-9 c-12">
                                    <div class="vnt-tour" id="row_search">
                                        <div class="alert alert-danger"><div class="noItem">Không có tour nào thỏa yêu cầu</div></div>
                                    </div>
                                </div>
                            ';  
                            }else {
                                echo '<div class="col l-9 m-9 c-12">';
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
                                                                Số chỗ còn nhận : 10 <br />
                                                                Ngày khởi hành : '.$Day_Start.'
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
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    ';
                                }  
                                echo '</div>';                                   
                            }
                        }
                        else if(empty($_POST['Place']) && empty($_POST['Destination']) && empty($_POST['date']) && empty($_POST['TourPrice'])) {
                            echo'
                                <div class="col l-9 m-9 c-12">
                                    <div class="vnt-tour" id="row_search">
                                        <div class="alert alert-danger"><div class="noItem">Không có tour nào thỏa yêu cầu</div></div>
                                    </div>
                                </div>
                            ';  
                            /*$tour_all = tour_select_all();
                            foreach ($tour_all as $value) {
                                extract($value);
                                echo '
                                    <div class="col l-9 m-9 c-12">
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
                                                            Số chỗ còn nhận : 10 <br />
                                                            Ngày khởi hành : '.$Day_Start.'
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
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ';
                            }*/
                        }else {
                            echo'
                                <div class="col l-9 m-9 c-12">
                                    <div class="vnt-tour" id="row_search">
                                        <div class="alert alert-danger"><div class="noItem">Không có tour nào thỏa yêu cầu</div></div>
                                    </div>
                                </div>
                            ';  
                        } 
                    }else {
                        echo '<div class="col l-9 m-9 c-12">';
                        $tour_all = tour_select_all();
                            foreach ($tour_all as $value) {
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
                                                            Số chỗ còn nhận : 10 <br />
                                                            Ngày khởi hành : '.$Day_Start.'
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
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                ';
                            }
                        echo '</div>';
                    }                          
                ?>                          
                <!-- <div class="col l-9 m-9 c-12"> -->
                    <?php
                        // $tourIn = tour_select_loaitour_2();
                        // foreach ($tourIn as $value) {
                        // extract($value);
                        // echo '
                        //     <div class="row box-search-tour">
                        //         <div class="col l-4 m-4 c-12">
                        //             <div class="box-search-tour-image">
                        //                 <a href="/vi/tour-trong-nuoc/3847/dulich-nha-trang-da-lat" class="isotopeSelector image-box-relative image-box-3x2">
                        //                     <img class="tour-image" src="'.$Image.'" alt="Image" />
                        //                 </a>
                        //             </div>
                        //         </div>
                        //         <div class="col l-8 m-8 c-12">
                        //             <div class="row">
                        //                 <div class="col l-8 m-8 c-12">
                        //                     <div class="tour-title">
                        //                         <a class="tour-title__text" href="">'.$NameTour.'</a>
                        //                     </div>
                        //                     <div class="destination-tour">
                        //                     '.$Detail.'
                        //                     </div>
                        //                     <div class="detail-tour">
                        //                         Thời gian : '.$TimeTour.'<br />
                        //                         Phương tiện : '.$Vehicle.' <br />
                        //                         Số chỗ còn nhận : 10 <br />
                        //                         Ngày khởi hành : '.$Day_Start.'
                        //                     </div>
                        //                 </div>
                        //                 <div class="col l-4 m-4 c-12">
                        //                     <div class="row">
                        //                         <div class="col l-12 m-12 c-12 row-box-price">
                        //                             <a class="row-box__content" href="">
                        //                                 <span class="price-text">Giá từ</span>
                        //                                 <span class="price-price">'.$Price.'đ</span>
                        //                             </a>
                        //                         </div>
                                                
                        //                     </div>
                        //                 </div>
                        //             </div>
                        //         </div>
                        //     </div>
                        //     ';
                        // }
                    ?> 
                <!-- </div> -->
            </div>
        </div>
    </div>
<?php
    require "view/layout/footer-detail.php";
?>