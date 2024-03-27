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
        <li class="suwarikuAboutNavItem"><a href="<?php bloginfo('url'); ?>/about/" class="is-active">代表挨拶</a></li>
        <li class="suwarikuAboutNavItem"><a href="<?php bloginfo('url'); ?>/about/company/">会社概要</a></li>
        <li class="suwarikuAboutNavItem"><a href="<?php bloginfo('url'); ?>/about/philosophy/">経営理念</a></li>
        <li class="suwarikuAboutNavItem"><a href="<?php bloginfo('url'); ?>/about/links/">リンク</a></li>
      </ul>
  </div>
  <section class="suwarikuPtopxl" id="a-greeting">
    <h2 class="suwarikuLineTitle"><span class="title">代表挨拶</span></h2>
    <div class="suwarikuAboutIndexMv suwarikuMtxl">
      <figure class="suwarikuAboutIndexMvImage"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/about/index/President.jpg" width="1600" height="720" alt=""></figure>
    </div>
    <div class="suwarikuInnerxs suwarikuPtop2xl suwarikuPBtm2xl">
      <h3 class="suwarikuFontSerif suwarikuText34 suwarikuTextlhl">Come together and advance with us forever!<br class="suwarikuPconly">～共に集い、私たちと共に歩みましょう！永遠に！～</h3>
      <p class="suwarikuText18 suwarikuTextlhl suwarikuMt">私ども株式会社スワリクは、諏訪湖、諏訪大社があります高原都市諏訪の地に生まれ、一歩一歩事業領域を成長させ、５０年以上の年月をお客様、従業員、地域の方々と共に歩んでおります。</p>
      <p class="suwarikuText18 suwarikuTextlhl suwarikuMt">当社は、一般貨物輸送から出発し、共同配送物流、倉庫業、物流センター運営、流通加工、サードパーティー物流などを行う総合物流業者となってまいりました。<br>それは、お客様と共に成長したいという思い、従業員が人間的に成長していただきたいという思い、お取引先や地域の方々が良くなっていただきたいという思いを基本理念として事業展開をしております。</p>
      <p class="suwarikuText18 suwarikuTextlhl suwarikuMt">今物流業界は、労働時間問題、IoT、AI、DX、ロボットの導入など、大きくその様相を変えようとしております。<br>当社も新たな物流施設・ITソフト・ソリューションなど積極的に取り入れ、時代の要請する改革に積極的に取り組むと共に、基本的なスワリクフィロソフィを判断基準として、日々精進してまいります。<br>是非私たちと共に成長してまいりましょう。ありがとうございます。</p>
      <p class="suwarikuMtxl suwarikuAlignRight"><span class="suwarikuText-20">代表取締役</span>&nbsp;&nbsp;<span class="suwarikuText32">小池 大洋</span></p>
    </div>
  </section>

  <div class="suwarikuInner suwarikuPtopxl">
      <ul class="suwarikuAboutNav">
      <li class="suwarikuAboutNavItem"><a href="<?php bloginfo('url'); ?>/about/" class="is-active">代表挨拶</a></li>
        <li class="suwarikuAboutNavItem"><a href="<?php bloginfo('url'); ?>/about/company/">会社概要</a></li>
        <li class="suwarikuAboutNavItem"><a href="<?php bloginfo('url'); ?>/about/philosophy/">経営理念</a></li>
        <li class="suwarikuAboutNavItem"><a href="<?php bloginfo('url'); ?>/about/links/">リンク</a></li>
      </ul>
  </div>

</main>
<?php
get_footer();