<?php
    require_once 'pdo.php';

/*--------------------------Insert------------------------------------------*/
    function customer_insert($email, $phone, $password){
        $sql = "INSERT INTO customer( Email, Phone, Password) VALUES(?,?,?)";
        pdo_execute($sql, $email, $phone, $password);
    }

/*--------------------------Update------------------------------------------*/
    function customer_update($customerID, $email, $phone, $password){
        $sql = "UPDATE customer SET Email = ?, Phone= ? , Password=?  WHERE CustomerID =?";
        pdo_execute($sql, $email, $phone, $password, $customerID);
    }

/*--------------------------Xoa khach hang------------------------------------------*/
    function customer_delete($customerID){
        $sql = "DELETE FROM customer WHERE CustomerID=?";
        if(is_array($customerID)){
            foreach ($customerID as $ma) {
                pdo_execute($sql, $ma);
            }
        }
        else{
            pdo_execute($sql, $customerID);
        }
    }

/*--------------------------Tìm KH trong table Customer bang CustomerID------------------------------------------*/
    function customer_select_by_id($customerID){
        $sql = "SELECT * FROM customer WHERE CustomerID=?";
        return pdo_query_one($sql, $customerID);
    }

/*--------------------------Tìm tat ca KH ------------------------------------------*/
function customer_select_all(){
    $sql = "SELECT * FROM customer ORDER BY CustomerID DESC";//giam dan
    return pdo_query($sql);
}

/*--------------------------Kiem tra khách hàng co ton tai ------------------------------------------*/
function customer_exist($customerID){
    $sql = "SELECT count(*) FROM customer WHERE CustomerID=?";
    return pdo_query_value($sql, $customerID) > 0;
}

/*--------------------------Tìm khách hàng bằng email------------------------------------------*/
function customer_select_by_email($email){
    $sql = "SELECT * FROM customer WHERE Email=?";
    return pdo_query_one($sql, $email);
}



?>