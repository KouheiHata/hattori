<footer class="Footer">

<div class="container-fluid footer_back">
	<div class="row lh20" style="padding-top: 100px;padding-left: 5%;padding-right: 5%;">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-inline">
			<h2>サイトマップ&nbsp;&nbsp;<div class="footer_border"></div></h2>
		</div>

		<div class="d-block pt-2 ul_haba">
			<ul class="ul_sitemap">
			<li>ＨＯＭＥ</li>
			</ul>
		</div>
		<div class="d-block pt-2 ul_haba">
			<ul class="ul_sitemap">
			<li>紹介記事</li>
				<ul class="pt-2">
					<div class="footer_border_y">
					<li>寄せ植え体験</li>
					<li>イベント紹介</li>
					<li>&nbsp;</li>
					</div>
				</ul>
			</ul>
		</div>
		<div class="d-block pt-2 ul_haba">
			<ul class="ul_sitemap">
			<li>野菜苗</li>
				<ul class="pt-2">
					<div class="footer_border_y">
					<li>春野菜苗</li>
					<li>秋野菜苗</li>
					<li>玉ねぎ苗</li>
					</div>
				</ul>
			</ul>
		</div>
		<div class="d-block pt-2 ul_haba">
			<ul class="ul_sitemap">
			<li>花苗</li>
				<ul class="pt-2">
					<div class="footer_border_y">
					<li>花苗</li>
					<li>切花苗</li>
					<li>菊苗</li>
					</div>
				</ul>
			</ul>
		</div>
		<div class="d-block pt-2 ul_haba">
			<ul class="ul_sitemap">
			<li>野菜</li>
				<ul class="pt-2">
					<div class="footer_border_y">
					<li>今月の野菜</li>
					<li>直売先</li>
					<li>&nbsp;</li>
					</div>
				</ul>
			</ul>
		</div>
		<div class="d-block pt-2 ul_haba">
			<ul class="ul_sitemap">
			<li>食用菊</li>
				<ul class="pt-2">
					<div class="footer_border_y">
					<li>育て方</li>
					<li>おいしいレシピ</li>
					<li>&nbsp;</li>
					</div>
				</ul>
			</ul>
		</div>
		<div class="d-block pt-2 ul_haba">
			<ul class="ul_sitemap">
			<li>お問い合わせ</li>
			</ul>
		</div>

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-block pt-3" align="center">
		<a href="#" class="btn_naetyumon">苗注文票のダウンロードはこちら&nbsp;<i class="far fa-file-excel"></i></a>
		</div>

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-3">
			<h5>
			<ul class="ul_address text-center">
				<li class="d-inline">〒915-0056&nbsp;越前市向新保町32-32</li>
				<li class="d-inline"><i class="fas fa-fax"></i>&nbsp;0778-22-1987</li>
				<li class="d-inline"><i class="fas fa-mobile-alt"></i>&nbsp;090-8265-1135</li>
			</ul>
			</h5>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-3">
			<hr color="#ffffff">

			<h5 class="text-center">Copyright&nbsp;2019&nbsp;naenohattori.com&nbsp;All&nbsp;rights&nbsp;reserved.</h5>
		</div>
	</div>
</div>

</footer>

<!-- Bootstrap4 jQuery Popper CDN -->
<script
  src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/esm/popper.min.js" integrity="sha256-1XfFQxRfNvDJW3FdZ+xlo2SbodG2+rFArw6XsVzu3bc=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- Yamm4 -->
<script>
jQuery(document).on('click', '.yamm .dropdown-menu', function(e) {
   e.stopPropagation()
})
</script>

<script>
$(function($){
    $(window).scroll(function (){
        $('.fadein').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight + 200){
                $(this).addClass('scrollin');
            }
        });
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