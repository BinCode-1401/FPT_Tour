<?php
    include "Model/Database/connect.php";
    connect_database();
    /* All function giao tiếp với database */
    function query($sql){
        $connect=connect_database();
        $result=$connect->query($sql);
        return $result;
    }// truy vấn dữ liệu từ database
    function queryOne($sql){
        $connect=connect_database();
        $result =$connect->query($sql);
        $row=$result->fetch(PDO::FETCH_ASSOC);// trả về dữ liệu dạng mảng
        return $row;
    }
    function execute($sql){
        $connect = connect_database();
        $result = $connect->exec($sql);
        return $result;
    }
/////////////////////////////////
    function GetShowTour(){
        $sql="SELECT * FROM tour ORDER BY tour_id LIMIT 10 ";
        return query($sql);
    }

    function GetShowBookTour(){
        $sql="SELECT * FROM tour ORDER BY tour_id LIMIT 11,21 ";
        return query($sql);
    }
    function GetShowCanhDep(){
        $sql="SELECT * FROM tour ORDER BY tour_id LIMIT 15,25 ";
        return query($sql);
    }
    function BookingTour($id){
        $sql="SELECT * FROM tour WHERE tour_id='$id'";
        return query($sql);
    }
    function CheckCanhDep(){
        $sql="SELECT * FROM tour WHERE checkcanhdep=1";
        return query($sql);
    }
    function GetChuongTrinhTour($id){
        $sql="SELECT schedule FROM detailtour WHERE tour_id='$id'";
        return query($sql);
    }
?>