<!-- 상단 헤더연결 -->
<?php
  include('./sub/header.php');
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<main>
<form action="./php/login_check.php" name="로그인" method="post" class="m-5 p-5">
  <fieldset class="text-center m-5">
    <legend class="p-5">로그인</legend>
    <p>
      <label for="id_txt"></label>
      <input type="text" placeholder="아이디를 입력해주세요." id="id_txt" name="id_txt" class="form-control-sm w-25">
    </p>
    <p>
      <label for="pw_txt"></label>
      <input type="password" placeholder="패스워드를 입력해주세요" id="pw_txt" name="pw_txt" class="form-control-sm w-25">
    </p>
    <p class="check">
      <input type="checkbox" id="id_save">
      <label for="id_save">아이디 저장</label>
    </p>
    <p>
      <input type="submit" value="로그인" id="login_btn" class="btn btn-primary w-25">
    </p>
    <p class="form_register">
      <a href="#" title="아이디 찾기">아이디 찾기</a>
      <a href="#" title="비밀번호 찾기">비밀번호 찾기</a>
      <a href="./php/register.php" title="회원가입">회원가입</a>
    </p>
  </fieldset>
</form>
</main>

<!-- 하단 푸터연결 -->
<?php
  include('./sub/footer.php');
?>
<!-- 제이쿼리 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- 쿠키 -->
<script src="./script/jquery.cookie.js"></script>
<script>
  // $(document).ready(function(){
  //   let key = getCookie('idChk');//쿠키이름 저장
  //   //만약 브라우저의 키 변수에 값이 저장되어 있다면
  //   if(key){ 
  //     //id값을 저장
  //     $('#id_txt').val(key);
  //     //체크박스에 체크가 되어 있음.
  //     $('#id_save').prop('checked',true);
  //   }

  //   //3. 체크박스를 체크하지 않고 다시 체크를 풀 경우(쿠키를 저장하지 않겠다/삭제)
  //   $('#id_save').change(function(){
  //     if($(this).is(':checked')){ //is메서드는 체크여부를 true/false로 알려줌
  //       //쿠키생성하기
  //       $.cookie('idChk',$('#id_txt').val(),{expires:7,path:'/'});
  //     }else{
  //       //쿠키 생성하지 않음
  //       $.removeCookie('idChk',{path:'/'});
  //     }
  //   });

  //   //4. 아이디 입력시 쿠키 생성
  //   $('#id_txt').keyup(function(){
  //     if($('#id_save').is(':checked')){
  //       $.cookie('idChk',$(this).val(),{expires:7,path:'/'});
  //     }
  //   });

  //   //만약 id값이 있다면
  //   if($('#id_txt').val() !=""){ 
  //     //체크박스에 체크를 해둔다.
  //     $('#id_save').attr('checked',true);
  //   }

  //   $('#id_save').change(function(){ //체크박스의 상태가 변경되면 아래내용 실행
  //     if($('#id_save').is(':checked')){ //체크박스에 체크가 된경우라면
  //       setCookie('idChk',$('#id_txt').val(), 7); //쿠키를 생성하고
  //     }else{
  //       deleteCookie('idChk'); //쿠키를 삭제한다
  //     }
  //   });

  //   $('#id_txt').keyup(function(){ //아이디 입력창에 키를 눌렀을 경우 쿠키갱신
  //     if($('#id_save').is(':checked')){ //체크박스에 체크가 된 경우라면
  //       setCookie('idChk',$('#id_txt').val(),7); //쿠키를 생성한다.
  //     }
  //   });
  // });
  $(document).ready(function(){
  // 쿠키값 복원
  let key = $.cookie('idChk'); // 쿠키 읽기
  if(key){ 
    $('#id_txt').val(key);
    $('#id_save').prop('checked', true);
  }

  // 체크박스 변경 시 쿠키 생성/삭제
  $('#id_save').change(function(){
    if($(this).is(':checked')){
      $.cookie('idChk',$('#id_txt').val(),{expires:7,path:'/'});
    }else{
      $.removeCookie('idChk',{path:'/'});
    }
  });

  // 아이디 입력 시 쿠키 갱신
  $('#id_txt').keyup(function(){
    if($('#id_save').is(':checked')){
      $.cookie('idChk',$(this).val(),{expires:7,path:'/'});
    }
  });
});
</script>