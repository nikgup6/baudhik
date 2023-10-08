( function( api ) {

	// Extends our custom "baseball-club" section.
	api.sectionConstructor['baseball-club'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );