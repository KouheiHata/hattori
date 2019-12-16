<?php

/*
Template Name: フロントページ
*/
?>

<?php get_header(); ?>

<img class="main-img" src="<?php echo esc_url( get_theme_file_uri('images/main-img.jpg') ); ?>" alt="">

<div class="container-fluid top_back">
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">

		<img src="<?php echo get_theme_file_uri('images/schedule_top.png'); ?>" alt="年間スケジュール" class="pt-5 text-center" width="80%"><br />

	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

		<div style="background-color:#ffffff; width:80%; margin: 0 auto;">

		<table border="0">
		<tr><td width="250px">
			<span class="sc_tuki">３</span><span class="h1 pr-3">月</span>
		</td><td class="pl-4 pt-3 float-left lh15 sc_back2">
			<span style="color: #ed1c24;">■</span>野菜作り交流会（要予約）<br />
			3/15　10:00～
		</td></tr>
		<tr><td class="sc_back" style="background-position: 50px 0px;">
			<span class="sc_tuki">４</span><span class="h1 pr-3">月</span>
		</td><td class="pl-4 pt-3 float-left lh15 sc_back2">
			<img src="<?php echo get_theme_file_uri('images/border_sch.png'); ?>" class="sc_border_x"><br />
			<span style="color: #8cc63f;">■</span>春野菜苗の販売<br />
			4/29～5/12<br />
			<i class="far fa-file-pdf"></i><a href="#">注文票ダウンロード</a>
		</td></tr>
		<tr><td class="sc_back" style="background-position: 50px 0px;">
			<span class="sc_tuki">５</span><span class="h1 pr-3">月</span>
		</td><td class="pl-4 pt-3 float-left lh15 sc_back2">
			<img src="<?php echo get_theme_file_uri('images/border_sch.png'); ?>" class="sc_border_x"><br />
			<span style="color: #ed1c24;">■</span>野菜作り交流会（要予約）<br />
			3/15　10:00～
		</td></tr>
		<tr><td class="sc_back" style="background-position: 50px 0px;">
			<span class="sc_tuki">９</span><span class="h1 pr-3">月</span>
		</td><td class="pl-4 pt-3 float-left lh15 sc_back2">
			<img src="<?php echo get_theme_file_uri('images/border_sch.png'); ?>" class="sc_border_x"><br />
			<span style="color: #ed1c24;">■</span>野菜作り交流会（要予約）<br />
			3/15　10:00～
		</td></tr>
		<tr><td class="sc_back" style="background-position: 50px 0px;">
			<span class="sc_tuki">11</span><span class="h1 pr-3">月</span>
		</td><td class="pl-4 pt-3 float-left lh15 sc_back2">
			<img src="<?php echo get_theme_file_uri('images/border_sch.png'); ?>" class="sc_border_x"><br />
			<span style="color: #ed1c24;">■</span>野菜作り交流会（要予約）<br />
			3/15　10:00～
		</td></tr>
		<tr><td class="sc_back" style="background-position: 50px 0px;">
			<span class="sc_tuki">12</span><span class="h1 pr-3">月</span>
		</td><td class="pl-4 pt-3 float-left lh15 sc_back2">
			<img src="<?php echo get_theme_file_uri('images/border_sch.png'); ?>" class="sc_border_x"><br />
			<span style="color: #ed1c24;">■</span>野菜作り交流会（要予約）<br />
			3/15　10:00～
		</td></tr>
		</table>
	</div>

	</div> <!-- col-lg-12 -->
</div> <!-- row -->
</div> <!-- container-fluid -->

<?php get_footer(); ?>
