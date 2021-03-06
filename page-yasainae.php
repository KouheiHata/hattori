<?php 
/*
Template Name: yasainae
*/
?>


<?php get_header(); ?>

<script type="text/javascript">
function entryClear(){
	document.getElementById('haruyasai').style.display = "none";
	document.getElementById('akiyasai').style.display = "none";
	document.getElementById('nasu').style.display = "none";
	document.getElementById('tomato').style.display = "none";
	document.getElementById('piman').style.display = "none";
	document.getElementById('kyuri').style.display = "none";
	document.getElementById('uri').style.display = "none";
	document.getElementById('suika').style.display = "none";
	document.getElementById('tukeuri').style.display = "none";
	document.getElementById('zucchini').style.display = "none";
	document.getElementById('tougan').style.display = "none";
	document.getElementById('kabocha').style.display = "none";
	// 秋野菜
	document.getElementById('burokko').style.display = "none";
	document.getElementById('kariflower').style.display = "none";
	document.getElementById('kyabetu').style.display = "none";
	document.getElementById('hakusai').style.display = "none";
	document.getElementById('tamaretasu').style.display = "none";
	document.getElementById('ri-furetasu').style.display = "none";
	document.getElementById('tamanegi').style.display = "none";
	document.getElementById('harukyabetu').style.display = "none";
}

function entryChangeHaru(){
	if(document.getElementById('st_haru')){
		id = document.getElementById('st_haru').value;

		if(id != '0'){
			entryClear();
			document.getElementById('haruyasai').style.display = "";
			document.getElementById(id).style.display = "";
		}else if(id == '0'){
			entryClear();
		}
	}
}

function entryChangeAki(){
	if(document.getElementById('st_aki')){
		id = document.getElementById('st_aki').value;

		if(id != '0'){
			entryClear();
			document.getElementById('akiyasai').style.display = "";
			document.getElementById(id).style.display = "";
		}else if(id == '0'){
			entryClear();
		}
	}
}

window.onload = entryClear;
</script>

<img src="<?php echo esc_url( get_theme_file_uri('images/main-img3.jpg') ); ?>" alt="季節ごとの取り扱い野菜苗を紹介します！">

<div class="container">
    <div class="row">
