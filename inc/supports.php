<?php
/**
 * Supports
 *
 * PHP version 8
 *
 * @category  GunneboTheme
 * @package   GunneboTheme
 * @author    Team Maverick <info@nexergroup.com>
 * @copyright 2024 Nexer Group
 * @license   https://www.gnu.org/licenses/gpl-2.0.txt GPL-2.0
 * @link      https://nexergroup.com
 */

add_theme_support( 'custom-spacing' );
add_theme_support( 'appearance-tools' );
add_theme_support( 'border' );
add_theme_support( 'link-color' );
add_theme_support( 'block-template-parts' );
add_theme_support( 'align-wide' );
add_theme_support( 'responsive-embeds' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );

/**
 * Add SVG support
 *
 * @param array $file_types The array of allowed file types.
 */
function custom_add_svg_support( $file_types ) {
	$new_filetypes        = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types           = array_merge( $file_types, $new_filetypes );
	return $file_types;
}
add_filter( 'upload_mimes', 'custom_add_svg_support' );
