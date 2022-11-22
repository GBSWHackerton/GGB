<?php
    session_start();
     //$conn=mysqli_connect("localhost","yusun2234sun1","sunlove8421!","yusun2234sun1");
    $conn = mysqli_connect('localhost', 'root', 'sunlove8421!', 'ggb');
    $how = $_POST['menu'];
    $price = (int)$_POST['price'];
    $tablename = $_SESSION['userid'];
    $date = date("m-d");
    $moneysql = "SELECT money FROM '{$tablename}' where no=1";
    $result = mysqli_query($conn,$moneysql);
    $resultprice = $result+$price;
    $sql = "INSERT INTO '{$tablename}'(money,da,how) VALUES('{$resultprice}','{$date}','{$how}')";

?>