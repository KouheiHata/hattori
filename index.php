<?php 
?>


<?php
get_header(); ?>

<img src="<?php echo esc_url( get_theme_file_uri('images/main-img2.jpg') ); ?>" alt="苗のはっとり｜紹介画像">

<div class="container">
    <div class="row">

        <!-- ループ開始 -->
        <?php
	$args = Array(
		'post_type' => 'about',
		'post_status' => 'publish',
		'post_per_page' => 8
	);

	$wp_query = new WP_Query($args);

	if ( $wp_query->have_posts() ) {
		while ( $wp_query->have_posts() ) {
			$wp_query->the_post(); ?>

        <!-- ループする部分 -->
<div class="col-lg-12 col-md-12 col-sm-12 p-5">
 <img class="about-note" src="<?php echo esc_url( get_theme_file_uri('images/about-note01.png') ); ?>" alt="">
  <div class="container about-wrap">
      <div class="row">
          <div class="about-img col-lg-4 col-md-12 col-sm-12">
              <?php echo the_post_thumbnail('large') ?>
          </div>
          <div class="col-lg-8 col-md-12 col-sm-12 p-3">
                 <h4 class="note_h"><?php the_title(); ?></h4>
                   <p><?php get_the_category('','/'); ?></p>
                    <div class="note-content"><?php the_content(); ?><?php the_category(); ?></div>
          </div>
      </div>
  </div>
</div>

            

        <?php
	}
}

// 投稿データのリセット
wp_reset_postdata();
 ?>
        <!-- ループ終了 -->
        </div>
</div><!-- #container -->




<?php get_footer(); ?>
