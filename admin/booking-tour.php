<?php
    include "dao/booking-tour.php";
    require "view/Function/function.php";
?>

<?php 
    $temp = false;

    if(isset($_POST['action']) && $_POST['action'] == 'add-tour-booking'){
        $bookingID      = test_input($_POST['bookingid']);
        $tourID         = test_input($_POST['tourID']);
        $customerID     = test_input($_POST['customerID']);
        $ticketAdult    = test_input($_POST['ticketAdult']);
        $ticketChildren = test_input($_POST['ticketChildren']);
        $ticketBaby     = test_input($_POST['ticketBaby']);
        $ticketInfant   = test_input($_POST['ticketInfant']);
        $priceTotal     = test_input($_POST['priceTotal']);

        //Kiểm tra nguoi đặt đa tồn tại trong DB hay chưa
        //if(tourbooking_select_by_bookingId($bookingID) == null){//kiem tra trong DB có ton tai hay chua
            if($bookingID <=0 || $tourID <=0 || $customerID<=0) {
                echo '<script language="javascript">';
                echo 'alert("Error Input")';
                echo '</script>';
            }else{
                $result=true;
            }
    
            /*if(!checkPhone($phone)) {
                echo '<script language="javascript">';
                echo 'alert("Error Input phone, phone phai la số")';
                echo '</script>';
            }else{
                $result=true;
            }
    
            if(checkEmail($email) == false) {
                echo '<script language="javascript">';
                echo 'alert("Error Input Email")';
                echo '</script>';
            }else{
                $result=true;
            }*/
    
            if(!is_numeric($ticketAdult) || !is_numeric($ticketChildren) || !is_numeric($ticketBaby) || !is_numeric($ticketInfant) || $ticketAdult < 0 || $ticketChildren < 0 || $ticketBaby < 0 || $ticketInfant < 0 ){
                echo '<script language="javascript">';
                echo 'alert("Error Input số vé")';
                echo '</script>';
            }else{
                $result=true;
            }

            if(!is_numeric($priceTotal)) {
                echo '<script language="javascript">';
                echo 'alert("Error Input total price")';
                echo '</script>';
            }else{
                $result=true;
            }

            if($result==true){
                tourbooking_insert($bookingID, $tourID, $customerID, $ticketAdult, $ticketChildren, $ticketBaby, $ticketInfant, $priceTotal);
            }
        // }else {
        //     $MESSAGE = "Booking Tour đã tồn tại";
        //     echo '<script language="javascript">';
        //     echo 'alert("'.$MESSAGE.'")';
        //     echo '</script>';
        // }
    }

    //delete tour
    if(isset($_GET['action']) && $_GET['action'] == 'delete'){
        tourbooking_deletes($_GET['id']);
    }

    //edit tour
    if(isset($_GET['action']) && $_GET['action'] == 'edit'){
        $temp = true;
        $tour_booking = tourbooking_select_by_bookingID($_GET['id']);
    }

    if(isset($_POST['action']) && $_POST['action'] == 'edit'){
        $bookingID      = $_POST['bookingid'];
        $tourID         = $_POST['tourID'];
        $customerID     = $_POST['customerID'];
        $ticketAdult    = $_POST['ticketAdult'];
        $ticketChildren = $_POST['ticketChildren'];
        $ticketBaby     = $_POST['ticketBaby'];
        $ticketInfant   = $_POST['ticketInfant'];
        $priceTotal     = $_POST['priceTotal'];
        
        tourbooking_update($bookingID, $tourID, $customerID, $ticketAdult, $ticketChildren, $ticketBaby, $ticketInfant, $priceTotal);
        $temp = false;
        header('Location: admin.php?page=tour-booking');
    }
