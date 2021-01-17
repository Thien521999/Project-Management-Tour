<?php 
    $temp = false;

    if(isset($_POST['action']) && $_POST['action'] == 'add-tour'){
        $matour = (int)$_POST['matour'];
        $adult = (int)$_POST['adult'];
        $children = (int)$_POST['children'];
        $baby = (int)$_POST['baby'];
        $infant = (int)$_POST['infant'];
        $numberTicketLimit = (int)$_POST['numberticketlimit'];
        $NumberTicketEmpty = (int)$_POST['numberticketempty'];
        $loaitour = (int)$_POST['loaitour'];


        //Kiểm tra tên tableprice đa tồn tại trong DB hay chưa
        if(tableprice_select_by_price($matour) == null){//kiem tra trong DB có ton tai hay chua
            // if( $matour >= 0 && $adult >= 0 && $adult > $children && $children >= 0 && $children > $baby && $baby > 0 && $baby > $infant && $infant >= 0 && $NumberTicketLimit >= $NumberTicketEmpty && $numberTicketLimit >= 0 && $NumberTicketEmpty >= 0 )
            // {   
                tableprice_insert($matour, $adult, $children, $baby, $infant, $numberTicketLimit, $NumberTicketEmpty, $loaitour);
                echo '<script>';
                echo 'alert("Add Successfull")';
                echo '</script>';
            // }else {
            //     echo '<script>';
            //     echo 'alert("Error Input")';
            //     echo '</script>';
            // }
        }else {
            $MESSAGE = "Tour đã tồn tại";
            $GLOBALS['MESSAGE'];
            echo '<script>';
            echo 'alert("'.$MESSAGE.'")';
            echo '</script>';
        }
    }

    //delete tour
    if(isset($_GET['action']) && $_GET['action'] == 'delete'){
        tableprice_deletes($_GET['id']); 
    }

    //edit tour
    if(isset($_GET['action']) && $_GET['action'] == 'edit'){
        $temp = true;
        $tableprice = tableprice_select_by_id($_GET['id']);
        $matour = $_POST['id'];
    }

    if(isset($_POST['action']) && $_POST['action'] == 'edit'){
        $matour = (int)$_POST['matour'];
        $adult = (int)$_POST['adult'];
        $children = (int)$_POST['children'];
        $baby = (int)$_POST['baby'];
        $infant = (int)$_POST['infant'];
        $numberTicketLimit = (int)$_POST['numberticketlimit'];
        $NumberTicketEmpty = (int)$_POST['numberticketempty'];
        $loaitour = (int)$_POST['loaitour'];                                  
                
        tableprice_update($adult, $children, $baby, $infant, $numberTicketLimit, $NumberTicketEmpty, $loaitour, $matour);

        $temp = false;
        header('Location: admin.php?page=table-price');
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
                                        <h4>Giá vé mới nhất</h4>
                                    </div>
                                    <div class="widget-body">
                                        <form class="form-horizontal" action="" method='post' enctype="multipart/form-data">
                                            <div class="row d-flex align-items-center">
                                                <!--Mã tour-->
                                                <label class="col-lg-2 form-control-label">Mã tour</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-3 position-relative">
                                                        <div class="group material-input">
                                                            <input type="text" value ='<?php if($temp == true) echo $tableprice['TourID'] ?>' name="matour" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>Mã tour</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end Mã tour -->
                                                <!--Giá người lớn-->
                                                <label class="col-lg-2 form-control-label">Giá người lớn(trên 11 tuổi)</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-3 position-relative">
                                                        <div class="group material-input">
                                                            <input type="text" value ='<?php if($temp == true) echo $tableprice['PriceAdult'] ?>' name="adult" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>Giá người lớn</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end Giá người lớn -->
                                                <!--Giá trẻ em(5->11 tuổi)-->
                                                <label class="col-lg-2 form-control-label">Giá trẻ em(5 đến 11 tuổi)</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-3 position-relative">
                                                        <div class="group material-input">
                                                            <input type="text" value ='<?php if($temp == true) echo $tableprice['PriceChildren'] ?>' name="children" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>Giá trẻ em(5 đến 11 tuổi)</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end Giá trẻ em(5->11 tuổi) -->
                                                <!--Giá trẻ nhỏ(2->5 tuổi)-->
                                                <label class="col-lg-2 form-control-label">Giá trẻ nhỏ(2 đến 5 tuổi)</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-3 position-relative">
                                                        <div class="group material-input">
                                                            <input type="text" value ='<?php if($temp == true) echo $tableprice['PriceBaby'] ?>' name="baby" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>Giá trẻ nhỏ(2 đến 5 tuổi)</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end Giá trẻ nhỏ(2->5 tuổi) -->
                                                <!--Giá trẻ sơ sinh(dưới 2 tuoi)-->
                                                <label class="col-lg-2 form-control-label">Giá trẻ sơ sinh(dưới 2 tuổi)</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-3 position-relative">
                                                        <div class="group material-input">
                                                            <input type="text" value ='<?php if($temp == true) echo $tableprice['PriceInfant'] ?>' name="infant" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>Giá trẻ sơ sinh(dưới 2 tuổi)</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end Giá trẻ sơ sinh(dưới 2 tuoi) -->

                                                <!--Number Ticket Limit-->
                                                <label class="col-lg-2 form-control-label">Number Ticket Limit</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-3 position-relative">
                                                        <div class="group material-input">
                                                            <input type="text" value ='<?php if($temp == true) echo $tableprice['NumberTicketLimit'] ?>' name="numberticketlimit" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>Number Ticket Limit</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end Number Ticket Limit -->

                                                <!--Number Ticket Empty-->
                                                <!-- <label class="col-lg-2 form-control-label">Number Ticket Empty</label>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="mt-3 position-relative">
                                                        <div class="group material-input">
                                                            <input type="text" value ='<?php if($temp == true) echo $tableprice['NumberTicketEmpty'] ?>' name="numberticketempty" required>
                                                            <span class="highlight"></span>
                                                            <span class="bar"></span>
                                                            <label>Number Ticket Empty</label>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <!--end Number Ticket Limit -->
                                                
                                                <!--Mã Loai tour-->
                                                <?php if($temp == true) echo '<input type="hidden" name="id" value="'. $tableprice['TourID'] .'"> '?>
                                                <label class="col-lg-2 form-control-label" for="loaitour">Loại tour</label>
                                                <div class="col-lg-10 select ">
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
                                                <!--end Mã Loai tour-->
                                                

                                            </div>
                                            <div class="text-right">

                                                <?php 
                                                    if(!$temp)
                                                        echo '<button class="btn btn-gradient-01" name="action" value="add-tour" id="add-tour" type="submit">
                                                                <i class="la la-check"></i>
                                                                Thêm giá vé ngay
                                                              </button>
                                                              <button class="btn btn-shadow btn-success" type="reset">
                                                                <i class="la la-rotate-left"></i>
                                                                Reset
                                                              </button>
                                                        ';
                                                    else 
                                                        echo '<button class="btn btn-gradient-01" name="action" value="edit" id="add-tour" type="submit">
                                                                 <i class="la la-check"></i>
                                                                 Cập nhập giá vé</button>
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
                                        <h4>Danh sách giá vé</h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table id="sorting-table" class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Mã tour</th>
                                                        <th>Giá người lớn</th>
                                                        <th>Giá trẻ em( 5 đến 11 tuổi)</th>
                                                        <th>Giá trẻ nhỏ(2 đến 5 tuổi)</th>
                                                        <th>Giá trẻ sơ sinh( < 2 tuổi)</th> 
                                                        <th>Số chỗ trong tour</th>
                                                        <!-- <th>Số chỗ còn trống</th>   -->
                                                        <th>Loại tour</th>                                                     
                                                        <th>Chức năng</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php                                                   
                                                    $priceticket = tableprice_select_all();                                                    
                                                    foreach ($priceticket as $item){
                                                        extract($item);
                                                        echo "<tr>";
                                                        echo "<td><span class='text-primary'>".$TourID."</span></td>";
                                                        echo "<td>".$PriceAdult."</span></td>";
                                                        echo "<td>".$PriceChildren."</td>";
                                                        echo "<td>".$PriceBaby."</td>";
                                                        echo "<td>".$PriceInfant."</td>"; 
                                                        echo "<td>".$NumberTicketLimit."</td>";  
                                                        // echo "<td>.$NumberTicketEmpty.</td>"; 
                                                        echo "<td>".$TypeTourID."</td>";
                                                                                                                                                                                         

                                                        echo "<td class='td-actions'>
                                                                <a href='admin.php?page=table-price&id=$TourID&action=edit'>
                                                                    <i class='la la-edit edit'></i>
                                                                </a>
                                                                <a href='admin.php?page=table-price&id=$TourID&action=delete'>
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