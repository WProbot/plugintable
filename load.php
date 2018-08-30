<?php

date_default_timezone_set( 'Europe/Zurich' );
error_reporting( 0 );

function sort_by_downloads( $a, $b ) {
	if ( ! isset( $a['downloaded'], $b['downloaded'] ) || $a['downloaded'] == $b['downloaded'] ) {
		return 0;
	}

	return ( $a['downloaded'] > $b['downloaded'] ) ? - 1 : 1;
}

function sort_by_installs( $a, $b ) {
	if ( ! isset( $a['active_installs'], $b['active_installs'] ) || $a['active_installs'] == $b['active_installs'] ) {
		return sort_by_downloads( $a, $b );
	}

	return ( $a['active_installs'] > $b['active_installs'] ) ? - 1 : 1;
}

function get_plugins() {
	$today        = new DateTime( 'today', new DateTimeZone( 'Europe/Zurich' ) );
	$last_updated = DateTime::createFromFormat( 'Y-m-d', date( 'Y-m-d', filemtime( '_plugins.json' ) ), new DateTimeZone( 'Europe/Zurich' ) );
	$plugins      = @file_get_contents( './_plugins.json' );

	if ( $last_updated < $today || null === json_decode( $plugins ) || ! file_exists( '_plugins.json' ) ) {
		remote_get_plugins();
	}

	return get_plugins_from_cache();
}

function remote_get_plugins() {
	$wporgClient = \Rarst\Guzzle\WporgClient::getClient();
	$popular     = $wporgClient->getPluginsBy( 'browse', 'popular', 1, 108, [
		'description'     => false,
		'compatibility'   => false,
		'rating'          => true,
		'ratings'         => false,
		'active_installs' => true,
		'downloaded'      => true,
		'downloadlink'    => false,
		'last_updated'    => false,
		'requires'        => false,
		'tested'          => false,
		'homepage'        => false,
		'versions'        => false,
	] );

	if ( ! empty( $popular['plugins'] ) ) {
		usort( $popular['plugins'], 'sort_by_installs' );
		file_put_contents( '_plugins.json', json_encode( $popular['plugins'] ) );
	}
}

function get_plugins_from_cache() {
	$plugins = file_get_contents( './_plugins.json' );

	return json_decode( $plugins, true );
}

function get_element_name( $name ) {
	static $elements = [];

	// Remove unnecessary characters
	$name = trim( str_replace( [
		'"',
		'&',
		'(',
		')',
		'/',
		'\\',
		'WP',
		'|',
		'®',
		'*',
	], '', html_entity_decode( $name ) ), ' -–' );

	// Retrieve word parts
	$parts = preg_split( "/[-– ]/", $name ); // Jetpack | by | WordPress.com

	$letters = [];

	/**
	 * First attempt
	 * Result: Jb
	 */
	foreach ( $parts as $part ) {
		// First letter of every part
		$letters[] = mb_substr( $part, 0, 1 );

		// If only 1 part, get 2nd letter
		if ( 1 === count( $parts ) ) {
			$letters[] = mb_substr( $part, 1, 1 );
		}
	}
	// Put element name together
	$element = ucfirst( strtolower( $letters[0] . $letters[1] ) );

	// If already used, try most simple: "J"
	if ( isset( $elements[ $element ] ) ) {
		$element = ucfirst( strtolower( $letters[0] ) );
	}

	/**
	 * If Jb is already used, try:
	 * - Jt
	 * - Jp
	 * - Jb
	 * - Jy
	 */
	$x    = 1;
	$part = 0;
	while ( isset( $elements[ $element ], $parts[ $part ] ) ) {
		if ( strlen( $parts[ $part ] ) === $x ) {
			$x = 0;
			$part ++;
		}
		$element = ucfirst( strtolower( $letters[0] . mb_substr( $parts[ $part ], $x, 1 ) ) );
		$x ++;
	}

	/**
	 * Reserved names
	 */
	switch ( $name ) {
		case 'Jetpack by WordPress.com':
			$element = 'Je';
			break;
		case 'Social':
			$element = 'Scl';
			break;
		case 'Wordfence Security':
			$element = 'Wf';
			break;
		case 'WordPress Social Ring':
			$element = 'Sr';
			break;
		case 'ShareThis: Share Buttons':
			$element = 'St';
			break;
		case 'Socializer':
			$element = 'Sz';
			break;
		case 'Polldaddy Polls #38':
			$element = 'Pd';
			break;
		case '125':
			$element = 'Wp';
			break;
		case 'WordPress Importer':
			$element = 'Im';
			break;
		case 'WooCommerce':
		case 'Woo­Commerce':
			$element = 'Wc';
			break;
		case 'WooCommerce PayPal Checkout':
		case 'WooCommerce PayPal Checkout Gateway':
			$element = 'Pg';
			break;
		case 'WooCommerce Stripe Payment':
		case 'WooCommerce Stripe Payment Gateway':
			$element = 'Sg';
			break;
	}

	// Slug definitely already in use
	if ( isset( $elements[ $element ] ) ) {
		echo 'XX';
	}

	$elements[ $element ] = $name;

	return $element;
}

