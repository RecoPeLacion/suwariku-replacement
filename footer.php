<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TEMPLATENAME
 */

?>
	<!-- footer -->
    <footer class="suwarikuFooter">
      <div class="suwarikuFooterinner">
        <div class="suwarikuFooterh">
          <div class="suwarikuFooterHContent">
            <div class="suwarikuFooterlogo"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/common/logoFooterWhite.svg" alt="株式会社スワリク" width="290"></div> <address class="suwarikuFooteraddress suwarikuText16 suwarikuMt">
							〒392-0016 <br class="suwarikuSpOnly">長野県諏訪市大字豊田1070<br>
							<a href="tel:0266-52-6193">TEL 0266-52-6193（代表）</a>　FAX 0266-52-6156
						</address> 
            <a href="<?php bloginfo('url'); ?>/contact/" class="suwarikuButton suwarikuButtonYellow suwarikuButtonLeft suwarikuMt">メールでのお問い合わせ</a>
          </div>
          <div class="suwarikuFooterHMap"> <img src="<?php echo get_template_directory_uri(); ?>/resources/images/common/mapImg.png" width="576" height="346" alt="〒392-0016　長野県諏訪市大字豊田1070"> </div>
        </div>
        <div class="suwarikuFooternav">
          <ul class="suwarikuFooterNavList">
            <li class="suwarikuFooterNavListItem"> <a href="<?php bloginfo('url'); ?>">トップページ</a>
            </li>
          </ul>
          <ul class="suwarikuFooterNavList">
            <li class="suwarikuFooterNavListItem"> <a href="<?php bloginfo('url'); ?>/about/">スワリクについて</a>
              <ul class="suwarikuFooterNavListChild">
                <li class="suwarikuFooterNavListChildItem"><a href="<?php bloginfo('url'); ?>/about/message">代表挨拶</a></li>
                <li class="suwarikuFooterNavListChildItem"><a href="<?php bloginfo('url'); ?>/about/company/">会社概要</a></li>
                <li class="suwarikuFooterNavListChildItem"><a href="<?php bloginfo('url'); ?>/about/philosophy/">経営理念</a></li>
                <li class="suwarikuFooterNavListChildItem"><a href="<?php bloginfo('url'); ?>/about/links/">リンク</a></li>
              </ul>
            </li>
            <li class="suwarikuFooterNavListItem"><a href="<?php bloginfo('url'); ?>/torikumi/">スワリクの取り組み</a></li>
          </ul>
          <ul class="suwarikuFooterNavList">
            <li class="suwarikuFooterNavListItem"> <a href="<?php bloginfo('url'); ?>/service/">事業紹介</a>
              <div class="suwarikuFooterNavCol">
                <ul class="suwarikuFooterNavListChild">
                  <li class="suwarikuFooterNavListChildItem"> <a href="<?php bloginfo('url'); ?>/service/#warehouse">常温 冷凍 冷蔵倉庫業</a>
                    <ul class="suwarikuFooterNavListGChild">
                      <li class="suwarikuFooterNavListGChildItem"><a href="<?php bloginfo('url'); ?>/office/suwa/">諏訪物流センター</a></li>
                      <li class="suwarikuFooterNavListGChildItem"><a href="<?php bloginfo('url'); ?>/service/#suwa-teion">諏訪低温物流センター</a></li>
                      <li class="suwarikuFooterNavListGChildItem"><a href="<?php bloginfo('url'); ?>/office/nagano/">長野低温物流センター</a></li>
                      <li class="suwarikuFooterNavListGChildItem"><a href="<?php bloginfo('url'); ?>/office/shiojiri/#shiojiri">塩尻事業所</a></li>
                      <li class="suwarikuFooterNavListGChildItem"><a href="<?php bloginfo('url'); ?>/office/saitama/">埼玉冷蔵倉庫</a></li>
                      <li class="suwarikuFooterNavListGChildItem"><a href="<?php bloginfo('url'); ?>/office/chiba/">千葉若葉低温物流センター</a></li>
                      <li class="suwarikuFooterNavListGChildItem"><a href="<?php bloginfo('url'); ?>/office/chiba/">千葉低温物流センター</a></li>
                    </ul>
                  </li>
                </ul>
                <ul class="suwarikuFooterNavListChild">
                  <li class="suwarikuFooterNavListChildItem"> <a href="<?php bloginfo('url'); ?>/service/#transportation">輸配送業務</a>
                    <ul class="suwarikuFooterNavListGChild">
                      <li class="suwarikuFooterNavListGChildItem"><a href="<?php bloginfo('url'); ?>/office/honsya/">本社・諏訪営業所</a></li>
                      <li class="suwarikuFooterNavListGChildItem"><a href="<?php bloginfo('url'); ?>/office/shiojiri/">松本営業所</a></li>
                      <li class="suwarikuFooterNavListGChildItem"><a href="<?php bloginfo('url'); ?>/office/kanagawa/">神奈川営業所</a></li>
                      <li class="suwarikuFooterNavListGChildItem"><a href="<?php bloginfo('url'); ?>/office/ina/">伊那営業所</a></li>
                      <li class="suwarikuFooterNavListGChildItem"><a href="<?php bloginfo('url'); ?>/office/ina/#iida">飯田営業所</a></li>
                    </ul>
                  </li>
                </ul>
                <ul class="suwarikuFooterNavListChild">
                  <li class="suwarikuFooterNavListChildItem"> <a href="<?php bloginfo('url'); ?>/service/#others">その他</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
          <ul class="suwarikuFooterNavList">
            <li class="suwarikuFooterNavListItem"> <a href="<?php bloginfo('url'); ?>/recruit/">採用情報</a>
              <ul class="suwarikuFooterNavListChild">
                <li class="suwarikuFooterNavListChildItem"> <a href="<?php bloginfo('url'); ?>/recruit/#new">新卒採用情報</a></li>
                <li class="suwarikuFooterNavListChildItem"> <a href="<?php bloginfo('url'); ?>/recruit/#semi">中途採用情報</a></li>
              </ul>
            </li>
          </ul>
          <ul class="suwarikuFooterNavList">
            <li class="suwarikuFooterNavListItem"> 
              <a href="<?php bloginfo('url'); ?>/contact/">お問い合わせ</a>
              <ul class="suwarikuFooterNavListChild">
                <li class="suwarikuFooterNavListChildItem"><a href="<?php //bloginfo('url'); ?>/information/">お知らせ</a></li>
                <li class="suwarikuFooterNavListChildItem"><a href="<?php //bloginfo('url'); ?>/privacy-policy/">プライバシーポリシー</a></li>
                <li class="suwarikuFooterNavListChildItem"><a href="<?php //bloginfo('url'); ?>/sitemap.xml">サイトマップ</a></li>
              </ul>
            </li>
          </ul>
        </div> <small class="suwarikuFootercr">&copy; 株式会社 スワリク</small> </div>
    </footer> <a href="#suwarikuWrap" class="suwarikuPageTop"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/common/arrowIconFooter.svg" alt="" width="12"></a> </div>
	<!-- end of footer -->
  <script src="<?php echo get_template_directory_uri(); ?>/resources/js/lib-v1.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/resources/js/slick.min-v1.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/resources/js/script-v1.js"></script>
	<?php wp_footer(); ?>
	<?php 
		//$custom_js = get_option( 'theme_js' );
		//if(!empty($custom_js)) {
			?>
				<?php //echo '<script>'. $custom_js. '</script> '; ?>
			<?php
		//}
	?>
	</body>
</html>