<!DOCTYPE html>
<html>

<head>
	<?php include 'head.php' ?>
    
    
    <link rel="stylesheet" type="text/css" href="css/greet.css" /> <!--@@@@@@CSS@@@@@@ -->
</head>

<body>
    <? include 'header.php' ?>

    <div style="background-color:lightgrey;">
        <div style="
            margin:0 auto; 
            max-width:1500px;
            height:200px; 
            background-image:url('https://via.placeholder.com/1500x200?text=subpage+image');
            background-position:center center; 
            background-size:cover;
            "></div>

        <!-- 서브메뉴 부분 -------------------------------------->
        <div class="snb">
            <div class="snb__wrap">
                <ul class="snb__container">
                    <li class="snb__home"><a href="#"><i class="fas fa-home"></i></a></li>
                    <li class="snb__depth1"><a href="#">진료안내 <i class="fas fa-angle-down"></i></a>
                        <ul class="snb__dropdown snb__depth1-menu" data-selected=1>
                            <li><a href="#">미즈나래 소개</a></li>
                            <li><a class="snb__selected" href="#">진료안내</a></li>
                            <li><a href="#">난임센터</a></li>
                            <li><a href="#">상담/예약</a></li>
                            <li><a href="#">증명서발급</a></li>
                            <li><a href="#">고객서비스</a></li>
                        </ul>
                    </li>
                    <li class="snb__depth2"><a href="s2_2delivery.html">감성분만 <i class="fas fa-chevron-circle-down"></i></a>
                        <ul class="snb__dropdown snb__depth2-menu" data-selected=2>
                            <li><a href="#">산부인과</a></li>
                            <li><a class="snb__selected" href="#">감성분만</a></li>
                        </ul>                   
                    </li>
                </ul>
            </div>
        </div>
        </div>
        <!-- 서브메뉴 부분 -------------------------------------->
	<div class="content">
	<section class="section"> <!--@@@@@@@@@인삿말 내용@@@@@@@@@@@@@@@ -->
		<div class="text">
			<h1 class="h">인삿말</h1>
		</div>
		<div class="photo">
			<img src="img/sub/pic.png" alt="의료진" />
		</div>
		<div class="text2">
		
			<h2><span>"</span>&nbsp;<span class="miz">미즈나래여성병원</span>을 방문해주신 여러분 안녕하십니까?&nbsp;<span>"</span></h2>
			<br>
			<div id="bar" class="bar">
				
			</div>
			<p>
따뜻하고 가족 같은 분위기에서 저희와 함께 하시고 <br>축복을 받으며 태어나는 나의 아이와 어머니가
불편하게 찾아가는 병원이 아닌<br>편안하게 쉬어갈 수 있는 공간이 되고자 합니다.<br>
<br>
언제나 아이와 어머니를 생각하는 미즈나래여성병원이 되겠습니다.
</p>
		</div>
		<div class="boxwrap">
		<div id="box" class="box">
			<img src="img/sub/picone.jpg" alt="박스첫번째" />
			<div class="texttbox" id="tt">
				<ul>
					<li>체계적인 의료 서비스</li>
					<li>수많은 노하우</li>
					<li>정기적인 교육</li>
				</ul>
			</div>
		</div>
		<div id="bbox" class="box">
			<img src="img/sub/pictwo.jpg">
			<div class="texttbox">
				<ul>
					<li>따듯한 분위기의 산부인과</li>
					<li>내 집같이 아늑한 산부인과</li>
					<li>축복을 나누는 산부인과</li>
					<li>소중한 인연을 맺는 산부인과</li>
				</ul>
			</div>
		</div>
		<div id="bbbox" class="box">
			<img src="img/sub/picth.jpg" />
			<div class="texttbox">
				<p class="linetext">
					신뢰 / 편안 / 겸손
				</p>
			</div>
		</div>
		</div>
		</section>
    </div>

    <? include 'footer.php' ?>
</body>

</html>