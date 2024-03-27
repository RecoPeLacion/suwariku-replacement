<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TEMPLATENAME
 */
	$fav = esc_attr( get_option( 'favicon_url' ) );
	$logo = esc_attr( get_option( 'logo_url' ) );
	$fb = esc_attr( get_option('fb_url') );
	$twit = esc_attr( get_option('twitter_url') );
	$insta = esc_attr( get_option('insta_url') );
	$addressUrl = nl2br(esc_attr( get_option( 'address_url' ) ));
	$phoneUrl = esc_attr( get_option( 'phone_url' ) );
	$copyright = esc_attr( get_option( 'copyright_url' ) );
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta property="og:site_name" content="株式会社スワリク">
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/resources/images/meta/ogp.jpg?v1">
	<meta property="og:url" content="https://www.suwariku.co.jp/">
	<meta property="og:type" content="website">
	<meta property="og:locale" content="ja_JP">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/resources/images/meta/favicon.ico" type="image/vnd.microsoft.icon">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/resources/images/meta/favicon.ico" type="image/vnd.microsoft.icon">	
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/resources/images/meta/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/resources/images/meta/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/resources/images/meta/android-chrome-512x512.png" sizes="512x512">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/resources/images/meta/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/resources/images/meta/favicon-32x32.png" sizes="32x32">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/resources/images/meta/site.webmanifest.txt">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/resources/images/meta/safari-pinned-tab.svg" color="#000000">
	<meta name="msapplication-TileColor" content="#000000">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/resources/images/meta/mstile-150x150.png">
	<script type='text/javascript' src='https://code.jquery.com/jquery-1.12.4.min.js' id='jquery-js'></script>
    <script type='text/javascript' src='https://code.jquery.com/jquery-migrate-1.4.1.min.js' id='jquery_migrate-js'></script>
	<link rel="stylesheet" href="https://use.typekit.net/tsy7bnt.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/resources/css/common.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/resources/css/style-min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
	<meta name='robots' content='max-image-preview:large' />
	<link rel='dns-prefetch' href='https://code.jquery.com' />
	<link rel='dns-prefetch' href='https://s.w.org' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
		<?php
		bloginfo('name');
		echo ' | ';
        if (wp_title('', false)) {
			echo "";
        } else {
            echo bloginfo('description');
        } wp_title('');
		?>
	</title>
    <link rel="icon" href="<?php echo $fav; ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
	<?php wp_head(); ?>
	<?php 
		$custom_css = get_option( 'theme_css' );
		if(!empty($custom_css)) {
			?>
				<?php echo '<style type="text/css">'. $custom_css. '</style> '; ?>
			<?php
		}
	?>
</head>

