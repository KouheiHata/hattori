<?php 
/*
Template Name: yasainae
*/
?>


<?php get_header(); ?>
<img src="<?php echo esc_url( get_theme_file_uri('images/main-img3.jpg') ); ?>" alt="">
<section class="section">
    <p class="main_p">
        品名を選択するとご希望の苗が一覧表示されます。<br>
        ご注文はページ下記の注文票をダウンロードください
    </p>
    <div class="dgloup">
    <p class="list_title">春野菜</p>
    <select name="spring" class="d-list" id="">
        <option value="なす">なす</option>
    </select>
    <p class="list_title">秋野菜</p>
    <select name="autumn" class="d-list" id="">
        <option value="選択してください" selected>選択してください</option>
    </select>
    </div>
</section>

<h4 class="section_h">春野菜苗</h4>
<h2 class="category_h">なす（ナス科）</h2>

<section class="section">
    <p class="main_p">ご注文は下記注文票をダウンロードしてご希望の品目を記入し、<br>ＦＡＸか当ハウスまで直接お持ちください。</p>
</section>

<div class="container">
    <div class="row">
    </div>
</div>

<?php get_footer(); ?>
