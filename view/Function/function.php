<?php
//kiem tra dau vao
function test_input($data){
    $data=trim($data); //xoa khoang cach dau cuoi
    $data=stripcslashes($data); //xoa dau gach cheo nguoc(\)
    $data=htmlspecialchars($data);
    return $data;
}

//Kiem tra email
function checkEmail($data) {
    $flag =true;
    $email = test_input($data);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $flag= false;
    }
    return $flag;
}

//check phone
function checkPhone($data) {
    if(preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $data)) {
        $flag = true;
    }
    return $flag;
}
?>