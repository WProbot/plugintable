<?php
if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}

require_once __DIR__ . '/load.php';

header( 'Content-type: text/html; charset=utf-8' ); ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>The Periodic Table of WordPress Plugins</title>
	<meta name="viewport" content="width=1360">
	<link rel="stylesheet" href="css/style.css" />
	<meta name="description" content="Over 50000 WordPress plugins have been contributed to the WordPress.org Plugin Directory. This table showcases the 108 most popular WordPress plugins, ranked by the number of downloads." />
	<meta name="keywords" content="WordPress, Plugins, Periodic Table, Community, Downloads" />
	<meta name="robots" content="index, follow" />
	<meta property="og:type" content="website" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:title" content="The Periodic Table of WordPress Plugins" />
	<meta property="og:url" content="https://plugintable.com" />
	<meta property="og:description" content="Over 50000 WordPress plugins have been contributed to the WordPress.org Plugin Directory. This table showcases the 108 most popular WordPress plugins, ranked by the number of downloads." />
	<link href="https://plus.google.com/103365919153496720927/" rel="author" />
	<link href="https://plus.google.com/+SpinPress" rel="publisher" />
	<!--

					   `-/+osssssssssssso+/-`
				   ./oys+:.`            `.:+syo/.
				.+ys:.   .:/osyyhhhhyyso/:.   ./sy+.
			  /ys:   -+ydmmmmmmmmmmmmmmmmmmdy+-   :sy/
			/h+`  -odmmmmmmmmmmmmmmmmmmmmmmmmmmdo-  `+h/
		  :ho`  /hmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmds/   `oh:
		`sy.  /hmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmd+        .ys`
	   .ho  `sdddhhhyhmmmdyyhhhdddddhhhyydmmmmy           oh.
	  .h+          ``-dmmy.``         ``.ymmmmh            +h.
	 `ho  `       /mmmmmmmmmmo       .dmmmmmmmms        ~~  oh`
	 oy  .h`       ymmmmmmmmmm:       /mmmmmmmmmy`      -d.  yo
	.d-  ymy       `dmmmmmmmmmd.       ymmmmmmmmmh`     /my  -d.
	oy  -mmm+       /mmmmmmmmmmy       .dmmmmmmmmmy     ymm-  yo
	h+  +mmmd-       smmmmmmmmmm+       /mmmmmmmmmm-   :mmm+  +h
	d/  smmmmh`      `dmmmmmmmmmd`       smmmmmmmmm:  `dmmms  /d
	d/  smmmmms       :mmmmmmmmm+        `dmmmmmmmd.  smmmms  /d
	h+  +mmmmmm/       smmmmmmmh  +       /mmmmmmmy  /mmmmm+  +h
	oy  -mmmmmmd.      `dmmmmmd- +m/       smmmmmd. .dmmmmm-  yo
	.d-  ymmmmmmh       :mmmmm+ .dmd-      `dmmmm/  ymmmmmy  -d.
	 oy  .dmmmmmmo       smmmh  hmmmh`      :mmmy  +mmmmmd.  yo
	 `ho  -dmmmmmd:      `dmd- ommmmms       smd- .dmmmmd-  oh`
	  .h+  -dmmmmmd`      :m+ -dmmmmmm:      `do  hmmmmd-  +h.
	   .ho  .ymmmmmy       + `hmmmmmmmd.      :` ommmmy.  oh.
		`sy.  /hmmmm+        ommmmmmmmmy        -dmmh/  .ys`
		  :ho`  /hmmd-      :mmmmmmmmmmmo      `hmh/  `oh:
			/h+`  -odh`    `dmmmmmmmmmmmd:     oo-  `+h/
			  /ys:   ~~    smmmmmmmmmmmmmd`       :sy/
				.+ys/.    `/osyyhhhhyyso/:`   ./sy+.
				   ./oys+:.`            `.:+syo/.
					   `-/+osssssssssssso+/-`

	   We ♥ WordPress — http://wordpress.org/
	   (ASCII art by Mark Jaquith)
	-->
</head>
<body>
<script type="text/javascript">
	var _gaq = _gaq || [];
	var pluginUrl =
		'//www.google-analytics.com/plugins/ga/inpage_linkid.js';
	_gaq.push(['_require', 'inpage_linkid', pluginUrl]);
	_gaq.push(['_setAccount', 'UA-2653828-13']);
	_gaq.push(['_trackPageview']);

	(function () {
		var ga = document.createElement('script');
		ga.type = 'text/javascript';
		ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(ga, s);
	})();
</script>
<div id="fb-root"></div>
<script>(function (d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s);
		js.id = id;
		js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=203299123014981";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript">
	(function () {
		var po = document.createElement('script');
		po.type = 'text/javascript';
		po.async = true;
		po.src = 'https://apis.google.com/js/plusone.js';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(po, s);
	})();
</script>
<div class="toolbar">
	<div class="toolbar-inner">
		<div class="social-links">
			<div class="button facebook">
				<div class="fb-like" data-href="http://plugintable.com" data-send="false" data-layout="button_count" data-width="130" data-show-faces="false" data-font="arial" data-action="recommend"></div>
			</div>
			<div class="button google">
				<div class="g-plusone" data-size="medium"></div>
			</div>
			<div class="button twitter">
				<a href="https://twitter.com/share" class="twitter-share-button" data-via="SpinPress">Tweet</a>
				<script>!function (d, s, id) {
						var js, fjs = d.getElementsByTagName(s)[0];
						if (!d.getElementById(id)) {
							js = d.createElement(s);
							js.id = id;
							js.src = "//platform.twitter.com/widgets.js";
							fjs.parentNode.insertBefore(js, fjs);
						}
					}(document, "script", "twitter-wjs");</script>
			</div>
		</div>
		<div class="info-text">
		</div>
	</div>
</div>
<div class="wrapper">
	<div class="table">
		<aside class="infobox">
			<div class="example">
				<div class="element">Symbol</div>
				<div class="name-wrap">
					<div class="name">Plugin Name</div>
				</div>
			</div>
			<div class="intro">
				<h1 class="logo">
					<a href="https://plugintable.com" title="The Periodic Table of WordPress Plugins">The Periodic Table of WordPress Plugins</a>
				</h1>

				<div class="description">
					<p>
						Over <strong>50&lsquo;000 WordPress plugins</strong> have been contributed to the
						<a href="https://wordpress.org/plugins/" target="_blank">WordPress.org Plugin Directory</a>.
						Millions of websites are powered by these plugins, developed and maintained by an amazing open-source community around the globe.
						This table showcases the 108 most popular WordPress plugins, ranked by the number of active installs (though downloads are displayed).
					</p>
				</div>
			</div>
		</aside>
		<?php
		$plugins = get_plugins();

		foreach ( $plugins as $plugin ) : ?>
			<div class="plugin <?php echo $plugin['slug']; ?>">
				<div class="element"><?php echo get_element_name( get_plugin_name( $plugin['name'] ) ); ?></div>
				<div class="name-wrap">
					<div class="name"><?php echo get_plugin_name( $plugin['name'], 5, true ); ?></div>
				</div>
				<div class="tooltip right hidden">
					<div class="tooltip-inner">
						<div class="upper-wrap">
							<div class="name">
								<a href="<?php echo get_plugin_url( $plugin['slug'] ); ?>" title="<?php echo $plugin['name']; ?>" target="_blank"><?php echo $plugin['name']; ?></a>
							</div>
							<div class="author">Author: <?php echo $plugin['author']; ?></div>
							<div class="version">Version: <?php echo $plugin['version']; ?></div>
						</div>
						<div class="description"><?php echo $plugin['short_description']; ?></div>
						<div class="downloaded"><?php echo str_replace( '-', '&lsquo;', number_format( $plugin['downloaded'] ?? 0, 0, '.', '-' ) ); ?></div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
	<div class="footer">
		<p class="copyright">&copy; <?php echo date( 'Y' ); ?> plugintable.com / see also
			<a href="https://wpthemetable.com/" title="The Periodic Table of WordPress Themes" target="_blank">wpthemetable.com</a>
		</p>

		<p class="info">
			Brought to you by <a href="https://pascalbirchler.com">Pascal Birchler</a> (<a href="https://twitter.com/swissspidy">@swissspidy</a>)
		</p>
	</div>
</div>
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9/jquery.min.js"></script>-->
<script src="https://code.jquery.com/jquery-1.9.0.min.js"></script>
<script>
	jQuery(document).ready(function ($) {
		$(".plugin:nth-of-type(2)").addClass('nth-of-type-float');
		$(".plugin:nth-of-type(5), .plugin:nth-of-type(13)").addClass('nth-of-type-margin');
		$(".plugin:nth-of-type(1), .plugin:nth-of-type(3), .plugin:nth-of-type(11), .plugin:nth-of-type(18n+19)").addClass('nth-of-type-clear');

		$(document).on('click', function (e) {
			var clicked = $(e.target);
			if (clicked.is('.plugin') || clicked.parents('.plugin').length > 0)
				return;

			closeTooltips();
		});
		$('.plugin').on('click', function (e) {
			var show = true,
				offset = $(this).offset(),
				clicked = $(e.target);

			if (clicked.parents('.tooltip').length > 0)
				return;

			if ($(this).find('.tooltip').is(':visible')) show = false;

			closeTooltips();

			if (show) {
				if (offset.left > ( $('.table').width() / 2 ))
					$(this).find('.tooltip').removeClass('right');
				if ($('.table').height() - offset.top < 330)
					$(this).find('.tooltip').addClass('bottomtop');
				$(this).addClass('active').find('.tooltip').show('fast');
			}
		});

		function closeTooltips() {
			$('.tooltip').each(function () {
				$(this).parent('.plugin').removeClass('active');
				$(this).removeClass('bottomtop').hide('fast');
			});
		}
	});
</script>
</body>
</html>
