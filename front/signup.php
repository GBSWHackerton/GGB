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
  
  <form action="../backend/findid.php" method="POST">
    <div class="form">
      <h2 class="header">회원가입</h2>
      <input type="text" name="makename" placeholder="고객님의 성함을 입력해주세요" class="name">
      <input type="text" name="makeid" placeholder="희망하시는 ID를 입력해주세요" class="id">
      <input type="password" name="makepw" placeholder="비밀번호를 입력해주세요" class="pw">
      <input type="email" name="makeemail" placeholder="이메일을 입력해주세요" class="email">
      <button class="maker" id="maker" onclick="pushAll();">제출</button>
      <a href="findid.html">아이디찾기</a>
      <a href="findpw.html">비밀번호찾기</a>
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