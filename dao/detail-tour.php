<?php
    /*--------------------------Insert------------------------------------------*/
	function tour_detail_insert($tourID, $location, $priceLocation, $descriptionLocation, $imageLocation, $vehicle) {
		$sql = "INSERT INTO detailtour(TourID, Location, PriceLocation, DescriptionLocation, ImageLocation, Vehicle) VALUES(?,?,?,?,?,?)";
		pdo_execute($sql, $tourID, $location, $priceLocation, $descriptionLocation, $imageLocation, $vehicle);
	}

    /*--------------------------Update------------------------------------------*/
	function tour_detail_update($tourID, $location, $priceLocation, $descriptionLocation, $imageLocation, $vehicle){
		$sql = "UPDATE detailtour SET Location = ?, PriceLocation = ?, DescriptionLocation = ?, ImageLocation = ?, Vehicle=? WHERE TourID=?";
		pdo_execute($sql, $location, $priceLocation, $descriptionLocation, $imageLocation, $vehicle, $tourID);
    }
    
    /*--------------------------Tim tat ca tour_detail------------------------------------------*/
	function tour_detail_select_all($tourID) {
		$sql = "SELECT * FROM detailtour WHERE TourID = ? ORDER BY ID ASC";//giam dan
		return pdo_query($sql, $tourID);
	}
	
	/*--------------------Tim tat ca tour và sap xep cac tour theo TourID giam dan----------------------------------------*/
	function tour_detailss_select_all() {
		$sql = "SELECT * FROM detailtour ORDER BY TourID DESC";//giam dan
		return pdo_query($sql);
	}
    
    /*--------------------------Tìm tour_detail theo TourID------------------------------------------*/
	function tour_detail_select_by_id($tourID) {
		$sql = "SELECT * FROM detailtour WHERE TourID=?";
		return pdo_query($sql, $tourID);
	}
    
    /*--------------------------Xóa tour_detail theo TourID------------------------------------------*/
	function tour_detail_deletes($matour) {
		$sql = "DELETE FROM detailtour WHERE TourID=?";
		if(is_array($matour)){
			foreach($matour as $ma) {
				pdo_execute($sql, $ma);
			}
		}
		else{
			pdo_execute($sql, $matour);
		}
	}
?>