

<!DOCTYPE html>
<html>
 <head>
  <title> LOGIN </title>
  
 <link rel="stylesheet" href="login.css"/>
 </script>

 </head>
 

 <body>
 <form name="join" method="POST" action="login1.php">
  <table align="center" height="90">
	<tr>
		<td><div id="main-title">LOGIN<div></td>
	</tr>
  </table>

	<table align="center" height="40" width="430" border="0" style="border:solid 4px black; margin-top:4%">
		<tr>
			<td><input type="text" name="id" value="" placeholder="아이디" style="height:40px; width:430px;"></td>
		</tr>
		</table>
	<table align="center" height="40" width="430" border="0" style="border:solid 4px black; margin-top:1%">
		<tr>
			<td><input type="password" name="pwd" value=""  placeholder="비밀번호" style="height:40px; width:430px"></td>
		</tr>
	</table>

	<table align="center" height="40" style="margin-top:1%">
	<tr>
		<td><input type=submit value="로그인" style="height:50px; width:430px;  background-color:black; color:white; font-size:16px; border:solid 1px white; "onClick="enter('')"></td>
	</tr>
	</table>

	<table align="center" height="0" width="440" border="1" style="border:solid 1px black; margin-top:2%">
	</table>

	<table align="center" height="50" style="margin-top:1%" class="mo">
		<tr>
			<td><a style="text-decoration:none;" href="join.php">회원가입</td>
	
		</tr>
		
	</table>
   </form>
 </body>
</html>
