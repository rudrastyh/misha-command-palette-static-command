import { useCommand } from '@wordpress/commands';
import { registerPlugin } from '@wordpress/plugins';
import { cog } from '@wordpress/icons';


registerPlugin( 'rudr-command-permalinks-settings', {
	render: () => {
		useCommand( {
			name: 'open-permalinks-settings',
			label: 'Open permalinks settings',
			icon: cog,
			callback: () => {
				document.location.href = 'options-permalink.php';
				close();
			},
		} )
	}
} )
