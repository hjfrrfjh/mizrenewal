<!DOCTYPE html>
<html>

<head>
    <!-- 서브메뉴 맞게 보여주기위해 -->
    <?php
        $pageName = basename($_SERVER['PHP_SELF']);
    ?>
    <!-- 헤더,푸터의 스크립트,css -->
    <?php include 'head.php';?>
</head>

<body>
    <!-- 헤더 -->
    <?php include 'header.php';?>



    <div>
        <!-- 서브페이지 코드 넣을곳-->
        <!-- 서브메뉴 -->
        <?php include 'snb.php' ?>
    </div>

</body>

<!-- 푸터 -->
<?php include 'footer.php';?>

</html>