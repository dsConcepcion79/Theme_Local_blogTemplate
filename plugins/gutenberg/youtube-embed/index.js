( function( blocks, element ) {
	var el = element.createElement;
	var source = blocks.source;
	var Editable = blocks.Editable;
	var MediaUploadButton = blocks.MediaUploadButton;
	var BlockControls = blocks.BlockControls;
	var Toolbar = wp.components.Toolbar;
	var Dashicon = wp.components.Dashicon;

	function youtubeID(url){
		url = url.split(/(vi\/|v%3D|v=|\/v\/|youtu\.be\/|\/embed\/)/);
		return undefined !== url[2]?url[2].split(/[^0-9a-z_\-]/i)[0]:url[0];
	}

	const { prop, children, query, html } = source;

	function edit( props ) {
		var onSelectCover = (media) => {
			props.setAttributes({cover: media.url, coverId: media.id});
		};

		var MediaUpload = el(MediaUploadButton, {
			value: props.attributes.cover,
			onSelect: onSelectCover,
			type: "image",
			value: props.coverId,
		}, el(Dashicon, {icon: "edit"}));

		var Toolbar_ = el(Toolbar, {},
			el('li', {}, MediaUpload)
		);

		var elements = [];

		if (props.attributes.cover) {
			elements.push(el(BlockControls, {key: 'controls'}, Toolbar_));

			var url = el('div', {}, el('input', {
				'type': 'url',
				'value': props.attributes.url || '',
				'className': 'components-placeholder__input',
				placeholder: 'Enter URL to embed here...',
				onChange: (event) => props.setAttributes({ url: event.target.value }),
			}));

			var title = el('div', {}, el('input', {
				'type': 'text',
				'value': props.attributes.title || '',
				'className': 'components-placeholder__input',
				placeholder: 'Video Title',
				onChange: (event) => props.setAttributes({ title: event.target.value }),
			}));

			var videoLength = el('div', {}, el('input', {
				'type': 'text',
				'value': props.attributes.videoLength || '',
				'className': 'components-placeholder__input',
				placeholder: '2:08',
				onChange: (event) => props.setAttributes({ videoLength: event.target.value }),
			}));

			var coverPreview = el('section', {
				key: 'cover-preview',
				'data-url': props.attributes.cover,
				style: {backgroundImage: `url(${ props.attributes.cover })`},
				className: 'wp-block-youtube-cover-image',
			}, [
				title,
				url,
				videoLength
			]);

			elements.push(coverPreview);
		} else {
			var placeHolder = el(wp.components.Placeholder, {
				key: 'placeholder',
				instructions: 'Drag image here or insert from media library',
				icon: 'format-image',
				label: 'Cover Image',
			}, el(MediaUploadButton, {
				buttonProps: { isLarge: true },
				onSelect: onSelectCover,
				type: 'image',
			}, 'Insert from Media Library'));

			elements.push(placeHolder)
		}

		return elements;
	}

	blocks.registerBlockType( 'rain/youtube-video', {
		title: 'YouTube+Cover',

		icon: 'video-alt3',

		category: 'common',

		attributes: {
			cover: {
				type: 'string',
			},
			coverId: {
				type: 'number',
			},
			url: {
				type: 'string',
			},
			title: {
				type: 'string',
			},
			videoLength: {
				type: 'string',
			}
		},

		edit: edit,

		save( { attributes } ) {

			var videoId = attributes.url ? youtubeID(attributes.url) : '';

			return el('div', {className: 'video', 'data-url': attributes.url, 'data-cover-id': attributes.coverId}, [
				el('iframe', {
					src: 'https://www.youtube.com/embed/' + videoId,
					frameBorder: 0,
					allowfullscreen: true,
				}),
				el('div', {className: 'video-poster'}, [
					el('img', {src: attributes.cover}),
					el('p', {className: 'video-title'}, attributes.title),
					el('div', {className: 'play'}, [
						el('p', {className: 'video-time'}, attributes.videoLength),
					])
				])
			]);
		},
	} );

} )(
	window.wp.blocks,
	window.wp.element
);
