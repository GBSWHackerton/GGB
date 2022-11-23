<?php
    session_start();
     //$conn=mysqli_connect("localhost","yusun2234sun1","sunlove8421!","yusun2234sun1");
    $conn = mysqli_connect('localhost', 'root', 'sunlove8421!', 'ggb');
    $how = $_POST['menu'];
    $price = (int)$_POST['price'];
    $tablename = $_SESSION['userid'];
    $date = date("y-m-d");
    $moneysql = "SELECT money FROM {$tablename} WHERE no='1'";
    $result = mysqli_query($conn,$moneysql);
    $row = mysqli_fetch_array($result);
    while($row){
        $ez = array($row['money']);
    }
    echo $ez[0];
    $intresult = (int)$ez[0];
    $intprice = (int)$price;
    echo $intresult;
    $resultprice = $intresult-$intprice;
    $sql = "INSERT INTO {$tablename}(money,da,because) VALUES('{$resultprice}','{$date}','{$how}')";
    $result1 = mysqli_query($conn,$sql);

?>