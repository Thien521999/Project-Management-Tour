<?php 
    // $temp = false;
    // if(isset($_POST['action']) && $_POST['action'] == 'add-tour'){
    //     $ten = $_POST['name'];
    //     $mota = $_POST['mota'];
    //     $chitiet = $_POST['chitiet'];
    //     $hinhanh = 'view/images/tour/'.$_FILES['image']['name'];
    //     $ngaykhoihanh = $_POST['date'];
    //     $gia = $_POST['price'];
    //     $maloaitour = $_POST['loaitour'];

    //     //Kiểm tra sản phẩm có tồn tại hay chưa
    //     if(tour_select_by_name($ten) == null){
    //         tour_insert($ten,$mota,$chitiet,$hinhanh,$ngaykhoihanh,$gia,$maloaitour);
    //         move_uploaded_file($_FILES['image']['tmp_name'] , $hinhanh );
    //     }else {
    //         $MESSAGE = "Sản phẩm đã tồn tại";
    //     }
    // }

    // if(isset($_GET['action']) && $_GET['action'] == 'delete'){
    //     tour_deletes($_GET['id']);
    // }

    // if(isset($_GET['action']) && $_GET['action'] == 'edit'){
    //     $temp = true;
    //     $tour = tour_select_by_id($_GET['id']);

    // }
    // if(isset($_POST['action']) && $_POST['action'] == 'edit'){
    //     $matour = $_POST['id'];
    //     $ten = $_POST['name'];
    //     $mota = $_POST['mota'];
    //     $chitiet = $_POST['chitiet'];
    //     $ngaykhoihanh = $_POST['date'];
    //     $gia = $_POST['price'];
    //     $maloaitour = $_POST['loaitour'];
    //     if($_FILES['image']['error'] == 4){
    //         $hinhanh = tour_select_by_id($matour)['Images'];
    //     }else{
    //         $hinhanh = 'view/images/tour/'.$_FILES['image']['name'];
    //     }
    //     tour_update($matour,$ten,$mota,$chitiet,$hinhanh,$ngaykhoihanh,$gia,$maloaitour);
    //     $temp = false;
    //     header('Localtion: admin.php?page=tour');
    // }

?>        

        <div class="page">
            <?php 
                require "admin/layout/header.php";
                require "dao/admin.php";
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
                                    <h2 class="page-header-title">Thông tin Admin</h2>
                                    <div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                            <li class="breadcrumb-item active">admin</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <div class="row flex-row">
                            <div class="col-xl-3">
                                <!-- Begin Widget -->
                                <div class="widget has-shadow">
                                    <div class="widget-body">
                                        <div class="mt-5">
                                            <img src="admin/assets/img/logo-header.png" style="width: 120px;" class="avatar rounded-circle d-block mx-auto">
                                        </div>
                                        <h3 class="text-center mt-3 mb-1">Nicetrip</h3>
                                        <p class="text-center">trhoangthien1999@gmail.com</p>
                                        <div class="em-separator separator-dashed"></div>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><i class="la la-bell la-2x align-middle pr-2"></i>Thông báo</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><i class="la la-bolt la-2x align-middle pr-2"></i>Hoạt động</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><i class="la la-clipboard la-2x align-middle pr-2"></i>Nhiệm vụ</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><i class="la la-gears la-2x align-middle pr-2"></i>Cài đặt</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Widget -->
                            </div>
                            <div class="col-xl-9">
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Hồ sơ admin</h4>
                                    </div>
                                    <div class="widget-body">
                                        <form class="form-horizontal">
                                                <?php
                                                    $admin = admin_select_all(); // goi phuong thuc lay danh sach
                                                    foreach ($admin as $item){
                                                        extract($item);
                                                        echo "<div class='form-group row d-flex align-items-center mb-5'>";
                                                        echo    "<label class='col-lg-2 form-control-label d-flex justify-content-lg-end'>Tên</label>";
                                                        echo    "<div class='col-lg-6'>";
                                                        echo        "<h4>$NameAdmin</h4>";
                                                        echo    "</div>";
                                                        echo"</div>";
                                                        echo"<div class='form-group row d-flex align-items-center mb-5'>";
                                                        echo    "<label class='col-lg-2 form-control-label d-flex justify-content-lg-end'>Email</label>";
                                                        echo   "<div class='col-lg-6'>";
                                                        echo        "<h4>$Email</h4>";
                                                        echo   "</div>";
                                                        echo"</div>";
                                                        echo"<div class='form-group row d-flex align-items-center mb-5'>";
                                                        echo  "<label class='col-lg-2 form-control-label d-flex justify-content-lg-end'>Số điện thoại</label>";
                                                        echo   "<div class='col-lg-6'>";
                                                        echo        "<h4>$Phone</h4>";
                                                        echo  "</div>";
                                                        echo"</div>";
                                                        echo"<div class='form-group row d-flex align-items-center mb-5'>";
                                                        echo  "<label class='col-lg-2 form-control-label d-flex justify-content-lg-end'>Mật khẩu</label>";
                                                        echo   "<div class='col-lg-6'>";
                                                        echo        "<h4>$Password</h4>";
                                                        echo  "</div>";
                                                        echo"</div>";
                                                        }
                                                ?>
                                        </form>
                                        <div class="em-separator separator-dashed"></div>
                                </div>
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