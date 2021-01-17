<?php 
    $temp = false;
    if(isset($_POST['action']) && $_POST['action'] == 'add-tour'){
        $tourID = $_POST['tourID'];

        $priceloca1 = $_POST['priceloca1'];
        $priceloca2 = $_POST['priceloca2'];
        $priceloca3 = $_POST['priceloca3'];
        $priceloca4 = $_POST['priceloca4'];
        $priceloca5 = $_POST['priceloca5'];

        $location1=$_POST['vitri1'];
        $location2=$_POST['vitri2'];
        $location3=$_POST['vitri3'];
        $location4=$_POST['vitri4'];
        $location5=$_POST['vitri5'];
        
        $chitiet1 = $_POST['chitiet1'];  
        $chitiet2 = $_POST['chitiet2'];    
        $chitiet3 = $_POST['chitiet3'];
        $chitiet4 = $_POST['chitiet4'];
        $chitiet5 = $_POST['chitiet5'];

        $vehicle = $_POST['vehicle'];

        $priceArr = array($priceloca1, $priceloca2, $priceloca3, $priceloca4, $priceloca5);
        $locationArr = array($location1, $location2, $location3, $location4, $location5);
        $chitietArr = array($chitiet1, $chitiet2,$chitiet3, $chitiet4, $chitiet5);

        $countImage = count($_FILES['listimage']['name']);
        $sourceImageBox = 'view/images/tour-ListImage/';

        //Kiểm tra tourID đa tồn tại trong DB hay chưa
        if(tour_detail_select_by_id($tourID) == null) {
            if($tourID !== 0) {
                for( $i=0; $i < $countImage; $i++) {
                    $hinhanhloca = $sourceImageBox.$_FILES['listimage']['name'][$i];              
                    move_uploaded_file($_FILES['listimage']['tmp_name'][$i] , $hinhanhloca );   
                    tour_detail_insert($tourID, $locationArr[$i], $priceArr[$i], $chitietArr[$i], $hinhanhloca, $vehicle);                                                                                   
                }                        
                echo '<script language="javascript">';
                echo 'alert("Add tour thanh cong")';
                echo '</script>';
            }else {
                echo '<script language="javascript">';
                echo 'alert("Không có tour này")';
                echo '</script>';
            }    
        } else {
            $MESSAGE = "Tour đã tồn tại";
            $GLOBALS['MESSAGE'];
            echo '<script language="javascript">';
            echo 'alert("'.$MESSAGE.'")';
            echo '</script>';
        }
    }

    //delete tour
    if(isset($_GET['action']) && $_GET['action'] == 'delete'){
        tour_detail_deletes($_GET['id']);
    }

    //edit tour
    if(isset($_GET['action']) && $_GET['action'] == 'edit'){
        $temp = true;
        $tour_detail =  tour_detail_select_all($_GET['id']);

        foreach($tour_detail as $k=>$v) {
            $Location = $tour_detail[$k]['Location'];
            $PriceLocation = $tour_detail[$k]['PriceLocation'];
            $DescriptionLocation = $tour_detail[$k]['DescriptionLocation'];
            $ImageLocation = $tour_detail[$k]['ImageLocation'];
            $Vehicle = $tour_detail[$k]['Vehicle'];
            break;
        }     
    }

    if(isset($_POST['action']) && $_POST['action'] == 'edit'){
        $tourID = $_POST['tourID'];

        $priceloca1 = $_POST['priceloca1'];
        $priceloca2 = $_POST['priceloca2'];
        $priceloca3 = $_POST['priceloca3'];
        $priceloca4 = $_POST['priceloca4'];
        $priceloca5 = $_POST['priceloca5'];

        $location1=$_POST['vitri1'];
        $location2=$_POST['vitri2'];
        $location3=$_POST['vitri3'];
        $location4=$_POST['vitri4'];
        $location5=$_POST['vitri5'];
        
        $chitiet1 = $_POST['chitiet1'];  
        $chitiet2 = $_POST['chitiet2'];    
        $chitiet3 = $_POST['chitiet3'];
        $chitiet4 = $_POST['chitiet4'];
        $chitiet5 = $_POST['chitiet5'];

        $vehicle = $_POST['vehicle'];        
        
        
        $priceArr = array($priceloca1, $priceloca2, $priceloca3, $priceloca4, $priceloca5);
        $locationArr = array($location1, $location2, $location3, $location4, $location5);
        $chitietArr = array($chitiet1, $chitiet2,$chitiet3, $chitiet4, $chitiet5);

        $countImage = count($_FILES['listimage']['name']);
        $sourceImageBox = 'view/images/tour-ListImage/';

        if($_FILES['image']['error'] == 4){
            $hinhanh = tour_detail_select_by_id($matour)['Images'];
        }else{
            $hinhanh = 'view/images/tour/'.$_FILES['image']['name'];
        }

        $hinhanhloca = $sourceImageBox.$_FILES['listimage']['name'][$i];              
        move_uploaded_file($_FILES['listimage']['tmp_name'][$i] , $hinhanhloca );
        tour_detail_update($tourID, $locationArr[$i], $priceArr[$i], $chitietArr[$i], $hinhanhloca, $vehicle);

        $temp = false;
        header('Location: admin.php?page=detail-tour');
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
                        <!-- row -->
                        <div class="row flex-row">
                            <div class="col-12">
                                <!-- Form -->
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Tour chi tiết mới nhất</h4>
                                    </div>
                                    <div class="widget-body">
                                        <form class="form-horizontal" action="" method='post' enctype="multipart/form-data">
                                            <div class="row d-flex align-items-center">
                                                <!--TourID-->
                                                <label class="col-lg-2 form-control-label">TourID</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                        <div class="group material-input">
                                                            <input type="text" value ='<?php if($temp == true) echo $_GET('id');  ?>' name="tourID" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>TourID</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end TourID-->
                                                <!--location1-->
                                                <label class="col-lg-2 form-control-label">Vị trí 1</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                            <div class="group material-input">
                                                                <input type="text" value ='<?php if($temp == true) echo $tour_detail[0]['Location'] ?>' name="vitri1" required>
                                                                <span class="highlight"></span>
                                                                <span class="bar"></span>
                                                                <label>Vị trí 1</label>
                                                            </div>
                                                    </div>                                                                                     
                                                </div>
                                                <!--end location1-->
                                                <!--Gia location 1-->
                                                <label class="col-lg-2 form-control-label">Giá location 1</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                        <div class="group material-input">
                                                            <input type="text" value ='<?php if($temp == true) echo $tour_detail[0]['PriceLocation'] ?>' name="priceloca1" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>Giá của location 1</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end gia location 1-->
                                                <!--Chi tiết Tour 1 -->
                                                <label class="col-lg-2 form-control-label">Chi tiết 1</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                            <div class="group material-input">
                                                                <input type="text" value ='<?php if($temp == true) echo $tour_detail[0]['DescriptionLocation'] ?>' name="chitiet1" required>
                                                                <span class="highlight"></span>
                                                                <span class="bar"></span>
                                                                <label>Chi tiết tour 1</label>
                                                            </div>
                                                    </div>                                      
                                                </div>
                                                <!--end Chi tiết Tour 1 -->

                                                <!--location2-->
                                                <label class="col-lg-2 form-control-label">Vị trí 2</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                                <div class="group material-input">
                                                                    <input type="text" value ='<?php if($temp == true) echo $tour_detail[1]['Location'] ?>' name="vitri2" required>
                                                                    <span class="highlight"></span>
                                                                    <span class="bar"></span>
                                                                    <label>Vị trí 2</label>
                                                                </div>
                                                    </div>                                              
                                                </div>
                                                <!--end location2-->
                                                <!--Gia location 2-->
                                                <label class="col-lg-2 form-control-label">Giá location 2</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                        <div class="group material-input">
                                                            <input type="text" value ='<?php if($temp == true) echo $tour_detail[1]['PriceLocation'] ?>' name="priceloca2" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>Giá của location 2</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end gia location 2-->
                                                <!--Chi tiết Tour 2 -->
                                                <label class="col-lg-2 form-control-label">Chi tiết 2</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                            <div class="group material-input">
                                                                <input type="text" value ='<?php if($temp == true) echo $tour_detail[1]['DescriptionLocation'] ?>' name="chitiet2" required>
                                                                <span class="highlight"></span>
                                                                <span class="bar"></span>
                                                                <label>Chi tiết tour 2</label>
                                                            </div>
                                                    </div>                                        
                                                </div>
                                                <!--end Chi tiết Tour 2 -->

                                                <!--location3-->
                                                <label class="col-lg-2 form-control-label">Vị trí 3</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                            <div class="group material-input">
                                                                <input type="text" value ='<?php if($temp == true) echo $tour_detail[2]['Location'] ?>' name="vitri3" required>
                                                                <span class="highlight"></span>
                                                                <span class="bar"></span>
                                                                <label>Vị trí 3</label>
                                                            </div>
                                                    </div>                                                  
                                                </div>
                                                <!--end location3-->    
                                                <!--Gia location 3-->
                                                <label class="col-lg-2 form-control-label">Giá location 3</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                        <div class="group material-input">
                                                            <input type="text" value ='<?php if($temp == true) echo $tour_detail[2]['PriceLocation'] ?>' name="priceloca3" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>Giá của location 3</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end gia location 3-->
                                                <!--Chi tiết Tour 3 -->
                                                <label class="col-lg-2 form-control-label">Chi tiết 3</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                            <div class="group material-input">
                                                                <input type="text" value ='<?php if($temp == true) echo $tour_detail[2]['DescriptionLocation'] ?>' name="chitiet3" required>
                                                                <span class="highlight"></span>
                                                                <span class="bar"></span>
                                                                <label>Chi tiết tour 3</label>
                                                            </div>
                                                    </div>                                         
                                                </div>
                                                <!--end Chi tiết Tour 3 -->

                                                <!-- location4 -->
                                                <label class="col-lg-2 form-control-label">Vị trí 4</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                            <div class="group material-input">
                                                                <input type="text" value ='<?php if($temp == true) echo $tour_detail[3]['Location'] ?>' name="vitri4" required>
                                                                <span class="highlight"></span>
                                                                <span class="bar"></span>
                                                                <label>Vị trí 4</label>
                                                            </div>
                                                    </div>                                               
                                                </div>
                                                <!--end location4-->
                                                <!--Gia location 4-->
                                                <label class="col-lg-2 form-control-label">Giá location 4</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                        <div class="group material-input">
                                                            <input type="text" value ='<?php if($temp == true) echo $tour_detail[3]['PriceLocation'] ?>' name="priceloca4" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>Giá của location 4</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end gia location 4-->
                                                <!--Chi tiết Tour 4 -->
                                                <label class="col-lg-2 form-control-label">Chi tiết 4</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                            <div class="group material-input">
                                                                <input type="text" value ='<?php if($temp == true) echo $tour_detail[3]['DescriptionLocation'] ?>' name="chitiet4" required>
                                                                <span class="highlight"></span>
                                                                <span class="bar"></span>
                                                                <label>Chi tiết tour 4</label>
                                                            </div>
                                                    </div>                                                 
                                                </div>
                                                <!--end Chi tiết Tour 4 -->
                                                
                                                <!--location5-->
                                                <label class="col-lg-2 form-control-label">Vị trí 5</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                            <div class="group material-input">
                                                                <input type="text" value ='<?php if($temp == true) echo $tour_detail[4]['Location'] ?>' name="vitri5" required>
                                                                <span class="highlight"></span>
                                                                <span class="bar"></span>
                                                                <label>Vị trí 5</label>
                                                            </div>
                                                    </div>                                               
                                                </div>
                                                <!--end location5-->
                                                <!--Gia location 5-->
                                                <label class="col-lg-2 form-control-label">Giá location 5</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                        <div class="group material-input">
                                                            <input type="text" value ='<?php if($temp == true) echo $tour_detail[4]['PriceLocation'] ?>' name="priceloca5" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>Giá của location 5</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end gia location 1-->                                            
                                                <!--Chi tiết Tour 5 -->
                                                <label class="col-lg-2 form-control-label">Chi tiết 5</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                            <div class="group material-input">
                                                                <input type="text" value ='<?php if($temp == true) echo $tour_detail[4]['DescriptionLocation'] ?>' name="chitiet5" required>
                                                                <span class="highlight"></span>
                                                                <span class="bar"></span>
                                                                <label>Chi tiết tour 5</label>
                                                            </div>
                                                    </div>                                                   
                                                </div>
                                                <!--end Chi tiết Tour 5 -->              

                                                <!--Phương tiện -->
                                                <label class="col-lg-2 form-control-label">Phương tiện </label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                            <div class="group material-input">
                                                                <input type="text" value ='<?php if($temp == true) echo $tour_detail[0]['Vehicle'] ?>' name="vehicle" required>
                                                                <span class="highlight"></span>
                                                                <span class="bar"></span>
                                                                <label>Phương tiện </label>
                                                            </div>
                                                    </div>                                                   
                                                </div>
                                                <!--end Chi tiết Tour 5 -->                                        


                                                <!-- listHinh anh -->
                                                <label class="col-lg-2 form-control-label">Chon 5 hình ảnh</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                        <div class="group material-input">
                                                            <input type="file"  name="listimage[]" multiple required><span><?php //echo $MESSAGE ?></span>
                                                            <?php //if($temp == true) echo //"<img style='width: 100px ;height: 50px;' src='". $tour_detail[$k]['ImageLocation'] ."'>"  ?>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end list Hinh anh -->
                                                

                                            </div>
                                            <div class="text-right">
                                                <?php 
                                                    if(!$temp)
                                                        echo '<button class="btn btn-gradient-01" name="action" value="add-tour" id="add-tour" type="submit">
                                                                <i class="la la-check"></i>
                                                                Thêm tour ngay
                                                              </button>
                                                              <button class="btn btn-shadow btn-success" type="reset">
                                                                <i class="la la-rotate-left"></i>
                                                                Reset
                                                              </button>
                                                        ';
                                                    else 
                                                        echo '<button class="btn btn-gradient-01" name="action" value="edit" id="add-tour" type="submit">
                                                                <i class="la la-check"></i>
                                                                Cập nhập tour</button>
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
                                        <h4>Danh sách</h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table id="sorting-table" class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Mã tour</th>     

                                                        <th>Image1</th>
                                                        <th>Location1</th>
                                                        <th>Description1</th>
                                                        <th>PriceLocation1</th>

                                                        <th>Image2</th>
                                                        <th>Location2</th>
                                                        <th>Description2</th>
                                                        <th>PriceLocation2</th>
                                                        
                                                        <th>Image3</th>
                                                        <th>Location3</th>
                                                        <th>Description3</th>
                                                        <th>PriceLocation3</th>

                                                        <th>Image4</th>
                                                        <th>Location4</th>
                                                        <th>Description4</th>
                                                        <th>PriceLocation4</th>
                                                      
                                                        <th>Image5</th>
                                                        <th>Location5</th>
                                                        <th>Description5</th>
                                                        <th>PriceLocation5</th>

                                                        <th>Phương tiện</th>

                                                        <th>Chức năng</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php                                                   
                                                    $tour_details = tour_detailss_select_all(); 
                                                    foreach ($tour_details as $item) {
                                                        extract($item);
                                                        echo "<tr>";
                                                        echo "<td><span class='text-primary'>".$TourID."</span></td>";

                                                        // $tourimages = tourimage_select_all($TourID); 
                                                        // $tourLocationDes = tourlocation_select_all($TourID);
                                                        $tourDetail = tour_detail_select_all($TourID);                     
                                                        
                                                        foreach($tourDetail as $k=>$v ) {
                                                            echo "<td><img style='width: 50px; height: 50px; object-fit:cover' src='".$tourDetail[$k]['ImageLocation']."' alt=''></td>"; 
                                                            echo "<td>".$tourDetail[$k]['Location']."</td>";      
                                                            echo "<td>".$tourDetail[$k]['DescriptionLocation']."</td>";  
                                                            echo "<td>".$tourDetail[$k]['PriceLocation']."</td>";  
                                                                                                                                                                                                                                 
                                                        }                                                             
                                                        
                                                        echo "<td>".$Vehicle."</td>";  
                                                        echo "<td class='td-actions'>
                                                                <a href='admin.php?page=detail-tour&id=$TourID&action=edit'>
                                                                    <i class='la la-edit edit'></i>
                                                                </a>
                                                                <a href='admin.php?page=detail-tour&id=$TourID&action=delete'>
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