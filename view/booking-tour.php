<?php 
    include "view/layout/head-tour-detail.php";
    include "dao/tour.php";
    include "dao/table-price.php";
    include "dao/booking-tour.php";
    include "dao/detail-tour.php";
    require "view/Function/function.php";
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
                            <li class="content__item"> Đặt tour </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="content_container">
            <div class="grid wide">
                <div class="row header__title">
                    <div class="col l-4 m-12 c-12">
                        <img class="img-left-main" src="view/img/thanhhuong-183124053138-netherlands.jpg" />
                    </div>
                    <div class="col l-8 m-12 c-12">
                        <!-- <div class="row"> -->
                            <div class="mda-in-for">
                            <?php
                                $matour = $_GET['matour'];
                                $chitiettour = tour_select_by_id($matour);
                                foreach($chitiettour as $item) {
                                extract($chitiettour);
                                echo '
                                <div class="mda-info">
                                    <h3 class="mda-info__title">Tour Miền Tây 4N3D: HCM - Mỹ Tho - Cần Thơ - Côn Đảo Tết Tân Sửu</h3>
                                </div>
                                <!-- <div class="col l-12"> -->
                                    <div class="mda-info-list">
                                        <div class="mda-row">
                                            <span class="mda-row__be">Mã tour:</span> 
                                            <span class="mda-row__content" style="font-weight: bold;">'.$TourID.'</span> 
                                        </div>
                                        <div class="mda-row"><span class="mda-row__be">Thời gian:</span> 
                                            <span class="mda-row__content" style="font-weight: bold;">'.$TimeTour.'</span>
                                        </div>
                                        <div class="mda-row">
                                            <span class="mda-row__be">Ngày khởi hành:</span>
                                            <span class="mda-row__content" style="font-weight: bold;">'.$Day_Start.'</span>
                                            <a class="mda-day-other" href="">Ngày khác</a>
                                        </div>
                                                                                        
                                        <div class="mda-row">
                                            <span class="mda-row__be">Giá:</span>
                                            <span class="mda-row__content" style="font-weight: bold;" id="total-all">'.$Price.'</span>đ</div>
                                        <div class="mda-row">
                                            <span class="mda-row__be">Số chỗ còn nhận:</span> 
                                            <span class="mda-row__content" id="numberticketempty" style="font-weight: bold;">10</span>
                                        </div>
                                                                                                      
                                        <div class="mda-row">
                                            <span class="mda-row__be">Nơi khởi hành:</span>
                                            <span class="mda-row__content" style="font-weight: bold;">Hồ Chí Minh</span>
                                        </div>
                                        
                                        <input type="hidden" name="con" id="con" value="6">
                                        <input type="hidden" name="discount" id="discount" value="'.$Discount.'">
                                    </div>
                                    ';
                                }
                                    ?>
                                <!-- </div> -->
                            </div>
                        <!-- </div>                            -->
                    </div>
                </div>
                <div class="row">
                    <div class="col l-12 m-12 c-12">
                        <ul class="mda-list-design">
                            <li>
                                <span class="mda-list__size" style="color: #ff0000;">
                                    Các khoản phí phát sinh (nếu có) như: phụ thu dành cho khách nước ngoài, việt kiều; phụ thu phòng đơn; phụ thu chênh lệch giá tour… Nhân viên Du Lịch Việt sẽ gọi điện thoại tư vấn cho quý khách ngay sau khi có phiếu xác nhận
                                    booking. (Trong giờ hành chính)
                                </span>
                            </li>
                            <li style="text-align: justify;">
                                <span class="mda-list__size" style="color: #ff0000;">Trường hợp quý khách không đồng ý các khoản phát sinh, phiếu xác nhận booking của quý khách sẽ không có hiệu lực.</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col l-12 m-12 c-12">
                        <div class="table-price">
                            <div class="table-price__title">
                                <span class="table-price__name">Bảng giá tour chi tiết</span>
                            </div>

                            <table class="table_table">
                                <tr>
                                    <td class="cot-header">Loại giá\Độ tuổi</td>
                                    <td class="cot-header">Người lớn(Trên 11 tuổi)</td>
                                    <td class="cot-header">Trẻ em(5 - 11 tuổi)</td>
                                    <td class="cot-header">Trẻ nhỏ(2 - 5 tuổi)</td>
                                    <td class="cot-header">Sơ sinh( &lt; 2 tuổi)</td>
                                </tr>
                        <?php                          
                            $matour = $_GET['matour'];
                            $tablepriceticket = tableprice_select_all_by_id($matour);
                            foreach ($tablepriceticket as $item){
                            extract($item);
                            echo '
                                <tr>
                                    <td><span>Giá</span></td>
                                
                                    <td><span id="NAdult" class="mda-money">'.$PriceAdult.'</span>đ</td>
                                    <td><span id="NChildren" class="mda-money">'.$PriceChildren.'</span>đ</td>
                                    <td><span id="NBaby" class="mda-money">'.$PriceBaby.'</span>đ</td>
                                    <td><span id="NInfant" class="mda-money">'.$PriceInfant.'</span>đ</td>
                                </tr>
                                ';
                            }
                            ?>

                                <tr>
                                    <td><span>Phụ thu Nước Ngoài</span></td>
                                    <td><span class="mda-money">790,000</span> đ</td>
                                    <td><span class="mda-money">0</span> đ</td>
                                    <td><span class="mda-money">0</span> đ</td>
                                    <td><span class="mda-money">0</span> đ</td>
                                </tr>

                                <tr>
                                    <td><span>Phụ thu Việt Kiều</span></td>
                                    <td><span class="mda-money">790,000</span> đ</td>
                                    <td><span class="mda-money">0</span> đ</td>
                                    <td><span class="mda-money">0</span> đ</td>
                                    <td><span class="mda-money">0</span> đ</td>
                                </tr>

                                <tr>
                                    <td>
                                        <span><b>Phụ thu Phòng đơn</b></span>
                                    </td>
                                    <td colspan="4" style="text-align: center;"><span class="mda-money">1,750,000</span> đ</td>
                                </tr>
                            
                            </table>                  
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col l-12 m-12 c-12">
                        <form action="" id="booktour-form" method="post" style="position: relative;" novalidate="novalidate">
                            <div class="mda-tilte-3">
                                <span class="mda-tilte-name">Booking Tour</span>
                            </div>
                            <div class="">
                                <div class="row">                                          
                                    <div class="col l-3 m-6 c-6 form-group">
                                        <div class="people">Người lớn: </div>
                                        <input type="number" onchange="myTicketAdult()" id="adult" name="QAdult" class="form-control mda-quantity tour-quantity1 q-adult1" value="1" min="1" max="20" required>
                                    </div>
                                    <div class="col l-3 m-6 c-6 form-group">
                                        <div class="people">Trẻ em(5 - 11 tuổi) : </div>
                                        <input type="number" onchange="myTicketAdult()" id="children" name="QChild" class="form-control mda-quantity tour-quantity1 q-child1" min="0" value="0" max="15" required>
                                    </div>
                                    <div class="col l-3 m-6 c-6 form-group">
                                        <div class="people">Trẻ nhỏ( 2 - 5 tuổi): </div>
                                        <input type="number" onchange="myTicketAdult()" id="baby" name="QBaby" class="form-control mda-quantity tour-quantity1 q-baby1" min="0" value="0" max="15" required>
                                    </div>
                                    <div class="col l-3 m-6 c-6 form-group">
                                        <div class="people">Sơ sinh(nhỏ hơn 2 tuổi): </div>
                                        <input type="number" onchange="myTicketAdult()" id="infant" name="QInfant" class="form-control mda-quantity tour-quantity1 q-infant1" min="0" value="0" max="15" required>
                                    </div>
                                    <div class="col l-12 m-12 c-12 form-group">     
                                        <div class="txtTotal">  
                                            Tổng số vé : 
                                            <span id="total_ticket" name="totalnumberticket">1</span>
                                            <input id="sum_ticket" type="hidden" name="total_numberticket" value="1">                                                                                                     
                                        </div> 
                                    <?php
                                        echo '
                                        <div class="txtTotal">  
                                            Tổng giá trị : 
                                            <span id="total" name="totalprice" class="total">'.$PriceAdult.'</span><span>đ</span>
                                            <input id="total_price" type="hidden" name="total__price" class="total" value="'.$PriceAdult.'">                                              
                                        </div>  
                                        ';
                                    ?>                                                                                                                                        
                                    </div> 
                                </div>   
                            </div>

                            <script>
                                function myTicketAdult() {                           
                                    let checkAdult = document.getElementById("adult");                                
                                    let checkChildren = document.getElementById("children");
                                    let checkBaby = document.getElementById("baby");
                                    let checkInfant = document.getElementById("infant");

                                    let priceAdult = Number(document.getElementById("total").innerText);

                                    let PAdult = Number(document.getElementById("NAdult").innerText);
                                    let PChildren = Number(document.getElementById("NChildren").innerText);
                                    let PBaby = Number(document.getElementById("NBaby").innerText);
                                    let PInfant = Number(document.getElementById("NInfant").innerText);

                                    let gia = document.getElementById('total');

                                    let discount =  Number(document.getElementById("discount").value);                                

                                    let numberTicketEmpty = document.getElementById("numberticketempty").innerText;  
                                                                                 
                                    // span(Thay doi gia tri cua the span(so ve))
                                    let total_ticket = document.getElementById('total_ticket');
                                    total_ticket.innerHTML = (Number(checkAdult.value)) + (Number(checkChildren.value)) + (Number(checkBaby.value));                                 
                                    // span

                                    let tongve = (Number(checkAdult.value)) + (Number(checkChildren.value)) + (Number(checkBaby.value));
                                    console.log(tongve);
                                    document.getElementById('sum_ticket').value = tongve;

                                    //input
                                    let sum_ticket = document.getElementById('sum_ticket').value;
                                    let total_NumberTicket = (Number(checkAdult.value)) + (Number(checkChildren.value)) + (Number(checkBaby.value));            
                                    //input                      

                                    let total__price = (Number(checkAdult.value))*PAdult + (Number(checkChildren.value))*PChildren + (Number(checkBaby.value))*PBaby + (Number(checkInfant.value))*PInfant - discount ;
                                    sum_ticket = total__price;

                                    document.getElementById('total_price').value = total__price ;                                                                                       

                                    if((Number(checkAdult.value) + Number(checkChildren.value) + Number(checkBaby.value)) <= (Number(numberTicketEmpty))) {
                                        gia.innerHTML = (Number(checkAdult.value))*PAdult + (Number(checkChildren.value))*PChildren + (Number(checkBaby.value))*PBaby + (Number(checkInfant.value))*PInfant - discount ;
                                    }else {
                                        alert('Số chỗ đặt vượt quá số lượng còn!');                                      
                                    }                                                                         
                                }
                            </script>  
                            
                            <div class="text-center" >
                                <a href="index.php?page=notification&matour='.$TourID.'">
                                    <input type="submit"  class="btn-thanhtoan thanhtoan" name="thanhtoan" value="HOÀN THÀNH" style="text-align: center; cursor: pointer;" >
                                </a>    
                            </div>                                        
                            <div class="clear"></div>

                            <?php                               
                                if( isset($_POST['thanhtoan']) ) {
                                    if($_SESSION['customer']['email']==NULL) {
                                        $MESSAGE = "Vui lòng đăng nhập trước khi đặt tour";
                                        echo '<script language="javascript">';
                                        echo 'alert("'.$MESSAGE.'")';
                                        echo '</script>';
                                        echo '<script type="text/javascript">
                                                window.location = "index.php?page=booking-tour&matour='.$TourID.'";
                                              </script>';
                                    }else {
                                        $numberAdult = test_input($_POST['QAdult']);
                                        $numberChildren = test_input($_POST['QChild']);
                                        $numberBaby = test_input($_POST['QBaby']);
                                        $numberInfant = test_input($_POST['QInfant']);
                                        $bookingID = $_GET['matour'];                  
                                        $tourID = $_GET['matour'];
                                        $customerID = $_SESSION['customer']['id'];

                                        $tong_ve =  $_POST['total_numberticket'];
                                        $tong_tien  =  $_POST['total__price']; 

                                        /*echo '<script language="javascript">';
                                        echo 'alert("'.$tong_tien.'")';
                                        echo '</script>';

                                        echo '<script language="javascript">';
                                        echo 'alert("'.$tong_ve.'")';
                                        echo '</script>';
                                        echo '<script language="javascript">';
                                        echo 'alert("'.$numberAdult.'")';
                                        echo '</script>';

                                        echo '<script language="javascript">';
                                        echo 'alert("'.$numberChildren.'")';
                                        echo '</script>';
                                        echo '<script language="javascript">';
                                        echo 'alert("'.$numberBaby.'")';
                                        echo '</script>';

                                        echo '<script language="javascript">';
                                        echo 'alert("'.$numberInfant.'")';
                                        echo '</script>';
                                        echo '<script language="javascript">';
                                        echo 'alert("'.$bookingID.'")';
                                        echo '</script>';

                                        echo '<script language="javascript">';
                                        echo 'alert("'.$tourID.'")';
                                        echo '</script>';
                                        echo '<script language="javascript">';
                                        echo 'alert("'.$customerID.'")';
                                        echo '</script>';*/

                                        tourbooking_insert($bookingID, $tourID, $customerID, $numberAdult, $numberChildren, $numberBaby, $numberInfant, $tong_ve, $tong_tien);
                                        echo '<script type="text/javascript">
                                                window.location = "index.php?page=notification&matour='.$TourID.'";
                                              </script>';
                                    }
                                } 
                                             
                            ?>
                        </form>
                    </div>
                </div>                   
            </div>
        </div>
    </div>

    
    
    <?php
        require "view/layout/footer-index.php";
    ?>

