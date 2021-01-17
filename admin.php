<?php
    session_start();
	require "dao/pdo.php";
	require "dao/type_tour.php";
	require "dao/detail-tour.php";
	require "dao/customer.php";
	require "dao/table-price.php";
	// require "dao/admin.php";
	// require "dao/tour.php"; //lỗi dung them vao

    // add head
	require "admin/layout/head-admin.php";

	if(isset($_GET['page'])){
		$page=$_GET['page'];
	}
	else {
		$page = 'index';
	}
	
	if($page=="index")
	{
		require "admin/index.php";
	}
	elseif($page=="type_tour")
	{
		require "admin/type_tour.php";
	}
	elseif($page=="tour")
	{
		require "admin/tour.php";
	}
	elseif($page=="customer") 
	{
		require "admin/customer.php";
	}
	// elseif($page=="news")
	// {
	// 	require "admin/news.php";
	// }
	// elseif($page=="gallery")
	// {
	// 	require "admin/gallery.php";
	// }
	// elseif($page=="banner")
	// {
	// 	require "admin/banner.php";
	// }
	// elseif($page=="khach-hang")
	// {
	// 	require "admin/khach-hang.php";
	// }
	elseif($page=="profile")
	{
		require "admin/profile.php";
	}
	elseif($page=="booking-tour")
	{
		require "admin/booking-tour.php";
	}
	elseif($page=="table-price")
	{
		require "admin/table-price.php";
	}
	elseif($page=="detail-tour")
	{
		require "admin/detail-tour.php";
	}
	else{
		echo '';
	}

	// add footer
	require "admin/layout/foot-admin.php";
?>