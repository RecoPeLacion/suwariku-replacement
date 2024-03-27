<?php
/**
 * The template for displaying all pages
 * Template Name: Service
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Service
 */

get_header();
?>
		<main class="suwarikuContainer">
			<div class="suwarikuContentTitle">
				<h1 class="suwarikuContentTitleText">事業紹介<span class="en">SERVICE</span></h1>
			</div>
		<div class="suwarikuBreadcrumbWrap">
			<ol class="suwarikuBreadcrumb">
				<li class="suwarikuBreadcrumbItem"><a href="<?php bloginfo('url'); ?>">ホーム</a></li>
				<li class="suwarikuBreadcrumbItem">事業紹介</li>
			</ol>
		</div>

			<section id="a-movie">
				<div class="suwarikuServiceMv">
					<h2 class="suwarikuFontEn suwarikuText40 suwarikuColorYellow suwarikuAlignCenter">経営理念</h2>
					<p class="suwarikuMt suwarikuAlignCenter suwarikuAlignCPc suwarikuColorWh suwarikuText18 suwarikuTextlhl">
						私たちは、物流業務を通じて、<br class="suwarikuPconly">全従業員の物心両面の豊かさを実現すると共に、<br class="suwarikuPconly">お客様と社会の発展に貢献します。
					</p>
				</div>
			</section>

			<section class="suwarikuBgLbl">
				<div class="suwarikuPtop4xl suwarikuPBtm4xl suwarikuInner">
					<ul class="m-service-list">
						<li class="suwarikuServiceListItem suwarikuJsServiceAnima">
							<a href="<?php bloginfo('url'); ?>/service/#warehouse">
								<figure class="suwarikuServiceListImage suwarikuJsServiceAnimaItem">
									<!-- <img src="<?php //echo get_template_directory_uri(); ?>/resources/images/service/" width="576" height="368" alt=""> -->
								</figure>
								<div class="suwarikuServiceListContent">
									<h3 class="suwarikuIconTitle suwarikuFontB"><span class="suwarikuText32">倉庫業</span><br><span class="suwarikuFontEn3 suwarikuColorYellow suwarikuText14">WAREHOUSE</span></h3>
								</div>
							</a>
						</li>

						<li class="suwarikuServiceListItem suwarikuJsServiceAnima">
							<a href="<?php bloginfo('url'); ?>/service/#transportation">
								<figure class="suwarikuServiceListImage suwarikuJsServiceAnimaItem">
									<!-- <img src="<?php //echo get_template_directory_uri(); ?>/resources/images/service/" width="576" height="368" alt=""> -->
								</figure>
								<div class="suwarikuServiceListContent">
									<h3 class="suwarikuIconTitle suwarikuFontB"><span class="suwarikuText32">輸送業</span><br><span class="suwarikuFontEn3 suwarikuColorYellow suwarikuText14">TRANSPORTATION</span></h3>
								</div>
							</a>
						</li>

						<li class="suwarikuServiceListItem suwarikuJsServiceAnima">
							<a href="<?php bloginfo('url'); ?>/service/#others">
								<figure class="suwarikuServiceListImage suwarikuJsServiceAnimaItem">
									<!-- <img src="<?php //echo get_template_directory_uri(); ?>/resources/images/service/" width="576" height="368" alt=""> -->
								</figure>
								<div class="suwarikuServiceListContent">
									<h3 class="suwarikuIconTitle suwarikuFontB"><span class="suwarikuText32">その他</span><br><span class="suwarikuFontEn3 suwarikuColorYellow suwarikuText14">OTHERS</span></h3>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</section>
			<div class="suwarikuContentTitle">
				<h1 class="suwarikuContentTitleText" id="warehouse">倉庫・3PL事業<span class="en">WAREHOUSE</span></h1>
			</div>

			<section>
				<div class="suwarikuInner suwarikuPtopl suwarikuPBtml">
					<p class="suwarikuText24 suwarikuTextlhl suwarikuFontSerif suwarikuAlignCenter suwarikuAlignCPc">
						私たちは倉庫業の使命である、<br class="suwarikuPconly">「生活に必要な物資を安全かつ効率的に保管することにより、<br class="suwarikuPconly">人々の生活に利便性と安定をもたらす。」ということに真剣に取り組み続けます。
					</p>
					<h2 class="suwarikuMtxl suwarikuLineTitle"><span class="title">物流センター一覧</span></h2>
					<p class="suwarikuMtl suwarikuAlignCenter suwarikuAlignCPc suwarikuText18 suwarikuTextlhl">
						常温・低温・冷凍の各品目の保管倉庫に加え、集荷-保管-仕分け-ピッキング-物流加工-配送の一環3PL業務を行っており、<br class="suwarikuPconly">荷主企業様のあらゆるニーズにお応えします。
					</p>
				</div>


				<section class="suwarikuServiceWarehouseItem">
					<div id="suwa-butsuryu" class="suwarikuInner suwarikuPtop3xl suwarikuPBtm3xl">
						<div class="suwarikuServiceWarehouseItemCol">
							<figure class="suwarikuServiceWarehouseItemColImage">
								<a href="#" class="suwarikuOp"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/suwaButsuryu.jpg" width="472" height="300" alt=""></a>
							</figure>
							<div class="suwarikuServiceWarehouseItemColContent">
								<h3 class="suwarikuServiceWarehouseItemTitle suwarikuFontB suwarikuText30">諏訪物流センター</h3>
								<div class="suwarikuServiceWarehouseItemContent suwarikuMt">
									<dl class="suwarikuText18">
										<dt class="suwarikuFontB">所在地・連絡先：</dt>
										<dd>〒392-0016　長野県諏訪市豊田1070</dd>
										<dd>TEL : 0266-52-6193</dd>
										<dd>FAX : 0266-52-6156</dd>
									</dl>
									<a href="<?php bloginfo('url'); ?>/office/suwa/" class="link-btn">詳細へ</a>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="suwarikuServiceWarehouseItem">
					<div id="suwa-teion" class="suwarikuInner suwarikuPtop3xl suwarikuPBtm3xl">
						<div class="suwarikuServiceWarehouseItemCol">
							<figure class="suwarikuServiceWarehouseItemColImage">
								<a href="#" class="suwarikuOp"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/suwaTeion.jpg" width="472" height="300" alt=""></a>
							</figure>
							<div class="suwarikuServiceWarehouseItemColContent">
								<h3 class="suwarikuServiceWarehouseItemTitle suwarikuFontB suwarikuText30">諏訪低温センター</h3>
								<div class="suwarikuServiceWarehouseItemContent suwarikuMt">
									<dl class="suwarikuText18">
										<dt class="suwarikuFontB">所在地・連絡先：</dt>
										<dd>〒392-0131　長野県諏訪市湖南3873</dd>
										<dd>TEL : 0266-52-6193</dd>
										<dd>FAX : 0266-52-6156</dd>
									</dl>
									<a href="<?php bloginfo('url'); ?>/office/suwa/#suwa-second" class="link-btn">詳細へ</a>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="suwarikuServiceWarehouseItem">
					<div id="nagano-teion" class="suwarikuInner suwarikuPtop3xl suwarikuPBtm3xl">
						<div class="suwarikuServiceWarehouseItemCol">
							<figure class="suwarikuServiceWarehouseItemColImage">
								<a href="#" class="suwarikuOp"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/naganoTeion.jpg" width="472" height="300" alt=""></a>
							</figure>
							<div class="suwarikuServiceWarehouseItemColContent">
								<h3 class="suwarikuServiceWarehouseItemTitle suwarikuFontB suwarikuText30">長野低温物流センター</h3>
								<div class="suwarikuServiceWarehouseItemContent suwarikuMt">
									<dl class="suwarikuText18">
										<dt class="suwarikuFontB">所在地・連絡先：</dt>
										<dd>〒381-2212　長野県長野市小島田町1881</dd>
										<dd>TEL : 026-214-6722</dd>
										<dd>FAX : 026-214-6779</dd>
									</dl>
									<a href="<?php bloginfo('url'); ?>/office/nagano/" class="link-btn">詳細へ</a>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="suwarikuServiceWarehouseItem">
					<div id="shiojiri" class="suwarikuInner suwarikuPtop3xl suwarikuPBtm3xl">
						<div class="suwarikuServiceWarehouseItemCol">
							<figure class="suwarikuServiceWarehouseItemColImage">
								<a href="#" class="suwarikuOp"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/shiojiriEigyousyo.jpg" width="472" height="300" alt=""></a>
							</figure>
							<div class="suwarikuServiceWarehouseItemColContent">
								<h3 class="suwarikuServiceWarehouseItemTitle suwarikuFontB suwarikuText30">塩尻事業所</h3>
								<div class="suwarikuServiceWarehouseItemContent suwarikuMt">
									<dl class="suwarikuText18">
										<dt class="suwarikuFontB">所在地・連絡先：</dt>
										<dd>〒399-0702　長野県塩尻市広丘野村角前1817 NECロジスティクス倉庫内</dd>
										<dd>TEL : 0263-51-5580</dd>
										<dd>FAX : 0263-51-5581</dd>
									</dl>
									<a href="<?php bloginfo('url'); ?>/office/shiojiri/#shiojiri" class="link-btn">詳細へ</a>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="suwarikuServiceWarehouseItem">
					<div id="saitama-reizo" class="suwarikuInner suwarikuPtop3xl suwarikuPBtm3xl">
						<div class="suwarikuServiceWarehouseItemCol">
							<figure class="suwarikuServiceWarehouseItemColImage">
								<a href="#" class="suwarikuOp"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/saitamaReizo.jpeg" width="472" height="300" alt=""></a>
							</figure>
							<div class="suwarikuServiceWarehouseItemColContent">
								<h3 class="suwarikuServiceWarehouseItemTitle suwarikuFontB suwarikuText30">埼玉冷蔵倉庫</h3>
								<div class="suwarikuServiceWarehouseItemContent suwarikuMt">
									<dl class="suwarikuText18">
										<dt class="suwarikuFontB">所在地・連絡先：</dt>
										<dd>〒350-0168　埼玉県比企郡川島町かわしま2-7</dd>
										<dd>TEL : 049-227-3801</dd>
										<dd>FAX : 049-227-3803</dd>
									</dl>
									<a href="<?php bloginfo('url'); ?>/office/saitama/" class="link-btn">詳細へ</a>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="suwarikuServiceWarehouseItem">
					<div id="chibawakaba-reizo" class="suwarikuInner suwarikuPtop3xl suwarikuPBtm3xl">
						<div class="suwarikuServiceWarehouseItemCol">
							<figure class="suwarikuServiceWarehouseItemColImage">
								<a href="#" class="suwarikuOp"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/chibaTeion.jpg" width="472" height="300" alt=""></a>
							</figure>
							<div class="suwarikuServiceWarehouseItemColContent">
								<h3 class="suwarikuServiceWarehouseItemTitle suwarikuFontB suwarikuText30">千葉若葉低温物流センター</h3>
								<div class="suwarikuServiceWarehouseItemContent suwarikuMt">
									<dl class="suwarikuText18">
										<dt class="suwarikuFontB">所在地・連絡先：</dt>
										<dd>〒264-0021　千葉県千葉市若葉区若葉若松町2249番地1</dd>
										<dd>TEL : 043-235-7557</dd>
										<dd>FAX : 043-235-7787</dd>
									</dl>
									<a href="<?php bloginfo('url'); ?>/office/chiba/" class="link-btn">詳細へ</a>
								</div>
							</div>
						</div>
					</div>
				</section>
			</section>

			<section class="suwarikuServiceWarehouseItem">
					<div id="chiba-reizo" class="suwarikuInner suwarikuPtop3xl suwarikuPBtm3xl">
						<div class="suwarikuServiceWarehouseItemCol">
							<figure class="suwarikuServiceWarehouseItemColImage">
								<a href="#" class="suwarikuOp"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/chibawakabaTeion.jpg" width="472" height="300" alt=""></a>
							</figure>
							<div class="suwarikuServiceWarehouseItemColContent">
								<h3 class="suwarikuServiceWarehouseItemTitle suwarikuFontB suwarikuText30">千葉第二低温物流センター</h3>
								<div class="suwarikuServiceWarehouseItemContent suwarikuMt">
									<dl class="suwarikuText18">
										<dt class="suwarikuFontB">所在地・連絡先：</dt>
										<dd>〒264-0021　千葉県千葉市若葉若松町2301-1　D棟</dd>
										<dd>TEL : 043-235-7557</dd>
										<dd>FAX : 043-235-7787</dd>
									</dl>
									<a href="<?php bloginfo('url'); ?>/office/chiba/#chiba-second" class="link-btn">詳細へ</a>
								</div>
							</div>
						</div>
					</div>
				</section>
			</section>

			<div class="suwarikuContentTitle">
				<h1 class="suwarikuContentTitleText" id="transportation">輸送業<span class="en">TRANSPORTATION</span></h1>
			</div>

			<section>
				<div class="suwarikuInner suwarikuPtopl suwarikuPBtml">
					<p class="suwarikuText24 suwarikuTextlhl suwarikuFontSerif suwarikuAlignCenter suwarikuAlignCPc">
						私たち輸送業の使命は、<br class="suwarikuPconly">お客様に滞りの無い物流を提供することです。<br class="suwarikuPconly">輸送、倉庫の一貫物流でお客様のサプライチェーンを創造します。
					</p>
					<h2 class="suwarikuMtxl suwarikuLineTitle"><span class="title">事業所一覧</span></h2>
					<p class="suwarikuMtl suwarikuAlignCenter suwarikuAlignCPc suwarikuText18 suwarikuTextlhl">
						常温・低温・冷凍の各品目の保管倉庫に加え、危険品倉庫ならびに文書箱保管倉庫を備えており、<br class="suwarikuPconly">荷主企業のあらゆるニーズにお応えします。
					</p>
				</div>


				<section class="suwarikuServiceWarehouseItem">
					<div id="honsya" class="suwarikuInner suwarikuPtop3xl suwarikuPBtm3xl">
						<div class="suwarikuServiceWarehouseItemCol">
							<figure class="suwarikuServiceWarehouseItemColImage">
								<a href="#" class="suwarikuOp"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/honsya.jpg" width="472" height="300" alt=""></a>
							</figure>
							<div class="suwarikuServiceWarehouseItemColContent">
								<h3 class="suwarikuServiceWarehouseItemTitle suwarikuFontB suwarikuText30">本社営業所</h3>
								<div class="suwarikuServiceWarehouseItemContent suwarikuMt">
									<dl class="suwarikuText18">
										<dt class="suwarikuFontB">所在地・連絡先：</dt>
										<dd>〒392-0016　長野県諏訪市豊田1070</dd>
										<dd>TEL : 0266-52-6193</dd>
										<dd>FAX : 0266-52-6156</dd>
									</dl>
									<a href="<?php bloginfo('url'); ?>/office/honsya/" class="link-btn">詳細へ</a>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="suwarikuServiceWarehouseItem">
					<div id="matsumoto" class="suwarikuInner suwarikuPtop3xl suwarikuPBtm3xl">
						<div class="suwarikuServiceWarehouseItemCol">
							<figure class="suwarikuServiceWarehouseItemColImage">
								<a href="#" class="suwarikuOp"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/matsumoto.jpg" width="472" height="300" alt=""></a>
							</figure>
							<div class="suwarikuServiceWarehouseItemColContent">
								<h3 class="suwarikuServiceWarehouseItemTitle suwarikuFontB suwarikuText30">松本営業所</h3>
								<div class="suwarikuServiceWarehouseItemContent suwarikuMt">
									<dl class="suwarikuText18">
										<dt class="suwarikuFontB">所在地・連絡先：</dt>
										<dd>〒399-0004　長野県松本市市場10-3</dd>
										<dd>TEL : 0263-24-3345</dd>
										<dd>FAX : 0263-24-3346</dd>
									</dl>
									<a href="<?php bloginfo('url'); ?>/office/shiojiri/" class="link-btn">詳細へ</a>
								</div>
							</div>
						</div>
					</div>
				</section>

				<!-- <section class="suwarikuServiceWarehouseItem">
					<div id="shiojiri" class="suwarikuInner suwarikuPtop3xl suwarikuPBtm3xl">
						<div class="suwarikuServiceWarehouseItemCol">
							<figure class="suwarikuServiceWarehouseItemColImage">
								<a href="#" class="suwarikuOp"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/shiojiriEigyousyo.jpg" width="472" height="300" alt=""></a>
							</figure>
							<div class="suwarikuServiceWarehouseItemColContent">
								<h3 class="suwarikuServiceWarehouseItemTitle suwarikuFontB suwarikuText30">塩尻事業所</h3>
								<div class="suwarikuServiceWarehouseItemContent suwarikuMt">
									<dl class="suwarikuText18">
										<dt class="suwarikuFontB">所在地・連絡先：</dt>
										<dd>〒399-0702　長野県塩尻市広丘野村角前1817 NECロジスティクス倉庫内</dd>
										<dd>TEL : 0263-51-5580</dd>
										<dd>FAX : 0263-51-5581</dd>
									</dl>
									<a href="<?php bloginfo('url'); ?>/office/shiojiri/#shiojiri" class="link-btn">詳細へ</a>
								</div>
							</div>
						</div>
					</div>
				</section> -->

				<section class="suwarikuServiceWarehouseItem">
					<div id="kanagawa" class="suwarikuInner suwarikuPtop3xl suwarikuPBtm3xl">
						<div class="suwarikuServiceWarehouseItemCol">
							<figure class="suwarikuServiceWarehouseItemColImage">
								<a href="#" class="suwarikuOp"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/kanagawaEigyousyo.jpg" width="472" height="300" alt=""></a>
							</figure>
							<div class="suwarikuServiceWarehouseItemColContent">
								<h3 class="suwarikuServiceWarehouseItemTitle suwarikuFontB suwarikuText30">神奈川営業所</h3>
								<div class="suwarikuServiceWarehouseItemContent suwarikuMt">
									<dl class="suwarikuText18">
										<dt class="suwarikuFontB">所在地・連絡先：</dt>
										<dd>〒252-0002　神奈川県座間市小松原1-1-43</dd>
										<dd>TEL : 046-205-1660</dd>
										<dd>FAX : 046-205-1661</dd>
									</dl>
									<a href="<?php bloginfo('url'); ?>/office/kanagawa/" class="link-btn">詳細へ</a>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="suwarikuServiceWarehouseItem">
					<div id="ina" class="suwarikuInner suwarikuPtop3xl suwarikuPBtm3xl">
						<div class="suwarikuServiceWarehouseItemCol">
							<figure class="suwarikuServiceWarehouseItemColImage">
								<a href="#" class="suwarikuOp"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/inaEigyousyo.jpg" width="472" height="300" alt=""></a>
							</figure>
							<div class="suwarikuServiceWarehouseItemColContent">
								<h3 class="suwarikuServiceWarehouseItemTitle suwarikuFontB suwarikuText30">伊那営業所</h3>
								<div class="suwarikuServiceWarehouseItemContent suwarikuMt">
									<dl class="suwarikuText18">
										<dt class="suwarikuFontB">所在地・連絡先：</dt>
										<dd>〒399-4511　長野県上伊那郡南箕輪村中の原9902-5</dd>
										<dd>TEL : 0265-74-8578</dd>
										<dd>FAX : 0265-74-8556</dd>
									</dl>
									<a href="<?php bloginfo('url'); ?>/office/ina/" class="link-btn">詳細へ</a>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="suwarikuServiceWarehouseItem">
					<div id="iida" class="suwarikuInner suwarikuPtop3xl suwarikuPBtm3xl">
						<div class="suwarikuServiceWarehouseItemCol">
							<figure class="suwarikuServiceWarehouseItemColImage">
								<a href="#" class="suwarikuOp"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/iidaEigyousyo.jpg" width="472" height="300" alt=""></a>
							</figure>
							<div class="suwarikuServiceWarehouseItemColContent">
								<h3 class="suwarikuServiceWarehouseItemTitle suwarikuFontB suwarikuText30">飯田営業所</h3>
								<div class="suwarikuServiceWarehouseItemContent suwarikuMt">
									<dl class="suwarikuText18">
										<dt class="suwarikuFontB">所在地・連絡先：</dt>
										<dd>〒395-0811　長野県飯田市松尾上溝2910-30</dd>
										<dd>TEL : 000-000-0000</dd>
										<dd>FAX : 000-000-0000</dd>
									</dl>
									<a href="<?php bloginfo('url'); ?>/office/ina/#iida" class="link-btn">詳細へ</a>
								</div>
							</div>
						</div>
					</div>
				</section>
			</section>

			<div class="suwarikuContentTitle">
				<h1 class="suwarikuContentTitleText" id="others">その他<span class="en">OTHERS</span></h1>
			</div>

			<section>
				<div class="suwarikuInner suwarikuPtopl suwarikuPBtml">
					<p class="suwarikuText24 suwarikuTextlhl suwarikuFontSerif suwarikuAlignCenter suwarikuAlignCPc">
						輸出入通関業務、太陽光発電<br class="suwarikuPconly">「生活に必要な物資を安全かつ効率的に保管することにより、<br class="suwarikuPconly">人々の生活に利便性と安定をもたらす。」ということに真剣に取り組み続けます。
					</p>
				</div>


				<section class="suwarikuServiceWarehouseItem">
					<div class="suwarikuInner suwarikuPtop3xl suwarikuPBtm3xl">
						<div class="suwarikuServiceWarehouseItemCol">
							<figure class="suwarikuServiceWarehouseItemColImage">
								<a href="#" class="suwarikuOp"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/service/taiyoukou07.jpeg" width="472" height="300" alt=""></a>
							</figure>
							<div class="suwarikuServiceWarehouseItemColContent">
								<h3 class="suwarikuServiceWarehouseItemTitle suwarikuFontB suwarikuText30">原村発電所</h3>
								<div class="suwarikuServiceWarehouseItemContent suwarikuMt">
									<dl class="suwarikuText18">
										<dt class="suwarikuFontB">所在地・連絡先：</dt>
										<dd>〒391-0106　長野県諏訪郡原村菖蒲沢10691他（中央自動車道下り線原パーキングエリア）</dd>
									</dl>
								</div>
							</div>
						</div>
					</div>
				</section>
			</section>

		</main>
<?php
get_footer();