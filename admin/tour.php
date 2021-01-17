<?php 
    require "dao/tour.php";

    $temp = false;
    if(isset($_POST['action']) && $_POST['action'] == 'add-tour'){
        $tourID= $_POST['tourID'];
        $ten = $_POST['name'];
        $mota = $_POST['mota'];
        $chitiet = $_POST['chitiet'];

        $hinhanh = 'view/images/tour/'.$_FILES['image']['name']; //Vị trí file lưu tạm trong server (file sẽ lưu trong uploads, với tên giống tên ban đầu)
        
        $ngaykhoihanh = $_POST['dateKH'];
        $ngayketthuc = $_POST['dateKT'];
        $giamgia = $_POST['discount'];
        $thoigiantour= $_POST['thoigian'];
        $gia = $_POST['price'];
        $maloaitour = $_POST['loaitour'];
        $place_start  = $_POST['place_start'];
        $vehicle = $_POST['vehicle'];

        //Kiểm tra tourID đa tồn tại trong DB hay chưa
        if(tour_select_by_name($tourID) == null){
            // Kiểm tra xem có phải là ảnh bằng hàm getimagesize
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if($check !== false) {
                // Kiểm tra nếu file đã tồn tại thì không cho phép ghi đè
                if(!file_exists($_FILES['image']['tmp_name'])){ // luôn trả về false
                    $allowUpload = false;                  
                }else {
                    tour_insert($tourID, $ten, $mota, $chitiet, $hinhanh, $ngaykhoihanh, $ngayketthuc, $thoigiantour, $gia, $giamgia, $place_start, $maloaitour, $vehicle);
                    move_uploaded_file($_FILES['image']['tmp_name'] , $hinhanh );

                    $allowUpload = true;
                    // echo '<script language="javascript">';
                    // echo 'alert("insert tour thanh cong ")';
                    // echo '</script>';
                }
            } else {
                $error = "Khong phai file anh";
                echo '<script language="javascript">';
                echo 'alert("Không phải là ảnh  ")';
                echo '</script>';
                $allowUpload = false;
            }     
        }else {
            $MESSAGE = "Tour đã tồn tại";

            $GLOBALS['MESSAGE'];
            echo '<script language="javascript">';
            echo 'alert("'.$MESSAGE.'")';
            echo '</script>';
        }
    }

//delete tour
    if(isset($_GET['action']) && $_GET['action'] == 'delete'){
        tour_deletes($_GET['id']);
    }