?>        

        <div class="page">
            <?php 
                require "admin/layout/header.php";
            ?> 
            <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
                <div class="default-sidebar">
                    <?php 
                        require "admin/layout/navbar.php";
                    ?> 
                </div>
                <!-- End Left Sidebar -->

                <div class="content-inner">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Tour</h2>
	                                <div>
			                            <ul class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a></li>
			                                <li class="breadcrumb-item"><a href="#">ADD</a></li>
			                                <li class="breadcrumb-item active">Tour</li>
			                            </ul>
	                                </div>
	                            </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <div class="row flex-row">
                            <div class="col-12">
                                <!-- Form -->
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Tour Booking</h4>
                                    </div>
                                    <div class="widget-body">
                                        <form class="form-horizontal" action="" method='post' enctype="multipart/form-data">
                                            <div class="row d-flex align-items-center">
                                                <!-- bookingID -->
                                                <label class="col-lg-2  form-control-label">BookingID</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                        <div class="group material-input">
                                                            <input type="text" value ='<?php if($temp == true) echo $tour_booking['BookingID'] ?>' name="bookingid" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>BookingID</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end BookingID -->
                                                <!-- TourID -->
                                                <label class="col-lg-2  form-control-label">TourID</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                        <div class="group material-input">
                                                            <input type="text" value ='<?php if($temp == true) echo $tour_booking['TourID'] ?>' name="tourID" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>TourID</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end TourID -->
                                                 <!-- CustomerID -->
                                                 <label class="col-lg-2  form-control-label">CustomerID</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                        <div class="group material-input">
                                                            <input type="text" value ='<?php if($temp == true) echo $tour_booking['CustomerID'] ?>' name="customerID" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>CustomerID</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end CustomerID -->
                                                <!--FullName person booking Tour -->
                                                <!-- <label class="col-lg-2  form-control-label">FullName</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                        <div class="group material-input">
                                                            <input type="text" value ='<?php //if($temp == true) echo ""//$tour_booking['Description'] ?>' name="fullname" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>FullName</label>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <!--end FullName person booking Tour -->                                   

                                                <!--Email -->
                                                <!-- <label class="col-lg-2 form-control-label">Email</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                        <div class="group material-input">
                                                            <input type="text"  value ='<?php if($temp == true) echo ""//$tour_booking['Detail'] ?>' name="email" required>  
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>Email</label> 
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <!--end Email-->

                                                <!--Phone -->
                                                <!-- <label class="col-lg-2 form-control-label">Phone</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                        <div class="group material-input">
                                                            <input type="text"  value ='<?php //if($temp == true) echo ""//$tour_booking['Detail'] ?>' name="phone" required>  
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>Phone</label> 
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <!--end Phone-->

                                                <!-- Address -->
                                                <!-- <label class="col-lg-2 form-control-label">Address</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                        <div class="group material-input">
                                                            <input type="text"  value ='<?php //if($temp == true) echo ""//$tour_booking['Detail'] ?>' name="address" required>  
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>Address</label> 
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <!--end Address-->
                                               
                                                <!--Note -->
                                                <!-- <label class="col-lg-2 form-control-label">Ghi chú</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                        <div class="group material-input">
                                                            <input type="text" value ='<?php //if($temp == true) echo ""//$tour_booking['Day_Start'] ?>' name="note" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>Ghi chú</label>
                                                        </div>
                                                    </div>                                                    
                                                </div> -->
                                                <!--end Note-->
                                                <!--NumberTicketAdult-->
                                                <label class="col-lg-2 form-control-label">Số vé người lớn</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                        <div class="group material-input">
                                                            <input type=" number" value ='<?php if($temp == true) echo $tour_booking['NumberTicketAdult'] ?>' name="ticketAdult" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>Số vé người lớn</label>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <!--end NumberTicketAdult-->
                                                <!--NumberTicketChildren-->
                                                <label class="col-lg-2 form-control-label">Số vé trẻ em(5 => 11 tuổi)</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                        <div class="group material-input">
                                                            <input type=" number" value ='<?php if($temp == true) echo $tour_booking['NumberTicketChildren'] ?>' name="ticketChildren" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>Số vé trẻ em(5 => 11 tuổi)</label>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <!-- end NumberTicketChildren -->
                                                <!--NumberTicketBaby-->
                                                <label class="col-lg-2 form-control-label">Số vé trẻ nhỏ(2 => 5 tuổi)</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                        <div class="group material-input">
                                                            <input type=" number" value ='<?php if($temp == true) echo $tour_booking['NumberTicketBaby'] ?>' name="ticketBaby" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>Số vé trẻ em(5 => 11 tuổi)</label>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <!-- end NumberTicketBaby -->
                                                <!--NumberTicketInfant-->
                                                <label class="col-lg-2 form-control-label">Số vé trẻ sơ sinh(< 2 tuổi)</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                        <div class="group material-input">
                                                            <input type=" number" value ='<?php if($temp == true) echo $tour_booking['NumberTicketInfant'] ?>' name="ticketInfant" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>Số vé trẻ sơ sinh(< 2 tuổi)</label>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <!-- end NumberTicketInfant -->
                                                <!--Tong gia vé -->
                                                <label class="col-lg-2 form-control-label">Tổng giá tiền vé</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                        <div class="group material-input">
                                                            <input type="text" value ='<?php if($temp == true) echo $tour_booking['PriceTotal'] ?>' name="priceTotal" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>Tổng giá vé</label>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <!--end Tong gia tri-->

                                            </div>
                                            <div class="text-right">
                                                <?php 
                                                    if(!$temp)
                                                        echo '<button class="btn btn-gradient-01" name="action" value="add-tour-booking" id="add-tour-booking" type="submit">
                                                                <i class="la la-check"></i>
                                                                Thêm booking tour
                                                              </button>
                                                              <button class="btn btn-shadow btn-success" type="reset">
                                                                <i class="la la-rotate-left"></i>
                                                                Reset
                                                              </button>
                                                        ';
                                                    else 
                                                        echo '<button class="btn btn-gradient-01" name="action" value="edit" id="add-tour-booking" type="submit">
                                                                <i class="la la-check"></i>
                                                                Cập nhập booking tour</button>
                                                              <button class="btn btn-shadow btn-success" type="reset">
                                                                <i class="la la-rotate-left"></i>
                                                                Reset
                                                              </button>
                                                              ';
                                                ?>
                                            </div>
                                        </form>                                  
                                    </div>
                                </div>
                                <!-- End Form -->
                                <!-- Sorting -->
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Danh sách booking tour</h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table id="sorting-table" class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>BookingID</th> 
                                                        <th>CustomerID</th>     
                                                        <th>TourID</th>
                                                        <!-- <th>FullName</th>                                     
                                                        <th>Phone</th>
                                                        <th>Email</th>
                                                        <th>Address</th>
                                                        <th>Note</th> -->
                                                        <th>TicketAdult</th>
                                                        <th>TicketChildren</th>
                                                        <th>TicketBaby</th>
                                                        <th>TicketInfant</th>                                                       
                                                        <th>Price Total</th>                                                                

                                                        <th>Chức năng</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php                                                   
                                                    $tourbooking = tourbooking_select_all(); 
                                                    foreach ($tourbooking as $item){
                                                        extract($item);
                                                        echo "<tr>";
                                                        echo "<td><span class='text-primary'>".$BookingID."</span></td>";
                                                        echo "<td>".$TourID."</span></td>";
                                                        echo "<td>".$CustomerID."</span></td>";
                                                        // echo "<td>".$FullName."</span></td>";
                                                        // echo "<td>".$Phone."</td>";
                                                        // echo "<td>".$Email."</td>";  
                                                        // echo "<td>".$Address."</td>";     
                                                        // echo "<td>".$Note."</td>";   
                                                        echo "<td>".$NumberTicketAdult."</td>";  
                                                        echo "<td>".$NumberTicketChildren."</td>";
                                                        echo "<td>".$NumberTicketBaby."</td>";
                                                        echo "<td>".$NumberTicketInfant."</td>";                                              
                                                        echo "<td>".$PriceTotal."</td>";                                                                                           

                                                        echo "<td class='td-actions'>
                                                                <a href='admin.php?page=tour-booking&id=$BookingID&action=edit'>
                                                                    <i class='la la-edit edit'></i>
                                                                </a>
                                                                <a href='admin.php?page=tour-booking&id=$BookingID&action=delete'>
                                                                    <i class='la la-close delete'></i>
                                                                </a>
                                                              </td>";
                                                        echo "</tr>";
                                                    }
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Sorting -->
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->

                    <!-- Begin Page Footer-->
                    <?php 
                        require "layout/footer.php";
                    ?> 
                </div>
            </div>
            <!-- End Page Content -->
        </div>