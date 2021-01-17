<?php 
	// require_once 'pdo.php';
/*------------------------------------Insert-------------------------------------------*/
	function admin_insert($nameAdmin, $email, $password, $phone){
		$sql = "INSERT INTO admin(NameAdmin, Email, Password, Phone) VALUES(?,?,?,?)";
		pdo_execute($sql, $nameAdmin, $email, $password, $phone);
	}
/*------------------------------------Update-------------------------------------------*/
	function admin_select_by_email($email){
		$sql = "SELECT * FROM admin WHERE Email=?";
		return pdo_query_one($sql, $email);
	}
/*------------------------------------Tim tat ca admin theo -------------------------------------------*/
	function admin_select_all(){
		$sql = "SELECT * FROM admin ORDER BY AdminID DESC";
		return pdo_query($sql);
	}

?>