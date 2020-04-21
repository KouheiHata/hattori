<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0,initial-scale=1.0" />
<title><?php wp_title('',true); ?><?php if(wp_title('',false)) { ?> | <?php } ?><?php bloginfo('name'); ?></title>
<meta name="description" content="福井県越前市にある各種野菜の苗や花の苗を扱っています">
<meta name="keywords" content="福井県, fukui, 越前市, echizen, 野菜苗, 花苗,野菜, 食用菊, 苗のはっとり">

<!-- Bootstrap4 -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<!-- CSS -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet">
<!-- Responsive CSS -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/responsive.css" rel="stylesheet">
<!-- Noto Sans Web font -->
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
<!-- Yamm3 -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/yamm.css" rel="stylesheet">
<!-- print CSS -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/print.css" rel="stylesheet" media="print">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<meta name="google-site-verification" content="pfS2MJ3FKZwjaewn5tDTRd3EeSgwWEDA033TYvl6a70" />

<?php
wp_deregister_script('jquery');
?>

<?php wp_head(); ?>

</head>
<body <?php body_class (); ?>>

<header class="header">
    <div class="container-fluid">
	    <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
				<table border="0" class="header_table">
				<tr><td><div class="header_td">〒915-0056<br />
                越前市向新保町32-32</div></td></tr>
				</table>

				<table border="0" class="header_table2">
				<tr><td><div class="header_td"><a href="tel:09082651135"><i class="fas fa-mobile-alt"></i>090-8265-1135</a><br />
                <a href="https://www.facebook.com/%E8%8B%97%E3%81%AE%E3%81%AF%E3%81%A3%E3%81%A8%E3%82%8A-101361468129762/"><i class="fab fa-facebook-square pl-1"></i>&nbsp;公式&nbsp;facebook</a></div></td></tr>
				</table>

                <img class="header-logo" src="<?php echo esc_url( get_theme_file_uri('images/logo.png') ); ?>" alt="苗のはっとり｜ロゴ">

				<div style="text-align: center;">
                <img class="header-logo_mobile" src="<?php echo esc_url( get_theme_file_uri('images/logo_mobile.png') ); ?>" alt="苗のはっとり｜ロゴ">
				</div>

                <p class="header_p"><a href="tel:09082651135"><i class="fas fa-mobile-alt"></i>090-8265-1135</p></a><br />
                <p class="header_p"><a href="https://www.facebook.com/%E8%8B%97%E3%81%AE%E3%81%AF%E3%81%A3%E3%81%A8%E3%82%8A-101361468129762/"><i class="fab fa-facebook-square pl-1"></i>&nbsp;公式&nbsp;facebook</a></p>

				<div class="navi-btn" id="navi-btn">
				  <span></span>
				  <span></span>
				  <span></span>
				  <p>MENU</p>
				</div>
				<div class="navi-menu" id="navi-menu">
					<li><a href="/"><img src="<?php echo esc_url( get_theme_file_uri('images/icon_home.png') ); ?>" width="34px">&nbsp;HOME</a></li>
					<li><a href="/about-2/"><img src="<?php echo esc_url( get_theme_file_uri('images/icon_pen.png') ); ?>" width="34px">&nbsp;紹介記事</a></li>
					<li><a href="/yasainae/"><img src="<?php echo esc_url( get_theme_file_uri('images/icon_yasainae.png') ); ?>" width="34px">&nbsp;野菜苗</a></li>
					<li><a href="/hananae/"><img src="<?php echo esc_url( get_theme_file_uri('images/icon_hananae.png') ); ?>" width="34px">&nbsp;花苗</a></li>
					<li><a href="//"><img src="<?php echo esc_url( get_theme_file_uri('images/icon_planter.png') ); ?>" width="34px">&nbsp;プランター</a></li>
					<li><a href="/yasai/"><img src="<?php echo esc_url( get_theme_file_uri('images/icon_yasai.png') ); ?>" width="34px">&nbsp;野菜</a></li>
					<li><a href="/daisy/"><img src="<?php echo esc_url( get_theme_file_uri('images/icon_kiku.png') ); ?>" width="34px">&nbsp;食用菊</a></li>
					<li><a href="/contact/"><img src="<?php echo esc_url( get_theme_file_uri('images/icon_contact.png') ); ?>" width="34px">&nbsp;お問い合わせ</a></li>
				</div>

            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 px-0 order-sm-4">
		        <div class="nav-wrapper">
		            <nav id="global-nav">
		                <ul class="text-center">
		                    <li class="nav-item text-center"><a href="/"><img src="<?php echo get_theme_file_uri('images/menu_ico_home.png'); ?>" alt="HOME">
		                            <p>HOME</p>
		                        </a></li>
		                    <li class="nav-item text-center"><a href="/about-2/"><img src="<?php echo get_theme_file_uri('images/menu_ico_shoukai.png'); ?>" alt="紹介記事">
		                            <p>紹介記事</p>
		                        </a></li>
		                    <li class="nav-item text-center"><a href="/yasainae/"><img src="<?php echo get_theme_file_uri('images/menu_ico_nae.png'); ?>" alt="野菜苗">
		                            <p>野菜苗</p>
		                        </a></li>
		                    <li class="nav-item text-center"><a href="/hananae/"><img src="<?php echo get_theme_file_uri('images/menu_ico_hana.png'); ?>" alt="花苗">
		                            <p>花苗</p>
		                        </a></li>
		                    <li class="nav-item text-center"><a href="/planter/"><img src="<?php echo get_theme_file_uri('images/menu_ico_planter.png'); ?>" alt="プランター">
		                            <p>プランター</p>
		                        </a></li>
		                    <li class="nav-item text-center"><a href="/yasai/"><img src="<?php echo get_theme_file_uri('images/menu_ico_yasai.png'); ?>" alt="野菜">
		                            <p>野菜</p>
		                        </a></li>
		                    <li class="nav-item text-center"><a href="/daisy/"><img src="<?php echo get_theme_file_uri('images/menu_ico_kiku.png'); ?>" alt="食用菊">
		                            <p>食用菊</p>
		                        </a></li>
		                    <li class="nav-item text-center"><a href="/contact/"><img src="<?php echo get_theme_file_uri('images/menu_ico_contact.png'); ?>" alt="お問い合わせ">
		                            <p>お問い合わせ</p>
		                        </a></li>
		                </ul>
		            </nav>
		        </div>
            </div>		<!-- col-lg-12 -->
        </div>			<!-- row -->
</header>
