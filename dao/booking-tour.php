<?php
	require_once 'pdo.php';
	
    function tourbooking_insert($bookingID, $tourID, $customerID, $ticketAdult, $ticketChildren, $ticketBaby, $ticketInfant, $ticketTotal, $priceTotal){
		$sql = "INSERT INTO bookingtour(BookingID, TourID, CustomerID, NumberTicketAdult, NumberTicketChildren, NumberTicketBaby, NumberTicketInfant, TicketTotal, PriceTotal) VALUES(?,?,?,?,?,?,?,?,?)";
		pdo_execute($sql, $bookingID, $tourID, $customerID, $ticketAdult, $ticketChildren, $ticketBaby, $ticketInfant, $ticketTotal, $priceTotal);
	}	

    function tourbooking_update($bookingID, $tourID, $customerID, $ticketAdult, $ticketChildren, $ticketBaby, $ticketInfant, $ticketTotal, $priceTotal){
		$sql = "UPDATE bookingtour SET TourID=?, CustomerID=?, NumberTicketAdult=?, NumberTicketChildren=?, NumberTicketBaby=?, NumberTicketInfant=?, TicketTotal=?, PriceTotal=? WHERE BookingID=?";
		pdo_execute($sql, $tourID, $customerID, $ticketAdult, $ticketChildren, $ticketBaby, $ticketInfant, $ticketTotal, $priceTotal, $bookingID);
	}

    
	function tourbooking_select_by_bookingID($bookingID) {
		$sql = "SELECT * FROM bookingtour WHERE BookingID=? ORDER BY BookingID DESC";
		return pdo_query_one($sql, $bookingID);
	}

	// function tourbooking_select_by_ID($bookingID) {
	// 	$sql = "SELECT * FROM bookingtour WHERE BookingID=? ORDER BY BookingID DESC";
	// 	return pdo_query($sql, $bookingID);
	// }

	function tourbooking_deletes($matour) {
		$sql = "DELETE FROM bookingtour WHERE BookingID=?";
		if(is_array($matour)){
			foreach($matour as $ma) {
				pdo_execute($sql, $ma);
			}
		}
		else{
			pdo_execute($sql, $matour);
		}
	}

	//Tim tat ca tour và sap xep cac tour theo TourID giam dan
	function tourbooking_select_all(){
		$sql = "SELECT * FROM bookingtour ORDER BY BookingID DESC";//giam dan
		return pdo_query($sql);
	}
?>