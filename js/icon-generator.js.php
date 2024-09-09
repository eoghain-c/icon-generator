(function() {
	// Register buttons
	tinymce.create('tinymce.plugins.IconButton', {
		init: function( editor, url ) {
			// Add button that inserts shortcode into the current position of the editor
			editor.addButton( 'icon_button', {
				title: 'Icon Generator',
				icon: false,
				onclick: function() {
					// Open a TinyMCE modal
					editor.windowManager.open({
						title: 'Icon Shortcode Generator',
						body: [
							{
								type: 'listbox',
								name: 'icon',
								label: 'Select Icon',
								values: [
									{ text: ' ', value: ' ' },
									
								]
							},
							{
								type:'listbox',
								name: 'colour',
								label: 'Icon Colour',
								values: [
									{ text: 'Black', value: 'black'},
				
								]
							},
							{
								type:'listbox',
								name: 'style',
								label: 'Content Style',
								values: [
									{ text: 'Bold', value: 'bold'},
									{ text: 'Normal', value: 'normal'}
								]
							},
							{
								type: 'textbox',
								name: 'link',
								label: 'Link'
							},
							{
								type: 'textbox',
								name: 'content',
								label: 'Content'
							},
							{
								type: 'textbox',
								name: 'alt',
								label: 'alt tag(for SEO purposes)'
							}
						],
						onsubmit: function( e ) {
							editor.insertContent( '[icon icon="' + e.data.icon + '" colour="' + e.data.colour + '" style="' + e.data.style + '" link="' + e.data.link + '" content="' + e.data.content + '" alt="' + e.data.alt + '"]' );
						}
					});
				}
			});
		}
	});
	// Add buttons
	tinymce.PluginManager.add( 'icon_button_script', tinymce.plugins.IconButton );
})();