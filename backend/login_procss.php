<?php
    //$conn=mysqli_connect("localhost","yusun2234sun1","sunlove8421!","yusun2234sun1");
    $conn = mysqli_connect('localhost', 'root', 'sunlove8421!', 'ggb');
    $makeid = $_POST['makeid'];
    $makepw = $_POST['makepw'];
    $makeemail = $_POST['makeemail'];
    $hashedPassword = password_hash($makepw, PASSWORD_DEFAULT);
    SQLFiltering($makeid, $makepw);
    function SQLFiltering($makeid, $makepw)
    {
        $makeid = preg_replace("/\s{1,}1\=(.*)+/", "", $makeid);
        $makeid = preg_replace("/\s{1,}(or|and|null|where|limit|alert|location)/i", " ", $makeid);
        $makeid = preg_replace("/[\s\t\'\;\=]+/", "", $makeid);
        $makepw = preg_replace("/\s{1,}1\=(.*)+/", "", $makepw);
        $makepw = preg_replace("/\s{1,}(or|and|null|where|limit|alert|location)/i", " ", $makepw);
        $makepw = preg_replace("/[\s\t\'\;\=]+/", "", $makepw);
    }
    if (empty($makeid)) {
    ?>
    <script>location.href = "singup.php"</script>
    <?php
        exit;
    }
    if (empty($makepw)) {
    ?>
    <script>location.href = "singup.php"</script>
    <?php
        exit;
    }
    $sql = "INSERT INTO user(id, password, email) VALUES('{$makeid}','{$makepw}','{$makeemail}')";
    $result = mysqli_query($conn, $sql);
    $sql1 = "SELECT id FROM user WHERE id='" . $_POST['makeid'] . "'";
    $sql2 = "SELECT email FROM user WHERE email='" . $_POST['makeemail'] . "'";
    $result1 = mysqli_query($conn, $sql1);
    $result2 = mysqli_query($conn, $sql2);
    $row1 = mysqli_num_rows($result);
    $row2 = mysqli_num_rows($result2);
    if ($row1 > 0) {
    ?>
    <script>
        alert("이미 존재하는 아이디입니다. 다시 입력해주세요.");
        location.href = "/front/singup.php";
    </script>
    <?php
        exit;
    }
    if ($row2 > 0) {
    ?>
    <script>
        alert("이미 존재하는 이메일입니다. 다시 입력해주세요.");
        location.href = "/front/singup.php";
    </script>
    <?php
        exit;
    }
    $result = mysqli_query($conn, $sql);
    if ($result === false) {
        echo "저장에 문제가 생겼습니다. 관리자에게 문의해주세요.";
        echo mysqli_error($conn);
    } else {
    ?>
    <script>
        alert("회원가입이 완료되었습니다");
        location.href = "/front/login.php"
    </script>
    <?php
    }
?>