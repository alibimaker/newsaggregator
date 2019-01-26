<!DOCTYPE HTML>
<html>
	<head>
		<title>Weather Forecast | Weather Report</title>
		<!-- orin weather  index.php link태그 코드[시작] -->
		<link rel="stylesheet" type="text/css" href="style.css">
		<!-- orin weather  index.php link태그 코드[끝] -->
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<!-- 백그라운드 이미지[bd.jpg]를 wrapper에 줄 경우 전체 배경 커버가 안되어 body에 줌 -->
	<body style="background-image:url(./images/bg.jpg);">
		<!-- Wrapper -->
			<div class="wrapper style1">
				<!-- Header -->
					<div id="header" class="skel-panels-fixed">
<!-- left-sidebar.php를 index.php로 옮기는 과정에서 css에 기능이 먹혀 들지 않아 div 내부속성에 직접 작성하기로 결정
header부분에 텍스트 들을 메인페이지와 동일하게 맞추려고 수정! but news의 왼쪽 정렬을 제외하고는 실패! -->
						<div id="logo" align="left">
							<a href="../index.html"><h1>News</h1></a>
							<span class="tag">just for you</span>
						</div>
						<nav id="nav">
							<ul>
								<li class="active">
								<a href="../index.html">처음으로</a></li>
								<li><a href="../phpgallery/index.php">daily recode with picture</a></li>
								<li><a href="../weather/index.php"">weather</a></li>
								<li><a href="no-sidebar.html">No Sidebar</a></li>
							</ul>
						</nav>
					</div>			
				<!-- Header -->	
                    <!-- Page -->
					<div id="page" class="container" style="background-image:url(./images/bg.jpg);">
					
					<!-- Content -->
						<section>
<!-- weather index.php origin 코드 [시작] -->
			<div class='resp_code frms noborders' align=center id='maindiv'>
						<input type='text' name='city' id='city' value='seoul' maxlength=25>
						<input type='submit' value='Click' id='clk'>
						<div class="weather-wrapper hide">
									<table class='table'>
										<tr>
											<td>지역</td>
											<td class="weather-place"></td>
										</tr>
										<tr>
											<td>온도</td>
											<td class="weather-temperature">(<span class="weather-min-temperature"></span> - <span class="weather-max-temperature"></span>)</td>
										</tr>
										<tr>
											<td>하늘 상태</td>
											<td class="weather-description capitalize"></td>
										</tr>
										<tr>
											<td>습도</td>
											<td class="weather-humidity"></td>
										</tr>
										<tr>
											<td>풍속</td>
											<td class="weather-wind-speed"></td>
										</tr>
										<tr>
											<td>일출</td>
											<td class="weather-sunrise"></td>
										</tr>
										<tr>
											<td>일몰</td>
											<td class="weather-sunset"></td>
										</tr>
									</table>
						</div>
						<div  align='center' style="font-size: 10px;color: #dadada;" id="dumdiv">
						<a href="https://www.hscripts.com" id="dum" style="font-size: 10px;color: #dadada;text-decoration:none;color: #dadada;">&copy;h</a>
						</div>
			</div>	
			<script src="jquery.1.9.1.min.js"></script>
			<script src="openWeather.js"></script>	
			<script>
						function chk(){
						var sds = document.getElementById("dum");
						if(sds == null){
							alert("You are using a free package.\n You are not allowed to remove the tag.\n");
						}
						var sdss = document.getElementById("dumdiv");
						if(sdss == null){
							alert("You are using a free package.\n You are not allowed to remove the tag.\n");
							document.getElementById("maindiv").style.visibility="hidden";
						}
						}
					window.onload=chk;
				$(document).ready(function() {
					$('#city').bind('keyup blur',function(){ 
					var node = $(this);
					node.val(node.val().replace(/[^a-z]/g,'') ); }
				);
				$("#clk").click(function(){
					var city = $("#city").val();
					//alert(city);
					$('.weather-temperature').openWeather({
						key: 'ab8b2f0d83f4ad02aaaeabe6d8d77895',
						city: city+', IN',
						descriptionTarget: '.weather-description',
						windSpeedTarget: '.weather-wind-speed',
						minTemperatureTarget: '.weather-min-temperature',
						maxTemperatureTarget: '.weather-max-temperature',
						humidityTarget: '.weather-humidity',
						sunriseTarget: '.weather-sunrise',
						sunsetTarget: '.weather-sunset',
						placeTarget: '.weather-place',
						success: function() {			
							//show weather
							$('.weather-wrapper').show();
							
						},
						error: function(message) {			
							console.log(message);
							$('.weather-wrapper').hide();
							alert("Enter City Name Properly.");			
						}
					});
				});
				});
			
			</script>	
<!-- weather index.php origin 코드 [끝] -->

</section>
					</div>
					<!-- /Page -->

		</div><!-- end of <div class="wrapper style1"> -->

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
			 <span class="copyright">Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)</span>
			</div>
		</div>
	</body>
</html>
<!-- left-sidebar.php 구문 삽입[끝] -->
	