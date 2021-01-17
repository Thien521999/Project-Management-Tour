<?php 
    require "view/layout/head-tour-detail.php";
    require "dao/detail-tour.php";
    require "dao/tour.php";
?>

<div class="app__content">
    <div class="content_header">
        <div class="grid wide">
            <div class="row">
                <div class="col l-12 m-12 c-12">
                    <ul class="content__top">
                        <li class="content__item"><i class="fas fa-home"></i></li>
                        <li class="content__item"><a href="index.php?page=main">Trang chủ </a></li>
                        <li class="content__item">/</li>
                        <?php
                            $matour = $_GET['matour'];
                            // echo '<script language="javascript">';
                            // echo 'alert("'.$matour.'")';
                            // echo '</script>';
                            $chitiettour = tour_select_by_id($matour);
                            extract($chitiettour);
                            echo '
                        <li class="content__item"><a href=""> '.$NameTour.' </a></li>
                        <li class="content__item">/</li>
                        <li class="content__item hide-on-moblile-tablet">'.$Detail.'</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="content_container">
        <div class="grid wide">
            <div class="row">
                <div class="col l-12 m-12 c-12">
                    <h2 class="name_tour">'.$Detail.'</h2>
                    ';
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="content_main">
                    <div class="col l-8 m-12 c-12">   
                        <div id="page">
                            <section>
                                        <?php
                                                $matour = $_GET['matour'];
                                                $tour_detail = tour_detail_select_all($matour); 
                                                $n = count($tour_detail);
                                                for($i=0; $i<$n; $i++) {
                                                    $img1 = $tour_detail[0]['ImageLocation'];
                                                    $img2 = $tour_detail[1]['ImageLocation'];
                                                    $img3 = $tour_detail[2]['ImageLocation'];
                                                    $img4 = $tour_detail[3]['ImageLocation'];
                                                    $img5 = $tour_detail[4]['ImageLocation'];
                                                    $vehicle= $tour_detail[0]['Vehicle'];
                                                    break;                                       
                                                }                                            
                                        ?>  
                                <header>
                                    <div id="time-indicator"></div>
                                </header>                                    
                                <div id="viewport">
                                    <div id="box">
                                        <?php
                                            echo '
                                                <figure class="slide jbs-current">
                                                    <img class="slide__img" src="'.$img1.'" />
                                                </figure>
                                                <figure class="slide">
                                                    <img class="slide__img" src="'.$img2.'" />
                                                </figure>
                                                <figure class="slide">
                                                    <img class="slide__img" src="'.$img3.'" />
                                                </figure>
                                                <figure class="slide">
                                                    <img class="slide__img" src="'.$img4.'" />
                                                </figure>
                                                <figure class="slide">
                                                    <img class="slide__img" src="'.$img5.'" />
                                                </figure>
                                            ';
                                        ?>                                
                                    </div>
                                </div>                    
                                <footer>
                                    <nav class="slider-controls">                                            
                                        <ul id="effect-list">
                                            <li class="effect__item"><a href="#" class="effect current" data-fx="scrollVert3d">Vertical 3D scroll</a></li>
                                            <li class="effect__item"><a href="#" class="effect" data-fx="tile">2D tiles</a></li>
                                            <li class="effect__item"><a href="#" class="effect" data-fx="scrollHorz3d">Horizontal 3D scroll</a></li>                                                                                   
                                            <li class="effect__item"><a href="#" class="effect" data-fx="blindDown">Blind down</a></li>                           
                                        </ul>

                                        <ul id="controls">
                                            <li><a class="goto-slide current" href="#" data-slideindex="0"></a></li>
                                            <li><a class="goto-slide" href="#" data-slideindex="1"></a></li>
                                            <li><a class="goto-slide" href="#" data-slideindex="2"></a></li>
                                            <li><a class="goto-slide" href="#" data-slideindex="3"></a></li>
                                            <li><a class="goto-slide" href="#" data-slideindex="4"></a></li>
                                        </ul>
                                    </nav>
                                </footer>
                                <div class="content__main-between hide-on-laptop">
                                    <div class="content__price">
                                        <span class="content__gia" id="giactt">Giá từ:</span>
                                        <span class="content__money">5,200,000đ</span>
                                    </div>
                                    <div class="content__content">
                                        <div class="content__form">
                                            <input type="text"  name="dDate" id="dDate" value="2020-12-21" readonly="">
                                        </div>
                                        <div class="content__btn">
                                            <a href="index.php?page=booking-tour&matour='.$TourID.'">
                                                <button type="button" class="btn-order-tour">đặt tour</button>
                                            </a>                         
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>     
                    
                        <div class="page_bottom">
                            <!-- Điểm nhấn hành trình -->
                            <div class="boxTour" id="flag1">
                                <div class="title">
                                    <span class="icon__info-circle">
                                        <i class="fas fa-info-circle"></i>
                                    </span>
                                    <?php
                                    $matour = $_GET['matour'];
                                    // echo '<script language="javascript">';
                                    // echo 'alert("'.$matour.'")';
                                    // echo '</script>';
                                    $chitiettour = tour_select_by_id($matour);
                                    extract($chitiettour);
                                    echo '
                                    <span class="title__name">Điểm nhấn hành trình</span>
                                    <span class="title__content">
                                        <span class="title__like">                                    
                                            <i class="fas fa-thumbs-up"></i><span>Thích</span>
                                        </span>                          
                                        <span class="title__share">Chia sẻ</span>
                                    </span>
                                </div>
                                <div class="boxTour__content">
                                    <div class="boxTour__table">
                                        <table class="table" align="left" border="0" cellpadding="5" cellspacing="5" style="width: 100%;">
                                            <tbody>
                                                <tr>
                                                    <td class="boxTour__td" style="text-align: justify; width: 20%;">
                                                        <strong><span class="boxTour__text" >Hành trình:</span></strong>
                                                    </td>
                                                    <td class="boxTour__td" style="text-align: justify;">
                                                        <strong><span class="boxTour__text" >'.$Detail.'</span></strong>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="boxTour__td" style="text-align: justify;">
                                                        <strong><span class="boxTour__text" >Lịch trình:</span></strong>
                                                    </td>
                                                    <td class="boxTour__td" style="text-align: justify;">
                                                        <strong><span class="boxTour__text" >'.$TimeTour.'</span></strong>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="boxTour__td" style="text-align: justify;">
                                                        <strong><span class="boxTour__text" >Ngày khởi hành:</span></strong>
                                                    </td>
                                                    <td class="boxTour__td" style="text-align: justify;">
                                                        <strong><span class="boxTour__text" >'.$Day_Start.'</span></strong>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="boxTour__td" style="text-align: justify;">
                                                        <strong><span class="boxTour__text" >Vận chuyển:</span></strong>
                                                    </td>
                                                    <td class="boxTour__td" style="text-align: justify;">
                                                        <strong><span class="boxTour__text" >'.$Vehicle.'</span></strong>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>        
                                    </div>
                                  
                                    <div class="boxTour__main">
                                        <span class="boxTour-bold"><i>'.$Detail.'</i></span>
                                        <i class="boxTour-nhat">&nbsp; đưa du khách đến không gian xanh mát của núi rừng. Hành trình du lịch Đông Bắc, đưa du khách tham quan những thắng cảnh đồi núi trùng điệp hùng vĩ, hay những thác nước chảy cuồn cuộn, những cảnh thiên nhiên thơ mộng, hay sự nhộn nhịp của những con phố cổ. </i>
                                    </div>
                                </div>
                            </div>
                            ';
                            ?>

                            
                            <!-- Lịch trình -->
                            <div class="boxTour" id="flag2">
                                <div class="title">
                                    <span class="icon__info-circle"><i class="fa fa-map"></i></span>
                                    <span class="title__name">Lịch trình</span>
                                </div>
                                <div class="listDay">
                                    <div class="day">
                                        <div class="titDay day1">
                                            <span class="icon"><i class="fas fa-dot-circle"></i></span>
                                            <span >NGÀY 1 |</span> 
                                            TP.HCM – TUY HÒA – GÀNH ĐÁ DĨA (ăn trưa, chiều)(Xem thêm)
                                        </div>
                                        <div class="contDay1">
                                            <div class="the-content desc">                                                    
                                                <div style="text-align: justify;"><strong>Sáng: </strong>&nbsp;Quý khách có mặt tại ga quốc nội, sân bay Tân Sơn Nhất trước giờ bay ít nhất ba tiếng.</div>
                                                <ul>
                                                    <li style="text-align: justify;">Đại diện công ty <strong>Du Lịch Việt</strong> đón và hỗ trợ Quý Khách làm thủ tục đón chuyến bay đi <strong>Tuy Hòa</strong>.&nbsp;</li>
                                                    <li style="text-align: justify;">
                                                        Đến sân bay Tuy Hòa, Hướng dẫn viên đón đoàn viếng nhà thờ <strong>Mằng Lăng</strong> - một trong những nhà thờ cổ nhất Việt Nam mang đậm dấu ấn kiến trúc thế kỷ XIX.                          
                                                    </li>
                                                </ul>
                                                <div style="text-align: justify;">
                                                    <strong>Trưa:</strong>&nbsp;Dùng cơm trưa.
                                                    <ul>
                                                        <li>
                                                            Đoàn khởi hành đến <strong>Bãi Xép (Gành Xép)</strong> một bãi cát vàng óng kéo dài giữa hai mũi đá lớn nhô ra biển.
                                                        </li>
                                                        <li>Tại đây du khách có thể lưu lại những bức hình kỉ niệm với các bãi đá đen, cát vàng óng, bãi cỏ rộng mênh mông .</li>
                                                    </ul>
                                                </div>
                                                <p><strong>Chiều: </strong>Dùng cơm chiều. Nghỉ đêm tại <strong>Tuy Hoà.</strong></p>
                                                <ul>
                                                    <li>Quý khách tự do mua sắm các đặc sản <strong>Phú Yên</strong> như: khô cá ngừ đại dương, bò một nắng hai sương, muối kiến vàng lá then leng…</li>
                                                </ul>
                                                
                                            </div>
                                        </div>
                                    </div>  
                                    
                                    <div class="day">
                                        <div class="titDay day2">
                                            <span class="icon"><i class="fas fa-dot-circle"></i></span>
                                            <span >NGÀY 2 |</span> 
                                            TP.HCM – HÀ NỘI – HÒA BÌNH – MAI CHÂU – MỘC CHÂU (Ăn trưa, chiều)(Xem thêm)
                                        </div>
                                        <div class="contDay2">
                                            <div class="the-content desc">                                                    
                                                <div style="text-align: justify;"><strong>Sáng: </strong>&nbsp;Quý khách có mặt tại ga quốc nội, sân bay Tân Sơn Nhất trước giờ bay ít nhất ba tiếng.</div>
                                                <ul>
                                                    <li style="text-align: justify;">Đại diện công ty <strong>Du Lịch Việt</strong> đón và hỗ trợ Quý Khách làm thủ tục đón chuyến bay đi <strong>Tuy Hòa</strong>.&nbsp;</li>
                                                    <li style="text-align: justify;">
                                                        Đến sân bay Tuy Hòa, Hướng dẫn viên đón đoàn viếng nhà thờ <strong>Mằng Lăng</strong> - một trong những nhà thờ cổ nhất Việt Nam mang đậm dấu ấn kiến trúc thế kỷ XIX.                          
                                                    </li>
                                                </ul>
                                                
                                                <div style="text-align: justify;">
                                                    <strong>Trưa:</strong>&nbsp;Dùng cơm trưa.
                                                    <ul>
                                                        <li>
                                                            Đoàn khởi hành đến <strong>Bãi Xép (Gành Xép)</strong> một bãi cát vàng óng kéo dài giữa hai mũi đá lớn nhô ra biển.
                                                        </li>
                                                        <li>Tại đây du khách có thể lưu lại những bức hình kỉ niệm với các bãi đá đen, cát vàng óng, bãi cỏ rộng mênh mông .</li>
                                                    </ul>
                                                </div>
                                                
                                                <p><strong>Chiều: </strong>Dùng cơm chiều. Nghỉ đêm tại <strong>Tuy Hoà.</strong></p>
                                                <ul>
                                                    <li>Quý khách tự do mua sắm các đặc sản <strong>Phú Yên</strong> như: khô cá ngừ đại dương, bò một nắng hai sương, muối kiến vàng lá then leng…</li>
                                                </ul>                                            
                                            </div>
                                        </div>
                                    </div>                                  
                                </div>                            
                            </div>   
                            
                            <!-- Dịch vụ đi kèm -->
                            <div class="boxTour" id="flag3">
                                <div class="title">
                                    <span class="icon__info-circle">
                                        <i class="fa fa-paperclip"></i>
                                    </span>
                                    <span class="title__name">Dịch vụ đi kèm</span>
                                </div>
                                <div class="boxTour__content">
                                    <div class="col l-12 ">
                                        <div class="row tourService">
                                            <div class="col l-4 tourServiceItem">
                                                    <i class="fas fa-check text-blue"></i>Bảo hiểm
                                                </span>
                                            </div>
                                            <div class="col l-4 tourServiceItem">
                                                <span>
                                                    <i class="fas fa-utensils text-blue"></i><span>Bữa ăn</span>
                                                </span>
                                            </div>
                                            <div class="col l-4 tourServiceItem">
                                                <span>
                                                    <i class="fas fa-flag text-blue"></i>Hướng dẫn viên
                                                </span>
                                            </div>                                            
                                        </div>
                                        <div class="row tourService">
                                            <div class="col l-4 tourServiceItem">
                                                <span>
                                                    <i class="fas fa-ticket-alt text-blue"></i>Vé tham quan
                                                </span>
                                            </div>
                                            <div class="col l-4 tourServiceItem">
                                                <span>
                                                    <i class="fas fa-bus text-blue"></i>Xe đưa đón
                                                </span>
                                            </div>
                                                                                      
                                        </div>
                                    </div>                                       
                                </div>
                            </div>
                            <!-- Ngày khởi hành khác -->
                            <!-- <div class="boxTour" id="flag4">
                                <div class="title">
                                    <span class="icon__info-circle">
                                        <i class="fas fa-calendar"></i>
                                    </span>
                                    <span class="title__name">Ngày khởi hành khác</span>
                                </div>
                                <div class="boxTour__content">
                                    <div class="col l-12 ">
                                        <div class="row tourService">
                                            <div class="col l-4 tourServiceItem">
                                                    <i class="fas fa-check text-blue"></i>Bảo hiểm
                                                </span>
                                            </div>
                                            <div class="col l-4 tourServiceItem">
                                                <span>
                                                    <i class="fas fa-utensils text-blue"></i><span>Bữa ăn</span>
                                                </span>
                                            </div>
                                            <div class="col l-4 tourServiceItem">
                                                <span>
                                                    <i class="fas fa-flag text-blue"></i>Hướng dẫn viên
                                                </span>
                                            </div>                                            
                                        </div>
                                        <div class="row tourService">
                                            <div class="col l-4 tourServiceItem">
                                                <span>
                                                    <i class="fas fa-ticket-alt text-blue"></i>Vé tham quan
                                                </span>
                                            </div>
                                            <div class="col l-4 tourServiceItem">
                                                <span>
                                                    <i class="fas fa-bus text-blue"></i>Xe đưa đón
                                                </span>
                                            </div>
                                                                                      
                                        </div>
                                    </div>                                       
                                </div>
                            </div> -->
                            
                            <!-- Điều khoản -->
                            <div class="boxTour" id="flag4">
                                <div class="title">
                                    <span class="icon__info-circle">
                                        <i class="fa fa-paperclip"></i>
                                    </span>
                                    <span class="title__name">Điều khoản</span>
                                </div>

                                <div class="boxTour__contents">
                                    <!-- <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="">
                                            <a href="#tabpanel1" role="tab" id="tab1" data-toggle="tab" aria-controls="tabpanel1" aria-expanded="false"><span class="visible-lg-inline">Giá</span> Bao Gồm</a>
                                        </li>
                                        <li role="presentation" class="">
                                            <a href="#tabpanel2" role="tab" id="tab2" data-toggle="tab" aria-controls="tabpanel2" aria-expanded="false"><span class="visible-lg-inline">Giá</span> Không Bao Gồm</a>
                                        </li>
                                        <li role="presentation" class="">
                                            <a href="#tabpanel3" role="tab" id="tab3" data-toggle="tab" aria-controls="tabpanel3" aria-expanded="false">Hủy Đổi</a>
                                        </li>
                                        <li role="presentation" class="active">
                                            <a href="#tabpanel4" role="tab" id="tab4" data-toggle="tab" aria-controls="tabpanel4" aria-expanded="true">Lưu ý</a>
                                        </li>
                                    </ul> -->
                                    
                                    <div class="col l-12 ">
                                        <div class="row tourService">
                                            <!-- <div class="col l-3 tourServiceItem">
                                                <button class="tablink" onclick="openContent('PriceInclude',this, 'yellow')" id="defaultOpen">Gía bao gồm</button>
                                            </div>
                                            <div class="col l-3 tourServiceItem">
                                                <button class="tablink" onclick="openContent('PriceUnInclude',this, 'yellow')">Gía không bao gồm</button>
                                            </div>
                                            <div class="col l-3 tourServiceItem">
                                                <button class="tablink" onclick="openContent('Cancel',this, 'yellow')">Hủy đổi</button>
                                            </div>                                            
                                            <div class="col l-3 tourServiceItem">
                                                <button class="tablink" onclick="openContent('Note',this, 'yellow')">Lưu ý</button>
                                            </div>     -->
                                            <button class="tablink" onclick="openContent('PriceInclude',this, '#EE4D2D')" id="defaultOpen">Gía bao gồm</button>  
                                            <button class="tablink" onclick="openContent('PriceUnInclude',this, '#EE4D2D')">Gía không bao gồm</button>        
                                            <button class="tablink" onclick="openContent('Cancel',this, '#EE4D2D')">Hủy đổi</button>             
                                            <button class="tablink" onclick="openContent('Note',this, '#EE4D2D')">Lưu ý</button>                 
                                        </div>                                   
                                    </div>                                       
                                </div>
                                <div class="dieukhoan">
                                    <!-- PriceInclude -->
                                    <div id="PriceInclude" class="tabcontent">
                                        <p class="tabcontent__text "><span class="tabcontent--big" style="text-decoration: underline;font-size: 1.5rem;">Vận chuyển: </span></p>
                                        <p class="tabcontent__text tabcontent--small">- Xe tham quan (16, 29, 35, 45 chỗ tùy theo số lượng) đón - tiễn và phục vụ theo chương trình.</p>
                                        <p class="tabcontent__text tabcontent--small">- Vé máy bay khứ hồi: Viet jet Air ( 07 kg sách tay + 20 kg hành lý ký gửi/kiện).</p>
                                        <p class="tabcontent__text"><span class="tabcontent--big" style="text-decoration: underline;font-size: 1.5rem;">Lưu trú:</span></p>
                                        <p class="tabcontent__text tabcontent--small">-&nbsp;&nbsp;Khách sạn 3 sao: 2 – 3 khách/phòng (trường hợp lẻ nam, nữ ở phòng 03).</p>
                                        <p class="tabcontent__text"><span class="tabcontent--big" style="text-decoration: underline;font-size: 1.5rem;">Khác:</span></p>
                                        <p class="tabcontent__text tabcontent--small">- Ăn uống theo như chương trình.</p>
                                        <p class="tabcontent__text tabcontent--small">- Tham quan: Vé tham quan các điểm du lịch theo chương trình.</p>
                                        <p class="tabcontent__text tabcontent--small">- Hướng dẫn viên tiếng Việt: Phục vụ nhiệt tình, tận tâm, chu đáo.</p>
                                        <p class="tabcontent__text tabcontent--small">- Quà tặng: Nón du lịch , 01 nước suối (0.5 lít/ngày).</p>
                                        <p class="tabcontent__text tabcontent--small">- Để xác nhận việc lấy hóa đơn đỏ VAT, Quý khách phải cung cấp thông tin ngay khi đăng ký.</p>
                                        <p class="tabcontent__text tabcontent--small">- Bảo hiểm: Du lịch chọn tour, mức bồi thường tối đa 20.000.000 đ/trường hợp.</p>
                                    </div>
                                    <!-- PriceUnInclude -->
                                    <div id="PriceUnInclude" class="tabcontent">
                                        <p class="tabcontent__text tabcontent--small">- Ăn uống, vui chơi giải trí cá nhân .. ngoài chương trình.</p>
                                        <p class="tabcontent__text tabcontent--small">- 01 bữa ăn tối tại Sapa (bữa tối ,ngày thứ 2 theo chương trình).</p>
                                        <p class="tabcontent__text tabcontent--small">- Cáp treo Fanxipang 850.000 vnđ/khách.</p>
                                        <p class="tabcontent__text tabcontent--small">- Tham quan cây cầu kính Rồng Mây.</p>
                                        <p class="tabcontent__text tabcontent--small">- Cáp treo Sunworld Hạ Long,…</p>
                                        <p class="tabcontent__text tabcontent--small">- Vé xe điện khứ hồi lên Chùa Bái Đính : 60.000đ/ khách.</p>
                                        <p class="tabcontent__text tabcontent--small">- Phụ Thu phòng đơn.</p>
                                    </div>
                                    <!--Cancel-->                            
                                    <div id="Cancel" class="tabcontent">
                                        <p class="tabcontent--big">Chính sách hủy:</p>
                                        <p class="tabcontent__text">Mọi sự thay đổi liên quan đến vé đã xuất: ngày giờ đi, tên hành khách, hủy vé, vui lòng chịu chi phí theo qui định sau:</p>
                                        <p class="tabcontent__text tabcontent--small">- Ngay sau khi đăng ký tour nếu hủy sẽ bị phạt tiền tour và vé máy bay:&nbsp;</p>
                                        <p class="tabcontent__text tabcontent--small">- Ngay sau khi đặt cọc hoặc thanh toán hoặc trước 15 ngày: phí hủy 10% tiền tour + 100% Vé máy bay.</p>
                                        <p class="tabcontent__text tabcontent--small">- Hủy 10 ngày trước ngày khởi hành: phí hủy 50% tiền tour + 100% vé máy bay.</p>
                                        <p class="tabcontent__text tabcontent--small">- Hủy 07 ngày trước ngày khởi hành: phí hủy 70% tiền tour&nbsp; + 100% vé máy bay.</p>
                                        <p class="tabcontent__text tabcontent--small">- Hủy&nbsp; 05 ngày trước ngày khởi hành: phí hủy 100% tiền tour&nbsp; + 100% vé máy bay.</p>
                                        <p class="tabcontent__text tabcontent--small">(Các ngày đặt cọc, thanh toán, huỷ và dời tour: không tính thứ 7, Chủ Nhật, Lễ - Tết)</p>
                                        <p class="tabcontent__text tabcontent--small">- Quý khách có mặt trước giờ bay 120 tại điểm hẹn, trường hợp quý khách đến trễ giờ khởi hành, được tính là hủy 5 ngày trước ngày khởi hành.</p>
                                        <p class="tabcontent__text tabcontent--small">- Do tính chất là đoàn ghép khách lẻ,công ty sẽ có trách nhiệm nhận khách đăng ký cho đủ đoàn ( trên 10 người lớn) thì đoàn sẽ khởi hành đúng lịch trình. Nếu số lượng đoàn dưới 10 khách, công ty có trách nhiệm thông báo cho khách trước ngày khởi hành 3 ngày và sẽ thỏa thuận lại ngày khởi hành mới hoặc hoàn trả toàn bộ số tiền đã đặt cọc tour.</p>
                                        <p class="tabcontent__text tabcontent--small">- Việc huỷ bỏ chuyến đi phải được thông báo trực tiếp với Công ty hoặc qua fax, email, tin nhắn và phải được Công ty xác nhận. Việc huỷ bỏ bằng điện thoại không được chấp nhận.</p>
                                        <p class="tabcontent__text tabcontent--small">- Đối với sự thay đổi lịch trình, giờ bay do lỗi của hãng hàng không, tàu hoả, tàu thuỷ,&nbsp;công ty&nbsp;sẽ không chịu trách nhiệm bất kỳ phát sinh nào do lỗi trên như: phát sinh bữa ăn, nhà hàng, khách sạn, phương tiện di chuyển, hướng dẫn viên, ….</p>                                     
                                    </div>
                                    <!-- Note -->
                                    <div id="Note" class="tabcontent">
                                        <p class="tabcontent__text tabcontent--small">- Trong những trường hợp bất khả kháng như: khủng bố, bạo động, thiên tai, lũ lụt. dịch bệnh… Tuỳ theo tình hình thực tế và sự thuận tiện, an toàn của khách hàng,&nbsp;công ty&nbsp;sẽ chủ động thông báo cho khách hàng sự thay đổi như sau: huỷ hoặc thay thế bằng một chương trình mới với chi phí tương đương chương trình tham quan trước đó. Trong trường hợp chương trình mới có phát sinh thì Khách hàng sẽ thanh toán khoản phát sinh này. Tuy nhiên, mỗi bên có trách nhiệm cố gắng tối đa, giúp đỡ bên bị thiệt hại nhằm giảm thiểu các tổn thất gây ra vì lý do bất khả kháng.…</p>
                                        <p class="tabcontent__text tabcontent--small">- Khi Quý khách đăng kí tour, xác nhận sự chính xác về họ, tên (đúng từng ký tự ghi trong hộ chiếu hoặc CMND), ngày-tháng-năm sinh.. của hành khách theo yêu cầu của hãng vận chuyển.</p>
                                        <p class="tabcontent__text tabcontent--small">- Do đặc điểm địa hình, tại Sapa quý khách chủ yếu đi bộ để tham quan, vì thế quý khách vui lòng lựa chọn trang phục phù hợp.</p>
                                        <p class="tabcontent__text tabcontent--small">- Quý khách trên 70 tuổi hoặc phụ nữ có Thai dưới 06 Tháng (Vì lý do sức khỏe của Thai phụ, chúng tôi từ chối cung cấp dịch vụ tour cho Phụ nữ mang thai trên 06 tháng) khi đi phải có giấy xác nhận đảm bảo sức khỏe của Bệnh viện cấp Quận/ Huyện trở lên.</p>
                                        <p class="tabcontent__text tabcontent--small">- Khi đi du lịch Quý khách dưới 14 tuổi mang theo giấy khai sinh bản chính hoặc hộ chiếu còn hạn, Trên&nbsp; 14 tuổi phải đem theo giấy CMND, Hộ Chiếu, CCCD bản chính, hình ảnh rõ, còn hạn sử dụng trong vòng 15 năm kể từ ngày cấp hoặc Hộ Chiếu còn hạn.</p>
                                        <p class="tabcontent__text tabcontent--small">- Riêng khách Việt Kiều phải mang theo Hộ Chiếu hoặc thẻ xanh kèm theo Visa và giấy tái xuất nhập Việt Nam làm thủ tục lên máy bay.</p>
                                        <p class="tabcontent__text tabcontent--small">- Hành lý sách tay: Tối đa 07 ký xách tay /khách, không để các vật dụng sắc nhọn, chất dễ cháy .</p>
                                        <p class="tabcontent__text tabcontent--small">- Hành lý ký gửi: tối đa 20kg /khách, không để máy chụp ảnh, máy tính sách tay, tư trang, tiền bạc có giá trị vào hành lý ký gửi.</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            /* Khi nhấn nút DESCRIPTION, MAP, REVIEW ..... */
                            function openContent(cityName, element, color) {
                                var i, tabcontent, tablinks;
                                //an di phan noi dung
                                tabcontent = document.getElementsByClassName("tabcontent");
                                for (i = 0; i < tabcontent.length; i++) {
                                    tabcontent[i].style.display = "none";
                                }
                                //gan mau cho phan tablink la rong
                                tablinks = document.getElementsByClassName("tablink");
                                for (i = 0; i < tablinks.length; i++) {
                                    tablinks[i].style.backgroundColor = "";
                                }
                                //
                                document.getElementById(cityName).style.display = "block";
                                element.style.backgroundColor = color;
                            }
                            
                            document.getElementById("defaultOpen").click();
                        </script>
                    </div>

                    <!-- --------- -->
                    <div class="col l-4 m-12 c-12">
                        <div class="content__main-left hide-on-PC">
                            <?php
                                $matour = $_GET['matour'];
                                $chitiettour = tour_select_by_id($matour);
                                extract($chitiettour);
                                echo '
                            <div class="content__detail">
                                <div class="content__name">'.$Description.'</div>
                                <ul class="content_pt">
                                    <li class="content__tpt">
                                        <div class="at">Mã tour</div>
                                        <div class="as">'.$TourID.'</div>
                                    </li>
                                    <li class="content__tpt">
                                        <div class="at">Thời gian</div>
                                        <div class="as">'.$TimeTour.'</div>
                                    </li>
                                    <li class="content__tpt">
                                        <div class="at">Khởi hành</div>
                                        <div class="as">'.$Day_Start.'</div>
                                    </li>
                                    ';
                            ?>

                            <?php
                                echo '
                                    <li class="content__tpt">
                                        <div class="at">Vận chuyển</div>
                                        <div class="as">'.$vehicle.'</div>
                                    </li>
                                    <li class="content__tpt">
                                        <div class="at">Xuất phát</div>
                                        <div class="as">Từ Hồ Chí Minh</div>
                                    </li>
                                </ul>
                            </div>
                            ';
                            ?>
                        </div>

                        <?php
                                echo '
                        <div class="content__main-between hide-on-PC">
                            <div class="content__price">
                                <span class="content__gia" id="giactt">Giá từ:</span>
                                <span class="content__money">'.$Price.'đ</span>
                            </div>
                            <div class="content__content">
                                <div class="content__form">
                                    <input type="text"  name="dDate" id="d__Date" value="'.$Day_Start.'" readonly="">
                                </div>
                                <div class="content__btn">
                                    <a href="index.php?page=booking-tour&matour='.$TourID.'">
                                        <button type="button" class="btn-order-tour">đặt tour</button>
                                    </a>                         
                                </div>
                            </div>
                        </div>
                        ';
                        ?>

                        <div class="boxDesign2 hide-on-PC">
                            <ul>
                                <li class="">
                                    <a href="#flag1"><i class="fas fa-info-circle boxDesign2__icon"></i><span class="boxDesign__text ">Điểm nhấn hành trình</span></a>
                                </li>
                                <li class="">
                                    <a href="#flag2"><i class="fa fa-map boxDesign2__icon"></i><span class="boxDesign__text ">Lịch trình</span></a>
                                </li>
                                <li class="">
                                    <a href="#flag3"><i class="fa fa-paperclip boxDesign2__icon"></i><span class="boxDesign__text ">Dịch vụ bao gồm và không bao gồm</span></a>
                                </li>
                                <li class="">
                                    <a href="#flag4"><i class="fas fa-calendar-day boxDesign2__icon"></i><span class="boxDesign__text ">Ngày khởi hành khác</span></a>
                                </li>
                                <li class="active">
                                    <a href="#flag5"><i class="fas fa-sticky-note boxDesign2__icon"></i><span class="boxDesign__text ">Ghi chú</span></a>
                                </li>
                                <li class="">
                                    <a href="#flag6"><i class="fas fa-comments boxDesign2__icon"></i><span class="boxDesign__text ">Bình luận</span></a>
                                </li>
                            </ul>
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