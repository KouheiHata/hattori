<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0,initial-scale=1.0" />
<title><?php wp_title('',true); ?><?php if(wp_title('',false)) { ?> | <?php } ?><?php bloginfo('name'); ?></title>
<meta name="description" content="福井県越前市にある各種野菜の苗や花の苗を扱っています">
<meta name="keywords" content="福井県, fukui, 越前市, echizen, 野菜苗, 花苗,野菜, 食用菊, 苗のはっとり">

<!-- favicon -->
<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
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

<meta name="google-site-verification" content="g0DNH0tjEgdvbc-fpGr3uEcUNBZ7wwV0nmWeLebtcz0" />

<?php
wp_deregister_script('jquery');
?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-171493040-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-171493040-1');
</script>

<?php wp_head(); ?>

</head>
<body <?php body_class (); ?>>

<header class="header">
    <div class="container-fluid">
	    <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 top-height">
				<table border="0" class="header_table">
				<tr><td><div class="header_td">〒915-0056<br />
                越前市向新保町32-32</div></td></tr>
				</table>

				<table border="0" class="header_table2">
				<tr><td><div class="header_td"><a href="tel:09082651135"><i class="fas fa-mobile-alt"></i><span class="mobile_text">090-8265-1135</span></a><br class="tel_br" />
                <a href="https://www.facebook.com/%E8%8B%97%E3%81%AE%E3%81%AF%E3%81%A3%E3%81%A8%E3%82%8A-101361468129762/"><i class="fab fa-facebook-square pl-1"></i><span class="mobile_text">&nbsp;公式&nbsp;facebook</span></a></div></td></tr>
				</table>

                <img class="header-logo" src="<?php echo esc_url( get_theme_file_uri('images/logo.png') ); ?>" alt="苗のはっとり｜ロゴ">

				<div class="header_pt">
                <p class="header_p"><a href="tel:09082651135"><i class="fas fa-mobile-alt"></i>090-8265-1135</p></a><br />
                <p class="header_p"><a href="https://www.facebook.com/%E8%8B%97%E3%81%AE%E3%81%AF%E3%81%A3%E3%81%A8%E3%82%8A-101361468129762/"><i class="fab fa-facebook-square pl-1"></i>&nbsp;公式&nbsp;facebook</a></p>
				</div>

				<div class="navi-btn" id="navi-btn">
				  <span class="h-line-1 hamburger_line"></span>
				  <span class="h-line-2 hamburger_line"></span>
				  <span class="h-line-3 hamburger_line"></span>
				  <p>MENU</p>
				</div>
				<div class="navi-menu" id="navi-menu">
					<li><a href="/"><img src="<?php echo esc_url( get_theme_file_uri('images/icon_home.png') ); ?>" width="34px">&nbsp;HOME</a></li>
					<li><a href="/about-2/"><img src="<?php echo esc_url( get_theme_file_uri('images/icon_pen.png') ); ?>" width="34px">&nbsp;紹介記事</a></li>
					<li><a href="/yasainae/"><img src="<?php echo esc_url( get_theme_file_uri('images/icon_yasainae.png') ); ?>" width="34px">&nbsp;野菜苗</a></li>
					<li><a href="/hananae/"><img src="<?php echo esc_url( get_theme_file_uri('images/icon_hananae.png') ); ?>" width="34px">&nbsp;花苗</a></li>
					<li><a href="/planter/"><img src="<?php echo esc_url( get_theme_file_uri('images/icon_planter.png') ); ?>" width="34px">&nbsp;プランター</a></li>
					<li><a href="/yasai/"><img src="<?php echo esc_url( get_theme_file_uri('images/icon_yasai.png') ); ?>" width="34px">&nbsp;野菜</a></li>
					<li><a href="/daisy/"><img src="<?php echo esc_url( get_theme_file_uri('images/icon_kiku.png') ); ?>" width="34px">&nbsp;食用菊</a></li>
					<li><a href="/gaiyou/"><img src="<?php echo esc_url( get_theme_file_uri('images/icon_gaiyou.png') ); ?>" width="34px" class="icon_gaiyou">&nbsp;私達について</a></li>
					<li><a href="/contact/"><img src="<?php echo esc_url( get_theme_file_uri('images/icon_contact.png') ); ?>" width="34px">&nbsp;お問い合わせ</a></li>
				</div>

			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 px-0 order-sm-4">
				<div class="nav-wrapper">
					<a href="/"><img src="<?php echo get_theme_file_uri('images/header_menu_home.png'); ?>" alt="HOME" onmouseover="this.src='<?php echo get_theme_file_uri('images/header_menu_home-h.png'); ?>'" onmouseout="this.src='<?php echo get_theme_file_uri('images/header_menu_home.png'); ?>'"></a><a href="/about-2/"><img src="<?php echo get_theme_file_uri('images/header_menu_shoukai.png'); ?>" alt="紹介記事" onmouseover="this.src='<?php echo get_theme_file_uri('images/header_menu_shoukai-h.png'); ?>'" onmouseout="this.src='<?php echo get_theme_file_uri('images/header_menu_shoukai.png'); ?>'"></a><a href="/yasainae/"><img src="<?php echo get_theme_file_uri('images/header_menu_yasainae.png'); ?>" alt="野菜苗" onmouseover="this.src='<?php echo get_theme_file_uri('images/header_menu_yasainae-h.png'); ?>'" onmouseout="this.src='<?php echo get_theme_file_uri('images/header_menu_yasainae.png'); ?>'"></a><a href="/hananae/"><img src="<?php echo get_theme_file_uri('images/header_menu_hana.png'); ?>" alt="花苗" onmouseover="this.src='<?php echo get_theme_file_uri('images/header_menu_hana-h.png'); ?>'" onmouseout="this.src='<?php echo get_theme_file_uri('images/header_menu_hana.png'); ?>'"></a><a href="/planter/"><img src="<?php echo get_theme_file_uri('images/header_menu_planter.png'); ?>" alt="プランター" onmouseover="this.src='<?php echo get_theme_file_uri('images/header_menu_planter-h.png'); ?>'" onmouseout="this.src='<?php echo get_theme_file_uri('images/header_menu_planter.png'); ?>'"></a><a href="/yasai/"><img src="<?php echo get_theme_file_uri('images/header_menu_yasai.png'); ?>" alt="野菜" onmouseover="this.src='<?php echo get_theme_file_uri('images/header_menu_yasai-h.png'); ?>'" onmouseout="this.src='<?php echo get_theme_file_uri('images/header_menu_yasai.png'); ?>'"></a><a href="/daisy/"><img src="<?php echo get_theme_file_uri('images/header_menu_kiku.png'); ?>" alt="食用菊" onmouseover="this.src='<?php echo get_theme_file_uri('images/header_menu_kiku-h.png'); ?>'" onmouseout="this.src='<?php echo get_theme_file_uri('images/header_menu_kiku.png'); ?>'"></a><a href="/gaiyou/"><img src="<?php echo get_theme_file_uri('images/header_menu_watashitachi.png'); ?>" alt="私達について" onmouseover="this.src='<?php echo get_theme_file_uri('images/header_menu_watashitachi-h.png'); ?>'" onmouseout="this.src='<?php echo get_theme_file_uri('images/header_menu_watashitachi.png'); ?>'"></a><a href="/contact/"><img src="<?php echo get_theme_file_uri('images/header_menu_otoiawase.png'); ?>" alt="お問い合わせ" onmouseover="this.src='<?php echo get_theme_file_uri('images/header_menu_otoiawase-h.png'); ?>'" onmouseout="this.src='<?php echo get_theme_file_uri('images/header_menu_otoiawase.png'); ?>'"></a>
				</div>
			</div>		<!-- col-lg-12 -->
		</div>			<!-- row -->
</header>
