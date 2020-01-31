<footer class="Footer">

<div class="container-fluid footer_back">
	<div class="footer_row row lh20" style="">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-inline res_footer">
			<h3 class="s-title">サイトマップ</h3>
		</div>

		<div style="margin: 0 auto;">
		<ul class="ul_sitemap pt-2">
		<li><a href="/">HOME</a></li>
		</ul>

		<ul class="ul_sitemap pt-2">
		<li><a href="/about-2/">紹介記事</a></li>
			<ul class="pt-2">
				<div class="footer_border_y">
				<li><a href="/about-taiken/">寄せ植え体験</a></li>
				<li><a href="/about-event/">イベント紹介</a></li>
				<li>&nbsp;</li>
				</div>
			</ul>
		</ul>

		<ul class="ul_sitemap pt-2">
		<li><a href="/yasainae/">野菜苗</a></li>
			<ul class="pt-2">
				<div class="footer_border_y">
				<li><a href="yasainae?#st_haru">春野菜苗</a></li>
				<li>秋野菜苗</li>
				<li>玉ねぎ苗</li>
				</div>
			</ul>
		</ul>

		<ul class="ul_sitemap pt-2">
		<li><a href="/hananae/">花苗</a></li>
			<ul class="pt-2">
				<div class="footer_border_y">
				<li><a href="hananae/#flow-sap">花苗</a></li>
				<li><a href="hananae/#cut-sap">切花苗</a></li>
				<li><a href="hananae/#daisy-sap">菊苗</a></li>
				</div>
			</ul>
		</ul>

		<ul class="ul_sitemap pt-2">
		<li><a href="/yasai-2/">野菜</a></li>
			<ul class="pt-2">
				<div class="footer_border_y">
				<li><a href="yasai-2/#sell">直売先</a></li>
				<li><a href="yasai-2/#this_m">今月の野菜</a></li>
				<li>&nbsp;</li>
				</div>
			</ul>
		</ul>

		<ul class="ul_sitemap pt-2">
		<li><a href="/daisy/">食用菊</a></li>
			<ul class="pt-2">
				<div class="footer_border_y">
				<li><a href="daisy/#daisy-desc">食用菊って？</a></li>
				<li><a href="daisy/#daisy-list">取り扱い食用菊</a></li>
				<li><a href="daisy/recipe">おいしいレシピ</a></li>
				</div>
			</ul>
		</ul>

		<ul class="ul_sitemap pt-2 pb-3">
		<li><a href="/contact/">お問い合わせ</a></li>
		</ul>
		</div>

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-block pt-3" align="center">
		<a href="#" class="btn_naetyumon">苗注文票のダウンロードはこちら<i class="far fa-file-pdf"></i></a>
		</div>

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-3">
			<h5>
			<ul class="ul_address text-center">
				<li class="">〒915-0056&nbsp;<br class="d-xl-none d-lg-none d-md-none d-sm-none d-xs-inline">越前市向新保町32-32</li>
				<li class=""><i class="fas fa-fax"></i>&nbsp;0778-22-1987</li>
				<li class=""><i class="fas fa-mobile-alt"></i>&nbsp;090-8265-1135</li>
			</ul>
			</h5>
		</div>
	</div>
	<div class="row lh20">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-3 pb-3">
			<hr color="#ffffff">

			<h5 class="text-center">Copyright&nbsp;2019&nbsp;naenohattori.com&nbsp;All&nbsp;rights&nbsp;reserved.</h5>
		</div>
	</div>
</div>

</footer>

<!-- Bootstrap4 jQuery Popper CDN -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script>
$(function() {
  $("#navi-btn").click(function(){
    if (!$("#navi-btn").hasClass("navi-btn-on")) {
      $("#navi-btn").addClass("navi-btn-on");
      $("#navi-btn p").text("CLOSE");
      $("#navi-menu").fadeIn();
    } else {
      $("#navi-btn").removeClass("navi-btn-on")
      $("#navi-btn p").text("MENU");
      $("#navi-menu").fadeOut();
    }
  });
});
</script>

<script>
$(function($){
  function initFontSize() {
    var size = (sessionStorage.getItem('fontSize'))? sessionStorage.getItem('fontSize') : '16';
    changeFontSize(size);
  }
  
  function changeFontSize(size){
    $('html').css('font-size', size + 'px');
    $('[data-font!=' + size + ']').removeClass('active');
    $('[data-font=' + size + ']').addClass('active');
    sessionStorage.setItem('fontSize', size);
  }
  
  function addListeners() {
    $('[data-font]').on('click', function(){
      changeFontSize($(this).data('font'));
    });
  }
  
  function init() {
    initFontSize();
    addListeners();
  }
  
  init();
});
</script>

<?php wp_footer(); ?>
</body>
</html>