function get_plugin_name( $name, $words = 3, $short = false ) {
	/**
	 * Reserved names
	 */
	switch ( $name ) {
		case 'Jetpack by WordPress.com':
			return 'Jetpack';
			break;
		case 'BackUpWordPress':
			return 'BackUp&shy;WordPress';
			break;
		case 'FeedWordPress':
			return 'Feed&shy;WordPress';
			break;
		case 'WooCommerce':
			return 'Woo&shy;Commerce';
			break;
		case 'underConstruction':
			return 'under&shy;Construction';
			break;
	}

	if ( true === $short ) {
		switch ( $name ) {
			case 'NextScripts: Social Networks Auto-Poster':
				return 'Social Networks Auto-Poster';
				break;
			case 'ShareThis: Share Buttons and Social Analytics':
				return 'ShareThis';
				break;
			case 'Post video players, slideshow albums, photo galleries and music / podcast playlist':
				return 'Post video players';
				break;
			case 'WooCommerce - excelling eCommerce':
				return 'Woo&shy;Commerce';
				break;
			case 'WordPress SEO by Yoast':
				return 'WordPress SEO';
				break;
			case 'Hupso Share Buttons for Twitter, Facebook &#38; Google+':
				return 'Hupso Share Buttons';
				break;
			case 'Shareaholic &#124; email, bookmark, share buttons':
				return 'Shareaholic';
				break;
			case 'Polldaddy Polls &#38; Ratings':
				return 'Polldaddy';
				break;
			case 'Really simple Facebook Twitter share buttons':
				return 'Really simple share buttons';
				break;
			case 'JW Player for WordPress &#8211; Flash &#38; HTML5 Video Player':
				return 'JW Player for WordPress';
				break;
			case 'MapPress Easy Google Maps':
				return 'MapPress';
				break;
			case 's2Member Framework (Member Roles, Capabilities, Membership, PayPal Members)':
				return 's2Member Framework';
				break;
			case 'Shareaholic &#124; share buttons &#38; related posts':
				return 'Shareaholic';
				break;
			case 'Shareaholic* &#124; email, bookmark, share buttons':
				return 'Shareaholic*';
				break;
			case 'MediaElement.js - HTML5 Video &#38; Audio Player':
				return 'Media&shy;Element.js';
				break;
			case 'Advanced YouTube Embed by Embed Plus':
				return 'Advanced YouTube Embed';
				break;
			case 'MailPoet Newsletters (formerly Wysija)':
				return 'MailPoet Newsletters';
				break;
			case 'Quick Cache (Speed Without Compromise)':
				return 'Quick Cache';
				break;
		}
	}

	$name = trim( $name );

	$pos = strpos( $name, ' - ' );
	if ( $pos !== false && $pos !== 0 ) {
		$name = substr( $name, 0, $pos );
	}
	$pos2 = strpos( $name, ' – ' );
	if ( $pos2 !== false && $pos2 !== 0 ) {
		$name = substr( $name, 0, $pos2 );
	}

	$array = explode( ' ', $name );

	$array = array_chunk( $array, $words );

	if ( empty( $array[1] ) ) {
		return $name;
	}


	return rtrim( implode( ' ', $array[0] ), ',;()-–' );
}

function get_plugin_url( $slug ) {
	return 'http://wordpress.org/plugins/' . $slug . '/';
}
