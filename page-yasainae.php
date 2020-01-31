<?php 
/*
Template Name: yasainae
*/
?>


<?php get_header(); ?>

<script type="text/javascript">
function entryChange(){
	if(document.getElementById('st_haru')){
		id = document.getElementById('st_haru').value;

		if(id != '0'){
			document.getElementById('haruyasai').style.display = "";
			document.getElementById(id).style.display = "";
		}else if(id == '0'){
			document.getElementById('haruyasai').style.display = "none";
			document.getElementById('nasu').style.display = "none";
		}
	}
	if(document.getElementById('st_aki')){
		id = document.getElementById('st_aki').value;

		if(id != '0'){
			document.getElementById('akiyasai').style.display = "";
			document.getElementById(id).style.display = "";
		}else if(id == '0'){
			document.getElementById('akiyasai').style.display = "none";
			document.getElementById('daikon').style.display = "none";
		}
	}
}
window.onload = entryChange;
</script>

<img src="<?php echo esc_url( get_theme_file_uri('images/main-img3.jpg') ); ?>" alt="季節ごとの取り扱い野菜苗を紹介します！">

<div class="container">
    <div class="row">
<section class="section mt-5">
    <p class="main_p">
        品名を選択するとご希望の苗が一覧表示されます。<br>
        ご注文はページ下記の注文票をダウンロードください
    </p>
	<div style="margin: 0 auto;">
	<div class="yasainae_select">
        <div class="list_title">春野菜</div>
        <select name="spring" class="d-list" id="st_haru" onchange="entryChange();">
            <option value="0" selected>選択してください</option>
            <option value="nasu">なす</option>
        </select>
	</div>
	<div class="yasainae_select">
        <div class="list_title">秋野菜</div>
        <select name="autumn" class="d-list" id="st_aki" onchange="entryChange();">
            <option value="0" selected>選択してください</option>
            <option value="daikon">大根</option>
        </select>
	</div>
	</div> <!-- margin:0 auto -->
</section>
    </div> <!-- row -->
</div>     <!-- container -->

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md12 col-sm-12">
            <h4 class="section_h" id="haruyasai">春野菜苗</h4>
        </div>
	</div>
		<div id="nasu">
		    <div class="row">
	        <div class="col-lg-12 col-md12 col-sm-12">
	            <h2 class="category_h">なす（ナス科）</h2>
	        </div>
	        <div class="col-lg-4 col-md-4 col-sm-12 pb-5" style="text-align: center;">
	        <img src="<?php echo esc_url( get_theme_file_uri('images/nath_03.jpg') ); ?>" alt="なす">
			</div>
	        <div class="col-lg-8 col-md-8 col-sm-12">
	            <table class="table b-table">
	               <thead><tr>
	                   <th class="b-cell">品名</th>
	                   <th class="b-cell">自根</th>
	                   <th class="b-cell">接木</th>
	               </tr></thead>
	                <tbody>
	                    <tr>
	                        <td class="b-cell">千両２号長茄子</td>
	                        <td class="b-cell text-right">　　　　円</td>
	                        <td class="b-cell text-right">　円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">早生大丸茄子</td>
	                        <td class="b-cell text-right">　円</td>
	                        <td class="b-cell text-right">　円</td>
	                    </tr>
	                </tbody>
	            </table>
	        </div>
			</div>	<!-- row -->
		</div>		<!-- nasu -->


    <div class="row">
        <div class="col-lg-12 col-md12 col-sm-12">
	        <h4 class="section_h" id="akiyasai">秋野菜苗</h4>
        </div>
	</div>
		<div id="daikon">
		    <div class="row">
	        <div class="col-lg-12 col-md12 col-sm-12">
	        <h2 class="category_h">大根（アブラナ科）</h2>
	        </div>
	        <div class="col-lg-4 col-md-4 col-sm-12 pb-5" style="text-align: center;">
            <img src="<?php echo esc_url( get_theme_file_uri('images/nath_03.jpg') ); ?>" alt="大根">
			</div>
	        <div class="col-lg-8 col-md-8 col-sm-12">
            <table class="table b-table">
               <thead><tr>
                   <th class="b-cell">品名</th>
                   <th class="b-cell">自根</th>
                   <th class="b-cell">接木</th>
               </tr></thead>
                <tbody>
                    <tr>
                        <td class="b-cell">雪美人</td>
                        <td class="b-cell text-right">　　　　円</td>
                        <td class="b-cell text-right">　円</td>
                    </tr>
                    <tr>
                        <td class="b-cell">ころっ娘</td>
                        <td class="b-cell text-right">　円</td>
                        <td class="b-cell text-right">　円</td>
                    </tr>
                </tbody>
            </table>
	        </div>
			</div>	<!-- row -->
		</div>		<!-- daikon -->
</div>

<div class="container">
    <div class="row">

	<section class="section" style="margin-top: 50px;">
	    <p class="main_p">ご注文は下記注文票をダウンロードしてご希望の品目を記入し、<br>ＦＡＸか当ハウスまで直接お持ちください。</p>
	    <a class="d_g_pdf" href="#">2019年度苗注文票のダウンロードはこちら<i class="far fa-file-pdf"></i></a>
	</section>

    </div>
</div>

<?php get_footer(); ?>
