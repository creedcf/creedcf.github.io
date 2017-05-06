<!DOCTYPE html>
<html lang="ko">

<head>
	<meta name="google-site-verification" content="mbIfUZymTp_WJSDFmhoDfcPrqx3SFZq5lEJ0g8D5zOk" />
	<meta name="naver-site-verification" content="aa8d85972ac77a50672cbbadcdd9601015d6ab95"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

	<?php
		require_once("rsslib.php");
	?>

	<title>CREED.CF</title>

	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	
	<meta property="og:description" content="요리문답과 신앙고백서">
	<meta property="og:image" content="/link-img.jpg">
	<script>
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
</script>
</head>
	

	
<body>
	
	<div id="navi-main"></div>
	
	<div class="navbar-fixed">
		<nav class="grey darken-2" role="navigation">
			<div class="nav-wrapper container"><a id="logo-container" href="/" class="brand-logo center">CREED.CF</a>
				<a href="#" data-activates="nav-mobile-1" class="button-collapse"><i class="material-icons">menu</i></a>
			</div>
		</nav>
	</div>


	<div class="container" id="index-banner" style="padding: 0 20px;">
		<br><br>
		<h1 class="center blue-grey-text text-darken-2" style="letter-spacing:-2px;">Catechism & Confession<br><small>요리문답과 신앙고백</small></h1><br>
		<p class="col s12 light center">믿음의 선배들이 가르쳤고 고백했던 요리문답과 신앙고백들을 탐독하시어 신앙의 유익을 얻으시면 좋겠습니다.</p>
		<br><br>
	</div>
	
	<div class="container contents">
		<div class="section">
			<div class="row">
				<div class="col s12 m12">
					현재 웨스트민스터 소요리문답, 사도신경, 니케아신경, 콘스탄티노플신경, 칼케돈신조, 아타나시우스신경이 제공되고 있습니다.
				</div>
			</div>
		</div>
	</div>

	<div class="container contents">
		<div class="section">
			<div class="row">
				<div class="col s12 m12">
					<?php
						require_once("rsslib.php");
						$url = "https://blog.creed.cf/rss";
						echo RSS_Display($url, 5, false, true);
					?>
				</div>
			</div>
		</div>
	</div>

	<div class="container contents">
		<div class="section">
			<div class="row">
				<div class="col s12 m12 center">
					<h4>애플리케이션 다운로드</h4>
				</div>
				<div class="col s12 m6 center">
					<a class="waves-effect waves-light btn grey darken-1" style="margin-top:15px;" target="_blank" href="https://drive.google.com/file/d/0BxNoUCgWm33fM0RNMV9WdnZBcHM/view?usp=sharing">Download for Android</a>
				</div>
				<div class="col s12 m6 center">
					<a class="waves-effect waves-light btn disabled" style="margin-top:15px;" href="#">Download for iPhone</a>
				</div>
			</div>
		</div>
	</div>

	<br>

	<footer class="page-footer grey darken-1">
		<div class="container" style="padding: 0 20px;">
			<div class="section">
				<div class="col l6 s12">
					<h5 class="white-text">CREED.CF 소개</h5>
					<ol class="white-text">
						<li>CREED.CF는 교리문답서와 신앙고백서를 제공하는 웹 애플리케이션(Web Application)입니다.</li>
						<li>CREED.CF는 스마트폰 및 태블릿을 비롯한 모바일 환경을 우선적으로 고려합니다.</li>
						<li>CREED: Creed는 교리 혹은 신조로 번역할 수 있는 영어 단어입니다.<br />CF: cf는 Confession을 줄인 약자이며, Confession 역시 신앙 고백, 신조라고 번역할 수 있는 영어 단어입니다.</li>
					</ol>
				</div>
				<div class="col l6 s12">
					<h5 class="white-text">제공되는 번역본에 대해서</h5>
					<ol class="white-text">
						<li>번역본에 저작권과 관련한 문제가 있을시 이메일(xian.choi@gmail.com)로 연락을 주시면 감사하겠습니다.</li>
						<li>번역본은 (수정 불가가 명시되어 있지 않다면) 원 의미가 훼손되지 않으면서 뜻을 더 잘 전달하기 위하여, 단어나 문장이 일부분 수정될 수 있습니다.</li>
						<li>“© CREED.CF” 이라고 명시되어 있는 것은 CREED.CF에서 번역한 것입니다. 출처만 적어주시면 자유롭게 퍼가실 수 있습니다.</li>
					</ol>
				</div>
			</div>
		</div>

		<div class="footer-copyright" style="padding: 0 20px;">
			<div class="container">
				Made by <a class="grey-text text-lighten-3" href="/">Xian Choi</a>
			</div>
		</div>
	</footer>

	<!--  Scripts-->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript">
		//페이지가 로드되면 실행한다.
		$(document).ready( function() {
			$("#navi-main").load("/navi-main.html");
		});
	</script>
<!--
	<script type="text/javascript">
		//페이지가 로드되면 실행한다.
		$(document).ready( function() {
			$("#blog").load("/blog");
		});
	</script>
-->

</body>

</html>
