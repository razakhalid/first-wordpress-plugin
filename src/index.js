import { registerBlockType } from '@wordpress/blocks';
import block from './block.json';
import { RichText } from '@wordpress/block-editor';
// import { __ } from '@wordpress/i18n';

registerBlockType(block.name, {
    edit() {
        return <RichText tagNme="h2" placeholder="Enter Heading" />
    }
});

// console.log('block loaded: fancy header');