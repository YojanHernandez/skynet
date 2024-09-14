<?php
/**
 * API Router
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
function custom_create_page($request_data)
{
    $params = $request_data->get_params();

    $page_data = array(
        'post_title'    => $params['title'],
        'post_content'  => $params['content'],
        'post_status'   => 'publish',
        'post_type'     => 'page',
    );

    // Insertar la página en la base de datos
    $page_id = wp_insert_post($page_data);

    if (is_wp_error($page_id)) {
        return new WP_Error('error_creating_page', 'Error creating page: ' . $page_id->get_error_message(), array('status' => 500));
    } else {
        return new WP_REST_Response(array('message' => 'Page created successfully', 'page_id' => $page_id), 200);
    }
}

function otrac_cosa()
{
        // Datos de la página
    $page_data = array(
        'post_title'    => $title,
        'post_content'  => $content,
        'post_status'   => 'publish',
        'post_type'     => 'page',
    );

    // Insertar la página en la base de datos
    $page_id = wp_insert_post($page_data);

    if (is_wp_error($page_id)) {
        echo 'Error creating page: ' . $page_id->get_error_message();
    } else {
        echo 'Page created successfully with ID: ' . $page_id;
    }
}

function register_api_routes( )
{
    register_rest_route(
        'custom-theme/v1',
        '/create-page',
        array(
            'methods' => 'POST',
            'callback' => 'custom_create_page',
            'permission_callback' => '__return_true',
        )
    );
}

add_action('rest_api_init', 'register_api_routes');


