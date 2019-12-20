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

<img src="<?php echo esc_url( get_theme_file_uri('images/main-img3.jpg') ); ?>" alt="">
<section class="section">
    <p class="main_p">
        品名を選択するとご希望の苗が一覧表示されます。<br>
        ご注文はページ下記の注文票をダウンロードください
    </p>
    <div class="dgloup">
        <p class="list_title">春野菜</p>
        <select name="spring" class="d-list" id="st_haru" onchange="entryChange();">
            <option value="0" selected>選択してください</option>
            <option value="nasu">なす</option>
        </select>
        <p class="list_title">秋野菜</p>
        <select name="autumn" class="d-list" id="st_aki" onchange="entryChange();">
            <option value="0" selected>選択してください</option>
            <option value="daikon">大根</option>
        </select>
    </div>
</section>
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
	        <div class="col-lg-3 col-md-3 col-sm-12">
	        <img src="<?php echo esc_url( get_theme_file_uri('images/nath_03.jpg') ); ?>" alt="">
			</div>
	        <div class="col-lg-9 col-md-9 col-sm-12 px-5">
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
	        <div class="col-lg-3 col-md-3 col-sm-12">
            <img src="<?php echo esc_url( get_theme_file_uri('images/nath_03.jpg') ); ?>" alt="">
			</div>
	        <div class="col-lg-9 col-md-9 col-sm-12 px-5">
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

<section class="section">
    <p class="main_p">ご注文は下記注文票をダウンロードしてご希望の品目を記入し、<br>ＦＡＸか当ハウスまで直接お持ちください。</p>
    <a class="d_g_pdf" href="#">2019年度苗注文票のダウンロードはこちら<i class="far fa-file-pdf"></i></a>
</section>

<div class="container">
    <div class="row">
    </div>
</div>

<?php get_footer(); ?>