//edit tour
    if(isset($_GET['action']) && $_GET['action'] == 'edit'){
        $temp = true;     
        $tour = tour_select_by_id($_GET['id']);      
    }

    if(isset($_POST['action']) && $_POST['action'] == 'edit'){
        $tourID= $_POST['tourID'];
        $ten = $_POST['name'];
        $mota = $_POST['mota'];
        $chitiet = $_POST['chitiet'];

        $hinhanh = 'view/images/tour/'.$_FILES['image']['name']; //Vị trí file lưu tạm trong server (file sẽ lưu trong uploads, với tên giống tên ban đầu)
        
        $ngaykhoihanh = $_POST['dateKH'];
        $ngayketthuc = $_POST['dateKT'];
        $giamgia = $_POST['discount'];
        $thoigiantour= $_POST['thoigian'];
        $gia = $_POST['price'];
        $maloaitour = $_POST['loaitour']; 
        
        $place_start  = $_POST['place_start'];
        $vehicle = $_POST['vehicle'];

        if($_FILES['image']['error'] == 4){
            $hinhanh = tour_select_by_id($matour)['Images'];
        }else{
            $hinhanh = 'view/images/tour/'.$_FILES['image']['name'];
        }
        tour_update($tourID, $ten, $mota, $chitiet, $hinhanh, $ngaykhoihanh, $ngayketthuc, $thoigiantour, $gia, $giamgia, $place_start, $maloaitour, $vehicle);
        move_uploaded_file($_FILES['image']['tmp_name'] , $hinhanh );

        $temp = false;
        header('Location: admin.php?page=tour');
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
                                        <h4>Tour mới nhất</h4>
                                    </div>
                                    <div class="widget-body">
                                        <form class="form-horizontal" action="" method='post' enctype="multipart/form-data">
                                            <div class="row d-flex align-items-center">
                                                <!--TourID -->
                                                <label class="col-lg-2 form-control-label">TourID</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-3 position-relative">
                                                        <div class="group material-input">
                                                            <input type="text" value ='<?php if($temp == true) echo $tour['TourID'] ?>' name="tourID" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>TourID</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end TourID -->
                                                <!--Tên Tour -->
                                                <label class="col-lg-2 form-control-label">Tên Tour</label>
                                                <div class="col-lg-10">
                                                    <div class="mt-3 position-relative">
                                                        <div class="group material-input">
                                                            <input type="text" value ='<?php if($temp == true) echo $tour['NameTour'] ?>' name="name" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>Tên tour</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end Tên Tour -->
                                                <!--Mô tả Tour -->
                                                <label class="col-lg-2  form-control-label">Mô tả</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                        <div class="group material-input">
                                                            <input type="text" value ='<?php if($temp == true) echo $tour['Description'] ?>' name="mota" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>Mô tả</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end Mô tả Tour -->

                                                <!--Chi tiết Tour -->
                                                <label class="col-lg-2 form-control-label">Chi tiết</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                        <div class="group material-input">
                                                            <input type="text"  value ='<?php if($temp == true) echo $tour['Detail'] ?>' name="chitiet" required>  
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>Chi tiết tour</label>      
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end Chi tiết Tour -->

                                                <!--Hinh anh -->
                                                <label class="col-lg-2 form-control-label">Ảnh view Tour</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                        <div class="group material-input">
                                                            <input type="file"  name="image" required><span><?php //echo $MESSAGE ?></span>
                                                            <?php if($temp == true) echo "<img style='widtd: 100px ;height: 50px;' src='".$tour['Image'] ."'>"  ?>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end Hinh anh-->
                                               
                                                <!--Ngay khoi hanh-->
                                                <label class="col-lg-2 form-control-label">Ngày khởi hành</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                        <div class="group material-input">
                                                            <input type="date" value ='<?php if($temp == true) echo $tour['Day_Start'] ?>' name="dateKH" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <!-- <label>Ngày khởi hành(yyyy/mm/dd)</label> -->
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <!--end Ngay khoi hanh-->
                                                <!--Ngay ket thuc-->
                                                <label class="col-lg-2 form-control-label">Ngày kết thúc</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                        <div class="group material-input">
                                                            <input type="date" value ='<?php if($temp == true) echo $tour['Day_End'] ?>' name="dateKT" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <!-- <label>Ngày kết thúc(yyyy/mm/dd)</label> -->
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <!--end Ngay ket thuc-->
                                                <!--Thoi gian tour-->
                                                <label class="col-lg-2 form-control-label">Tổng thời gian</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                        <div class="group material-input">
                                                            <input type="text" value ='<?php if($temp == true) echo $tour['TimeTour'] ?>' name="thoigian" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>Tổng thời gian chuyến đi</label>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <!--end Thoi gian tour-->
                                                <!--Gia toàn bộ tour -->
                                                <label class="col-lg-2 form-control-label">Giá toàn bộ tour</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                        <div class="group material-input">
                                                            <input type="text" value ='<?php if($temp == true) echo $tour['Price'] ?>' name="price" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>Giá chuyến đi</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end Gia -->
                                                <!--Khuyen mai-->
                                                <label class="col-lg-2 form-control-label">Khuyến mãi</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                        <div class="group material-input">
                                                            <input type="text" value ='<?php if($temp == true) echo $tour['Discount'] ?>' name="discount" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>Khuyến mãi</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end khuyen mai-->
                                                <!--Loai tour-->
                                                <?php if($temp == true) echo '<input type="hidden" name="id" value="'. $tour['TourID'] .'"> '?>
                                                <label class="col-lg-2 form-control-label" for="loaitour">Loại tour</label>
                                                <div class="col-lg-10 select mb-3">
                                                    <select name="loaitour" id='loai_tour' class="custom-select form-control mt-5">
                                                        <?php 
                                                            $listloaitour = loai_tour_select_all();
                                                            foreach ($listloaitour as $value) {
                                                                extract($value);
                                                                if($tour['TypeTourID'] == $TypeTourID ){
                                                                    echo "<option value='".$TypeTourID."'>".$NameTypeTour."</option>";
                                                                }else{
                                                                    echo "<option value='".$TypeTourID."'>".$NameTypeTour."</option>";
                                                                }                                                               
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                                <!--end Loai tour-->    
                                                
                                                <!--Vehicle-->
                                                <label class="col-lg-2 form-control-label">Phương tiện</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                        <div class="group material-input">
                                                            <input type="text" value ='<?php if($temp == true) echo $tour['Vehicle'] ?>' name="vehicle" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>Phương tiện</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end Vehicle-->

                                                <!--Place_start-->
                                                <label class="col-lg-2 form-control-label">Nơi xuất phát</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-5 position-relative">
                                                        <div class="group material-input">
                                                            <input type="text" value ='<?php if($temp == true) echo $tour['Place_Start'] ?>' name="place_start" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>Nơi xuất phát</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end Place_start-->
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
                                                        <th>Tên tour</th>
                                                        <th>Mô tả</th>
                                                        <th>Chi tiết</th>
                                                        <th>Ảnh giới thiệu tour</th>
                                                        <th>Ngày khởi hành</th>
                                                        <th>Ngày kết thúc</th>
                                                        <th>Thời gian</th>
                                                        <th>Giá</th>
                                                        <th>Giảm giá</th>
                                                        <th>Nơi xuất phát</th>
                                                        <th>Loại tour</th>
                                                        <th>Phương tiện</th>                                                      

                                                        <th>Chức năng</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php                                                   
                                                    $tour = tour_select_all(); 
                                                    foreach ($tour as $item){
                                                        extract($item);
                                                        echo "<tr>";
                                                        echo "<td><span class='text-primary'>".$TourID."</span></td>";
                                                        echo "<td>".$NameTour."</span></td>";
                                                        echo "<td>".$Description."</td>";
                                                        echo "<td>".$Detail."</td>";
                                                        echo "<td><img style='width: 50px; height: 50px; object-fit:cover' src='$Image' alt=''></td>";
                                                        echo "<td>".$Day_Start."</td>";
                                                        echo "<td>".$Day_End."</td>";
                                                        echo "<td>".$TimeTour."</td>";
                                                        echo "<td>".$Price."</td>";
                                                        echo "<td>".$Discount."</td>";
                                                        echo "<td>".$Place_Start."</td>";
                                                        echo "<td>".$TypeTourID."</td>";  
                                                        echo "<td>".$Vehicle."</td>";                                                                                             
                                                        echo "<td class='td-actions'>
                                                                <a href='admin.php?page=tour&id=$TourID&action=edit'>
                                                                    <i class='la la-edit edit'></i>
                                                                </a>
                                                                <a href='admin.php?page=tour&id=$TourID&action=delete'>
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