<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>가계부 생성</title>
</head>
<body>
    
</body>
</html>
<?php
    session_start();
     //$conn=mysqli_connect("localhost","yusun2234sun1","sunlove8421!","yusun2234sun1");
    $conn = mysqli_connect('localhost', 'root', 'sunlove8421!', 'ggb');
    $userid = $_SESSION['userid'];
    $money = $_POST['makemoney'];
    $date = date("m-d");
    $checksql = "SHOW TABLE STATUS WHERE name='{$userid}'";
    $checkresult = mysqli_query($conn,$checksql);
    $row1 = mysqli_fetch_array($checkresult);
    if($row1>0){
        echo "<script>alert('이미 가계부가 존재합니다');
        location.href='/front/main.html'
        </script>";
        exit;
    }
    $sql = "CREATE TABLE {$userid}(
        money INT(50) NOT NULL,
        da DATE NOT NULL,
        because VARCHAR(50),
        no INT IDENTITY (1, 1) NOT NULL
        );";
    $sql1 = "INSERT INTO {$userid}(money,da) VALUES('{$money}','{$date}')";
    $result = mysqli_query($conn,$sql);
    $result1 = mysqli_query($conn,$sql1);
?>