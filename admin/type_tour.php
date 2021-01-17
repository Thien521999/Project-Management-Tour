<?php 
    $temp = false;
    if(isset($_POST['action']) && $_POST['action'] == 'add-cate' ){
        $tenloaitour = $_POST['name'];
        $sort=$_POST['sort'];
        loai_tour_insert($tenloaitour,$sort);
    }

    if(isset($_GET['action']) && $_GET['action'] == 'delete'){
        loai_tour_delete($_GET['id']);
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
                            <h2 class="page-header-title">Loại Tour</h2>
                            <div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="#">ADD</a></li>
                                    <li class="breadcrumb-item active">Loại Tour</li>
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
                                <h4>Loại tour mới nhất</h4>
                            </div>
                            <div class="widget-body">
                                <form class="form-horizontal" action="" method='post' enctype="multipart/form-data">
                                    
                                    <div class="row d-flex align-items-center mb-5">
                                        <?php if($temp == true) echo '<input type="hidden" name="id" class="form-control" value="'.$loaitour['Ma_loaitour'] .'">'?>
                                        <label class="col-lg-3 form-control-label">Loại tour</label>
                                            <div class="col-lg-9">
                                                <div class=" position-relative">
                                                    <div class="group material-input">
                                                        <input type="text" value ='<?php if($temp == true) echo $loaitour['Ten_loaitour'] ?>' name="name"required>
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label>Loại tour</label>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="row d-flex align-items-center mb-5">
                                        <label class="col-lg-3 form-control-label">Tour-Type-Code</label>
                                            <div class="col-lg-9">
                                                
                                                <div class=" position-relative">
                                                    <div class="group material-input">
                                                        <input type="text" value ='<?php if($temp == true) echo $loaitour['Sort'] ?>' name="sort" required>
                                                        <span class="highlight"></span>
                                                        <span class="bar"></span>
                                                        <label>Mã loại tour</label>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>

                                    <div class="text-right">
                                        <?php 
											if(!$temp)
												echo '<button class="btn btn-gradient-01" type="submit" name="action" value="add-cate"><i class="la la-check"></i>Thêm mới</button>
                                                <button class="btn btn-shadow btn-success" type="reset"><i class="la la-rotate-left"></i>Reset</button>';
											else 
                                                echo '
                                                <button class="btn btn-gradient-01" type="submit" name="action" value="edit"><i class="la la-history"></i>Cập nhật Danh Mục</button>

                                                <button class="btn btn-shadow btn-success" type="reset"><i class="la la-rotate-left"></i>Reset</button>';
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
                                                <th>Mã loại tour</th>
                                                <th>Tên loại tour</th>
                                                <th>Tour-Type-Code</th>
                                                <th>Chức năng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $loaitour=loai_tour_select_all();
                                                foreach ($loaitour as $item){
                                                    extract($item);
                                                    echo "<tr>";
                                                    echo "<td>".$TypeTourID."</td>";
                                                    echo "<td>".$NameTypeTour."</td>";
                                                    echo "<td>".$Sort."</td>";
                                                    echo "<td class='td-actions'>
                                                        <a href='admin.php?page=loai-tour&id=$TypeTourID&action=edit'><i class='la la-edit edit'></i></a>
                                                        <a href='admin.php?page=loai-tour&id=$TypeTourID&action=delete'><i class='la la-close delete'></i></a></td>";
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