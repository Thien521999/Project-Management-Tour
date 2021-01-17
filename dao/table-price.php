<?php
require_once 'pdo.php';
/*------------------------------------------- Insert --------------------------------- */
function tableprice_insert($tourid, $priceadult, $pricechildren, $pricebaby, $priceinfant, $numberticketlimit, $maloaitour){
    $sql = "INSERT INTO tableprice(TourID, PriceAdult, PriceChildren, PriceBaby, PriceInfant, NumberTicketLimit, TypeTourID) VALUES(?,?,?,?,?,?,?)";
    pdo_execute($sql, $tourid, $priceadult, $pricechildren, $pricebaby, $priceinfant, $numberticketlimit, $maloaitour);
}

/*------------------------------------------- Update --------------------------------- */
function tableprice_update($priceadult, $pricechildren, $pricebaby, $priceinfant, $numberticketlimit, $maloaitour, $tourid){
	$sql = "UPDATE tableprice SET PriceAdult=?, PriceChildren=?, PriceBaby=?, PriceInfant=?, NumberTicketLimit=?, TypeTourID=? WHERE TourID=?";
	pdo_execute($sql, $priceadult, $pricechildren, $pricebaby, $priceinfant, $numberticketlimit, $maloaitour, $tourid);
}

/*----------------------------Xóa table price---------------------------*/
function tableprice_deletes($matour) {
	$sql = "DELETE FROM tableprice WHERE TourID=?";
	if(is_array($matour)){
		foreach($matour as $ma) {
			pdo_execute($sql, $ma);
		}
	}
	else{
		pdo_execute($sql, $matour);
	}
}

/*--------------------Tim tat ca giá và sap xep cac giá  theo TourID giam dan----------------------------------------*/
function tableprice_select_all(){
	$sql = "SELECT * FROM tableprice ORDER BY TourID DESC";//giam dan
	return pdo_query($sql);
}

function tableprice_select_all_by_id($tourID){
	$sql = "SELECT * FROM tableprice WHERE TourID = ? ORDER BY ID ASC";//giam dan
	return pdo_query($sql, $tourID);
}

/*--------------------Tim gia theo ------------------------------*/
function tableprice_select_by_price($tourid){
    $sql = "SELECT * FROM tableprice WHERE TourID=?";
    return pdo_query_one($sql, $tourid);
}

/*-----------------Tim tour theo TourID---------------------------*/
function tableprice_select_by_id($tourID){
    $sql = "SELECT * FROM tableprice WHERE TourID=?";
    return pdo_query_one($sql, $tourID);
}

?>