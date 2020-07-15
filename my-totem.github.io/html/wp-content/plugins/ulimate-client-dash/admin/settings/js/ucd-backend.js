// Color Picker Styling

(function( $ ) {

    // Add Color Picker to all inputs that have 'color-field' class
    $(function() {
        $('.color-field').wpColorPicker();
    });

})( jQuery );


(function( $ ) {

	// Toggle subitems
	var $toogleItems = $( '.ucd-item-toggle' );

	if ( 1 > $toogleItems.length ) {
		return;
	}

	$toogleItems.on( 'click', function( event ) {
		event.preventDefault();

		var $menuItem = $( this ).closest( '.top-menu' );
			$subItems = $menuItem.next( '.ucd-dynamic-subitems-wrap' );

			$( this ).toggleClass( 'ucd-item-toggle-active' );
			$subItems.slideToggle();
	} );

})( jQuery );
