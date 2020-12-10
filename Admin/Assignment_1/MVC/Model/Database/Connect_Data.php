<?php
// fuction kết nối database
function connect()
{
    $servername = "localhost";
    $dbname = "limeorange";
    $username = "root";
    $password = "";
    $opt = array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
    try {
        // tạo chế độ kết nối vào thông báo lỗi
        $PDO = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname, $username, $password, $opt);
        echo "Kết nối thành công";
        echo '<div class="alert alert-success " role="alert" >
            <strong>Đang nhận dữ liệu từ database</strong>
        </div>';
        return $PDO;
    } catch (PDOException $e) {
        echo '<div class="alert alert-danger " role="alert">
          <strong>' . $e->getMessage() . '</strong>
      </div>';
    }
};