<body class="<?php if(is_front_page()) {echo 'suwarikuHome';}else {echo 'suwariku'.the_title();} ?> suwarikuIndex suwarikuNoScroll">
  <!-- Google Tag Manager (noscript) --><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div id="suwarikuWrap">
	<header class="suwarikuHeader">
      <div class="suwarikuHeaderinner">
		<a href="<?php bloginfo('url'); ?>" class="suwarikuHeaderlogo">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 235 56.27"><defs><style>.a{fill:#000;}.a,.b{fill-rule:evenodd;}.b{fill:#e50012;}</style></defs><path class="a" d="M18.38,46.05l-13.57.06c-7.59,19,4.6,16.06,20.55,15.58,7.73-.23,10.83-4.69,14.09-16.61,2.56-9.33-3.11-11.16-8.23-13.57l.69-2.76c.16,0,8.31,0,13.9,0C51.45,12,36.5,14.25,35.56,14.41L46,5.93,33.33,5.86,9,25.26,5.77,38.82l6.72-5.46c.75,3.09,4.24,4.63,7.64,6.17l-1.75,6.52" transform="translate(-2.5 -5.86)"/><path class="a" d="M235.82,20.31a.52.52,0,0,0-.45.22,1,1,0,0,0-.22.67.57.57,0,0,0,.16.43.54.54,0,0,0,.4.17.62.62,0,0,0,.48-.23.92.92,0,0,0,.19-.62.65.65,0,0,0-.16-.46.52.52,0,0,0-.4-.18m.34-.7.75-3.05c.31-1.19.49-1.86.54-2a.8.8,0,0,0,.05-.23.12.12,0,0,0-.13-.13,3,3,0,0,0-.58.11.81.81,0,0,0-.35.16.3.3,0,0,0-.06.17c-.11,1.36-.31,3-.58,5h.36" transform="translate(-2.5 -5.86)"/><path class="a" d="M229.14,21.64l.27-1.2a13.58,13.58,0,0,1,.42-1.53,3.33,3.33,0,0,1,.48-.77,2.88,2.88,0,0,1,.63-.66,2.44,2.44,0,0,1,.74-.37,2.07,2.07,0,0,0,.61-.28.38.38,0,0,0,.12-.28.39.39,0,0,0-.13-.28.41.41,0,0,0-.31-.12,1.06,1.06,0,0,0-.63.33,8,8,0,0,0-1.4,1.67l.27-1.1a3.21,3.21,0,0,0,.08-.43.16.16,0,0,0-.07-.13.29.29,0,0,0-.17,0,2.19,2.19,0,0,0-.91.32,4.56,4.56,0,0,0-1.19,1l.19.21a7.64,7.64,0,0,1,.69-.63.73.73,0,0,1,.29-.13c.09,0,.14,0,.14.15a2.38,2.38,0,0,1-.06.34c-.16.73-.34,1.5-.55,2.32l-.43,1.66h.92" transform="translate(-2.5 -5.86)"/><path class="a" d="M224.77,19.19a6.28,6.28,0,0,1,.4-1.37,1.7,1.7,0,0,1,.49-.69.72.72,0,0,1,.45-.17.46.46,0,0,1,.36.16.61.61,0,0,1,.14.42,1,1,0,0,1-.34.7,4.91,4.91,0,0,1-1.5,1m2.17.91a7.53,7.53,0,0,1-1.2.77,1.27,1.27,0,0,1-.56.15.48.48,0,0,1-.4-.18.94.94,0,0,1-.14-.61,5,5,0,0,1,.05-.64c.79-.35,1.3-.59,1.53-.73a3.27,3.27,0,0,0,1-.81,1.38,1.38,0,0,0,.28-.79.81.81,0,0,0-.23-.6,1,1,0,0,0-.67-.22,2.57,2.57,0,0,0-2.16,1.49,5,5,0,0,0-.8,2.62,1.56,1.56,0,0,0,.23.95.81.81,0,0,0,.67.3,4.21,4.21,0,0,0,2.6-1.44l-.2-.26" transform="translate(-2.5 -5.86)"/><path class="a" d="M221,17c.25-.1.38-.22.38-.35a.25.25,0,0,0-.08-.17.29.29,0,0,0-.18-.08,2,2,0,0,0-.5.17,5.65,5.65,0,0,0-1.57.16,1.55,1.55,0,0,0-.83.46,1,1,0,0,0-.24.65.56.56,0,0,0,.11.37.33.33,0,0,0,.48.05.21.21,0,0,0,.08-.17.79.79,0,0,0-.05-.24.87.87,0,0,1-.09-.29c0-.14.11-.27.33-.38a4.4,4.4,0,0,1,1.55-.24,3.21,3.21,0,0,0-.91,1.08,2.81,2.81,0,0,0-.31,1.28,11.73,11.73,0,0,0,.25,1.78q.13.64.18.93a7.56,7.56,0,0,0,2.89-2.36,4.24,4.24,0,0,0,.94-2.56,1,1,0,0,0-.13-.59.37.37,0,0,0-.32-.18.36.36,0,0,0-.27.12.41.41,0,0,0-.11.28,1.24,1.24,0,0,0,.15.46,1.05,1.05,0,0,1,.14.48,3.12,3.12,0,0,1-.56,1.56,8,8,0,0,1-1.94,1.94,8.84,8.84,0,0,1-.23-1.66,3.9,3.9,0,0,1,.18-1.16A5.85,5.85,0,0,1,221,17" transform="translate(-2.5 -5.86)"/><path class="a" d="M214.91,19.19a6.28,6.28,0,0,1,.4-1.37,1.61,1.61,0,0,1,.49-.69.72.72,0,0,1,.44-.17.47.47,0,0,1,.37.16.61.61,0,0,1,.14.42,1,1,0,0,1-.34.7,4.91,4.91,0,0,1-1.5,1m2.17.91a7.53,7.53,0,0,1-1.2.77,1.27,1.27,0,0,1-.56.15.48.48,0,0,1-.4-.18.94.94,0,0,1-.14-.61,5,5,0,0,1,.05-.64c.79-.35,1.3-.59,1.53-.73a3.27,3.27,0,0,0,1-.81,1.38,1.38,0,0,0,.28-.79.81.81,0,0,0-.23-.6,1,1,0,0,0-.67-.22,2.57,2.57,0,0,0-2.16,1.49,5,5,0,0,0-.8,2.62,1.56,1.56,0,0,0,.23.95.81.81,0,0,0,.67.3,4.21,4.21,0,0,0,2.6-1.44l-.2-.26" transform="translate(-2.5 -5.86)"/><path class="a" d="M211.19,21.64l.28-1.2a12.24,12.24,0,0,1,.41-1.53,3.33,3.33,0,0,1,.48-.77,3.37,3.37,0,0,1,.63-.66,2.44,2.44,0,0,1,.74-.37,1.94,1.94,0,0,0,.61-.28.38.38,0,0,0,.12-.28.35.35,0,0,0-.13-.28.41.41,0,0,0-.31-.12,1.12,1.12,0,0,0-.63.33,8,8,0,0,0-1.4,1.67l.27-1.1a3.21,3.21,0,0,0,.08-.43.16.16,0,0,0-.07-.13.29.29,0,0,0-.17,0,2.19,2.19,0,0,0-.91.32,4.73,4.73,0,0,0-1.19,1l.19.21a7.31,7.31,0,0,1,.7-.63.65.65,0,0,1,.28-.13c.09,0,.14,0,.14.15a2.38,2.38,0,0,1-.06.34c-.16.73-.34,1.5-.55,2.32l-.43,1.66h.92" transform="translate(-2.5 -5.86)"/><path class="a" d="M207.53,16.91a.72.72,0,0,1,.62.39,2.58,2.58,0,0,1,.25,1.32,3.71,3.71,0,0,1-.54,2.07,1.16,1.16,0,0,1-.94.64.67.67,0,0,1-.59-.33,2.25,2.25,0,0,1-.31-1.27,3.82,3.82,0,0,1,.49-2.07q.5-.75,1-.75m.52-.47a2.74,2.74,0,0,0-2.32,1.37A4.14,4.14,0,0,0,205,20.2a1.66,1.66,0,0,0,.4,1.18,1.37,1.37,0,0,0,1.06.43,2.73,2.73,0,0,0,2-1.09,3.6,3.6,0,0,0,1-2.46,2,2,0,0,0-.4-1.34,1.25,1.25,0,0,0-1-.48" transform="translate(-2.5 -5.86)"/><path class="a" d="M201.15,16.86l-.11.43h1.47l-1.25,5a3.54,3.54,0,0,1-.55,1.41,1.22,1.22,0,0,1-.89.29A6,6,0,0,1,199,24l-.38,0a.6.6,0,0,0-.4.11.4.4,0,0,0-.14.31.47.47,0,0,0,.2.37,1,1,0,0,0,.59.15A3.13,3.13,0,0,0,201,24a5.47,5.47,0,0,0,1.44-2.72l1-3.94h1.65l.1-.43h-1.64l.33-1.32a4.25,4.25,0,0,1,.52-1.36.91.91,0,0,1,.73-.5,2.59,2.59,0,0,1,.47.06,5,5,0,0,0,.81.12.49.49,0,0,0,.34-.12.42.42,0,0,0,.13-.31.46.46,0,0,0-.19-.35.92.92,0,0,0-.57-.15,2.85,2.85,0,0,0-1.42.44,3.47,3.47,0,0,0-1.22,1.19,8.26,8.26,0,0,0-.84,2.3h-1.47" transform="translate(-2.5 -5.86)"/><path class="a" d="M194.66,23.55a5.8,5.8,0,0,0,1.08-.93,3.15,3.15,0,0,0,.56-.82,2,2,0,0,0,.18-.76.75.75,0,0,0-.18-.5.59.59,0,0,0-.44-.2.54.54,0,0,0-.39.17.58.58,0,0,0-.17.41,1.09,1.09,0,0,0,.15.47,1,1,0,0,1,.15.45.88.88,0,0,1-.2.46,4.08,4.08,0,0,1-.86.85l.12.4" transform="translate(-2.5 -5.86)"/><path class="a" d="M194,16.44a1.76,1.76,0,0,0-1.25.46,1.4,1.4,0,0,0-.48,1.05,2.11,2.11,0,0,0,.64,1.38,6.56,6.56,0,0,1,.6.73.88.88,0,0,1,.14.45.94.94,0,0,1-.14.46.88.88,0,0,1-.4.34,1.35,1.35,0,0,1-.59.12.69.69,0,0,1-.45-.14.45.45,0,0,1-.18-.35.76.76,0,0,1,0-.14c0-.06,0-.12,0-.16a.35.35,0,0,0-.13-.27.44.44,0,0,0-.29-.11.46.46,0,0,0-.34.14.52.52,0,0,0-.13.36,1,1,0,0,0,.35.74,1.7,1.7,0,0,0,1.1.3,2.07,2.07,0,0,0,1.43-.49,1.5,1.5,0,0,0,.56-1.15,2.1,2.1,0,0,0-.69-1.38,4.1,4.1,0,0,1-.62-.77,1,1,0,0,1-.13-.49.66.66,0,0,1,.2-.48.62.62,0,0,1,.45-.2.86.86,0,0,1,.6.4,1.43,1.43,0,0,0,.24.27.46.46,0,0,0,.21,0,.41.41,0,0,0,.3-.12.39.39,0,0,0,.13-.29.59.59,0,0,0-.3-.49,1.39,1.39,0,0,0-.85-.22" transform="translate(-2.5 -5.86)"/><path class="a" d="M189.68,16.6,189,19.15a2.71,2.71,0,0,1-.83,1.3,1.79,1.79,0,0,1-1,.57.28.28,0,0,1-.18-.1.33.33,0,0,1-.08-.22,14.07,14.07,0,0,1,.39-1.71,11.88,11.88,0,0,0,.45-2.1.53.53,0,0,0-.09-.34.34.34,0,0,0-.24-.11,1.56,1.56,0,0,0-.7.24,7.34,7.34,0,0,0-1.26,1l.27.22a4.7,4.7,0,0,1,.65-.56.74.74,0,0,1,.3-.11c.08,0,.12.06.12.17a10.32,10.32,0,0,1-.41,1.79c-.22.79-.35,1.31-.41,1.57a3.26,3.26,0,0,0,0,.52.71.71,0,0,0,.12.45.43.43,0,0,0,.34.14,1.94,1.94,0,0,0,.93-.32,5.28,5.28,0,0,0,1.35-1.1,3.78,3.78,0,0,0-.14.85.62.62,0,0,0,.14.43.45.45,0,0,0,.34.15c.39,0,1-.43,1.82-1.29l-.2-.22a8.51,8.51,0,0,1-.77.72.45.45,0,0,1-.24.09.18.18,0,0,1-.13-.06.3.3,0,0,1-.05-.18,17,17,0,0,1,.51-2.15l.59-2.16h-.89" transform="translate(-2.5 -5.86)"/><path class="a" d="M182.14,20.32l-.56.46c-.27.23-.45.35-.55.35a.12.12,0,0,1-.1-.05.24.24,0,0,1,0-.14,2.46,2.46,0,0,1,.07-.57c0-.21.2-.76.47-1.64.2-.64.32-1.08.37-1.32a1.51,1.51,0,0,0,.05-.42.55.55,0,0,0-.13-.4.49.49,0,0,0-.38-.15,1.72,1.72,0,0,0-.82.32,7.86,7.86,0,0,0-1.6,1.3l.69-3A2.93,2.93,0,0,1,180,14a.54.54,0,0,1,.46-.23,6,6,0,0,1,.74.07l.38,0a.65.65,0,0,0,.41-.12.39.39,0,0,0,0-.63.61.61,0,0,0-.42-.14,2.68,2.68,0,0,0-1.29.36,3,3,0,0,0-1.05.94,5,5,0,0,0-.66,1.68l-.9,4c-.11.45-.26,1-.46,1.76h.92l.49-2.15a2.89,2.89,0,0,1,.41-1.06,4.21,4.21,0,0,1,1-.92,1.33,1.33,0,0,1,.66-.26.19.19,0,0,1,.21.21,6.08,6.08,0,0,1-.21.9c-.32,1-.51,1.71-.58,2a3.62,3.62,0,0,0-.1.72.84.84,0,0,0,.13.53.44.44,0,0,0,.35.17,1.39,1.39,0,0,0,.68-.25,5.83,5.83,0,0,0,1.17-1l-.16-.23" transform="translate(-2.5 -5.86)"/><path class="a" d="M174.85,15.5l-.34,1.34h-1l-.11.44h1l-.63,2.45a6,6,0,0,0-.24,1.36.93.93,0,0,0,.13.54.45.45,0,0,0,.37.17,1.8,1.8,0,0,0,.73-.23,15.73,15.73,0,0,0,1.81-1.25l-.24-.27a8.08,8.08,0,0,1-1,.67,1.45,1.45,0,0,1-.59.23.27.27,0,0,1-.19-.07.33.33,0,0,1-.08-.24,5.82,5.82,0,0,1,.26-1.28l.55-2.08h1.27l.1-.44h-1.26l.44-1.73-1,.39" transform="translate(-2.5 -5.86)"/><path class="a" d="M170.29,17.88a5.44,5.44,0,0,1,.7-.63.56.56,0,0,1,.29-.1c.07,0,.11,0,.11.13a.81.81,0,0,1,0,.25,18.62,18.62,0,0,0-.93,3.77.49.49,0,0,0,.13.37.44.44,0,0,0,.34.13,1.38,1.38,0,0,0,.64-.22,8.16,8.16,0,0,0,1.23-1l-.24-.24c-.54.52-.88.79-1,.79a.12.12,0,0,1-.1-.06.29.29,0,0,1,0-.14,15.59,15.59,0,0,1,.65-2.64,12,12,0,0,0,.39-1.52.3.3,0,0,0-.1-.24.51.51,0,0,0-.3-.08,1.85,1.85,0,0,0-.87.28,4.78,4.78,0,0,0-1.12,1l.27.21m2.45-4.08a.56.56,0,0,0-.43.19.67.67,0,0,0-.17.47.49.49,0,0,0,.12.34.38.38,0,0,0,.3.13.54.54,0,0,0,.42-.21.64.64,0,0,0,.19-.47.48.48,0,0,0-.12-.33.43.43,0,0,0-.31-.12" transform="translate(-2.5 -5.86)"/><path class="a" d="M164.05,16.62a4,4,0,0,0-2.25.42.92.92,0,0,0-.45.8.6.6,0,0,0,.12.4.31.31,0,0,0,.27.14.25.25,0,0,0,.21-.08.22.22,0,0,0,.08-.19.73.73,0,0,0-.07-.25.67.67,0,0,1-.07-.26c0-.14.1-.26.32-.37a4.42,4.42,0,0,1,1.58-.26,3.22,3.22,0,0,0-.93,1.1,2.73,2.73,0,0,0-.31,1.26,8.87,8.87,0,0,0,.22,1.58c.1.53.16.91.19,1.14a5.16,5.16,0,0,0,.81-.42,7,7,0,0,0,.79-.57c.13-.11.48-.45,1-1a14,14,0,0,0,.36,2,7.35,7.35,0,0,0,2.7-2.15,4.38,4.38,0,0,0,1.11-2.67,1.43,1.43,0,0,0-.12-.7.37.37,0,0,0-.33-.19.36.36,0,0,0-.28.11.38.38,0,0,0-.12.28,1.59,1.59,0,0,0,.15.51,1.32,1.32,0,0,1,.14.49,2.73,2.73,0,0,1-.26,1,4.27,4.27,0,0,1-.78,1.17,8.3,8.3,0,0,1-1.44,1.27,10.71,10.71,0,0,1-.23-2.47,7.07,7.07,0,0,0,.39-1,2.08,2.08,0,0,0,.1-.6.72.72,0,0,0-.13-.48.39.39,0,0,0-.32-.17c-.21,0-.41.18-.58.52a4.68,4.68,0,0,0-.41,2.14c0,.08,0,.21,0,.39a7.53,7.53,0,0,1-1.77,1.68,8.93,8.93,0,0,1-.24-1.64,3.57,3.57,0,0,1,.09-.8,4,4,0,0,1,.27-.78l.47-.93c.24-.06.36-.18.36-.34a.28.28,0,0,0-.07-.19.25.25,0,0,0-.19-.07.82.82,0,0,0-.43.2" transform="translate(-2.5 -5.86)"/><path class="a" d="M155.5,19.19a6.28,6.28,0,0,1,.4-1.37,1.61,1.61,0,0,1,.49-.69.72.72,0,0,1,.44-.17.47.47,0,0,1,.37.16.61.61,0,0,1,.14.42,1,1,0,0,1-.34.7,4.91,4.91,0,0,1-1.5,1m2.17.91a7.53,7.53,0,0,1-1.2.77,1.27,1.27,0,0,1-.56.15.48.48,0,0,1-.4-.18.94.94,0,0,1-.14-.61,5,5,0,0,1,0-.64c.79-.35,1.3-.59,1.53-.73a3.27,3.27,0,0,0,1-.81,1.38,1.38,0,0,0,.28-.79.78.78,0,0,0-.24-.6.94.94,0,0,0-.66-.22,2.57,2.57,0,0,0-2.16,1.49,5,5,0,0,0-.8,2.62,1.56,1.56,0,0,0,.23.95.81.81,0,0,0,.67.3,4.21,4.21,0,0,0,2.6-1.44l-.2-.26" transform="translate(-2.5 -5.86)"/><path class="a" d="M153.53,20.28a2.94,2.94,0,0,1-1.73.84.54.54,0,0,1-.47-.24,1.51,1.51,0,0,1-.23-.91,4.86,4.86,0,0,1,.27-1.58,2.58,2.58,0,0,1,.57-1.06.94.94,0,0,1,.61-.28,1.27,1.27,0,0,1,.59.22,1.22,1.22,0,0,0,.56.2.45.45,0,0,0,.34-.12.41.41,0,0,0,.13-.32.49.49,0,0,0-.24-.41,1.11,1.11,0,0,0-.69-.18,2.15,2.15,0,0,0-1.32.43,4.36,4.36,0,0,0-1.26,1.58,4.35,4.35,0,0,0-.52,2,1.73,1.73,0,0,0,.25,1,.86.86,0,0,0,.78.38,4.47,4.47,0,0,0,2.51-1.16l-.15-.36" transform="translate(-2.5 -5.86)"/><path class="a" d="M144.49,17.91a3.49,3.49,0,0,1,.72-.62.57.57,0,0,1,.29-.13c.08,0,.12.06.12.16a1.14,1.14,0,0,1,0,.21L145,19.87q-.19.84-.45,1.77h.92l.5-2.15a3,3,0,0,1,.41-1.06,3.8,3.8,0,0,1,1-.9,1.19,1.19,0,0,1,.64-.26c.15,0,.23.06.23.18a6.37,6.37,0,0,1-.21.91,13.63,13.63,0,0,0-.68,2.73.86.86,0,0,0,.13.54.43.43,0,0,0,.36.17,1.25,1.25,0,0,0,.64-.25,5.37,5.37,0,0,0,1.18-1l-.15-.23c-.18.14-.36.29-.54.46a1.11,1.11,0,0,1-.57.34.11.11,0,0,1-.1-.06.27.27,0,0,1,0-.17,7.32,7.32,0,0,1,.39-1.68q.42-1.34.51-1.74a1.84,1.84,0,0,0,.06-.43.63.63,0,0,0-.14-.44.44.44,0,0,0-.37-.16,1.68,1.68,0,0,0-.83.32,7.52,7.52,0,0,0-1.58,1.3l.28-1.24a1.12,1.12,0,0,0,0-.19.15.15,0,0,0-.07-.13.33.33,0,0,0-.21-.06,1.93,1.93,0,0,0-.81.25,6.89,6.89,0,0,0-1.26,1l.21.22" transform="translate(-2.5 -5.86)"/><path class="a" d="M142.44,17.31l-.51,1.91a2.63,2.63,0,0,1-.72,1.31,1.37,1.37,0,0,1-.91.46.45.45,0,0,1-.37-.18,1,1,0,0,1-.14-.61,3.76,3.76,0,0,1,.35-1.57,2.8,2.8,0,0,1,.77-1.09,1.6,1.6,0,0,1,1-.3,2.58,2.58,0,0,1,.56.07m.77-1-.15.25-.4,0a3,3,0,0,0-1.29.24,3.82,3.82,0,0,0-1.23,1,5.56,5.56,0,0,0-.94,1.45,3.72,3.72,0,0,0-.35,1.45,1.45,1.45,0,0,0,.26.89.64.64,0,0,0,.55.25,1.58,1.58,0,0,0,.83-.28,5.35,5.35,0,0,0,1.27-1.09l-.25.84a1,1,0,0,0,0,.25.29.29,0,0,0,.08.22.33.33,0,0,0,.24.07,1.54,1.54,0,0,0,.46-.08,3.44,3.44,0,0,0,.75-.4,11.39,11.39,0,0,0,.9-.77l-.2-.24a4.12,4.12,0,0,1-.72.56.8.8,0,0,1-.32.12q-.15,0-.15-.18a6,6,0,0,1,.14-.85c.16-.81.34-1.53.52-2.15l.47-1.56-.42.08" transform="translate(-2.5 -5.86)"/><path class="a" d="M136.28,17c.25-.1.37-.22.37-.35a.21.21,0,0,0-.08-.17.25.25,0,0,0-.18-.08,2.11,2.11,0,0,0-.5.17,5.69,5.69,0,0,0-1.57.16,1.59,1.59,0,0,0-.83.46,1,1,0,0,0-.24.65.62.62,0,0,0,.11.37.35.35,0,0,0,.28.13.32.32,0,0,0,.21-.08.25.25,0,0,0,.08-.17.6.6,0,0,0-.06-.24.87.87,0,0,1-.09-.29c0-.14.11-.27.34-.38a4.36,4.36,0,0,1,1.55-.24,3,3,0,0,0-.91,1.08,2.81,2.81,0,0,0-.31,1.28,10.54,10.54,0,0,0,.25,1.78c.09.43.14.74.17.93a7.59,7.59,0,0,0,2.9-2.36,4.23,4.23,0,0,0,.93-2.56,1.06,1.06,0,0,0-.12-.59.38.38,0,0,0-.33-.18.34.34,0,0,0-.26.12.37.37,0,0,0-.11.28,1.24,1.24,0,0,0,.15.46,1.19,1.19,0,0,1,.14.48,3.05,3.05,0,0,1-.57,1.56,7.94,7.94,0,0,1-1.93,1.94,9.08,9.08,0,0,1-.24-1.66,3.9,3.9,0,0,1,.18-1.16,6.4,6.4,0,0,1,.67-1.34" transform="translate(-2.5 -5.86)"/><path class="a" d="M131.32,17.17,131,18.41a7.27,7.27,0,0,1-.46,1.52,2.47,2.47,0,0,1-.75.83,1.11,1.11,0,0,1-.59.23.53.53,0,0,1-.39-.2.81.81,0,0,1-.16-.52,4.65,4.65,0,0,1,.36-1.63,3.3,3.3,0,0,1,.76-1.26,1.28,1.28,0,0,1,.81-.33,3.44,3.44,0,0,1,.7.12m1.3,3.18a8.29,8.29,0,0,1-.81.6.59.59,0,0,1-.26.08c-.12,0-.18-.08-.18-.23a5.37,5.37,0,0,1,.16-.88l.86-3.73q.36-1.5.45-1.77a1.26,1.26,0,0,1,.31-.56.59.59,0,0,1,.39-.13l.57,0a5,5,0,0,0,.58.06.53.53,0,0,0,.37-.12.42.42,0,0,0,.14-.32.39.39,0,0,0-.15-.32.56.56,0,0,0-.39-.13,2.6,2.6,0,0,0-1,.22,3,3,0,0,0-1,.61,3.36,3.36,0,0,0-.69,1,9.66,9.66,0,0,0-.55,1.75,2.93,2.93,0,0,0-.41,0,2.39,2.39,0,0,0-1.35.55,5,5,0,0,0-1.33,1.69,4.39,4.39,0,0,0-.6,2,1.34,1.34,0,0,0,.22.84.68.68,0,0,0,.55.29,1.82,1.82,0,0,0,.88-.29,6.1,6.1,0,0,0,1.24-1.08l-.22.75a1.89,1.89,0,0,0-.07.35.24.24,0,0,0,.1.19.36.36,0,0,0,.24.08,2,2,0,0,0,.87-.32,8.89,8.89,0,0,0,1.22-.93l-.17-.24" transform="translate(-2.5 -5.86)"/><path class="a" d="M125,19h-1.94l1.57-2.35c.12-.18.44-.62,1-1.31A29,29,0,0,0,125,19m2,2.4a2.46,2.46,0,0,1-.52.05,3.65,3.65,0,0,1-.82-.1l.28-2.56.48-3.57a11.62,11.62,0,0,1,.27-1.33,1.4,1.4,0,0,1-.56.32,5.48,5.48,0,0,1-.92.12,9,9,0,0,0-1.17.14,3.34,3.34,0,0,0-1.08.43,2,2,0,0,0-.66.7,1.82,1.82,0,0,0-.23.86.74.74,0,0,0,.13.48.4.4,0,0,0,.33.15.35.35,0,0,0,.26-.1.33.33,0,0,0,.1-.24,1.13,1.13,0,0,0-.09-.34,1,1,0,0,1-.08-.31,1.09,1.09,0,0,1,.26-.67,1.62,1.62,0,0,1,.77-.5,12.33,12.33,0,0,1,1.89-.25,36.41,36.41,0,0,0-2.91,4,19.56,19.56,0,0,1-2.39,3.21,1.41,1.41,0,0,1-.91.46,2.19,2.19,0,0,1-.5-.1l-.23,0a.3.3,0,0,0-.25.11.36.36,0,0,0-.1.27.44.44,0,0,0,.17.35.81.81,0,0,0,.52.13,2.21,2.21,0,0,0,1.39-.61,16.25,16.25,0,0,0,2.31-3l2.22,0a9.88,9.88,0,0,1-.2,1.29,6.61,6.61,0,0,1-.32,1,6.76,6.76,0,0,1,.8-.08l.73.06.58,0a2.82,2.82,0,0,0,.39,0l.06-.35" transform="translate(-2.5 -5.86)"/><path class="a" d="M111.82,21.64l.28-1.2a14.43,14.43,0,0,1,.41-1.53,3.33,3.33,0,0,1,.48-.77,3.37,3.37,0,0,1,.63-.66,2.39,2.39,0,0,1,.75-.37,1.85,1.85,0,0,0,.6-.28.39.39,0,0,0,0-.56.43.43,0,0,0-.31-.12,1.06,1.06,0,0,0-.63.33,8.3,8.3,0,0,0-1.41,1.67l.27-1.1a2.08,2.08,0,0,0,.08-.43.18.18,0,0,0-.06-.13.3.3,0,0,0-.18,0,2.16,2.16,0,0,0-.9.32,4.56,4.56,0,0,0-1.19,1l.19.21a6.45,6.45,0,0,1,.69-.63.68.68,0,0,1,.29-.13c.09,0,.13,0,.13.15s0,.16,0,.34c-.16.73-.34,1.5-.55,2.32l-.44,1.66h.92" transform="translate(-2.5 -5.86)"/><path class="a" d="M107.45,19.19a6.32,6.32,0,0,1,.41-1.37,1.61,1.61,0,0,1,.49-.69.72.72,0,0,1,.44-.17.44.44,0,0,1,.36.16.56.56,0,0,1,.14.42,1,1,0,0,1-.34.7,4.67,4.67,0,0,1-1.5,1m2.17.91a7.13,7.13,0,0,1-1.19.77,1.27,1.27,0,0,1-.56.15.5.5,0,0,1-.41-.18,1,1,0,0,1-.13-.61,3.66,3.66,0,0,1,0-.64c.78-.35,1.29-.59,1.53-.73a3.1,3.1,0,0,0,1-.81,1.31,1.31,0,0,0,.28-.79.78.78,0,0,0-.23-.6,1,1,0,0,0-.67-.22,2.57,2.57,0,0,0-2.15,1.49,4.93,4.93,0,0,0-.8,2.62,1.56,1.56,0,0,0,.23.95.79.79,0,0,0,.67.3,4.19,4.19,0,0,0,2.59-1.44l-.2-.26" transform="translate(-2.5 -5.86)"/><path class="a" d="M105.78,20.32l-.56.46c-.27.23-.45.35-.55.35a.12.12,0,0,1-.1-.05.24.24,0,0,1,0-.14,2.46,2.46,0,0,1,.07-.57c0-.21.2-.76.47-1.64.2-.64.32-1.08.38-1.32a2,2,0,0,0,0-.42.55.55,0,0,0-.13-.4.49.49,0,0,0-.38-.15,1.72,1.72,0,0,0-.82.32,8.14,8.14,0,0,0-1.6,1.3l.69-3a2.93,2.93,0,0,1,.37-1.07.54.54,0,0,1,.46-.23,6,6,0,0,1,.74.07l.38,0a.63.63,0,0,0,.41-.12.39.39,0,0,0,0-.63.61.61,0,0,0-.42-.14,2.68,2.68,0,0,0-1.29.36,3,3,0,0,0-1,.94,4.78,4.78,0,0,0-.65,1.68l-.91,4c-.11.45-.26,1-.46,1.76h.92l.49-2.15a2.89,2.89,0,0,1,.41-1.06,4.05,4.05,0,0,1,1-.92,1.27,1.27,0,0,1,.65-.26.19.19,0,0,1,.21.21,6.08,6.08,0,0,1-.21.9c-.32,1-.51,1.71-.58,2a3.62,3.62,0,0,0-.1.72.84.84,0,0,0,.13.53.44.44,0,0,0,.35.17,1.39,1.39,0,0,0,.68-.25,5.57,5.57,0,0,0,1.17-1l-.16-.23" transform="translate(-2.5 -5.86)"/><path class="a" d="M98.49,15.5l-.34,1.34h-1l-.11.44h1l-.63,2.45a6,6,0,0,0-.24,1.36.85.85,0,0,0,.14.54.42.42,0,0,0,.36.17,1.8,1.8,0,0,0,.73-.23,14.87,14.87,0,0,0,1.81-1.25l-.23-.27a9.06,9.06,0,0,1-1,.67,1.45,1.45,0,0,1-.59.23.27.27,0,0,1-.19-.07.33.33,0,0,1-.07-.24,5.62,5.62,0,0,1,.25-1.28l.55-2.08h1.27l.1-.44H99.05l.44-1.73-1,.39" transform="translate(-2.5 -5.86)"/><path class="a" d="M93.55,19.19a6.28,6.28,0,0,1,.4-1.37,1.7,1.7,0,0,1,.49-.69.74.74,0,0,1,.45-.17.45.45,0,0,1,.36.16.61.61,0,0,1,.14.42,1,1,0,0,1-.34.7,4.91,4.91,0,0,1-1.5,1m2.17.91a6.73,6.73,0,0,1-1.2.77A1.23,1.23,0,0,1,94,21a.48.48,0,0,1-.41-.18,1,1,0,0,1-.14-.61,3.72,3.72,0,0,1,.06-.64c.78-.35,1.29-.59,1.53-.73a3.34,3.34,0,0,0,1-.81,1.31,1.31,0,0,0,.28-.79.81.81,0,0,0-.23-.6,1,1,0,0,0-.67-.22,2.56,2.56,0,0,0-2.15,1.49,5,5,0,0,0-.81,2.62,1.49,1.49,0,0,0,.24.95.78.78,0,0,0,.67.3,4.19,4.19,0,0,0,2.59-1.44l-.2-.26" transform="translate(-2.5 -5.86)"/><path class="a" d="M90.05,20.68c0,.43-.06.71-.06.83a7.23,7.23,0,0,1-.12,1.31,2.41,2.41,0,0,1-.41.89,1.85,1.85,0,0,1-.69.59,1.69,1.69,0,0,1-.81.21,1.08,1.08,0,0,1-.76-.28.83.83,0,0,1-.31-.63,1.11,1.11,0,0,1,.24-.68,6.21,6.21,0,0,1,1.3-1,18.32,18.32,0,0,0,1.62-1.21m.83-3.37L90.43,19A4.63,4.63,0,0,1,90,20.19a2,2,0,0,1-.59.6,1.19,1.19,0,0,1-.61.24.48.48,0,0,1-.37-.2.72.72,0,0,1-.16-.49,5,5,0,0,1,.41-1.74,2.45,2.45,0,0,1,.72-1,1.67,1.67,0,0,1,1-.31,2.59,2.59,0,0,1,.52.06m.69-.9-.06.18h-.42a2.86,2.86,0,0,0-1.47.34A4.73,4.73,0,0,0,88,18.61a4.3,4.3,0,0,0-.68,2.25.85.85,0,0,0,.18.57.52.52,0,0,0,.41.21,1.78,1.78,0,0,0,.71-.23c-.27.16-.55.33-.86.49a4.23,4.23,0,0,0-1.18.79,1.37,1.37,0,0,0-.39.93,1.14,1.14,0,0,0,.48.9,2,2,0,0,0,1.31.39,3,3,0,0,0,1.68-.46,2.34,2.34,0,0,0,1-1.22,5,5,0,0,0,.2-1.44,5.22,5.22,0,0,1,.06-.87,16.79,16.79,0,0,1,.37-1.73c.25-1,.53-1.93.83-2.89l-.5.11" transform="translate(-2.5 -5.86)"/><path class="a" d="M84.9,16.91a.74.74,0,0,1,.63.39,2.58,2.58,0,0,1,.25,1.32,3.71,3.71,0,0,1-.54,2.07,1.18,1.18,0,0,1-.95.64A.69.69,0,0,1,83.7,21a2.34,2.34,0,0,1-.3-1.27,3.73,3.73,0,0,1,.49-2.07c.33-.5.66-.75,1-.75m.52-.47a2.75,2.75,0,0,0-2.32,1.37,4.21,4.21,0,0,0-.74,2.39,1.66,1.66,0,0,0,.41,1.18,1.37,1.37,0,0,0,1.06.43,2.73,2.73,0,0,0,2-1.09,3.6,3.6,0,0,0,1-2.46,2,2,0,0,0-.4-1.34,1.26,1.26,0,0,0-1-.48" transform="translate(-2.5 -5.86)"/><path class="a" d="M80,15.5l-.35,1.34h-1l-.11.44h1L79,19.73a6.4,6.4,0,0,0-.23,1.36.86.86,0,0,0,.13.54.45.45,0,0,0,.36.17,1.84,1.84,0,0,0,.74-.23,16.7,16.7,0,0,0,1.81-1.25l-.24-.27a7.47,7.47,0,0,1-1,.67A1.42,1.42,0,0,1,80,21a.3.3,0,0,1-.2-.07.33.33,0,0,1-.07-.24,5.82,5.82,0,0,1,.26-1.28l.55-2.08h1.27l.09-.44H80.59L81,15.11l-1,.39" transform="translate(-2.5 -5.86)"/><path class="a" d="M72.32,19.19a5.78,5.78,0,0,1,.4-1.37,1.61,1.61,0,0,1,.49-.69.72.72,0,0,1,.44-.17.44.44,0,0,1,.36.16.56.56,0,0,1,.14.42,1,1,0,0,1-.34.7,4.73,4.73,0,0,1-1.49,1m2.17.91a7.53,7.53,0,0,1-1.2.77,1.27,1.27,0,0,1-.56.15.46.46,0,0,1-.4-.18.94.94,0,0,1-.14-.61,3.66,3.66,0,0,1,0-.64c.78-.35,1.29-.59,1.53-.73a3.27,3.27,0,0,0,1-.81,1.37,1.37,0,0,0,.27-.79.78.78,0,0,0-.23-.6,1,1,0,0,0-.67-.22A2.57,2.57,0,0,0,72,17.93a5,5,0,0,0-.8,2.62,1.56,1.56,0,0,0,.23.95.81.81,0,0,0,.67.3,4.21,4.21,0,0,0,2.6-1.44l-.2-.26" transform="translate(-2.5 -5.86)"/><path class="a" d="M63.57,17.89c.49-.48.82-.72,1-.72s.11,0,.11.14-.11.53-.31,1.39l-.7,2.94h.89L65,19.57a3.89,3.89,0,0,1,.46-1.24,3.59,3.59,0,0,1,.88-.85,1,1,0,0,1,.51-.25.24.24,0,0,1,.15,0,.17.17,0,0,1,0,.13,4.2,4.2,0,0,1-.09.47L66,21.64h.89c.13-.64.34-1.46.61-2.47a2.94,2.94,0,0,1,.43-1,3.15,3.15,0,0,1,.88-.78.94.94,0,0,1,.41-.15c.13,0,.19.07.19.21a7.94,7.94,0,0,1-.31,1.25c-.28.92-.45,1.51-.51,1.78a3,3,0,0,0-.08.69.76.76,0,0,0,.14.5.4.4,0,0,0,.33.18,1.27,1.27,0,0,0,.6-.21,5.48,5.48,0,0,0,.68-.56l.49-.43-.21-.22a5.91,5.91,0,0,1-.74.64.43.43,0,0,1-.23.08c-.12,0-.17-.07-.17-.21A11.31,11.31,0,0,1,69.92,19c.26-.85.41-1.37.45-1.54a1.84,1.84,0,0,0,.06-.43.62.62,0,0,0-.14-.46.52.52,0,0,0-.4-.15,1.82,1.82,0,0,0-.8.31,6.37,6.37,0,0,0-1.22,1.05,3.82,3.82,0,0,0,.19-.87.54.54,0,0,0-.11-.37.39.39,0,0,0-.31-.12c-.52,0-1.28.5-2.26,1.5,0-.2.1-.48.19-.82a1.9,1.9,0,0,0,.1-.46.21.21,0,0,0-.06-.16.28.28,0,0,0-.2-.06,2.12,2.12,0,0,0-.87.29,5.38,5.38,0,0,0-1.16.91l.19.25" transform="translate(-2.5 -5.86)"/><path class="a" d="M60.89,16.91a.73.73,0,0,1,.62.39,2.58,2.58,0,0,1,.25,1.32,3.71,3.71,0,0,1-.54,2.07,1.18,1.18,0,0,1-.95.64.69.69,0,0,1-.59-.33,2.34,2.34,0,0,1-.3-1.27,3.73,3.73,0,0,1,.49-2.07q.5-.75,1-.75m.51-.47a2.77,2.77,0,0,0-2.32,1.37,4.21,4.21,0,0,0-.74,2.39,1.66,1.66,0,0,0,.41,1.18,1.37,1.37,0,0,0,1.06.43,2.73,2.73,0,0,0,2-1.09,3.6,3.6,0,0,0,1-2.46,2,2,0,0,0-.4-1.34,1.26,1.26,0,0,0-1-.48" transform="translate(-2.5 -5.86)"/><path class="a" d="M58,16.92a7.77,7.77,0,0,1,.4-2.19l-1.27-.43a3.53,3.53,0,0,0-.72-.08,3.67,3.67,0,0,0-2.07.73A5.66,5.66,0,0,0,52.61,17a5.73,5.73,0,0,0-.71,2.69,3.79,3.79,0,0,0,.35,1.68,2.53,2.53,0,0,0,1,1.08,2.6,2.6,0,0,0,1.35.38,2.68,2.68,0,0,0,1.23-.32,3.37,3.37,0,0,0,1-.82,1.55,1.55,0,0,0,.41-.65.17.17,0,0,0,0-.12.2.2,0,0,0-.14-.06c-.07,0-.13.05-.19.13a2.49,2.49,0,0,1-2,1.31,1.6,1.6,0,0,1-1.32-.69,3.15,3.15,0,0,1-.53-2,6.26,6.26,0,0,1,.57-2.6,4.77,4.77,0,0,1,1.35-1.86,2.55,2.55,0,0,1,1.53-.59,1.25,1.25,0,0,1,.91.34,1.63,1.63,0,0,1,.36,1.21c0,.19,0,.45,0,.77H58" transform="translate(-2.5 -5.86)"/><path class="a" d="M223.28,31.42l-6.48,24.7a4.35,4.35,0,0,1-4.24,3l7.31-27.66H209.24l-5.75,22s-1.82,7.5,3.92,7.61c1.18,0,17.49.05,17.49.05l7.79-29.7h-9.41" transform="translate(-2.5 -5.86)"/><path class="a" d="M196.23,31.45s-1.26,5.41-2,8.13-4,3.19-4.22,3.2l2.95-11.3-9.72,0-7.65,29.68,9.72,0,3.94-15.46c.7,0,2.22,0,3.51-.05-.35,1.31-4.08,15.45-4.08,15.45h10.64s1.68-7,2-8.62c1.67-8-1.84-8.07-1.84-8.07l.12-.3s3.57-.11,4.79-3.22a62.46,62.46,0,0,0,2.58-9.45c-1.18,0-10.71,0-10.71,0" transform="translate(-2.5 -5.86)"/><path class="a" d="M145.2,61.14l6.14-23.89c.71-2.11,3.23-3.37,4.3-2.89l-7,26.77h10.63s1.67-7,2-8.62c1.41-6.4-1.4-7.55-1.4-7.55v-.35s2.5.54,4.48-3.69c1.31-2.81,3.07-9.48-3.26-9.45l-17.46,0L135.8,61.14h9.4" transform="translate(-2.5 -5.86)"/><path class="a" d="M126.46,45.43h-4.15L124.44,37c.74-2.71,4.16-3.45,5.11-3.53l-3.09,12m3.6-14h0l-7.57,0c-5,0-7.66,5.11-8.07,6.61h0l-5.89,23.07,9.72,0,2.63-10.22H125l-2.62,10.2,9.71,0,7.65-29.68-9.72,0" transform="translate(-2.5 -5.86)"/><path class="a" d="M112.66,31.44h-9.41L96.77,56.13a4.62,4.62,0,0,1-4.24,3l7.32-27.67H89.09L82.61,56.13a4.51,4.51,0,0,1-4.24,3l7.31-27.67H75.05L69.3,53.49s-1.82,7.49,3.92,7.6c1.17,0,31.64,0,31.64,0l7.8-29.7" transform="translate(-2.5 -5.86)"/><polyline class="a" points="169.31 55.27 176.96 25.59 167.24 25.57 159.59 55.26 169.31 55.27"/><path class="a" d="M62.17,31.44,55.68,56.13a4.32,4.32,0,0,1-4.23,3l7.31-27.67H48.13L42.38,53.49S40.56,61,46.3,61.09c1.18,0,17.48,0,17.48,0l7.8-29.7H62.17" transform="translate(-2.5 -5.86)"/><path class="a" d="M113.72,23.6a5.8,5.8,0,0,0,1.08-.93,2.83,2.83,0,0,0,.56-.83,1.8,1.8,0,0,0,.19-.75.73.73,0,0,0-.18-.5.58.58,0,0,0-.44-.21.53.53,0,0,0-.4.18.55.55,0,0,0-.16.4,1.15,1.15,0,0,0,.14.47,1.05,1.05,0,0,1,.15.46.88.88,0,0,1-.19.46,4.33,4.33,0,0,1-.86.85l.11.4" transform="translate(-2.5 -5.86)"/><polyline class="b" points="43.49 0.07 30.83 0 6.49 19.39 3.27 32.95 21.9 17.81 11.57 56.19 23.2 47.6 33.01 8.58 43.49 0.07"/><path class="a" d="M35.51,14.42,31.84,28.75s8.3,0,14,0c5.83-17.22-10.3-14.29-10.3-14.29" transform="translate(-2.5 -5.86)"/><path class="a" d="M27.1,47.88l12.35-2.8c4.21-15.4-13.94-10.36-15.11-21.26-1.68,1.38-11.86,9.53-11.86,9.53,1.68,6.9,17.11,5.9,14.62,14.53" transform="translate(-2.5 -5.86)"/></svg>
			</a>
		<a href="<?php bloginfo('url'); ?>" class="suwarikuHeadermenu">
			<figure></figure>
			<figure></figure>
			<figure></figure>
		</a>
		<nav class="suwarikuHeadernav">
			<ul class="suwarikuHeaderNavList">
			<li class="suwarikuHeaderNavListItem suwarikuSpOnly"> <a href="<?php bloginfo('url'); ?>">トップページ</a> </li>
			<li class="suwarikuHeaderNavListItem suwarikuHeaderNavListItemToggle"> <a href="<?php bloginfo('url'); ?>/about/">スワリクについて</a>
				<ul class="suwarikuHeaderNavChild">
				<li class="suwarikuHeaderNavChildItem"><a href="<?php bloginfo('url'); ?>/about/">代表挨拶</a></li>
				<li class="suwarikuHeaderNavChildItem"><a href="<?php bloginfo('url'); ?>/about/company/">会社概要</a></li>
				<li class="suwarikuHeaderNavChildItem"><a href="<?php bloginfo('url'); ?>/about/philosophy/">経営理念</a></li>
				<li class="suwarikuHeaderNavChildItem"><a href="<?php bloginfo('url'); ?>/about/links/">リンク</a></li>
				</ul>
			</li>
			<li class="suwarikuHeaderNavListItem"> <a href="<?php bloginfo('url'); ?>#history">スワリクの歩み</a> </li>
			<li class="suwarikuHeaderNavListItem"> <a href="<?php bloginfo('url'); ?>/torikumi/">スワリクの取り組み</a> </li>
			<li class="suwarikuHeaderNavListItem suwarikuHeaderNavListItemToggle"> <a href="<?php bloginfo('url'); ?>/service/">事業紹介</a>
				<ul class="suwarikuHeaderNavChild">
				<li class="suwarikuHeaderNavChildItem"><a href="<?php bloginfo('url'); ?>/service/#warehouse">冷凍 冷蔵倉庫</a></li>
				<li class="suwarikuHeaderNavChildItem"><a href="<?php bloginfo('url'); ?>/service/#transportation">輸配送業務</a></li>
				</ul>
			</li>
			<li class="suwarikuHeaderNavListItem suwarikuHeaderNavListItemToggle"> <a href="<?php bloginfo('url'); ?>/recruit/">採用情報</a>
				<ul class="suwarikuHeaderNavChild">
				<li class="suwarikuHeaderNavChildItem"><a href="<?php bloginfo('url'); ?>/recruit/#new">新卒採用情報</a></li>
				<li class="suwarikuHeaderNavChildItem"><a href="<?php bloginfo('url'); ?>/recruit/#semi">中途採用情報</a></li>
				</ul>
			</li>
			<li class="suwarikuHeaderNavListItem suwarikuPconly"> 
				<a href="<?php bloginfo('url'); ?>/contact/">お問い合わせ</a> 
			</li>
			</ul>
			<div class="suwarikuHeaderSpNav"> 
				<a href="<?php //bloginfo('url'); ?>/contact/" class="Suwarikubtn Suwarikubtn--ye">メールでのお問い合わせ</a>
			<ul class="suwarikuHeaderSpNavList">
				<li class="suwarikuHeaderSpNavListItem"><a href="<?php bloginfo('url'); ?>/information/">お知らせ</a></li>
				<li class="suwarikuHeaderSpNavListItem"><a href="<?php bloginfo('url'); ?>/privacy-policy/">プライバシーポリシー</a></li>
				<li class="suwarikuHeaderSpNavListItem"><a href="<?php bloginfo('url'); ?>/sitemap.xml">サイトマップ</a></li>
			</ul>
			</div>
		</nav>
  	</div>
</header>