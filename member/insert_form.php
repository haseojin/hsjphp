<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>index</title>
<link href="../css/common.css" rel="stylesheet" type="text/css">
<link href="../css/member.css" rel="stylesheet" type="text/css">
<!--전체메뉴 펼치기-->
<script type="text/javascript" src="http://fllkorea2.mireene.com/test/jquery-1.6.2.min.js"></script>
<script type="text/javascript">
$(function(){
    $('#inner').hide();
	$('#navi a').click(function(){
        $('#inner').slideToggle(500, function(){
            if($(this).is(':hidden')) $('#navi a').html('<img src="../img/bullets-white.png">');
            else $('#navi a').html('<img src="../img/bullets-white.png">'); 
        });
    });
});
</script>

<script language="JavaScript">
	var msg;
	var exptext = /^[A-Za-z0-9_\.\-]+@[A-Za-z0-9\-]+\.[A-Za-z0-9\-]+/;

	function form_check(){
		var form = document.form_name;
		msg = "== 가입시 오류사항 ==\n\n";
		if(form.n_name.value=="")
			msg += "닉네임을 입력하세요.\n\n";
		if(form.id.value=="")
			msg += "회원ID를 입력하세요.\n\n";
		else if(form.id.value.length < 5)
			msg += "회원ID는 5자 이상 입력해야 합니다.\n\n";
		else if(!a_or_d(form.id.value))
			msg +="회원ID는 영문이나 숫자로 입력하세요\n\n";
		if(form.pwd.value=="")
			msg+="비밀번호를 입력하세요\n\n";
		else if(form.pwd.value.length < 5)
			msg += "비밀번호는 4자 이상 입력해야 합니다.\n\n";
		else if(!a_or_d(form.pwd.value))
			msg+="비밀번호는 영문이나 숫자로 입력하세요.\n\n";
		if(form.pwd.value != form.repwd.value)
			msg +="비밀번호와 비밀번호 확인 값이 서로 다릅니다.\n\n";
		if((form.tel2.value=="") && (form.tel3.value==""))
			msg += "전화번호를 입력하세요\n\n";
		if(isNaN(form.tel2.value) || (isNaN(form.tel3.value)))
			msg +="전화번호는 숫자만 입력가능합니다.\n\n";
		if(((form.tel2.value!="") && (form.tel3.value=="")) ||((form.tel2.value=="") && (form.tel3.value!="")) )
			msg +="전화번호를 끝까지 입력해 주세요.\n\n";
		if(form.email.value=="")
			msg += "이메일을 입력하세요\n\n"

 
		else if(exptext.test(form.email.value)==false)
		//이메일 형식이 알파벳+숫자@알파벳+숫자.알파벳+숫자 형식이 아닐경우
		msg +="이메일형식이 올바르지 않습니다.\n\n";
		if(msg == "== 가입시 오류사항 ==\n\n"){
			form.submit();
		}else{
			alert(msg);
			return;
		}
	}
	function a_or_d(str) {
		lower_str = str.toLowerCase();
		
		for(i=0; i<lower_str.length; i++) {
			ch=lower_str.charAt(i);
			if(((ch<'a')|| (ch>'z')) && ((ch<'0')||(ch>'9')))
				return 0;
		}
		return 1;
	}
	function openid_check() {

		if(document.form_name.id.value == ""){
			alert("아이디를 입력하세요");
			return;
		}

		url = "./id_check.php?id=" + document.form_name.id.value;
		//open(url, "id_repeat_check", "width=300, height=10");
		cw=screen.availWidth;     //화면 넓이
		ch=screen.availHeight;    //화면 높이

		sw=250;    //띄울 창의 넓이
		sh=50;    //띄울 창의 높이

		ml=(cw-sw)/2;        //가운데 띄우기위한 창의 x위치
		mt=(ch-sh)/2;         //가운데 띄우기위한 창의 y위치

		window.open(url,'tst','width='+sw+',height='+sh+',top='+mt+',left='+ml+',resizable=no,scrollbars=no');
	}


</script>
</head>

<body>	
<header>
<ul id="left_nav">
	<li>Ha Seojin</li>
	<li class="space"></li>
	<li id="navi"><a href="#"><img src="../img/bullets-white.png"></a></li>
	<li class="login"><a href="./login.php">로그인</a></li>
	<li class="login"><a href="./admin_login.php">관리자 로그인</a></li>
</ul>

<div id="slide">
	<div id="inner">---내용---</div>
</div>

