<?php 
/*
Template Name: yasai
*/
?>


<?php get_header(); ?>
<div class="container-fluid">
    <div class="row">
        <h4 class="section_h">直売先（お取り置きも可能です）</h4>
        <div class="card-col col-lg-4 col-md-4 col-sm-4">
            <h5 class="card-title">コープたけふ　みどり館</h5>
            <p class="card-p">〒915-0092</p>
            <p class="card-p">福井県越前市塚町17-1</p>
            <p class="card-p"><i class="fas fa-phone"></i>0778-24-1717</p>
            <iframe class="gmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3231.2429459668106!2d136.18834431526545!3d35.91655298014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff8ae8f6b9e295f%3A0x4df8bfe5cd744fb1!2z44Kz44O844OX44Gf44GR44G1IOOBv-OBqeOCiumkqA!5e0!3m2!1sja!2sjp!4v1576300032382!5m2!1sja!2sjp" width="260px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <div class="card-col col-lg-4 col-md-4 col-sm-4">
            <h5 class="card-title">コープたけふ　平出店</h5>
            <p class="card-p">〒915-0803</p>
            <p class="card-p">福井県越前市平出２丁目1-10</p>
            <p class="card-p"><i class="fas fa-phone"></i>0778-23-8781</p>
            <iframe class="gmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3231.5157110170016!2d136.160230315265!3d35.90987498014166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff8adcd36c8bf27%3A0x5b4f908317b37d89!2z44Kz44O844OX44Gf44GR44G1IOW5s-WHuuW6lw!5e0!3m2!1sja!2sjp!4v1576455497787!5m2!1sja!2sjp" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <div class="card-col col-lg-4 col-md-4 col-sm-4">
            <h5 class="card-title">百姓の館</h5>
            <p class="card-p">〒915-0841</p>
            <p class="card-p">福井県越前市文京１丁目5-20</p>
            <p class="card-p"><i class="fas fa-phone"></i>0778-23-3511</p>
            <iframe class="gmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3232.2550622198405!2d136.15819831461175!3d35.89176832600518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff8ac5d7588c8a7%3A0xfe1659a2275e2828!2z55m-5aeT44Gu6aSo5Y2X5bqX!5e0!3m2!1sja!2sjp!4v1576455835310!5m2!1sja!2sjp" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <div class="col-12"><h4 class="section_h">今月の取り扱い野菜</h4></div>
        <!-- ループ開始 -->
        <?php
$temp = $wp_query;
$wp_query = null;
$wp_query = new WP_Query();
$wp_query->query('post_type=yasai' . '&paged=' . $paged . '&posts_per_page=8');
//posts_per_pageは表示する記事数
?>

<?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

<!-- ループする部分 -->
<div class="container">
    <div class="row">
        <div class="card-col col-lg-4 col-md-4 col-sm-4">
<div><?php the_content(); ?></div>
<h5 class="card-title"><?php the_title(); ?></h5>
</div>
    </div>
</div>
<?php endwhile; ?>

<!-- ページ送り -->

<?php else : ?>

<!-- 記事がなかった時 -->

<?php endif; ?>
        <!-- ループ終了 -->
        </div>
    </div>
</div>



<?php get_footer(); ?>
