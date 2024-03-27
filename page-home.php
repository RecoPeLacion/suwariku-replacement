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

<!-- mv -->
<div class="suwarikuHomeIntro">
  <div class="suwarikuHomeIntroLogo"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/common/logo02.svg" alt=""></div>
</div>
<main class="suwarikuContainer">
  <div class="suwarikuHomeMv">
    <script>
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      var player;

      function onYouTubeIframeAPIReady() {
        player = new YT.Player('video_1', {
          videoId: 'NC9D5IZFJUM',
          playerVars: {
            loop: 1,
            height: "100%",
            width: "100%",
            controls: 0,
            autoplay: 1,
            showinfo: 0,
            rel: 0,
            playsinline: 1,
          },
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

      function onPlayerReady(event) {
        event.target.mute();
        setTimeout(function() {
          $('.suwarikuHomeIntro').addClass('off');
          $('.suwarikuHome').addClass('canScroll');
          event.target.playVideo();
        }, 1500);

      }

      var done = false;

      function onPlayerStateChange(event) {
        // 再生終了したとき
        if (event.data == YT.PlayerState.ENDED) {
          player.playVideo();
        }
      }

      function stopVideo() {
        player.stopVideo();
      }
    </script>
    <div class="suwarikuHomeMvvideo">
      <div id=video_1></div>
    </div>
    <div class="suwarikuHomeMvcontent">
      <h1 class="suwarikuHomeMvtitle suwarikuFontEn"><span class="text">Come together and advance</span> <span class="and"></span> <span class="text">with us forever!</span> </h1>
      <p class="suwarikuHomeMvtext">共に集い、私たちと共に歩みましょう！永遠に！</p>
    </div>
    <!-- <div class="suwarikuHomeMvplay">
      <a href="" target="_blank">
        <div class="suwarikuHomeMvplay-text suwarikuFontEn">PLAY FULL MOVIE</div> <i class="suwarikuHomeMvplay-icon"></i> </a>
    </div> -->
  </div>
  <!-- end of mv -->
  <!-- company -->
  <section class="suwarikuHomeCompany suwarikuJsHomeAnima">
    <div class="suwarikuContent">
      <div class="suwarikuHomeContent">
        <h2 class="suwarikuHomeTitle suwarikuJsHomeAnimaItem"> <span class="en suwarikuFontEn">COMPANY</span> <span class="ja">スワリクについて</span> </h2>
        <h3 class="suwarikuText36 suwarikuFontB suwarikuAlignCenter suwarikuJsHomeAnimaItem">これまでの50年、これからの50年</h3>
        <p class="suwarikuMt suwarikuText18 suwarikuAlignCenter suwarikuAlignCPc suwarikuTextlhl suwarikuJsHomeAnimaItem"> スワリクはおかげさまで令和4年に創立50周年を迎える事が出来ました。<br class="suwarikuPconly">これもひとえにお取引先様をはじめ関係者の皆様のおかげであると心から感謝申し上げます。<br class="suwarikuPconly"> そして何より従業員の皆さんとそのご家族の方々の支えがあったからこそ<br> 今日のスワリクが存在しております。<br>私達はこれまでの50年に感謝し、そしてこれからの50年も皆様の暮らしを守るため、<br class="suwarikuPconly">社業に専念してまいります。</p> <a href="<?php bloginfo('url'); ?>/about/#a-greeting" class="suwarikuMtxl suwarikuButton">代表挨拶</a>
      </div>
    </div>
  </section>
  <!-- end of company -->
  <!-- history -->
  <section class="suwarikuHomeHistory suwarikuJsHomeAnima">
    <div id="history" class="suwarikuHomeHistoryMv suwarikuJsHomeAnimaItem">
      <div class="suwarikuHomeHistoryMvItem"> <img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/history02.jpg" width="532" height="476" alt=""> </div>
      <div class="suwarikuHomeHistoryMvItem"> <img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/history01.jpg" width="532" height="476" alt=""> </div>
      <div class="suwarikuHomeHistoryMvItem suwarikuHomeHistoryMvItemTitle">
        <h2 class="suwarikuHomeTitle"> <span class="en suwarikuFontEn">HISTORY</span> <span class="ja suwarikuColorWh">スワリクの歩み</span> </h2>
      </div>
    </div>
    <div class="suwarikuInner">
      <div class="suwarikuHomeHistoryContent">
        <p class="suwarikuText18 suwarikuTextlhl suwarikuColorWh suwarikuJsHomeAnimaItem"> スワリクは昭和47年に小池朝敦によって創業致しました。<br>当初は常温の一般貨物を中心にトラック5台で出発し、長野県内のお客様のニーズにより輸配送業務を拡大して参りました。創業から50年、長野県に8拠点、関東圏に3拠点を有し冷凍冷蔵の食品物流を中心に精密機械に至るまでお客様のご要望にお応え致します。</p>
        <!--<a href="<?php //bloginfo('url'); 
                      ?>/history/" class="suwarikuMtl Suwarikubtn">スワリクの歩みを見る</a> -->
      </div>
    </div>
  </section>
  <!-- end of history -->
  <!-- for recruit -->
  <section class="suwarikuHomeRecruit suwarikuJsHomeAnima">
    <div class="suwarikuContent">
      <div class="suwarikuMt3xl suwarikuHomeContent">
        <h2 class="suwarikuHomeTitle suwarikuJsHomeAnimaItem"> <span class="en en suwarikuFontEn">RECRUIT</span> <span class="ja">採用情報</span> </h2>
        <div class="suwarikuHomeRecruitList">
          <div class="suwarikuHomeRecruitListItem suwarikuJsHomeAnimaItem">
            <figure class="suwarikuHomeRecruitListImage"> <img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/all02.jpg" width="368" height="236" alt=""> </figure>
          </div>
          <div class="suwarikuHomeRecruitListItem suwarikuJsHomeAnimaItem"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="135" viewBox="0 0 440 135">
              <text id="Come_together_and_advance_with_us_forever_" data-name="Come together and 
            advance with us forever!" transform="translate(0 31)" font-size="40" font-family="Europa-Bold" font-weight="700" letter-spacing="-0.025em">
                <tspan x="0" y="0">Come together and </tspan>
                <tspan x="0" y="48">advance with us forever!</tspan>
              </text>
              <text id="共に集い_私たちと共に歩みましょう_永遠に_" data-name="共に集い、私たちと共に歩みましょう！永遠に！" transform="translate(0 133)" font-size="20" font-family="HiraginoSans-W6, Hiragino Sans">
                <tspan x="0" y="0">共に集い、私たちと共に歩みましょう！永遠に！</tspan>
              </text>
            </svg> </div>
        </div>
        <p class="suwarikuText18 suwarikuTextlhl suwarikuAlignCenter suwarikuMtl suwarikuAlignCPc suwarikuJsHomeAnimaItem">スワリクの考え方は、創業以来から変わらない社員一人一人を大切に思い、<br class="suwarikuPconly">家族主義のような関係で仲間を思いやることを大切にしています。<br>社員という大切な財産が、一歩ずつ成長し幸せに成ることを願い、<br class="suwarikuPconly">個性を生かしていく人材育成に努め、適材適所の労働環境を提供していきます。<br class="suwarikuPconly">社員の皆さんがいてくれるからこそ会社が存続できることに感謝し、<br class="suwarikuPconly">会社の更なる成長のために共に、”良い会社”を創りましょう！！</p> <a href="recruit/" class="suwarikuMtxl suwarikuButton">採用情報を見る</a>
      </div>
    </div>
  </section>
  <!-- end of recruit -->
  <!-- for service -->
  <section class="suwarikuHomeService">
    <div class="suwarikuContent">
      <div class="suwarikuJsHomeAnima">
        <h2 class="suwarikuHomeTitle suwarikuJsHomeAnimaItem"> <span class="en suwarikuFontEn">SERVICE</span> <span class="ja">事業紹介</span> </h2>
      </div>
      <div class="suwarikuHomeServiceMain suwarikuJsHomeAnima">
        <figure class="suwarikuHomeServiceMainMv suwarikuJsHomeAnimaItem">
          <img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/warehouse04.jpg" width="696" height="576" alt="">
        </figure>
        <div class="suwarikuHomeServiceMainContent">
          <div class="suwarikuHomeServiceMainImage">
            <div class="suwarikuHomeServiceMainImageInner"> <img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/warehouse01.jpg" width="448" height="336" alt="" class="suwarikuJsHomeAnimaItem">
              <div class="suwarikuHomeServiceMainImageS suwarikuJsHomeAnimaItem"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/warehouse02.jpg" width="324" height="242" alt=""></div>
            </div>
          </div>
          <div class="suwarikuHomeServiceMainItem suwarikuJsHomeAnima">
            <a href="<?php bloginfo('url'); ?>/service/#warehouse">
              <h3 class="suwarikuHomeTitleS"> <span class="ja">常温 冷凍 冷蔵倉庫業</span> <span class="en suwarikuFontEn">WAREHOUSE</span> </h3>
              <p class="suwarikuMt suwarikuText18 suwarikuColorWh">私達スワリクの基幹業務の一つは、冷凍冷蔵倉庫です。生活に必要不可欠である食品の流通を確保するのが私たちの使命です。私達は倉庫業を通じて皆様の生活を支え続けます。</p>
            </a>
          </div>
        </div>
      </div>
      <section class="suwarikuMtxl suwarikuJsHomeAnima">
        <h4 class="suwarikuHomeServiceTitle suwarikuFontB suwarikuText24 suwarikuJsHomeAnimaItem"><span class="title">倉庫/営業所 一覧</span></h4>
        <div class="suwarikuHomeServiceContent">
          <ul class="suwarikuHomeServiceList suwarikuJsHomeAnimaItem">
            <li class="suwarikuHomeServiceListItem">
              <a href="<?php bloginfo('url'); ?>/service/#suwa-butsuryu">
                <figure class="suwarikuHomeServiceListImage"> <img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/suwaButsuryu.jpg" width="264" height="168" alt=""> </figure>
                <h5 class="suwarikuIconTitle suwarikuFontB suwarikuText14 suwarikuMts">諏訪物流センター</h5>
              </a>
            </li>
            <li class="suwarikuHomeServiceListItem">
              <a href="<?php bloginfo('url'); ?>/service/#">
                <figure class="suwarikuHomeServiceListImage"> <img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/suwaTeion.jpg" width="264" height="168" alt=""> </figure>
                <h5 class="suwarikuIconTitle suwarikuFontB suwarikuText14 suwarikuMts">諏訪低温物流センター</h5>
              </a>
            </li>
            <li class="suwarikuHomeServiceListItem">
              <a href="<?php bloginfo('url'); ?>/service/#">
                <figure class="suwarikuHomeServiceListImage"> <img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/naganoTeion.jpg" width="264" height="168" alt=""> </figure>
                <h5 class="suwarikuIconTitle suwarikuFontB suwarikuText14 suwarikuMts">長野低温物流センター</h5>
              </a>
            </li>
            <li class="suwarikuHomeServiceListItem">
              <a href="<?php bloginfo('url'); ?>/service/#">
                <figure class="suwarikuHomeServiceListImage"> <img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/saitamaReizo.jpeg" width="264" height="168" alt=""> </figure>
                <h5 class="suwarikuIconTitle suwarikuFontB suwarikuText14 suwarikuMts">埼玉冷蔵倉庫</h5>
              </a>
            </li>
            <li class="suwarikuHomeServiceListItem">
              <a href="<?php bloginfo('url'); ?>/service/#">
                <figure class="suwarikuHomeServiceListImage"> <img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/chibawakabaTeion.jpg" width="264" height="168" alt=""> </figure>
                <h5 class="suwarikuIconTitle suwarikuFontB suwarikuText14 suwarikuMts">千葉若葉低温物流センター</h5>
              </a>
            </li>
            <li class="suwarikuHomeServiceListItem">
              <a href="<?php bloginfo('url'); ?>/service/#">
                <figure class="suwarikuHomeServiceListImage"> <img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/chibaTeion.jpg" width="264" height="168" alt=""> </figure>
                <h5 class="suwarikuIconTitle suwarikuFontB suwarikuText14 suwarikuMts">千葉低温物流センター</h5>
              </a>
            </li>
          </ul>
        </div>
      </section>
      <div class="suwarikuHomeServiceMain suwarikuJsHomeAnima">
        <figure class="suwarikuHomeServiceMainMv suwarikuJsHomeAnimaItem">
          <img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/tracking01.jpg" width="696" height="576" alt="">
        </figure>
        <div class="suwarikuHomeServiceMainContent">
          <div class="suwarikuHomeServiceMainImage">
            <div class="suwarikuHomeServiceMainImageInner">
              <img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/warehouse03.jpg" width="448" height="336" alt="" class="suwarikuJsHomeAnimaItem">
              <div class="suwarikuHomeServiceMainImageS suwarikuJsHomeAnimaItem">
                <img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/transportaion01.jpg" width="324" height="242" alt="">
              </div>
            </div>
          </div>
          <div class="suwarikuHomeServiceMainItem suwarikuJsHomeAnimaItem">
            <a href="<?php bloginfo('url'); ?>/service/#transportation">
              <h3 class="suwarikuHomeTitleS"> <span class="ja">輸配送業務</span> <span class="en suwarikuFontEn">TRANSPORTATION</span> </h3>
              <p class="suwarikuMt suwarikuText18 suwarikuColorWh">日本国内では物流の殆どをトラック輸送に依存しております。私達はお客様のために24時間、365日運び続けます。私達はお客様の物流部門です。</p>
            </a>
          </div>
        </div>
      </div>
      <section class="suwarikuMtxl suwarikuJsHomeAnima">
        <h4 class="suwarikuHomeServiceTitle suwarikuFontB suwarikuText24 suwarikuJsHomeAnimaItem"><span class="title">倉庫/営業所 一覧</span></h4>
        <div class="suwarikuHomeServiceContent">
          <ul class="suwarikuHomeServiceList suwarikuJsHomeAnimaItem">
            <li class="suwarikuHomeServiceListItem">
              <a href="<?php bloginfo('url'); ?>/service/#">
                <figure class="suwarikuHomeServiceListImage"> <img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/honsya.jpg" width="264" height="168" alt=""> </figure>
                <h5 class="suwarikuIconTitle suwarikuFontB suwarikuText14 suwarikuMts">本社・諏訪営業所</h5>
              </a>
            </li>
            <li class="suwarikuHomeServiceListItem">
              <a href="<?php bloginfo('url'); ?>/service/#">
                <figure class="suwarikuHomeServiceListImage"> <img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/shiojiriEigyousyo.jpg" width="264" height="168" alt=""> </figure>
                <h5 class="suwarikuIconTitle suwarikuFontB suwarikuText14 suwarikuMts">松本・塩尻事業所</h5>
              </a>
            </li>
            <li class="suwarikuHomeServiceListItem">
              <a href="<?php bloginfo('url'); ?>/service/#">
                <figure class="suwarikuHomeServiceListImage"> <img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/kanagawaEigyousyo.jpg" width="264" height="168" alt=""> </figure>
                <h5 class="suwarikuIconTitle suwarikuFontB suwarikuText14 suwarikuMts">神奈川営業所</h5>
              </a>
            </li>
            <li class="suwarikuHomeServiceListItem">
              <a href="<?php bloginfo('url'); ?>/service/#">
                <figure class="suwarikuHomeServiceListImage"> <img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/inaEigyousyo.jpg" width="264" height="168" alt=""> </figure>
                <h5 class="suwarikuIconTitle suwarikuFontB suwarikuText14 suwarikuMts">伊那営業所</h5>
              </a>
            </li>
            <li class="suwarikuHomeServiceListItem">
              <a href="<?php bloginfo('url'); ?>/service/#">
                <figure class="suwarikuHomeServiceListImage"> <img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/iidaEigyousyo.jpg" width="264" height="168" alt=""> </figure>
                <h5 class="suwarikuIconTitle suwarikuFontB suwarikuText14 suwarikuMts">飯田営業所</h5>
              </a>
            </li>
          </ul>
        </div>
      </section>
    </div>
  </section>
  <!-- end of service -->
  <!-- information -->
  <section class="suwarikuHomeInformation suwarikuJsHomeAnima">
    <h2 class="suwarikuHomeTitle suwarikuJsHomeAnimaItem"> <span class="en suwarikuFontEn">INFORMATION</span> <span class="ja">お知らせ</span> </h2>
    <div class="suwarikuInner">
      <div class="suwarikuHomeTopicsBox">
        <ul class="suwarikuHomeInformationList suwarikuJsHomeAnimaItem">
          <?php // the query
          $wpb_all_query = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 20));
          ?>
          <?php if ($wpb_all_query->have_posts()) : ?>
            <!-- the loop -->
            <?php while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>
              <li class="suwarikuHomeInformationListItem"><a href="<?php echo the_permalink(); ?>">
                  <time class="datetime suwarikuText14" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                  <p class="suwarikuText18 suwarikuLinkText"><?php echo wp_trim_words(get_the_title(), 26, '…'); ?></p>
                </a>
              </li>
            <?php endwhile; ?>
          <?php endif ?>
        </ul>
        <a href="<?php bloginfo('url'); ?>/information/" class="suwarikuMtl suwarikuButton">一覧はこちら</a>
      </div>
    </div>
  </section>
  <!-- end of information -->
  <!-- for rent -->
  <div class="suwarikuJsHomeAnima">
    <div class="suwarikuHomeGalleryWrap">
      <ul class="suwarikuHomeGallery suwarikuJsHomeAnimaItem">
        <li class="suwarikuHomeGalleryItem"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/gallery01.jpg" width="228" height="228" alt=""></li>
        <li class="suwarikuHomeGalleryItem"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/gallery12.jpg" width="228" height="228" alt=""></li>
        <li class="suwarikuHomeGalleryItem"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/gallery06.jpg" width="228" height="228" alt=""></li>
        <li class="suwarikuHomeGalleryItem"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/gallery02.jpg" width="228" height="228" alt=""></li>
        <li class="suwarikuHomeGalleryItem"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/gallery05.jpg" width="228" height="228" alt=""></li>
        <li class="suwarikuHomeGalleryItem"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/gallery09.jpg" width="228" height="228" alt=""></li>
        <li class="suwarikuHomeGalleryItem"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/gallery14.jpg" width="228" height="228" alt=""></li>
      </ul>
      <ul class="suwarikuHomeGallery suwarikuJsHomeAnimaItem">
        <li class="suwarikuHomeGalleryItem"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/gallery08.jpg" width="228" height="228" alt=""></li>
        <li class="suwarikuHomeGalleryItem"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/gallery10.jpg" width="228" height="228" alt=""></li>
        <li class="suwarikuHomeGalleryItem"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/gallery13.jpg" width="228" height="228" alt=""></li>
        <li class="suwarikuHomeGalleryItem"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/gallery11.jpg" width="228" height="228" alt=""></li>
        <li class="suwarikuHomeGalleryItem"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/gallery15.jpg" width="228" height="228" alt=""></li>
        <li class="suwarikuHomeGalleryItem"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/gallery04.jpg" width="228" height="228" alt=""></li>
        <li class="suwarikuHomeGalleryItem"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/index/gallery07.jpg" width="228" height="228" alt=""></li>
      </ul>
    </div>
  </div>
</main>

<?php
get_footer();
