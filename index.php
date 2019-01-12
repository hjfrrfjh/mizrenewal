<!DOCTYPE html>
<html>

<head>
    <!-- 헤더,푸터의 스크립트,css -->
    <?php include 'head.php';?>
    <link rel="stylesheet" type="text/css" href="css/main-slide.css">
    <script type="text/javascript">
        $(function () {
            $('.top-banner').slick({
                dots: true, // 네비게이션(아래의 점들) 보여주기
                infinite: true, //루프되게
                slidesToShow: 1, //한번에 보여주는 아이템의 개수
                // slidesToScroll: 1, // 몇개단위로 페이지가 넘어가는지 설정
                autoplay: true, //자동으로 넘어가게
                autoplaySpeed: 3000, //넘어가는 속도 설정
                // centerMode:false, //센터모드 - 좌우의 안보이는 아이템을 일부 보이게 해줌
                // centerPadding: '40px' //센터모드시 좌우의 아이템을 얼마나 보이게 해줄지 설정
            });
        });
    </script>
</head>

<body>
    <!-- 헤더 -->
    <?php include 'header.php';?>
    <?php include 'slide.php';?>


</body>

<!-- 푸터 -->
<?php include 'footer.php';?>

</html>