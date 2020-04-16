<?php
/**
 * Genesis Sample.
 *
 * Onboarding config to load plugins and homepage content on theme activation.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

$genesis_sample_shared_content = genesis_get_config( 'onboarding-shared' );

return [
	'starter_packs' => [
		'EWOUK'       => [
			'title'       => __( 'Ewouk', 'genesis-sample' ),
			'description' => __( 'A pack with EWOUK front end setup', 'genesis-sample' ),
			'thumbnail'   => get_stylesheet_directory_uri() . '/config/import/images/thumbnails/screenshot.png',
			'demo_url'    => 'https://demo.studiopress.com/genesis-sample/home-color/',
			'config'      => [
				'dependencies'     => [
					'plugins' => $genesis_sample_shared_content['plugins'],
				],
				'content'          => array_merge(
					[
						'homepage' => [
							'post_title'     => 'Homepage',
							'post_content'   => require dirname( __FILE__ ) . '/import/content/home-color.php',
							'post_type'      => 'page',
							'post_status'    => 'publish',
							'comment_status' => 'closed',
							'ping_status'    => 'closed',
							'meta_input'     => [
								'_genesis_layout'     => 'full-width-content',
								'_genesis_hide_title' => true,
								'_genesis_hide_breadcrumbs' => true,
								'_genesis_hide_singular_image' => true,
							],
						],
					],
					$genesis_sample_shared_content['content']
				),
				'navigation_menus' => $genesis_sample_shared_content['navigation_menus'],
				'widgets'          => $genesis_sample_shared_content['widgets'],
			],
		],
	],
];
