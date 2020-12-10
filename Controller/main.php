<?php
include "Model/Syntax/Method.php";
$showTour=GetShowTour();
$showBookTour=GetShowBookTour();
$showCanhDep=GetShowCanhDep();
$ShowCheckTour=CheckCanhDep();
    include "View/main.php";
    
    
?>