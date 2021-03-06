<?php
/**
 * Font Size Component.
 *
 * Manages the font size component.
 *
 * @package   Exhale
 * @author    Justin Tadlock <justintadlock@gmail.com>
 * @copyright 2019 Justin Tadlock
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://themehybrid.com/themes/exhale
 */

namespace Exhale\Font\Size;

use Hybrid\Contracts\Bootable;
use Exhale\Tools\Config;

/**
 * Font size component class.
 *
 * @since  1.0.0
 * @access public
 */
class Component implements Bootable {

	/**
	 * Stores the font size object.
	 *
	 * @since  1.0.0
	 * @access protected
	 * @var    Sizes
	 */
	protected $sizes;

	/**
	 * Creates the component object.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  Sizes  $sizes
	 * @return void
	 */
	public function __construct( Sizes $sizes ) {

		$this->sizes = $sizes;
	}

	/**
	 * Bootstraps the component.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function boot() {

		// Run registration on `after_setup_theme`.
		add_action( 'after_setup_theme', [ $this, 'register' ], 5 );

		// Register default sizes and choices.
		add_action( 'exhale/font/size/register', [ $this, 'registerDefaultSizes' ] );
	}

	/**
	 * Runs the register actions.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function register() {

		do_action( 'exhale/font/size/register', $this->sizes );

		$_sizes = [];

		foreach ( $this->sizes as $size ) {
			$_sizes[] = [
				'name' => $size->label(),
				'size' => $size->size(),
				'slug' => $size->name()
			];
		}

		add_theme_support( 'editor-font-sizes', $_sizes );
	}

	/**
	 * Registers default sizes.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  Sizes  $sizes
	 * @return void
	 */
	public function registerDefaultSizes( Sizes $sizes ) {

		foreach ( Config::get( 'font-sizes' ) as $name => $options ) {
			$sizes->add( $name, $options );
		}
	}
}
