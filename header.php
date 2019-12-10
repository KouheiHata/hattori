<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0,initial-scale=1.0" />
<title><?php wp_title('',true); ?><?php if(wp_title('',false)) { ?> | <?php } ?><?php bloginfo('name'); ?></title>

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
            <div class="col-lg-12"></div>
            <nav class="order-sm-4">
                <ul class="nav-ul">
                    <li ><a class="n_link" href=""><img class="text-center" src="<?php echo esc_url( get_theme_file_uri('images/home.png') ); ?>" alt=""><br>HOME</a></li>
                    <li><a class="n_link" href="n_link"><img src="<?php echo esc_url( get_theme_file_uri('images/pancil.png') ); ?>" alt=""><br>紹介記事</a></li>
                    <li><a class="n_link" href=""><img src="<?php echo esc_url( get_theme_file_uri('images/sprout.png') ); ?>" alt=""><br>野菜苗</a></li>
                    <li><a class="n_link" href=""><img src="<?php echo esc_url( get_theme_file_uri('images/flower.png') ); ?>" alt=""><br>花苗</a></li>
                    <li><a class="n_link" href=""><img src="<?php echo esc_url( get_theme_file_uri('images/eggplant.png') ); ?>" alt=""><br>野菜</a></li>
                    <li><a class="n_link" href=""><img src="<?php echo esc_url( get_theme_file_uri('images/kiku_11.png') ); ?>" alt=""><br>食用菊</a></li>
                    <li><a class="n_link" href=""><img src="<?php echo esc_url( get_theme_file_uri('images/letter.png') ); ?>" alt=""><br>お問い合わせ</a></li>
                </ul>
            </nav>
            <div class="col-lg-12 col-md-12 col-sm-12 order-lg-5 order-md-5 order-sm-5">
                <img class="main-img" src="<?php echo esc_url( get_theme_file_uri('images/main-img.jpg') ); ?>" alt="">
            </div>
        </div>
    </div>
</header>
