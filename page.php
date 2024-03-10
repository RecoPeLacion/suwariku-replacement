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
 * @package 固定ページの新規テンプレート１
 */

get_header();
?>
<main class="suwarikuSContainer">
	<div class="suwarikuContentTitle">
		<h1 class="suwarikuContentTitle-text">プライバシーポリシー<span class="en">PRIVACY POLICY</span></h1>
	</div>
<div class="suwarikuBreadcrumb-wrap">
	<ol class="suwarikuBreadcrumb">
		<li class="suwarikuBreadcrumb__item"><a href="<?php bloginfo('url'); ?>">ホーム</a></li>
		<li class="suwarikuBreadcrumb__item">プライバシーポリシー</li>
	</ol>
</div>

<section>
<?php get_header(); ?>
<?php if(have_posts()):
            while (have_posts()) :
                the_post();
                the_content();
            endwhile;
        endif; ?>
<?php get_footer(); ?>
</section>
<?php
get_footer();