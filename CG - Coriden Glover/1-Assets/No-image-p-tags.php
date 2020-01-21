<?php
/*
Plugin Name: Image P tag remover
Description: Plugin to remove p tags from around images in content outputting, after WP autop filter has added them. (oh the irony)
Version: 1.0
Author: Fublo Ltd
Author URI: http://fublo.net/
*/
function filter_ptags_on_images($content)
{
    return preg_replace('/<p>(\s*)(<img .* \/>)(\s*)<\/p>/iU', '\2', $content);
}
add_filter('the_content', 'filter_ptags_on_images');
?>