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
 * @package Contact
 */

get_header();
?>
<main class="suwarikuContainer">
	<div class="suwarikuContentTitle">
		<h1 class="suwarikuContentTitleText">お問い合わせ<span class="en">CONTACT</span></h1>
	</div>
<div class="suwarikuBreadcrumbWrap">
	<ol class="suwarikuBreadcrumb">
		<li class="suwarikuBreadcrumbItem"><a href="../index.html">ホーム</a></li>
		<li class="suwarikuBreadcrumbItem">お問い合わせ</li>
	</ol>
</div>

<section>
	<div class="suwarikuInner suwarikuPtopxl suwarikuPBtm3xl">
		<dl> <dt class="suwarikuText18 suwarikuAlignC">お電話でのお問い合わせはこちら</dt>
		<dd class="suwarikuMtxs">
			<ul class="suwarikuContactUsTel">
			<li class="suwarikuContactUsTelItem"><span class="suwarikuText18">代表</span><i class="icon"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/contact/icon-tel.svg" alt="" width="22" /></i><span class="suwarikuText-30"><a href="tel:0266-52-6193">0266-52-6193</a></span></li>
			</ul>
		</dd>
		<dd class="suwarikuMtxs suwarikuText18 suwarikuAlignC">営業時間/8:50～17:30　休業日/土曜日・日曜日・祝日</dd>
		</dl>
		<hr class="suwarikuHr suwarikuMtl" />
		<div class="suwarikuMtl">
		<h2 class="suwarikuAlignC suwarikuText24">お問い合わせ、ありがとうございます。</h2>
		<p class="suwarikuAlignC suwarikuText18 suwarikuMtxs">改めて、担当者よりご連絡させていただきますので、今しばらくお待ちください。<br>5営業日を過ぎても弊社からのご連絡がない場合は、<br>お手数ではございますが、確認のため弊社お問い合せ窓口にご連絡くださいませ。<br><a href="<?php bloginfo( 'charset' ); ?>">TOPページへ戻る</a></p>
	</div>
</section>
<?php
get_footer();