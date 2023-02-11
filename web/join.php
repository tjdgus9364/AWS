<script>
 function chid(){

  document.getElementById("chk_id2").value=0;
  var id=document.getElementById("chk_id1").value;

  if(id==""){
  alert("빈칸 안되요!");
  exit;
  }

  ifrm1.location.href="join_chk.php?userid="+id;
 }

</script>

<html>
 <head>
 <title>Join</title>
 <link rel="stylesheet" href="join.css"/>
 </head>

 <body>
 <center>
 <form action=join_ok.php method=post name=frmjoin>
 <table align="center" height="90">
        <tr>
                <td><div id="main-title">회원가입<div></td>
        </tr>
  </table>

        <table align="center" height="40" width="430" border="0" style="border:solid 4px black; margin-top:1%">
                <tr>
                        <td><input type=text name=joinid maxlength=15 id="chk_id1" value="" placeholder="아이디" style="height:40px; width:430px;">&nbsp;&nbsp; <input type=button value="중복검사" onclick=chid()></td>
<input type=hidden id="chk_id2" name=chk_id2 value="0">
                </tr>
        <table align="center" height="40" width="430" border="0" style="border:solid 4px black; margin-top:1%">
                <tr>
                        <td><input type="password" name=joinpw value=""  placeholder="비밀번호" style="height:40px; width:430px"></td>
                </tr>
        </table>
        <table align="center" height="40" width="430" border="0" style="border:solid 4px black; margin-top:1%">
                <tr>
                        <td><input type="password" name=joinpw2 value=""  placeholder="비밀번호 확인" style="height:40px; width:430px"></td>
                </tr>
        </table>
        <table align="center" height="40" width="430" border="0" style="border:solid 4px black; margin-top:1%">
                <tr>
                        <td><input type="test" name=joinemail value=""  placeholder="E-mail" style="height:40px; width:430px"></td>
                </tr>
        </table>

        <table align="center" height="40" style="margin-top:1%">
        <table align="center" height="0" width="440" border="1" style="border:solid 1px black; margin-top:2%">
        </table>

        <table align="center" height="50" style="margin-top:1%" class="mo">
        </table>
 <tr> <td colspan=2 align=center><input type=submit value="가입하기">&nbsp;&nbsp;

  <input type=reset value="다시작성">&nbsp;&nbsp;
  <input type=button value="취소" onclick="history.back();">
 </td>
 </tr>
 </table>
 </form>
  <iframe src="" id="ifrm1" scrolling=no frameborder=no width=0 height=0 name="ifrm1"></iframe>
 </body>
</html>
