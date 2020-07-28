<?php 
/*
Template Name: shop
*/
?>


<?php get_header(); ?>
<img src="<?php echo esc_url( get_theme_file_uri('images/main-img7.jpg') ); ?>" alt="苗の予約">
<div class="container">
    <div class="row">
        <h4 class="section_h">苗の予約</h4>
        <p class="desc-p">苗のはっとりのホームページをご覧いただきありがとうございます。<br>
            下記フォームより苗の予約販売を行っています。<br>
            ぜひご活用下さい。<br>
    </div>
</div>
<?php echo do_shortcode('[contact-form-7 id="103" title="苗のはっとり_苗の予約"]'); ?>

<script>
// 金額のカンマ付与
function addFigure(numVal) {
  // 空の場合そのまま返却
  if (numVal == ''){
    return '0';
  }
  // 整数部分を3桁カンマ区切りへ
  numVal = Number(numVal).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
  return numVal;
}

function clickBtn1() {
	document.getElementsByName("text-homemomo-j").item(0).value = document.getElementsByName("number-homemomo-j").item(0).value * document.getElementsByName("number-tanka-homemomo-j").item(0).value;
	document.getElementsByName("text-homemomo-t").item(0).value = document.getElementsByName("number-homemomo-t").item(0).value * document.getElementsByName("number-tanka-homemomo-t").item(0).value;
	document.getElementsByName("text-saturn-j").item(0).value = document.getElementsByName("number-saturn-j").item(0).value * document.getElementsByName("number-tanka-saturn-j").item(0).value;
	document.getElementsByName("text-saturn-t").item(0).value = document.getElementsByName("number-saturn-t").item(0).value * document.getElementsByName("number-tanka-saturn-t").item(0).value;
	document.getElementsByName("text-huru-j").item(0).value = document.getElementsByName("number-huru-j").item(0).value * document.getElementsByName("number-tanka-huru-j").item(0).value;
	document.getElementsByName("text-huru-t").item(0).value = document.getElementsByName("number-huru-t").item(0).value * document.getElementsByName("number-tanka-huru-t").item(0).value;
	// 合計を算出
	document.getElementsByName("text-goukei").item(0).value = Number(document.getElementsByName("text-homemomo-j").item(0).value) + Number(document.getElementsByName("text-homemomo-t").item(0).value) + Number(document.getElementsByName("text-saturn-j").item(0).value) + Number(document.getElementsByName("text-saturn-t").item(0).value) + Number(document.getElementsByName("text-huru-j").item(0).value) + Number(document.getElementsByName("text-huru-t").item(0).value);
	// 値段にカンマを付ける。
	document.getElementsByName("text-homemomo-j").item(0).value = addFigure(document.getElementsByName("text-homemomo-j").item(0).value);
	document.getElementsByName("text-homemomo-t").item(0).value = addFigure(document.getElementsByName("text-homemomo-t").item(0).value);
	document.getElementsByName("text-saturn-j").item(0).value = addFigure(document.getElementsByName("text-saturn-j").item(0).value);
	document.getElementsByName("text-saturn-t").item(0).value = addFigure(document.getElementsByName("text-saturn-t").item(0).value);
	document.getElementsByName("text-huru-j").item(0).value = addFigure(document.getElementsByName("text-huru-j").item(0).value);
	document.getElementsByName("text-huru-t").item(0).value = addFigure(document.getElementsByName("text-huru-t").item(0).value);
	document.getElementsByName("text-goukei").item(0).value = addFigure(document.getElementsByName("text-goukei").item(0).value);
}
</script>

<?php get_footer(); ?>
<!-- コンタクトフォーム下書き　＊contact_form_7へ記入する
<div class="container">
<div class="row">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<label> お名前 (必須)<br />
    [text* your-name]<br /></label>
<br />
<label> 電話番号 (必須)<br />
    [tel* your-tel]<br /></label>
<br />
<label> メールアドレス<br />
    [email your-email]<br /></label>
<br />
<label> 住所<br />
    [text* your-address]<br /></label>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
トマト<br />
</div>

<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
<td width="200px">[radio radio-homemomo default:1 "ホーム桃太郎"]
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
数量<input type="number" name="number-homemomo" value="0" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-number" min="0" aria-invalid="false" style="width: 150px;text-align: right;">
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
単価<input type="number" name="number-tanka-homemomo" value="110" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-number" min="0" aria-invalid="false" readonly="readonly" style="width: 150px;text-align: right;">
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
値段[text text-homemomo class:text-nedan "0"]
</div>

<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
[radio radio-saturn default:1 "サターン"]
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
数量<input type="number" name="number-saturn" value="0" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-number" min="0" aria-invalid="false" style="width: 150px;text-align: right;">
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
単価<input type="number" name="number-tanka-saturn" value="110" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-number" min="0" aria-invalid="false" readonly="readonly" style="width: 150px;text-align: right;">
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
値段[text text-saturn class:text-nedan "0"]
</div>

<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
[radio radio-furu default:1 "フルティカ"]
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
数量<input type="number" name="number-huru" value="0" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-number" min="0" aria-invalid="false" style="width: 150px;text-align: right;">
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
単価<input type="number" name="number-tanka-huru" value="160" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-number" min="0" aria-invalid="false" readonly="readonly" style="width: 150px;text-align: right;">
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
値段[text text-huru class:text-nedan "0"]
</div>


<br />
<button type="button" name="sum" class="wpcf7-form-sum" onclick="clickBtn1()">値段集計</button>
　
<input type="submit" value="送信" class="wpcf7-form-control wpcf7-submit" onclick="clickBtn1()" />

</div>
</div>
-->
