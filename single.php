<?php
/**
 * The template for displaying all pages
 * Template Name: Homepage
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package HOME
 */

get_header();
?>
		<main class="suwarikuContainer">
			<div class="suwarikuContentTitle">
				<h1 class="suwarikuContentTitleText">お知らせ<span class="en">INFORMATION</span></h1>
			</div>
			<div class="suwarikuBreadcrumbWrap">
				<ol class="suwarikuBreadcrumb">
					<li class="suwarikuBreadcrumbItem"><a href="<?php bloginfo('url'); ?>">ホーム</a></li>
					<li class="suwarikuBreadcrumbItem"><a href="<?php bloginfo('url'); ?>/information/">お知らせ</a></li>
					<li class="suwarikuBreadcrumbItem"></li>
				</ol>
			</div>

			<section>
				<div class="suwarikuInners suwarikuPtopxl suwarikuPBtm3xl">
					<div class="suwarikuTopics">
						<div class="suwarikuTopicsContent">
							<div class="suwarikuTopicsArchive">
								<div class="suwarikuTopicsArchiveItem">
									<?php while (have_posts()) : the_post(); ?>
									<div class="suwarikuTopicsArticleHeading">
										<h2 class="suwarikuFontB suwarikuText28"><?php the_title(); ?></h2>
									</div>
									<div class="suwarikuTopicsDate suwarikuMts">
										<time class="suwarikuText18" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y年m月d日');?></time>
									</div>
									<div class="suwarikuTopicsArticleBody suwarikuCmsBody">
									<?php the_content(); ?>
									</div>
									<ul class="suwarikuTopicsButton suwarikuMtxl">
										<?php $pre_post ="";?>
										<?php $pre_post = get_previous_post() ;?>
										<?php if(!empty($pre_post)): ?>
											<li class="suwarikuTopicsButtonItem"><a href="<?php echo $pre_post->guid;?>" class="suwarikuButtonSecondary suwarikuButtonSecondaryWidthAuto suwarikuButtonSecondaryBack">前の記事を見る</a></li>
										<?php endif; ?>
										<?php $next_post = get_next_post();?>
										<?php if(!empty($next_post)):?>
											<li class="suwarikuTopicsButtonItem"><a href="<?php echo $next_post->guid;?>" class="suwarikuButtonSecondary suwarikuButtonSecondaryWidthAuto">次の記事を見る</a></li>
										<?php endif; ?>
									</ul>
									<?php endwhile; ?>
								</div>
							</div>
						</div>
						<aside class="suwarikuTopicsAside">
							<dl class="suwarikuTopicsAsideItem">
								<dt class="suwarikuTopicsAsideItemTitle">最新記事</dt>
								<dd>
									<ul class="suwarikuTopicsAsideItemList">
									<?php
										$args = array(
											'post_type' => 'post',
											'posts_per_page' => 5,
										);
										$my_query = new WP_Query( $args );
									?>
									<?php if ( $my_query->have_posts() ): ?>
									<?php while( $my_query->have_posts()): $my_query->the_post(); ?>
										<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
										<?php endwhile; ?>
										<?php wp_reset_postdata(); ?>
										<?php endif; ?>
									</ul>
								</dd>
							</dl>
							<dl class="suwarikuTopicsAsideItem">
								<dt class="suwarikuTopicsAsideItemTitle">アーカイブ</dt>
								<dd>
									<ul class="suwarikuTopicsAsideItemList">
									<?php wp_get_archives( 'post_type=post&type=yearly' ); ?>
									</ul>
								</dd>
							</dl>
						</aside>
					</div>
				</div>
			</section>
		</main>
<?php
get_footer();