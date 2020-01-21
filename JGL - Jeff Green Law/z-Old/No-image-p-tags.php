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
    // do a regular expression replace...
    // find all p tags that have just
    // <p>maybe some white space<img all stuff up to /> then maybe whitespace </p>
    // replace it with just the image tag...
    return preg_replace('/<p>(\s*)(<img .* \/>)(\s*)<\/p>/iU', '\2', $content);
}

// we want it to be run after the autop stuff... 10 is default.
add_filter('the_content', 'filter_ptags_on_images');

?>