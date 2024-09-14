<?php
/**
 * Functions File
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

// Setup.
define('CUSTOM_THEME_DIR', trailingslashit(get_template_directory()));
define('CUSTOM_THEME_URL', trailingslashit(get_template_directory_uri()));
if (! defined('CUSTOM_THEME_VERSION') ) {
    define('CUSTOM_THEME_VERSION', wp_get_theme()->get('Version'));
}

// Api Router.
require_once CUSTOM_THEME_DIR . 'inc/api-router.php';

// Enqueues.
require_once CUSTOM_THEME_DIR . 'inc/enqueue-source.php';

// Supports.
require_once CUSTOM_THEME_DIR . 'inc/supports.php';


function my_custom_menu_page()
{
    add_menu_page(
        'Chat OpenAI',
        'Chat OpenAI', // Título del menú
        'manage_options', // Capacidad
        'chat-openai', // Slug del menú
        'my_custom_menu_page_html', // Función de contenido
        'dashicons-format-chat', // Icono del menú
        20 // Posición
    );
}
add_action('admin_menu', 'my_custom_menu_page');


function my_custom_menu_page_html()
{
    get_template_part('parts/chat-openai');
}