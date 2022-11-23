<?php
    session_start();
     //$conn=mysqli_connect("localhost","yusun2234sun1","sunlove8421!","yusun2234sun1");
    $conn = mysqli_connect('localhost', 'root', 'sunlove8421!', 'ggb');
    $how = $_POST['menu'];
    $price = (int)$_POST['price'];
    $tablename = $_SESSION['userid'];
    $date = date("y-m-d");
    $nosql = "SELECT no FROM {$tablename}";
    $result2 = mysqli_query($conn,$nosql);
    while($row1 = mysqli_fetch_array($result2) ){
        $sz = array($row1['no']);
    }
    (int)$max_int_v = (int)max($sz);
    $moneysql = "SELECT money FROM {$tablename} WHERE no = {$max_int_v}";
    $moneyresult = mysqli_query($conn,$moneysql);
    while($row = mysqli_fetch_array($moneyresult)){
        $ez = array($row['money']);
        break;
    }
    $intresult = $ez[0];
    $intprice = (int)$price;
    $resultprice = $intresult-$intprice;
    $sql = "INSERT INTO {$tablename}(money,da,because) VALUES('{$resultprice}','{$date}','{$how}')";
    $result1 = mysqli_query($conn,$sql);

?>
<script>
    alert("성공적으로 실행 되었습니다");
    location.href="/front/main.html";
</script>