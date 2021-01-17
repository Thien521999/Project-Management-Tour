<?php
    require_once 'pdo.php';
/*------------------------Insert----------------------------------------------- */
    function loai_tour_insert($name_type_tour,$sort){
        $sql = "INSERT INTO typetour(NameTypeTour,Sort) VALUES(?,?)";
        pdo_execute($sql, $name_type_tour, $sort);
    }

/*------------------------Update----------------------------------------------- */
    function loai_tour_update($type_tour_ID,$name_Type_Tour,$sort){
        $sql = "UPDATE typetour SET NameTypeTour=? , Sort = ?  WHERE TypeTourID =?";
        pdo_execute($sql, $name_Type_Tour, $sort, $type_tour_ID);
    }

/*------------------------Delete tour----------------------------------------------- */
    function loai_tour_delete($type_tour_ID){
        $sql = "DELETE FROM typetour WHERE TypeTourID=?";
        if(is_array($type_tour_ID)){
            foreach ($type_tour_ID as $ma) {
                pdo_execute($sql, $ma);
            }
        }
        else{
            pdo_execute($sql, $type_tour_ID);
        }
    }

/*------------------------Tim tat ca tour----------------------------------------------- */
    function loai_tour_select_all(){
        $sql = "SELECT * FROM typetour ORDER BY Sort DESC";
        return pdo_query($sql);
    }

/*------------------------Tim Tour theo Ma loai tour----------------------------------------------- */
    function loai_tour_select_by_id($type_tour_ID){
        $sql = "SELECT * FROM typetour WHERE TypeTourID=?";
        return pdo_query_one($sql, $type_tour_ID);
    }

/*------------------------xem loai tour co ton tai----------------------------------------------- */
    function loai_tour_exist($type_tour_ID){
        $sql = "SELECT count(*) FROM typetour WHERE TypeTourID=?";
        return pdo_query_value($sql, $type_tour_ID) > 0;
    }

?>
