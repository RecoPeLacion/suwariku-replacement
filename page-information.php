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
					<li class="suwarikuBreadcrumb__item">お知らせ</li>
				</ol>
			</div>

			<section>
				<div class="suwarikuInner-s suwarikuPtop-xl suwarikuPBtm">
					<div class="suwarikuTopics">
						<div class="suwarikuTopics__content">
							<?php 
							// the query
							$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>20));
							?>
							<?php if ( $wpb_all_query->have_posts() ) : ?>
							<div class="suwarikuTopics-archives">
								<!-- the loop -->
                                <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
								<div class="suwarikuTopics-archives-item">
									<div class="suwarikuTopics-article-heading">
										<h2 class="suwarikuFontB suwarikuText-28"><?php echo wp_trim_words( get_the_title(), 26 , '…' ); ?></h2>
									</div>
									<div class="suwarikuTopics-date suwarikuMt-s">
										<time class="suwarikuText-18" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
									</div>
									<div class="suwarikuTopics-article-body suwarikuCmsBody">
									<?php echo wp_trim_words( get_the_content(), 40 , '…' );?>
									</div>
									<?php
									$uri = get_permalink( $id ); 
									?>
									<?php if(!empty($uri)):?>
										<a href="<?php echo $uri; ?>" class="Suwarikubtn-secondary suwarikuMt">本文を読む</a>
									<?php else : ?>
										<a href="<?php echo the_permalink(); ?>" class="Suwarikubtn-secondary suwarikuMt" target="_blank">本文を読む</a>
									<?php endif; ?>
								</div>
								<?php endwhile; ?>
                                <!-- end of the loop -->
								<?php wp_reset_postdata(); ?>
                        
								<?php else : ?>
									<p><?php _e( '現在投稿がございません。' ); ?></p>
								<?php endif; ?>
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
				</div>
			</section>
		</main>
<?php
get_footer();