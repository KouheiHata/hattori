<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0,initial-scale=1.0" />
<title><?php wp_title('',true); ?><?php if(wp_title('',false)) { ?> | <?php } ?><?php bloginfo('name'); ?></title>
<meta name="description" content="福井県越前市にある各種野菜の苗や花の苗を扱っています">
<meta name="keywords" content="福井県, fukui, 越前市, echizen, 野菜苗, 花苗, 食用菊, 苗のはっとり">

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
           <div class="col-lg-4 col-md-4 col-sm-12 order-lg-2 order-md-2">
                <img class="header-logo" src="<?php echo esc_url( get_theme_file_uri('images/logo.png') ); ?>" alt="苗のはっとり｜ロゴ">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 order-lg-1 order-md-1">
                <p class="header_p">〒915-0056</p>
                <p class="header_p">越前市向新保町32-32</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 order-lg-3 order-md-3">
                <p class="header_p"><i class="fas fa-fax"></i>0778-22-1987</p>
                <p class="header_p"><i class="fas fa-mobile-alt"></i>090-8265-1135</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 px-0 order-sm-4">
		        <div class="nav-wrapper">
		            <nav id="global-nav">
		                <ul style="text-align: center;">
		                    <li class="nav-item" id="nav-separator"><img src="<?php echo get_theme_file_uri('images/menu_line_vertical.png'); ?>"></li>
		                    <li class="nav-item"><a href="/"><img src="<?php echo get_theme_file_uri('images/menu_ico_home.png'); ?>" alt="HOME">
		                            <p>HOME</p>
		                        </a></li>
		                    <li class="nav-item" id="nav-separator"><img src="<?php echo get_theme_file_uri('images/menu_line_vertical.png'); ?>"></li>
		                    <li class="nav-item"><a href="/about"><img src="<?php echo get_theme_file_uri('images/menu_ico_shoukai.png'); ?>" alt="HOME">
		                            <p>紹介記事</p>
		                        </a></li>
		                    <li class="nav-item" id="nav-separator"><img src="<?php echo get_theme_file_uri('images/menu_line_vertical.png'); ?>"></li>
		                    <li class="nav-item"><a href="/yasainae"><img src="<?php echo get_theme_file_uri('images/menu_ico_nae.png'); ?>" alt="HOME">
		                            <p>野菜苗</p>
		                        </a></li>
		                    <li class="nav-item" id="nav-separator"><img src="<?php echo get_theme_file_uri('images/menu_line_vertical.png'); ?>"></li>
		                    <li class="nav-item"><a href="/hananae"><img src="<?php echo get_theme_file_uri('images/menu_ico_hana.png'); ?>" alt="HOME">
		                            <p>花苗</p>
		                        </a></li>
		                    <li class="nav-item" id="nav-separator"><img src="<?php echo get_theme_file_uri('images/menu_line_vertical.png'); ?>"></li>
		                    <li class="nav-item"><a href="/yasai-2"><img src="<?php echo get_theme_file_uri('images/menu_ico_yasai.png'); ?>" alt="HOME">
		                            <p>野菜</p>
		                        </a></li>
		                    <li class="nav-item" id="nav-separator"><img src="<?php echo get_theme_file_uri('images/menu_line_vertical.png'); ?>"></li>
		                    <li class="nav-item"><a href="/daisy"><img src="<?php echo get_theme_file_uri('images/menu_ico_kiku.png'); ?>" alt="HOME">
		                            <p>食用菊</p>
		                        </a></li>
		                    <li class="nav-item" id="nav-separator"><img src="<?php echo get_theme_file_uri('images/menu_line_vertical.png'); ?>"></li>
		                    <li class="nav-item"><a href="#"><img src="<?php echo get_theme_file_uri('images/menu_ico_contact.png'); ?>" alt="HOME">
		                            <p>お問い合わせ</p>
		                        </a></li>
		                    <li class="nav-item" id="nav-separator"><img src="<?php echo get_theme_file_uri('images/menu_line_vertical.png'); ?>"></li>
		                </ul>
		            </nav>
		        </div>
            </div>		<!-- col-lg-12 -->
        </div>			<!-- row -->
    </div>
</header>