<section class="section-yasainae mt-5">
    <p class="main_p">
        品名を選択するとご希望の苗が一覧表示されます。<br>
        ご注文はページ下記の注文票をダウンロードください
    </p>
	<div style="margin: 0 auto;">
	<div class="yasainae_select">
        <div class="list_title">春野菜</div>
        <select name="spring" class="d-list" id="st_haru" onchange="entryChangeHaru();">
            <option value="0" selected>選択してください</option>
            <option value="nasu">なす</option>
            <option value="tomato">トマト</option>
            <option value="piman">ピーマン</option>
            <option value="kyuri">きゅうり</option>
            <option value="uri">甘うり・メロン</option>
            <option value="suika">すいか</option>
            <option value="tukeuri">漬物うり</option>
            <option value="zucchini">ズッキーニ</option>
            <option value="tougan">とうがん</option>
            <option value="kabocha">かぼちゃ</option>
        </select>
	</div>
	<div class="yasainae_select">
        <div class="list_title">秋野菜</div>
        <select name="autumn" class="d-list" id="st_aki" onchange="entryChangeAki();">
            <option value="0" selected>選択してください</option>
            <option value="burokko">ブロッコリー</option>
            <option value="kariflower">カリフラワー</option>
            <option value="kyabetu">キャベツ</option>
            <option value="hakusai">白菜</option>
            <option value="tamaretasu">玉レタス</option>
            <option value="ri-furetasu">リーフレタス</option>
            <option value="tamanegi">玉ねぎ苗</option>
            <option value="harukyabetu">春キャベツ</option>
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
	        <img src="<?php echo esc_url( get_theme_file_uri('images/yasai_nasu.png') ); ?>" width="240px" alt="なす">
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
	                        <td class="b-cell">千両２号長なす</td>
	                        <td class="b-cell text-right">１１０円</td>
	                        <td class="b-cell text-right">２２０円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">早生大丸なす</td>
	                        <td class="b-cell text-right">１１０円</td>
	                        <td class="b-cell text-right">２２０円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">庄屋大長長～いなす</td>
	                        <td class="b-cell text-right">１１０円</td>
	                        <td class="b-cell text-right">２２０円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">水なす（SL紫水）</td>
	                        <td class="b-cell text-right">１１０円</td>
	                        <td class="b-cell text-right">２２０円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">米なす（くろわし）</td>
	                        <td class="b-cell text-right">１１０円</td>
	                        <td class="b-cell text-right">２２０円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">美男なす（水なす）</td>
	                        <td class="b-cell text-right">１１０円</td>
	                        <td class="b-cell text-right">２２０円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">ふわとろ長～いなす</td>
	                        <td class="b-cell text-right">－</td>
	                        <td class="b-cell text-right">２２０円</td>
	                    </tr>
	                </tbody>
	            </table>
	        </div>
			</div>	<!-- row -->
		</div>		<!-- nasu -->

		<div id="tomato">
		    <div class="row">
	        <div class="col-lg-12 col-md12 col-sm-12">
	            <h2 class="category_h">トマト（ナス科）</h2>
	        </div>
	        <div class="col-lg-4 col-md-4 col-sm-12 pb-5" style="text-align: center;">
	        <img src="<?php echo esc_url( get_theme_file_uri('images/yasai_tomato.png') ); ?>" width="240px" alt="トマト">
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
	                        <td class="b-cell">ホーム桃太郎</td>
	                        <td class="b-cell text-right">１１０円</td>
	                        <td class="b-cell text-right">２２０円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">サターン</td>
	                        <td class="b-cell text-right">１１０円</td>
	                        <td class="b-cell text-right">２２０円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">フルティカ</td>
	                        <td class="b-cell text-right">１６０円</td>
	                        <td class="b-cell text-right">２３０円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">CF 千果</td>
	                        <td class="b-cell text-right">１６０円</td>
	                        <td class="b-cell text-right">２３０円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">イエローミミ</td>
	                        <td class="b-cell text-right">１６０円</td>
	                        <td class="b-cell text-right">２３０円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">甘っこ</td>
	                        <td class="b-cell text-right">－</td>
	                        <td class="b-cell text-right">２３０円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">まゆか</td>
	                        <td class="b-cell text-right">－</td>
	                        <td class="b-cell text-right">２３０円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">赤アイコ</td>
	                        <td class="b-cell text-right">１６０円</td>
	                        <td class="b-cell text-right">２３０円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">黄アイコ</td>
	                        <td class="b-cell text-right">１６０円</td>
	                        <td class="b-cell text-right">２３０円</td>
	                    </tr>
	                </tbody>
	            </table>
	        </div>
			</div>	<!-- row -->
		</div>		<!-- tomato -->

		<div id="piman">
		    <div class="row">
	        <div class="col-lg-12 col-md12 col-sm-12">
	            <h2 class="category_h">ピーマン（ナス科）</h2>
	        </div>
	        <div class="col-lg-4 col-md-4 col-sm-12 pb-5" style="text-align: center;">
	        <img src="<?php echo esc_url( get_theme_file_uri('images/yasai_piman.png') ); ?>" width="240px" alt="ピーマン">
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
	                        <td class="b-cell">京みどりピーマン</td>
	                        <td class="b-cell text-right">１１０円</td>
	                        <td class="b-cell text-right">－</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">伏見甘長ピーマン</td>
	                        <td class="b-cell text-right">１１０円</td>
	                        <td class="b-cell text-right">－</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">ししとう</td>
	                        <td class="b-cell text-right">１１０円</td>
	                        <td class="b-cell text-right">－</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">甘とう美人</td>
	                        <td class="b-cell text-right">１６０円</td>
	                        <td class="b-cell text-right">－</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">赤パプリカ</td>
	                        <td class="b-cell text-right">１６０円</td>
	                        <td class="b-cell text-right">－</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">黄パプリカ</td>
	                        <td class="b-cell text-right">１６０円</td>
	                        <td class="b-cell text-right">－</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">ニューエース</td>
	                        <td class="b-cell text-right">１６０円</td>
	                        <td class="b-cell text-right">－</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">ワンダーベル</td>
	                        <td class="b-cell text-right">１６０円</td>
	                        <td class="b-cell text-right">－</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">ぱくぱく甘長</td>
	                        <td class="b-cell text-right">１６０円</td>
	                        <td class="b-cell text-right">－</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">たかのつめ</td>
	                        <td class="b-cell text-right">１１０円</td>
	                        <td class="b-cell text-right">－</td>
	                    </tr>
	                </tbody>
	            </table>
	        </div>
			</div>	<!-- row -->
		</div>		<!-- piman -->

		<div id="kyuri">
		    <div class="row">
	        <div class="col-lg-12 col-md12 col-sm-12">
	            <h2 class="category_h">きゅうり（ウリ科）</h2>
	        </div>
	        <div class="col-lg-4 col-md-4 col-sm-12 pb-5" style="text-align: center;">
	        <img src="<?php echo esc_url( get_theme_file_uri('images/yasai_kyuri.png') ); ?>" width="240px" alt="きゅうり">
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
	                        <td class="b-cell">黒サンゴきゅうり</td>
	                        <td class="b-cell text-right">１１０円</td>
	                        <td class="b-cell text-right">２２０円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">夏すずみきゅうり</td>
	                        <td class="b-cell text-right">１１０円</td>
	                        <td class="b-cell text-right">２２０円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">ストロングきゅうり</td>
	                        <td class="b-cell text-right">１６０円</td>
	                        <td class="b-cell text-right">－</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">ラリーノ Pro</td>
	                        <td class="b-cell text-right">１６０円</td>
	                        <td class="b-cell text-right">－</td>
	                    </tr>
	                </tbody>
	            </table>
	        </div>
			</div>	<!-- row -->
		</div>		<!-- kyuri -->

		<div id="uri">
		    <div class="row">
	        <div class="col-lg-12 col-md12 col-sm-12">
	            <h2 class="category_h">甘うり・メロン（ウリ科）</h2>
	        </div>
	        <div class="col-lg-4 col-md-4 col-sm-12 pb-5" style="text-align: center;">
	        <img src="<?php echo esc_url( get_theme_file_uri('images/yasai_uri.png') ); ?>" width="240px" alt="甘うり・メロン">
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
	                        <td class="b-cell">銀泉甘うり</td>
	                        <td class="b-cell text-right">１１０円</td>
	                        <td class="b-cell text-right">２２０円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">金太郎うり</td>
	                        <td class="b-cell text-right">１１０円</td>
	                        <td class="b-cell text-right">２２０円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">ひとくちメロン</td>
	                        <td class="b-cell text-right">１１０円</td>
	                        <td class="b-cell text-right">２２０円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">プリンスメロン</td>
	                        <td class="b-cell text-right">－</td>
	                        <td class="b-cell text-right">２３０円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">パンナ（ネットメロン）</td>
	                        <td class="b-cell text-right">２２０円</td>
	                        <td class="b-cell text-right">－</td>
	                    </tr>
	                </tbody>
	            </table>
	        </div>
			</div>	<!-- row -->
		</div>		<!-- uri -->

		<div id="suika">
		    <div class="row">
	        <div class="col-lg-12 col-md12 col-sm-12">
	            <h2 class="category_h">すいか（ウリ科）</h2>
	        </div>
	        <div class="col-lg-4 col-md-4 col-sm-12 pb-5" style="text-align: center;">
	        <img src="<?php echo esc_url( get_theme_file_uri('images/yasai_suika.png') ); ?>" width="240px" alt="すいか">
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
	                        <td class="b-cell">大玉すいか</td>
	                        <td class="b-cell text-right">－</td>
	                        <td class="b-cell text-right">２２０円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">赤小玉すいか</td>
	                        <td class="b-cell text-right">－</td>
	                        <td class="b-cell text-right">２２０円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">金のたまごすいか</td>
	                        <td class="b-cell text-right">－</td>
	                        <td class="b-cell text-right">２２０円</td>
	                    </tr>
	                </tbody>
	            </table>
	        </div>
			</div>	<!-- row -->
		</div>		<!-- suika -->

		<div id="tukeuri">
		    <div class="row">
	        <div class="col-lg-12 col-md12 col-sm-12">
	            <h2 class="category_h">漬物うり（ウリ科）</h2>
	        </div>
	        <div class="col-lg-4 col-md-4 col-sm-12 pb-5" style="text-align: center;">
	        <img src="<?php echo esc_url( get_theme_file_uri('images/yasai_tukeuri.png') ); ?>" width="240px" alt="漬物うり">
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
	                        <td class="b-cell">かわずうり</td>
	                        <td class="b-cell text-right">１１０円</td>
	                        <td class="b-cell text-right">２２０円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">くろうり</td>
	                        <td class="b-cell text-right">１１０円</td>
	                        <td class="b-cell text-right">２２０円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">かたうり</td>
	                        <td class="b-cell text-right">１１０円</td>
	                        <td class="b-cell text-right">２２０円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">青はぐらうり</td>
	                        <td class="b-cell text-right">１１０円</td>
	                        <td class="b-cell text-right">２２０円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">しろうり</td>
	                        <td class="b-cell text-right">１１０円</td>
	                        <td class="b-cell text-right">２２０円</td>
	                    </tr>
	                </tbody>
	            </table>
	        </div>
			</div>	<!-- row -->
		</div>		<!-- tukeuri -->

		<div id="zucchini">
		    <div class="row">
	        <div class="col-lg-12 col-md12 col-sm-12">
	            <h2 class="category_h">ズッキーニ（ウリ科）</h2>
	        </div>
	        <div class="col-lg-4 col-md-4 col-sm-12 pb-5" style="text-align: center;">
	        <img src="<?php echo esc_url( get_theme_file_uri('images/yasai_zucchini.png') ); ?>" width="240px" alt="ズッキーニ">
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
	                        <td class="b-cell">ズッキーニ</td>
	                        <td class="b-cell text-right">１１０円</td>
	                        <td class="b-cell text-right">１１０円</td>
	                    </tr>
	                </tbody>
	            </table>
	        </div>
			</div>	<!-- row -->
		</div>		<!-- zucchini -->

		<div id="tougan">
		    <div class="row">
	        <div class="col-lg-12 col-md12 col-sm-12">
	            <h2 class="category_h">とうがん（ウリ科）</h2>
	        </div>
	        <div class="col-lg-4 col-md-4 col-sm-12 pb-5" style="text-align: center;">
	        <img src="<?php echo esc_url( get_theme_file_uri('images/yasai_tougan.png') ); ?>" width="240px" alt="とうがん">
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
	                        <td class="b-cell">姫とうがん</td>
	                        <td class="b-cell text-right">１６０円</td>
	                        <td class="b-cell text-right">－</td>
	                    </tr>
	                </tbody>
	            </table>
	        </div>
			</div>	<!-- row -->
		</div>		<!-- tougan -->

		<div id="kabocha">
		    <div class="row">
	        <div class="col-lg-12 col-md12 col-sm-12">
	            <h2 class="category_h">かぼちゃ（ウリ科）</h2>
	        </div>
	        <div class="col-lg-4 col-md-4 col-sm-12 pb-5" style="text-align: center;">
	        <img src="<?php echo esc_url( get_theme_file_uri('images/yasai_kabocha.png') ); ?>" width="240px" alt="かぼちゃ">
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
	                        <td class="b-cell">坊ちゃん</td>
	                        <td class="b-cell text-right">１６０円</td>
	                        <td class="b-cell text-right">－</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">ほっこり姫</td>
	                        <td class="b-cell text-right">１６０円</td>
	                        <td class="b-cell text-right">－</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">栗えびす</td>
	                        <td class="b-cell text-right">１６０円</td>
	                        <td class="b-cell text-right">－</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">白い九重栗</td>
	                        <td class="b-cell text-right">１６０円</td>
	                        <td class="b-cell text-right">－</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">すくなかぼちゃ</td>
	                        <td class="b-cell text-right">１６０円</td>
	                        <td class="b-cell text-right">－</td>
	                    </tr>
	                </tbody>
	            </table>
	        </div>
			</div>	<!-- row -->
		</div>		<!-- kabocha -->


    <div class="row">
        <div class="col-lg-12 col-md12 col-sm-12">
	        <h4 class="section_h" id="akiyasai">秋野菜苗</h4>
        </div>
	</div>
		<div id="burokko">
		    <div class="row">
	        <div class="col-lg-12 col-md12 col-sm-12">
	            <h2 class="category_h">ブロッコリー</h2>
	        </div>
	        <div class="col-lg-4 col-md-4 col-sm-12 pb-5" style="text-align: center;">
	        <img src="<?php echo esc_url( get_theme_file_uri('images/yasai_burokko.png') ); ?>" width="240px" alt="ブロッコリー">
			</div>
	        <div class="col-lg-8 col-md-8 col-sm-12">
	            <table class="table b-table">
	               <thead><tr>
	                   <th class="b-cell">品名</th>
	                   <th class="b-cell">単価（税込）</th>
	               </tr></thead>
	                <tbody>
	                    <tr>
	                        <td class="b-cell">ハイツＳＰ</td>
	                        <td class="b-cell text-right">７５円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">グリーンビューティー</td>
	                        <td class="b-cell text-right">７５円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">茎ブロッコリー</td>
	                        <td class="b-cell text-right">７５円</td>
	                    </tr>
	                </tbody>
	            </table>
	        </div>
			</div>	<!-- row -->
		</div>		<!-- burokko -->

		<div id="kariflower">
		    <div class="row">
	        <div class="col-lg-12 col-md12 col-sm-12">
	            <h2 class="category_h">カリフラワー</h2>
	        </div>
	        <div class="col-lg-4 col-md-4 col-sm-12 pb-5" style="text-align: center;">
	        <img src="<?php echo esc_url( get_theme_file_uri('images/yasai_kariflower.png') ); ?>" width="240px" alt="カリフラワー">
			</div>
	        <div class="col-lg-8 col-md-8 col-sm-12">
	            <table class="table b-table">
	               <thead><tr>
	                   <th class="b-cell">品名</th>
	                   <th class="b-cell">単価（税込）</th>
	               </tr></thead>
	                <tbody>
	                    <tr>
	                        <td class="b-cell">スノークラウン</td>
	                        <td class="b-cell text-right">７５円</td>
	                    </tr>
	                </tbody>
	            </table>
	        </div>
			</div>	<!-- row -->
		</div>		<!-- kariflower -->

		<div id="kyabetu">
		    <div class="row">
	        <div class="col-lg-12 col-md12 col-sm-12">
	            <h2 class="category_h">キャベツ</h2>
	        </div>
	        <div class="col-lg-4 col-md-4 col-sm-12 pb-5" style="text-align: center;">
	        <img src="<?php echo esc_url( get_theme_file_uri('images/yasai_kyabetu.png') ); ?>" width="240px" alt="キャベツ">
			</div>
	        <div class="col-lg-8 col-md-8 col-sm-12">
	            <table class="table b-table">
	               <thead><tr>
	                   <th class="b-cell">品名</th>
	                   <th class="b-cell">単価（税込）</th>
	               </tr></thead>
	                <tbody>
	                    <tr>
	                        <td class="b-cell">新藍</td>
	                        <td class="b-cell text-right">７５円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">あまだま</td>
	                        <td class="b-cell text-right">７５円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">春波</td>
	                        <td class="b-cell text-right">７５円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">湖水</td>
	                        <td class="b-cell text-right">７５円</td>
	                    </tr>
	                </tbody>
	            </table>
	        </div>
			</div>	<!-- row -->
		</div>		<!-- kyabetu -->

		<div id="hakusai">
		    <div class="row">
	        <div class="col-lg-12 col-md12 col-sm-12">
	            <h2 class="category_h">白菜</h2>
	        </div>
	        <div class="col-lg-4 col-md-4 col-sm-12 pb-5" style="text-align: center;">
	        <img src="<?php echo esc_url( get_theme_file_uri('images/yasai_hakusai.png') ); ?>" width="240px" alt="白菜">
			</div>
	        <div class="col-lg-8 col-md-8 col-sm-12">
	            <table class="table b-table">
	               <thead><tr>
	                   <th class="b-cell">品名</th>
	                   <th class="b-cell">単価（税込）</th>
	               </tr></thead>
	                <tbody>
	                    <tr>
	                        <td class="b-cell">耐病60日</td>
	                        <td class="b-cell text-right">７５円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">きらぼし７７</td>
	                        <td class="b-cell text-right">７５円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">黄ごころ８５</td>
	                        <td class="b-cell text-right">７５円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">きらぼし９０</td>
	                        <td class="b-cell text-right">７５円</td>
	                    </tr>
	                </tbody>
	            </table>
	        </div>
			</div>	<!-- row -->
		</div>		<!-- hakusai -->

		<div id="tamaretasu">
		    <div class="row">
	        <div class="col-lg-12 col-md12 col-sm-12">
	            <h2 class="category_h">玉レタス</h2>
	        </div>
	        <div class="col-lg-4 col-md-4 col-sm-12 pb-5" style="text-align: center;">
	        <img src="<?php echo esc_url( get_theme_file_uri('images/yasai_tamaretasu.png') ); ?>" width="240px" alt="玉レタス">
			</div>
	        <div class="col-lg-8 col-md-8 col-sm-12">
	            <table class="table b-table">
	               <thead><tr>
	                   <th class="b-cell">品名</th>
	                   <th class="b-cell">単価（税込）</th>
	               </tr></thead>
	                <tbody>
	                    <tr>
	                        <td class="b-cell">シスコ</td>
	                        <td class="b-cell text-right">７５円</td>
	                    </tr>
	                </tbody>
	            </table>
	        </div>
			</div>	<!-- row -->
		</div>		<!-- tamaretasu -->

		<div id="ri-furetasu">
		    <div class="row">
	        <div class="col-lg-12 col-md12 col-sm-12">
	            <h2 class="category_h">リーフレタス</h2>
	        </div>
	        <div class="col-lg-4 col-md-4 col-sm-12 pb-5" style="text-align: center;">
	        <img src="<?php echo esc_url( get_theme_file_uri('images/yasai_ri-furetasu.png') ); ?>" width="240px" alt="リーフレタス">
			</div>
	        <div class="col-lg-8 col-md-8 col-sm-12">
	            <table class="table b-table">
	               <thead><tr>
	                   <th class="b-cell">品名</th>
	                   <th class="b-cell">単価（税込）</th>
	               </tr></thead>
	                <tbody>
	                    <tr>
	                        <td class="b-cell">グリーンジャケット</td>
	                        <td class="b-cell text-right">７５円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">ワインドレス</td>
	                        <td class="b-cell text-right">７５円</td>
	                    </tr>
	                </tbody>
	            </table>
	        </div>
			</div>	<!-- row -->
		</div>		<!-- ri-furetasu -->

		<div id="tamanegi">
		    <div class="row">
	        <div class="col-lg-12 col-md12 col-sm-12">
	            <h2 class="category_h">玉ねぎ苗</h2>
	        </div>
	        <div class="col-lg-4 col-md-4 col-sm-12 pb-5" style="text-align: center;">
	        <img src="<?php echo esc_url( get_theme_file_uri('images/yasai_tamanegi.png') ); ?>" width="240px" alt="玉ねぎ苗">
			</div>
	        <div class="col-lg-8 col-md-8 col-sm-12">
	            <table class="table b-table">
	               <thead><tr>
	                   <th class="b-cell">品名</th>
	                   <th class="b-cell">単価（税込）</th>
	               </tr></thead>
	                <tbody>
	                    <tr>
	                        <td class="b-cell">スーパーリニア</td>
	                        <td class="b-cell text-right">９円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">ＯＰ黄</td>
	                        <td class="b-cell text-right">９円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">ネオアース</td>
	                        <td class="b-cell text-right">９円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">ケル玉</td>
	                        <td class="b-cell text-right">９円</td>
	                    </tr>
	                    <tr>
	                        <td class="b-cell">赤玉ねぎ</td>
	                        <td class="b-cell text-right">９円</td>
	                    </tr>
	                </tbody>
	            </table>
	        </div>
			</div>	<!-- row -->
		</div>		<!-- tamanegi -->

		<div id="harukyabetu">
		    <div class="row">
	        <div class="col-lg-12 col-md12 col-sm-12">
	            <h2 class="category_h">春キャベツ</h2>
	        </div>
	        <div class="col-lg-4 col-md-4 col-sm-12 pb-5" style="text-align: center;">
	        <img src="<?php echo esc_url( get_theme_file_uri('images/yasai_kyabetu.png') ); ?>" width="240px" alt="春キャベツ">
			</div>
	        <div class="col-lg-8 col-md-8 col-sm-12">
	            <table class="table b-table">
	               <thead><tr>
	                   <th class="b-cell">品名</th>
	                   <th class="b-cell">単価（税込）</th>
	               </tr></thead>
	                <tbody>
	                    <tr>
	                        <td class="b-cell">春ひかり七号</td>
	                        <td class="b-cell text-right">７５円</td>
	                    </tr>
	                </tbody>
	            </table>
	        </div>
			</div>	<!-- row -->
		</div>		<!-- harukyabetu -->

<!-- ここに野菜を記述する -->

</div>

<div class="container">
    <div class="row">

	<section class="section" style="margin-top: 50px;">
	    <p class="main_p">ご注文は下記注文票をダウンロードしてご希望の品目を記入し、<br>ＦＡＸか当ハウスまで直接お持ちください。</p>
	    <a class="d_g_pdf" href="<?php echo esc_url( get_theme_file_uri('images/2020_akiyasai.pdf') ); ?>">2020年 苗注文票のダウンロードはこちら<i class="far fa-file-pdf"></i></a>
	</section>

    </div>
</div>

<?php get_footer(); ?>
