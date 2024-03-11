<?php
/**
 * The template for displaying all pages
 * Template Name: Contact
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PRIVACY POLICY
 */

 get_header();
 ?>
	 <main class="suwarikuContainer">
		 <div class="suwarikuContentTitle">
			 <h1 class="suwarikuContentTitleText">スワリクについて<span class="en">COMPANY</span></h1>
		 </div>
		 <div class="suwarikuBreadcrumbWrap">
			 <ol class="suwarikuBreadcrumb">
				 <li class="suwarikuBreadcrumbItem"><a href="<?php bloginfo('url'); ?>">ホーム</a></li>
				 <li class="suwarikuBreadcrumbItem">スワリクについて</li>
			 </ol>
		 </div>
		 <div class="suwarikuInner suwarikuPtopxl">
			 <ul class="suwarikuAboutNav">
				 <li class="suwarikuAboutNavItem"><a href="<?php bloginfo('url'); ?>/about/">代表挨拶</a></li>
				 <li class="suwarikuAboutNavItem"><a href="<?php bloginfo('url'); ?>/about/company/">会社概要</a></li>
				 <li class="suwarikuAboutNavItem"><a href="<?php bloginfo('url'); ?>/about/philosophy/">経営理念</a></li>
				 <li class="suwarikuAboutNavItem"><a href="<?php bloginfo('url'); ?>/about/links/" class="is-active">リンク</a></li>
			 </ul>
		 </div>
 
		 <section>
			<div class="suwarikuInner suwarikuPtopxl suwarikuPBtmxl">
				<h2 class="suwarikuLineTitle"><span class="title">リンク</span></h2>
				<ul class="suwarikuLinkList suwarikuMtxl">
					<li class="suwarikuLinkListItem">
						<div class="suwarikuLinkListTitle suwarikuText22 suwarikuColorNv suwarikuFontB">株式会社太平洋</div>
						<div class="suwarikuLinkListUrl suwarikuText18"><figure class="suwarikuMbtmxs"><a href="https://taiheiyou.org/" target="_blank"></a></figure><a href="https://taiheiyou.org/" target="_blank" class="suwarikuULine suwarikuColor">https://taiheiyou.org/</a></div>
					</li>
				</ul>
			</div>
		</section>
 
		 <div class="suwarikuInner suwarikuPtopxl">
			 <ul class="suwarikuAboutNav">
				 <li class="suwarikuAboutNavItem"><a href="<?php bloginfo('url'); ?>/about/">代表挨拶</a></li>
				 <li class="suwarikuAboutNavItem"><a href="<?php bloginfo('url'); ?>/about/company/">会社概要</a></li>
				 <li class="suwarikuAboutNavItem"><a href="<?php bloginfo('url'); ?>/about/philosophy/">経営理念</a></li>
				 <li class="suwarikuAboutNavItem"><a href="<?php bloginfo('url'); ?>/about/links/" class="is-active">リンク</a></li>
			 </ul>
		 </div>
	 </main>
 <?php
 get_footer();