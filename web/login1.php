<?
 session_start();
 include "db_info.php";
 $logid=$_POST['id'];
 $logpw=$_POST['pwd'];

 $query="select logid,email from member where logid='$logid' && logpw='$logpw'";
 
 $result=mysql_query($query,$conn);
 $row=mysql_fetch_array($result);

 if(!$row){
  echo "<script>alert('아이디와 비밀번호를 확인해주세요.');history.back();</script>";
 }
 else{
 $_SESSION['id']=$logid;
 $_SESSION['email']=$orw['email'];
 
 echo "<meta http-equiv='refresh' content='1; URL=main1.php?no=0'>";
 }

 mysql_close($conn);
?>

