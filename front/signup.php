<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="signup.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic+Coding&display=swap" rel="stylesheet">
  <title>Sign_up</title>
</head>
<body>
  
  <form action="/backend/signup_procss.php" method="post">

    <div class="Form">
      <h2 class="header">회원가입</h2>
      <input type="text" name="makename" placeholder="이름" class="name" id="NAME">
      <input type="text" name="makeid" placeholder="아이디" class="id" id="ID">
      <input type="password" name="makepw" placeholder="비밀번호" class="pw" id="PW">
      <input type="email" name="makeemail" placeholder="이메일" class="email" id="mail">
      <button class="maker" id="maker" onclick="pushAll();">제출</button>
      <ul>
        <li><a href="finid.html" class="FID">아이디 찾기</a></li>
        <li><a href="findpw.html" class="FPWD">비밀번호 찾기</a></li>
        <li><a href="main.html" class="#">로그인</a></li>
      </ul>
    </div>
  </form>
  <script>
            const pushAll= function(){
                let userNewId = document.querySelector("#ID");
                let userNewEmail = document.querySelector("#mail");
                let userNewPw = document.querySelector("#PW");
                let userNewName = document.querySelector("#NAME");
                
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
                    document.getElementsByName("makepw").focus();
                
                }
                if(userNewNAME.value == ""){
                    alert("이름을 입력해주세요.");
                    document.getElementsByName("makename").focus();
                
                }
            }
  </script>
</body>
</html>