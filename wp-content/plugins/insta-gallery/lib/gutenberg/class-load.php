<?php

namespace QuadLayers\IGG\Gutenberg;

use QuadLayers\IGG\Helpers as Helpers;
use QuadLayers\IGG\Models\Feed as Models_Feed;
use QuadLayers\IGG\Models\Account as Models_Account;
use QuadLayers\IGG\Frontend\Load as Frontend;

class Load {

	protected static $instance;

	private function __construct() {
		add_action( 'admin_print_scripts-post-new.php', array( $this, 'enqueue_scripts' ), 11 );
		add_action( 'admin_print_scripts-post.php', array( $this, 'enqueue_scripts' ), 11 );
		add_action( 'init', array( $this, 'register_block' ) );
	}

	public function enqueue_scripts() {
		Frontend::instance()->enqueue_scripts();
		$gutenberg = include QLIGG_PLUGIN_DIR . 'build/gutenberg/js/index.asset.php';
		wp_enqueue_style( 'qligg-gutenberg-editor', plugins_url( '/build/gutenberg/css/editor.css', QLIGG_PLUGIN_FILE ), array(), QLIGG_PLUGIN_VERSION );
		wp_enqueue_script( 'qligg-gutenberg', plugins_url( '/build/gutenberg/js/index.js', QLIGG_PLUGIN_FILE ), $gutenberg['dependencies'], $gutenberg['version'], true );
		wp_localize_script(
			'qligg-gutenberg',
			'qligg_gutenberg',
			array(
				'image_url'                  => plugins_url( '/assets/backend/img', QLIGG_PLUGIN_FILE ),
				'access_token_link_business' => Helpers::get_business_access_token_link(),
				'access_token_link_personal' => Helpers::get_personal_access_token_link(),
			)
		);
	}

	public function register_block() {
		register_block_type(
			'qligg/box',
			array(
				'attributes'      => $this->get_attributes(),
				'render_callback' => array( $this, 'render_callback' ),
				'style'           => [ 'swiper', 'qligg-frontend' ],
				'script'          => [ 'swiper', 'masonry' ],
				'editor_style'    => [ 'swiper', 'qligg-frontend' ],
				'editor_script'   => [ 'swiper', 'masonry' ],
			)
		);
	}

	public function render_callback( $attributes, $content, $block = array() ) {
		return Frontend::instance()->create_shortcode( $attributes );
	}

	private function get_attributes() {

		$account  = new Models_Account();
		$accounts = $account->get();

		$feed_model = new Models_Feed();
		$feed_arg   = $feed_model->get_args();

		$attributes = array();

		foreach ( $feed_arg as $id => $value ) {
			$attributes[ $id ] = array(
				'type'    => array( 'string', 'object', 'array', 'boolean', 'number', 'null' ),
				'default' => $value,
			);
			if ( $id === 'account_id' ) {
				$attributes[ $id ] = array(
					'type'    => array( 'string', 'object', 'array', 'boolean', 'number', 'null' ),
					'default' => (string) array_key_first( $accounts ),
				);
			}
		}

		return $attributes;
	}

	public static function instance() {
		if ( ! isset( self::$instance ) ) {
			self::$instance = new self();
		}
		return self::$instance;
	}
}