<hgroup>
	<p id="title"><a href="../index.php">포트폴리오</a></p>
	<p id="subtitle"><small>Coding Study</small></p>
	<p>
</hgroup>


<nav id="main_menu">
<ul>
	<li>
	<a href="#">취업준비</a>
	<ul>
		<li><a href="../job/resume.php">이력서</a></li>
		<li><a href="../job/self_introduce.php">자기소개서</a></li>
	</ul>
	</li>
	<li>
	<a href="#">공부</a>
	<ul>
		<li><a href="../board/c_bbs.php">C/C++</a></li>
		<li><a href="../board/j_bbs.php">Java/Jsp</a></li>
		<li><a href="../board/h_bbs.php">HTML/CSS</a></li>
		<li><a href="../board/p_bbs.php">PHP</a></li>
	</ul>
	</li>
	<li>
	<a href="#">기타</a>
	<ul>
		<li><a href="#">영화</a></li>
		<li><a href="#">일기</a></li>
	</ul>
	</li>
</ul>
</nav>
</header>

<div id="header2">
	<p id="header2p">회원가입</p>
</div>

<section>
	<article>
	<br><br><br>
	<form method=post action="./insert_post.php" name=form_name>
		<div id="insert_form">
		<div id="big_label">회원가입</div>
		<div class="line"></div>
		<div id="middle">
			<dl>
			<dt class="label1"><label>닉네임</label></dt>
			<dd><input type=text name="n_name" size=40 style="width:200"></dd>
			<dt class="label1"><label>아이디</label></dt>
			<dd><input type=text name="id" size=40 style="width:200"></dd>

			<dd><input type="button" id="overlap" name="id_chk" value="중복확인" OnClick="openid_check(document.form_name.id.value)">

			<label id="overlapp">5자 이상의 영문이나 숫자로 입력하세요.</label></dd>
			<dt class="label1"><label>비밀번호</label></dt>
			<dd><input type=password name="pwd" size=40 style="width:200">&nbsp;</dd>
			<dt class="label1"><label>비밀번호 확인</label></dt>
			<dd><input type=password name="repwd" size=40 style="width:200">&nbsp;</dd>
			<dt class="label1"><label>전화번호</label></dt>
			<dd>
				<select name="tel1">
					<option>010</option>
					<option>02</option>
					<option>051</option>
					<option>053</option>
					<option>032</option>
					<option>062</option>
					<option>042</option>
					<option>052</option>
					<option>044</option>
					<option>031</option>
					<option>033</option>
					<option>043</option>	
					<option>041</option>
					<option>063</option>
					<option>061</option>
					<option>054</option>
					<option>055</option>
					<option>064</option>
				</select> -
				<input type=text name=tel2 size=4 maxlength=4 value=""> -
				<input type=text name=tel3 size=4 maxlength=4 value="">
			</dd>
			<dt class="label1"><label>e-mail</label></dt>
			<dd><input type=text name=email size=30 maxlength=30 value=""></dd>
			<dt class="label1"><label>성별</label></dt>
			<dd>
				<input type=radio name=gender size=30 value="남자">&nbsp;남자
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type=radio name=gender size=30 value="여자">&nbsp;여자
			</dd>

			<dt class="label1"><label>사는지역</label></dt>
			<select name="area">
				<option>&nbsp;&nbsp;</option>
				<option>서울</option>
				<option>부산</option>
				<option>대구</option>
				<option>인천</option>
				<option>광주</option>
				<option>대전</option>
				<option>울산</option>
				<option>세종</option>
				<option>경기</option>
				<option>강원</option>
				<option>충북</option>
				<option>충남</option>	
				<option>전북</option>
				<option>전남</option>
				<option>경북</option>
				<option>경남</option>
				<option>제주</option>
				</select>
			</dl>
			<div id="btns2">
				<p><input type="button"  class="icon_login" name="formcheck" value="가   입" OnClick="form_check()"><input type="reset" class="icon_login" value="취   소"></p>
			</div>
			<div class="line"></div>

			<div id="login_bottom">
				<a href='./find_pw_form.php'>비밀번호 찾기</a>&nbsp;&nbsp;|&nbsp;&nbsp;
				<a href='./login.php'>로그인</a>
			</div>
		</div>
		</div>
	</form>
	<br><br><br>
	</article>
</section>

<footer>
	<address>
	Copyright &copy; 2016 hsj All Rights Reserved
	</address>
</footer>


<a style="display:scroll; position:fixed; bottom:10px; right:20px;" href="#" title=Top>
	<img src="../img/top.png">
</a>
</body>
</html>
