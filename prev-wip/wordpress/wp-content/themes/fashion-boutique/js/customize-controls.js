( function( api ) {

	// Extends our custom "fashion-boutique" section.
	api.sectionConstructor['fashion-boutique'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );