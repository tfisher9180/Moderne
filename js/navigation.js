/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
(function( $ ) {

	var menuToggle = $( '.site-header' ).find( '.menu-toggle' );
	var mobileNavigation = $( '#mobile-navigation' );

	var searchToggle = $( '.site-header' ).find( '.search-toggle' );

	(function() {
		if ( ! menuToggle.length || ! mobileNavigation.length || ! mobileNavigation.children().length ) {
			return;
		}

		var toggleMobileNavFn = function( e ) {
			e ? e.stopPropagation() : '';
			$( 'html' ).toggleClass( 'mobile-nav' );
		};

		menuToggle.on( 'click', toggleMobileNavFn );

		$( document ).on( 'click', '.mobile-nav', function( e ) {
			if ( ! $( e.target ).closest( mobileNavigation ).length ) {
				toggleMobileNavFn();
			}
		});

		mobileNavigation.find( '.close' ).on( 'click', toggleMobileNavFn );
	})();

	(function() {
		if ( ! searchToggle.length ) {
			return;
		}

		var toggleSearchFn = function( e ) {
			e ? e.preventDefault() : '';
			$( '.site-header' ).toggleClass( 'search-open' );
			searchToggle.siblings( '.search-form' ).find( 'input[type="search"]' ).focus();
		};

		searchToggle.on( 'click', toggleSearchFn );

		searchToggle.siblings( '.search-form' ).find( '.close' ).on( 'click', toggleSearchFn );
	})();

})( jQuery );
