<?php
include "Model/Syntax/Method.php";
    $showBookTour=GetShowBookTour();
    $Action="";
    if (isset($_GET['Action'])) {
        $Action=$_GET['Action'];
        
        switch ($Action) {
            case 'booking':
                if (isset($_GET['id'])) {
                    $getid=$_GET['id'];
                }
                // $_SESSION['GetIdTour']=$getid;
                // $_SESSION['ShowTourForId']= array();
                $bookingve=BookingTour($getid);
                $showChuongTrinh=GetChuongTrinhTour($getid);
                include_once"View/datve.php";
                break;
            case 'addve':
                echo '<script>alert("Bạn đã đặt vé thành công")</script>';
                include "View/tour.php";
            break;
            default:
                # code...
                break;
        }
    }
    
?>