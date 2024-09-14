<?php
/**
 * Polylang Languages Custom Rest API
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

/**
 * Get List of Polylang Languages
 *
 * @return WP_Post
 */
function custom_get_polylang_languages() {
	if ( function_exists( 'get_terms' ) ) {
		$languages = get_terms( 'term_language' );

		if ( ! empty( $languages ) && is_array( $languages ) ) {
			foreach ( $languages as &$language ) {
				if ( isset( $language->slug ) ) {
					$language->slug = str_replace( 'pll_', '', $language->slug );
				}
			}

			return $languages;
		}
	}

	return null;
}
