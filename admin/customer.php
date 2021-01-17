<?php 
    $temp = false;
    if(isset($_POST['action']) && $_POST['action'] == 'add-cate' ){
        $tenloaitour = $_POST['name'];
        $sort=$_POST['sort'];
        loai_tour_insert($tenloaitour,$sort);
    }

    if(isset($_GET['action']) && $_GET['action'] == 'delete'){
        customer_delete($_GET['id']);
    }

    if(isset($_GET['action']) && $_GET['action'] == 'edit'){
        $temp = true;
        $loaitour = loai_tour_select_by_id($_GET['id']);
        $temp=true;

    }
    if(isset($_POST['action']) && $_POST['action'] == 'edit'){
        $maloaitour = $_POST['id'];
        $tenloaitour = $_POST['name'];
        $sort = $_POST['sort'];
        loai_tour_update($maloaitour,$tenloaitour,$sort);
        header('Localtion: admin.php?page=loai-tour');
        $temp = false;
    }
?>     
        
        
        
        
<div class="page">

    <?php 
        require "layout/header.php";
    ?> 

    <!-- Begin Page Content -->
    <div class="page-content d-flex align-items-stretch">
        <div class="default-sidebar">

            <?php 
                require "layout/navbar.php";
            ?> 


        </div>
        <!-- End Left Sidebar -->
        <div class="content-inner">
            <div class="container-fluid">
                <!-- Begin Page Header-->
                <div class="row">
                    <div class="page-header">
                        <div class="d-flex align-items-center">
                            <h2 class="page-header-title">Khách Hàng</h2>
                            <div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="#">DANH SÁCH</a></li>
                                    <li class="breadcrumb-item active">Khách Hàng</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Page Header -->
                <div class="row flex-row">
                    <div class="col-12">

                        
                        <!-- Sorting -->
                        <div class="widget has-shadow">
                            <div class="widget-header bordered no-actions d-flex align-items-center">
                                <h4>Danh sách khách hàng</h4>
                            </div>
                            <div class="widget-body">
                                <div class="table-responsive">
                                    <table id="sorting-table" class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>Mã khách hàng</th>
                                                <th>Email</th>
                                                <th>Số điện thoại</th>
                                                <th>Chức năng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $khachhang=customer_select_all();
                                                foreach ($khachhang as $item){
                                                    extract($item);
                                                    echo "<tr>";
                                                    echo "<td>".$CustomerID."</td>";
                                                    echo "<td>".$Email."</td>";
                                                    echo "<td>".$Phone."</td>";
                                                    echo "<td class='td-actions'>
                                                        <a href='admin.php?page=loai-tour&id=$CustomerID&action=edit'><i class='la la-edit edit'></i></a>
                                                        <a href='admin.php?page=loai-tour&id=$CustomerID&action=delete'><i class='la la-close delete'></i></a></td>";
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
            <?php 
                require "layout/footer.php";
            ?> 
            
        </div>
    </div>
    <!-- End Page Content -->
</div>