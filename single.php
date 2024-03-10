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
				<h1 class="suwarikuContentTitle-text">お知らせ<span class="en">INFORMATION</span></h1>
			</div>
			<div class="suwarikuBreadcrumb-wrap">
				<ol class="suwarikuBreadcrumb">
					<li class="suwarikuBreadcrumb__item"><a href="<?php bloginfo('url'); ?>">ホーム</a></li>
					<li class="suwarikuBreadcrumb__item"><a href="<?php bloginfo('url'); ?>/information/">お知らせ</a></li>
					<li class="suwarikuBreadcrumb__item"></li>
				</ol>
			</div>

			<section>
				<div class="suwarikuInner-s suwarikuPtop-xl suwarikuPBtm-3xl">
					<div class="suwarikuTopics">
						<div class="suwarikuTopics__content">
							<div class="suwarikuTopics-archives">
								<div class="suwarikuTopics-archives-item">
									<?php while (have_posts()) : the_post(); ?>
									<div class="suwarikuTopics-article-heading">
										<h2 class="suwarikuFontB suwarikuText-28"><?php the_title(); ?></h2>
									</div>
									<div class="suwarikuTopics-date suwarikuMt-s">
										<time class="suwarikuText-18" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y年m月d日');?></time>
									</div>
									<div class="suwarikuTopics-article-body m-cms-body">
									<?php the_content(); ?>
									</div>
									<ul class="suwarikuTopics-btns suwarikuMt-xl">
										<?php $pre_post ="";?>
										<?php $pre_post = get_previous_post() ;?>
										<?php if(!empty($pre_post)): ?>
											<li class="suwarikuTopics-btns__item"><a href="<?php echo $pre_post->guid;?>" class="Suwarikubtn-secondary Suwarikubtn-secondary--wa Suwarikubtn-secondary--back">前の記事を見る</a></li>
										<?php endif; ?>
										<?php $next_post = get_next_post();?>
										<?php if(!empty($next_post)):?>
											<li class="suwarikuTopics-btns__item"><a href="<?php echo $next_post->guid;?>" class="Suwarikubtn-secondary Suwarikubtn-secondary--wa">次の記事を見る</a></li>
										<?php endif; ?>
									</ul>
									<?php endwhile; ?>
								</div>
							</div>
						</div>
						<aside class="suwarikuTopics__aside">
							<dl class="suwarikuTopics-aside-item">
								<dt class="suwarikuTopics-aside-item-title">最新記事</dt>
								<dd>
									<ul class="suwarikuTopics-aside-item-list">
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
							<dl class="suwarikuTopics-aside-item">
								<dt class="suwarikuTopics-aside-item-title">アーカイブ</dt>
								<dd>
									<ul class="suwarikuTopics-aside-item-list">
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