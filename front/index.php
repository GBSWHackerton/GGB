<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="style.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic+Coding&display=swap" rel="stylesheet">
  <title>Login</title>
</head>
<body>
  <form action="../backend/login_procss.php" method="POST">
    <div class="Form">
    <h2>로그인</h2>
      <input type="text" name="id" class="id" placeholder="아이디">
      <input type="password" name="pw" class="pw" placeholder="비밀번호">
      <button type="submit" name="login" id="maker">로그인</button>
      <ul>
        <li><a href="finid.html" class="FID">아이디 찾기</a></li>
        <li><a href="findpw.html" class="FPWD">비밀번호 찾기</a></li>
        <li><a href="signup.php">회원가입</a></li>
      </ul>
    </div>
  </form>

  <script>
            const pushAll= function(){
                let userNewId = document.querySelector("#ID");
                let userNewEmail = document.querySelector("#mail");
                let userNewPw = document.querySelector("#PW");
                
                if(userNewId.value==""){
                    alert("ID 를 입력해주세요.");
                    document.getElementsByName("makeid").focus();
                    
                }
                if(userNewEmail.value==""){
                    alert("email을 입력해주세요.");
                    document.getElementsByName("makeemail").focus();
                
                }
                if(userNewPw.value == ""){
                    alert("비밀번호를 입력해주세요.");
                    document.getElementsByName("makepassword").focus();
                
                }
            }
  </script>

</body>
</html>