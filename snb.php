<?php 
    $pageName = basename($_SERVER['PHP_SELF']);
    
    // 미즈나래 소개 , greeting.php, doctor.php, map.php
    // 진료안내 , medical.php, delivery.php
    // 난임센터, infertility.php
    // 상담/예약 consult.php, reserve.php
    // 증명서발급 certificate.php, non-reimbursement.php
    // 고객서비스 아직없음

    $menu=[
        [
            "name"=>"미즈나래 소개",
            "href"=>"greeting.php",
            "sub"=>
            [
                [
                    "name"=>"인삿말",
                    "href"=>"greeting.php"
                ]
                ,[
                    "name"=>"병원 둘러보기",
                    "href"=>"#"
                ]
                ,[
                    "name"=>"의료진 안내",
                    "href"=>"doctor.php"
                ]
                ,[
                    "name"=>"찾아오시는 길",
                    "href"=>"map.php"
                ]
            ]
        ]
        ,
        [
            "name"=>"진료안내",
            "href"=>"medical.php",
            "sub"=>
            [
                [
                    "name"=>"산부인과",
                    "href"=>"medical.php"
                ]
                ,[
                    "name"=>"감성분만",
                    "href"=>"delivery.php"
                ]
            ]
        ]
        ,
        [
            "name"=>"난임센터",
            "href"=>"infertility.php",
            "sub"=>
            [
                [
                    "name"=>"난임이란",
                    "href"=>"infertility.php"
                ]
                ,[
                    "name"=>"임신성공 사례",
                    "href"=>"#"
                ]
            ]
        ]
        ,
        [
            "name"=>"상담/예약",
            "href"=>"consult.php",
            "sub"=>
            [
                [
                    "name"=>"온라인 상담",
                    "href"=>"consult.php"
                ]
                ,[
                    "name"=>"온라인 예약",
                    "href"=>"reserve.php"
                ]
            ]
        ]
        ,
        [
            "name"=>"증명서 발급",
            "href"=>"certificate.php",
            "sub"=>
            [
                [
                    "name"=>"증명서 발급",
                    "href"=>"certificate.php"
                ]
                ,[
                    "name"=>"비급여항목 안내",
                    "href"=>"non-reimbursement.php"
                ]
            ]
        ]
        ,
        [
            "name"=>"고객서비스",
            "href"=>"#",
            "sub"=>
            [
                [
                    "name"=>"병원소식",
                    "href"=>"#"
                ]
                ,[
                    "name"=>"보도자료",
                    "href"=>"#"
                ]
                ,[
                    "name"=>"QnA",
                    "href"=>"#"
                ]
                ,[
                    "name"=>"병원이용후기",
                    "href"=>"#"
                ]
            ]
        ]
    ];

    $flag=false;
    foreach ($menu as $menu_item) {
        if($flag) break;
        foreach ($menu_item["sub"] as $sub_item){
            if($pageName==$sub_item["href"]){
                $current_sub_menu_name=$sub_item["name"];//현재 페이지 이름 저장;
                $sub_menu=$menu_item["sub"];//현재 페이지 그룹 저장
                $current_menu_name = $menu_item["name"]; //현재 페이지그룹의 이름 저장
                $flag=true;
                break;
            }
        }
    }

?>

<div class="snb">
    <div class="snb__wrap">
        <ul class="snb__container">
            <li class="snb__home"><a href="#"><i class="fas fa-home"></i></a></li>
            <li class="snb__depth1"><a href="#">
            <?php echo $current_menu_name; ?>
             <i class="fas fa-angle-down"></i></a>
                <ul class="snb__dropdown snb__depth1-menu">
                    <?php
                        // dpeth1 메뉴 출력
                        foreach ($menu as $menu_item) {
                            echo "<li><a ";
                            
                            if($menu_item["name"]==$current_menu_name){
                                echo "class='snb__selected' ";
                            }
                            
                            echo "href='", $menu_item["href"], "'>", $menu_item['name'], "</a></li>";
                        }
                        ?>
                </ul>
            </li>
            
            <li class="snb__depth2"><a href="s2_2delivery.html"><strong>
            <?php 
                echo $current_sub_menu_name;
            ?>
            </strong><i class="fas fa-chevron-circle-down"></i></a>
                <ul class="snb__dropdown snb__depth2-menu">
                    <?php 
                        // dpeth2 메뉴 출력
                        foreach ($sub_menu as $sub_menu_item) {
                            echo "<li><a ";

                            if($sub_menu_item["name"]==$current_sub_menu_name){
                                echo "class='snb__selected' ";
                            }

                            echo "href='", $sub_menu_item["href"], "'>", $sub_menu_item['name'], "</a></li>";
                        }
                    ?>

                </ul>
            </li>
        </ul>
    </div>
</div>