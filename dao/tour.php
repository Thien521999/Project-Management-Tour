
<?php 	
/**
	 * Xóa một hoặc nhiều loại
	 * @param mix $ma_loai là mã loại hoặc mảng mã loại
	 * @throws PDOException lỗi xóa
	 */

/*------------------------------------------- Insert --------------------------------- */
	function tour_insert($tourID, $nameTour, $description, $detail, $image, $day_Start, $day_End, $timeTour, $price, $discount, $place_start, $TypeTourID, $vehicle){
		$sql = "INSERT INTO tour(TourID, NameTour, Description, Detail, Image, Day_Start, Day_End, TimeTour, Price, Discount, Place_Start, TypeTourID, Vehicle) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)";
		pdo_execute($sql, $tourID, $nameTour, $description, $detail, $image, $day_Start, $day_End, $timeTour, $price, $discount, $place_start, $TypeTourID, $vehicle);
	}
/*------------------------------------------- Update --------------------------------- */
	function tour_update($tourID, $nameTour, $description, $detail, $image, $day_Start, $day_End, $timeTour, $price, $discount, $place_start, $TypeTourID, $vehicle){
		$sql = "UPDATE tour SET NameTour=?, Description=?, Detail=?, Image=?, Day_Start=?, Day_End=?, TimeTour=?, Price=?, Discount=?, Place_Start=?, TypeTourID=?, Vehicle=? WHERE TourID=?";
		pdo_execute($sql, $tourID, $nameTour, $description, $detail, $image, $day_Start, $day_End, $timeTour, $price, $discount, $place_start, $TypeTourID, $vehicle);
	}

/*----------------------------Xóa tour---------------------------*/
	function tour_deletes($tourID) {
		$sql = "DELETE FROM tour WHERE TourID=?";
		if(is_array($tourID)){
			foreach($tourID as $ma) {
				pdo_execute($sql, $ma);
			}
		}
		else{
			pdo_execute($sql, $tourID);
		}
	}

/*--------------------Tim tat ca tour và sap xep cac tour theo TourID giam dan----------------------------------------*/
	function tour_select_all(){
		$sql = "SELECT * FROM tour ORDER BY TourID DESC";//giam dan
		return pdo_query($sql);
	}

/*----------------------Tim tour "Ngoai nuoc" theo "loai tour" gioi han 3 tour-------------------------*/
	function tour_select_loaitour_1(){
		$sql = "SELECT * FROM tour  WHERE TypeTourID=1 ORDER BY TourID DESC LIMIT 3 ";
		return pdo_query($sql);
	}

/*-----------------------Tim tat ca tour ngoai nuoc theo "TypeTourID=1"--------------------------*/
	function tour_select_loaitour_1_all(){
		$sql = "SELECT * FROM tour  WHERE TypeTourID=1";
		return pdo_query($sql);
	}

/*--------------Tim tat ca tour "Trong nuoc" theo "loai tour" gioi han 3 tour.-------------------------------*/
	function tour_select_loaitour_2(){
		$sql = "SELECT * FROM tour WHERE TypeTourID=2 ORDER BY TourID DESC LIMIT 3";
		return pdo_query($sql);
	}

/*-------------------Tim tat ca tour Ngoai nuoc theo "TypeTourID=2".----------------------------*/
	function tour_select_loaitour_2_all(){
		$sql = "SELECT * FROM tour WHERE TypeTourID=2 ";
		return pdo_query($sql);
	}

/*-----------------Tim tour(1) theo TourID---------------------------*/
	function tour_select_by_id($tourID){
		$sql = "SELECT * FROM tour WHERE TourID=?";
		return pdo_query_one($sql, $tourID);
	}
/*--------------------Tim tour theo NameTour------------------------------*/
	function tour_select_by_name($nameTour){
		$sql = "SELECT * FROM tour WHERE NameTour=?";
		return pdo_query_one($sql, $nameTour);
	}

/*--------------------------------------------------*/
	function tour_select_by_name_showid($nameTour){
		$sql = "SELECT * FROM tour WHERE NameTour=?";
		$array = pdo_query($sql, $nameTour);
		if(count($array > 0)) {
			foreach($array as $item) {
				extract($item);
				return $TourID;
			}
		}
		return 0;
	}

	function tour_select_all_by_id($tourID){
		$sql = "SELECT * FROM tour WHERE TourID = ?";//giam dan
		return pdo_query($sql, $tourID);
	}

	function tour_search_by_place_start($place_start) {
		$sql = "SELECT * FROM tour WHERE Place_Start=? ";
		return pdo_query($sql, $place_start);
	}

	function tour_search_by_name_tour($name_tour) {
		$sql = "SELECT * FROM tour WHERE NameTour=? ";
		return pdo_query($sql, $name_tour);
	}

	function tour_search_by_date_start($date_start) {
		$sql = "SELECT * FROM tour WHERE Day_Start=? ";
		return pdo_query($sql, $date_start);
	}

	function tour_search_by_price($price) {
		$sql = "SELECT * FROM tour WHERE Price=? ";
		return pdo_query($sql, $price);
	}

	// function tour_search_all($place_start, $name_tour, $date_start) {
	// 	$sql = "SELECT * FROM tour WHERE Place_Start=? and  NameTour=? and Day_Start=?";
	// 	return pdo_quey($sql, $place_start, $name_tour, $date_start);
	// }
	
	function tour_search_only($place_start, $name_tour) {
		$sql = "SELECT * FROM tour WHERE Place_Start=? AND NameTour=? ";
		return pdo_quey($sql, $place_start, $name_tour);
	}

	
?>



