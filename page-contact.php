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
<?php echo do_shortcode('[contact-form-7 id="2178" title="コンタクトフォーム 1"]'); ?>


<?php get_footer(); ?>
<!-- コンタクトフォーム下書き　＊contact_form_7へ記入する
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <label> お名前 (必須)
                [text* your-name] </label>
            <label> 会社名
                [text text-57 placeholder "株式会社〇〇〇〇"]</label>
            <label> メールアドレス (必須)
                [email* your-email] </label>
            <label> 電話番号
                [tel tel-661 placeholder "0000-00-0000"]</label>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <label> お問い合わせ内容
                [textarea your-message] </label>
            *の付いた項目は必須です。
            [submit "送信"]
        </div>
    </div>
</div>
-->
