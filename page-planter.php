<?php 
/*
Template Name: planter
*/
?>


<?php get_header(); ?>

<img src="<?php echo esc_url( get_theme_file_uri('images/main-img8.jpg') ); ?>" alt="季節ごとの取り扱い野菜苗を紹介します！">

<div class="container">
    <div class="row">
       <h4 class="section_h" id="planter-teiki">定期契約プランターの仕組み</h4>

		<div class="col-lg-4 col-md-4 col-sm-12 pt-5 text-right">
			<img class="planter_shikumi" src="<?php echo esc_url( get_theme_file_uri('images/planter_shikumi.png') ); ?>" alt="" width="200px">
		</div>

		<div class="col-lg-8 col-md-8 col-sm-12">
			<div class="section-planter mt-5">
				<span style="font-size:24px;">&#10102;</span>&nbsp;<p class="planter_h">プランターを選ぶ</p><br />
				<div class="pl-5">プランターは大きい物から小さい物、１本植の鉢までご用意しております。用途に合わせてお好みの鉢をお選びください。</div><br />
				<br /><br />

				<span style="font-size:24px;">&#10103;</span>&nbsp;<p class="planter_h">苗、種を選ぶ</p><br />
				<div class="pl-5">２シーズンまたは３シーズンで植えたい野菜・花苗（種）を選びます。<br />
				（例：5月ペチュニア、9月マリーゴールド、12月ビオラなど）<br /></div>
				<br /><br />

				<span style="font-size:24px;">&#10104</span>&nbsp;<p class="planter_h">完了</p><br />
				<div class="pl-5">選んだ苗（種）に合った土と肥料をご用意致しますので支給のプランターにご自由にお植え下さい。<br />
				土や苗（種）の入れ替えの時は苗のはっとりハウスにお越しください。新しい土と苗（種）に交換致します。<br />
				別料金で配達・回収も行っていますのでご相談ください。</div><br />
			</div>
		</div>

		<div class="col-lg-12 col-md-12 col-sm-12 text-center pt-4">
			<h4 class="section_h" id="planter-yasai">野菜のプランター</h4>
			<img src="<?php echo esc_url( get_theme_file_uri('images/planter_yasai.jpg') ); ?>" alt="">
		</div>

		<div class="col-lg-12 col-md-12 col-sm-12 pt-4 text-center" style="margin-top: 50px;">
			<img src="<?php echo esc_url( get_theme_file_uri('images/planter_yasai_cell.png') ); ?>" alt="">
		</div>

		<div class="col-lg-12 col-md-12 col-sm-12 text-center pt-4">
			<h4 class="section_h" id="planter-hana">お花のプランター</h4>
			<img src="<?php echo esc_url( get_theme_file_uri('images/planter_hana.jpg') ); ?>" alt="">
		</div>

		<div class="col-lg-12 col-md-12 col-sm-12 pt-4 text-center" style="margin-top: 50px;">
			<img src="<?php echo esc_url( get_theme_file_uri('images/planter_hana_cell.png') ); ?>" alt="">
		</div>

    </div> <!-- row -->
</div> <!-- container -->

<div class="container">
    <div class="row">

	<section class="section" style="margin-top: 70px; margin-bottom: 50px;">
	    <p class="main_p">ご注文は下記注文票をダウンロードしてご希望の品目を記入し、<br>ＦＡＸか当ハウスまで直接お持ちください。</p>
	    <a class="d_g_pdf" href="<?php echo esc_url( get_theme_file_uri('images/2020_planter.pdf') ); ?>">プランター注文票のダウンロードはこちら<i class="far fa-file-pdf"></i></a>
	</section>

    </div>
</div>

<?php get_footer(); ?>
