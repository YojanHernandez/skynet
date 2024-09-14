<?php
/**
 * Custom Functions File
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
 * ACF Options Route.
 *
 * @return array
 */
function acf_options_route() {
	return get_fields( 'options' );
}
