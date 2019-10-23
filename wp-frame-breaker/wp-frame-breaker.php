<?php
/*
Plugin Name: WP Frame Breaker
Plugin URI: http://www.paulmc.org/whatithink/wordpress/plugins/wp-frame-breaker/
Description: Adds a short javascript to your blog header to break out of any containing frames
Version: 1.0
Author: Paul McCarthy
Author URI: http://www.paulmc.org/whatithink
*/

/*  Copyright 2009  Paul McCarthy  (email : paul@paulmc.org)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

//function to add actions when plugin is loaded
function pmcWPFrameBreaker_init() {
	add_action('wp_head', 'pmcWriteBreaker');
}

//function to write the js
function pmcWriteBreaker() {
	//simple javascript
	echo "\n";
	echo '<!-- Start WP Frame Breaker Script -->' ."\n";
	echo '<script type="text/javascript">' . "\n";
	echo "\n";
	echo "\t" . 'if (top != self) top.location.href = self.location.href' . "\n";
	echo "\n";
	echo '</script>' . "\n";
	echo '<!-- End WP Frame Breaker Script -->' ."\n";
	echo "\n";
}

//run the init function when the plugin is loaded
add_action('plugins_loaded', 'pmcWPFrameBreaker_init');
?>