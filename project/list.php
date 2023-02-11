<?
 session_start();
?>
<html>
 <head><title>게시판</title>
 </head>
 <body topmargin=0 leftmargin=0 text="#464646">
 <center>

 <br>
 <form action="insert.php" enctype="multipart/form-data" method=post>
 <table width=580 border=0 cellpadding=2 cellspacing=1 bgcolor="#777777">
  <tr>
  <td height=20 align=center bgcolor="#999999">
  <font color=white><B>글쓰기</B></font>
  

  </td>
  </tr>
  <tr>
  <td bgcolor=white>&nbsp;
  <table>
  <tr>
   <td width=160 align=left>Writer</td>
   <td align=left><input type=text name="name" value="<?=$_SESSION['id']?>" size=20 maxlength=10 readonly>
   </td>
  </tr>
  <tr>
   <td width=160 align=left>E-mail</td>
   <td align=left><input type=test name="email" value="<?=$_SESSION['email']?>" maxlength=25 readonly>
   </td>
  </tr>
  <tr>
   <td width=160 align=left>Password</td>
   <td align=left>
    <input type=password name="pass" size=8 maxlength=8>(수정, 삭제시 필요합니다.)
   </td>
  </tr>
  <tr>
   <td width=160 align=left>Title</td>
   <td align=left>
    <input type=text name="title" size=60 maxlength=35>
   </td>
  </tr>
  <tr>
   <td width=160 align=left>내용</td>
   <td align=left><TEXTAREA name="comment" cols=65 rows=15></TEXTAREA>
  </td>
  </tr>

  <tr>
   <td align=160 align=left>File</td>
   <td align=left>
   <input type=file name="upfile">
   </td>
  </tr>

  <tr>
   <td colspan=10 align=center>
    <input type=submit value="Write">
   &nbsp;&nbsp;
   <input type=reset value="reset">
   &nbsp;&nbsp;
   <input type=button value="back" onclick="history.back()">
  </td>
  </tr>
  </table>
  </form>
  </center>
 </body>
</html>
