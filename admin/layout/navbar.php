<!-- Begin Side Navbar -->
<nav class="side-navbar box-scroll sidebar-scroll">
    <span class="heading">NICETRIP ĐI MUÔN NƠI</span>

    <ul class="list-unstyled">
        
        <li><a href="#dropdown-forms" aria-expanded="true" data-toggle="collapse"><i class="la la-list-alt"></i><span>QUẢN LÝ</span></a>
            <ul id="dropdown-forms" class="collapse list-unstyled show pt-0">
                <li class="p-0 " style='height: 0px !important; border: 0' <?php if(isset($_GET['page'])){$page=$_GET['page'];}else {$page = 'index';}?>><a class="active" href="admin.php?page=index"></a></li>
                
                <li><a class="<?php if($page == 'tour') echo 'active' ?>" href="admin.php?page=tour">Tour</a></li>

                <li><a class="<?php if($page == 'type_tour') echo 'active' ?>" href="admin.php?page=type_tour">Type Tour</a></li>

                <li><a class="<?php if($page == 'detail-tour') echo 'active' ?>" href="admin.php?page=detail-tour">Detail Tour</a></li>

                <li><a class="<?php if($page == 'table-price') echo 'active' ?>" href="admin.php?page=table-price">Table price ticket</a></li>

                <li><a class="<?php if($page == 'booking-tour') echo 'active' ?>" href="admin.php?page=booking-tour">Tour Booking</a></li>

                <!-- <li><a class="<?php //if($page == 'news') echo 'active' ?>" href="admin.php?page=news">News</a></li> -->

                <!-- <li><a class="<?php //if($page == 'gallery') echo 'active' ?>" href="admin.php?page=gallery">Gallery</a></li> -->

                <!-- <li><a class="<?php //if($page == 'banner') echo 'active' ?>" href="admin.php?page=banner">Banner</a></li> -->
            </ul>
        </li>
        <li><a href="#dropdown-forms" aria-expanded="true" data-toggle="collapse"><i class="la la-list-alt"></i><span>KHÁCH HÀNG</span></a>
            <ul id="dropdown-forms" class="collapse list-unstyled show pt-0">
                <li><a class="<?php if($page == 'customer') echo 'active' ?>" href="admin.php?page=customer">Khách hàng</a></li>
            </ul>
        </li>
        <li><a href="#dropdown-forms" aria-expanded="true" data-toggle="collapse"><i class="la la-list-alt"></i><span>ADMIN</span></a>
            <ul id="dropdown-forms" class="collapse list-unstyled show pt-0">
                <li><a class="<?php if($page == 'profile') echo 'active' ?>" href="admin.php?page=profile">Admin</a></li>
            </ul>
        </li>

    </ul>
    <!-- End Main Navigation -->
</nav>
<!-- End Side Navbar -->