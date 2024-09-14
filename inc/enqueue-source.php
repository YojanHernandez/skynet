<?php
/**
 * Enqueue Source
 *
 * PHP version 8
 *
 * @category  CustomTheme
 * @package   CustomTheme
 * @author    Team Maverick <info@nexergroup.com>
 * @copyright 2024 Nexer Group
 * @license   https://www.gnu.org/licenses/gpl-2.0.txt GPL-2.0
 * @link      https://nexergroup.com
 */

/**
 * Enqueue Styles.
 *
 * @see https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 *
 * @return void
 */
function custom_enqueue_sources()
{
    wp_enqueue_script(
        'theme-scripts',
        CUSTOM_THEME_URL . '/build/index.js',
        array(),
        CUSTOM_THEME_VERSION,
        'all'
    );
}

    // ENQUEUE SCRIPTS AND STYLES.
add_action('init', 'custom_enqueue_sources');

