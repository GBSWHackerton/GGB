<?php
    //$conn=mysqli_connect("localhost","yusun2234sun1","sunlove8421!","yusun2234sun1");
    $conn=mysqli_connect('localhost','root','sunlove8421!','ggb');
    $makeid = $_POST['makeid'];
    $makepw = $_POST['makepw'];
    $makeemail = $_POST['makeemail'];
    $hashedPassword = password_hash($makepw, PASSWORD_DEFAULT);
    SQLFiltering($makeid,$makepw);
    function SQLFiltering($makeid,$makepw){
        $makeid=preg_replace("/\s{1,}1\=(.*)+/","",$makeid); 
        $makeid=preg_replace("/\s{1,}(or|and|null|where|limit|alert|location)/i"," ",$makeid);
        $makeid = preg_replace("/[\s\t\'\;\=]+/","", $makeid); 
        $makepw=preg_replace("/\s{1,}1\=(.*)+/","",$makepw); 
        $makepw=preg_replace("/\s{1,}(or|and|null|where|limit|alert|location)/i"," ",$makepw); 
        $makepw = preg_replace("/[\s\t\'\;\=]+/","", $makepw); 
    }
    if(empty($id)){
        ?>
        <script>location.href="singup.php"</script>
        <?php
        exit;
    }
    if(empty($password)){
        ?>
        <script>location.href="singup.php"</script>
        <?php
        exit;
    }


?>