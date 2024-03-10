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
			 <h1 class="suwarikuContentTitle-text">スワリクについて<span class="en">COMPANY</span></h1>
		 </div>
		 <div class="suwarikuBreadcrumb-wrap">
			 <ol class="suwarikuBreadcrumb">
				 <li class="suwarikuBreadcrumb__item"><a href="<?php bloginfo('url'); ?>">ホーム</a></li>
				 <li class="suwarikuBreadcrumb__item">スワリクについて</li>
			 </ol>
		 </div>
		 <div class="suwarikuInner suwarikuPtop-xl">
			 <ul class="suwarikuAboutNav">
				 <li class="suwarikuAboutNav__item"><a href="<?php bloginfo('url'); ?>/about/">代表挨拶</a></li>
				 <li class="suwarikuAboutNav__item"><a href="<?php bloginfo('url'); ?>/about/company/">会社概要</a></li>
				 <li class="suwarikuAboutNav__item"><a href="<?php bloginfo('url'); ?>/about/philosophy/">経営理念</a></li>
				 <li class="suwarikuAboutNav__item"><a href="<?php bloginfo('url'); ?>/about/links/" class="is-active">リンク</a></li>
			 </ul>
		 </div>
 
		 <section>
			<div class="suwarikuInner suwarikuPtop-xl suwarikuPBtm-xl">
				<h2 class="suwarikuLineTitle"><span class="title">リンク</span></h2>
				<ul class="suwarikuLinkList m-mt-2xl">
					<li class="suwarikuLinkList__item">
						<div class="suwarikuLinkList-title suwarikuText-22 suwarikuColorNv suwarikuFontB">株式会社太平洋</div>
						<div class="suwarikuLinkList-url suwarikuText-18"><figure class="suwarikuMbtm-xs"><a href="https://taiheiyou.org/" target="_blank"></a></figure><a href="https://taiheiyou.org/" target="_blank" class="suwarikuULine suwarikuColor">https://taiheiyou.org/</a></div>
					</li>
				</ul>
			</div>
		</section>
 
		 <div class="suwarikuInner suwarikuPtop-xl">
			 <ul class="suwarikuAboutNav">
				 <li class="suwarikuAboutNav__item"><a href="<?php bloginfo('url'); ?>/about/">代表挨拶</a></li>
				 <li class="suwarikuAboutNav__item"><a href="<?php bloginfo('url'); ?>/about/company/">会社概要</a></li>
				 <li class="suwarikuAboutNav__item"><a href="<?php bloginfo('url'); ?>/about/philosophy/">経営理念</a></li>
				 <li class="suwarikuAboutNav__item"><a href="<?php bloginfo('url'); ?>/about/links/" class="is-active">リンク</a></li>
			 </ul>
		 </div>
	 </main>
 <?php
 get_footer();