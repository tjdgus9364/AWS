function enter(){

	var frm=document.join;

	if(frm.id.value.length<3){
		alert("아이디를 올바르게 입력해주세요");
		return;
	}

	if(frm.pw.value.length<3){
		alert("비밀번호를 올바르게 입력해주세요");
		return;
	}
	frm.method="get";
	frm.action="./index.php";
	frm.submit();
}
