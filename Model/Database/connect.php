<?php
    function connect_database(){
        $servername = "localhost";
        $dbname="fpt_travels";
        $username = "root";
        $password = "";
        $opt=array(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION,PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8');
        try {
          // tạo chế độ kết nối vào thông báo lỗi
          $PDO = new PDO('mysql:host='.$servername.';dbname='.$dbname,$username,$password,$opt);
        //   echo "Kết nối thành công";
          return $PDO;
        } catch(PDOException $e) {
          echo "Connection failed: " . $e->getMessage();
        }
    }
            
?>