( function( blocks, element ) {
	var el = element.createElement;
	var source = blocks.source;
	var Editable = blocks.Editable;

	const { prop, children, query, html } = source;

	function edit( props ) {
		function onChange( value ) {
			props.setAttributes( { content: value } );
		}

		return el( Editable, {
			value: props.attributes.content,
			onChange: onChange,
			placeholder: 'Type link text here',
			focus: props.focus,
			onFocus: props.setFocus,
		});
	}

	blocks.registerBlockType( 'rain/read-more', {
		title: 'Read More',

		icon: 'admin-links',

		category: 'common',

		attributes: {
			content: {
				type: 'array',
				source: children('p'),
			},
		},

		edit: edit,

		save( { attributes } ) {
			const { content } = attributes;
			return el( 'div', {}, el('p', {}, content ) );
		},
	} );

} )(
	window.wp.blocks,
	window.wp.element
);
