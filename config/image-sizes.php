<?php
/**
 * Image Sizes Config.
 *
 * Defines the image sizes that the theme sets.
 *
 * @package   Exhale
 * @author    Justin Tadlock <justintadlock@gmail.com>
 * @copyright 2019 Justin Tadlock
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://themehybrid.com/themes/exhale
 */

return [
	'post-thumbnail' => [
		'label'            => __( 'Landscape: Thumbnail', 'exhale' ),
		'width'            => 178,
		'height'           => 100,
		'is_featured_size' => false
	],
	'exhale-landscape-medium' => [
		'label'  => __( 'Landscape: Medium', 'exhale' ),
		'width'  => 650,
		'height' => 366
	],
	'exhale-landscape-large' => [
		'label'  => __( 'Landscape: Large', 'exhale' ),
		'width'  => 900,
		'height' => 506
	],
	'exhale-landscape-extra-large' => [
		'label'  => __( 'Landscape: Extra Large', 'exhale' ),
		'width'  => 1366,
		'height' => 768
	],
	'exhale-landscape-huge' => [
		'label'  => __( 'Landscape: Huge', 'exhale' ),
		'width'  => 1920,
		'height' => 1080
	]
];
