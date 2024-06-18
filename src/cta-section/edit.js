
import { __ } from '@wordpress/i18n';
import { InspectorControls, useBlockProps } from '@wordpress/block-editor';
import { PanelBody, TextControl, RichText, ToggleControl } from '@wordpress/components';

import './editor.scss';

export default function Edit({ attributes, setAttributes }) {
	const {  title, subtitle, text } = attributes;
	return (
		<>
			<InspectorControls>
				<PanelBody title={ __( 'Settings', 'kodeverftet-blocks' ) }>
					<TextControl
						label={ __(
							'Title',
							'kodeverftet-blocks'
						) }
						value={ title || '' }
						onChange={ ( value ) =>
							setAttributes( { title: value } )
						}
					/>
					<TextControl
						label={ __(
							'Subtitle',
							'kodeverftet-blocks'
						) }
						value={ subtitle || '' }
						onChange={ ( value ) =>
							setAttributes( { subtitle: value } )
						}
					/>
					<TextControl
						label={ __(
							'Text',
							'kodeverftet-blocks'
						) }
						value={ text || '' }
						onChange={ ( value ) =>
							setAttributes( { text: value } )
						}
					/>
				</PanelBody>
			</InspectorControls>
			<section { ...useBlockProps() }>
				<hgroup>
					<h2 className={'title'}>{ title }</h2>
					<p>{ subtitle }</p>
				</hgroup>
			</section>
		</>
	);
}
