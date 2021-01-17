<?php
    session_start();
    require "dao/pdo.php";
    require "dao/customer.php";
    //require "dao/tour.php"; //loi khi them vao

    if(isset($_GET['page'])){
		$page=$_GET['page'];
	}else {
        $page = 'main';
    }

    if($page=="main") {
        require "view/main.php";
    }
    elseif($page == "tour-detail")
    {
        require "view/tour-detail.php";
    }
    elseif($page == "booking-tour") 
    {
		require "view/booking-tour.php";
    }
    elseif($page == "notification") 
    {
        require "view/notification.php";
    }
    elseif($page=="in-tour")
	{
		require "view/in-tour.php";
    }
    elseif($page=="out-tour")
	{
		require "view/out-tour.php";
    }
    elseif($page=="contact")
	{
		require "view/contact.php";
    }
    elseif($page=="profile")
    {
        require "view/profile.php";
    }
    elseif($page=="trip")
    {
        require "view/trip.php";
    }
    elseif($page=="comment")
    {
        require "view/comment.php";
    }
    elseif($page=="reward")
    {
        require "view/reward.php";
    }
    elseif($page == "search")
    {
        require "view/search.php";
    }
    else 
    {
        echo '';
    }
?>