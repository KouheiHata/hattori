<?php 
/*
Template Name: contact
*/
?>


<?php get_header(); ?>
<img src="<?php echo esc_url( get_theme_file_uri('images/main-img7.jpg') ); ?>" alt="ご不明な点があればお気軽にお問い合わせ下さい">
<div class="container">
    <div class="row">
        <h4 class="section_h">お問い合わせ</h4>
        <p class="desc-p">苗のはっとりのホームページをご覧いただきありがとうございます。<br>
            ご不明な点やお気づきの点がございましたら、下記お問い合わせフォームよりご一報頂ければ幸いです。<br>
            なお、お急ぎの場合はお電話（0778-22-1987 もしくは 090-8265-1135）下さい。</p>
   
    </div>
</div>
<?php echo do_shortcode('[contact-form-7 id="115" title="苗のはっとり_お問い合せ"]'); ?>

<?php get_footer(); ?>
<!-- コンタクトフォーム下書き　＊contact_form_7へ記入する
<div class="container">
<div class="row">
<div class="contact col-lg-6 col-md-12 col-sm-12 px-5">
            <label> 住所<br />
                [text text-address]<br /></label>
            <label> お名前 (必須)*<br />
                [text* your-name]<br /></label>
            <label> 会社名<br />
                [text text-457 placeholder "株式会社〇〇〇〇"]<br /></label>
            <label> 電話番号または携帯 (必須)*<br />
                [tel* tel-48 placeholder "0000-00-0000"]<br /></label>
            <label> メールアドレス (任意) ※半角でお願いします。<br />
                [email your-email]<br /></label>
        </div>
        <div class="contact2 col-lg-6 col-md-12 col-sm-12 px-5">
            <label> お問い合わせ内容（必須）*<br />
                [textarea* your-message]<br /></label>
            [submit "送信"]
        </div>
</div>
</div>
-->
