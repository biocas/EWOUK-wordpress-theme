<?php
/**
 * Genesis Sample.
 *
 * Onboarding config shared between Starter Packs.
 *
 * Genesis Starter Packs give you a choice of content variation when activating
 * the theme. The content below is common to all packs for this theme.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

return [
	'plugins'          => [
		[
			'name'       => __( 'Atomic Blocks', 'genesis-sample' ),
			'slug'       => 'atomic-blocks/atomicblocks.php',
			'public_url' => 'https://atomicblocks.com/',
		],
		[
			'name'       => __( 'Simple Social Icons', 'genesis-sample' ),
			'slug'       => 'simple-social-icons/simple-social-icons.php',
			'public_url' => 'https://wordpress.org/plugins/simple-social-icons/',
		],
		[
			'name'       => __( 'Genesis eNews Extended (Third Party)', 'genesis-sample' ),
			'slug'       => 'genesis-enews-extended/plugin.php',
			'public_url' => 'https://wordpress.org/plugins/genesis-enews-extended/',
		],
		[
			'name'       => __( 'WPForms Lite (Third Party)', 'genesis-sample' ),
			'slug'       => 'wpforms-lite/wpforms.php',
			'public_url' => 'https://wordpress.org/plugins/wpforms-lite/',
		],
	],
	'content'          => [
		'blocks'  => [
			'post_title'     => 'Block Content Examples',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/block-examples.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => [ '_genesis_layout' => 'full-width-content' ],
		],
		'about'   => [
			'post_title'     => 'About Us',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/about.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'featured_image' => CHILD_URL . '/config/import/images/about.jpg',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => [
				'_genesis_layout'              => 'full-width-content',
				'_genesis_hide_singular_image' => true,
			],
		],
		'contact' => [
			'post_title'     => 'Contact Us',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/contact.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
		],
		'landing' => [
			'post_title'     => 'Landing Page',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/landing-page.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'page_template'  => 'page-templates/landing.php',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => [
				'_genesis_layout'              => 'full-width-content',
				'_genesis_hide_breadcrumbs'    => true,
				'_genesis_hide_singular_image' => true,
				'_genesis_hide_footer_widgets' => true,
			],
		],
        'register' => [
			'post_title'     => 'REGISTER FOR WORKSHOP',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/register.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'page_template'  => 'page-templates/register.php',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => [
				'_genesis_layout'              => 'full-width-content',
				'_genesis_hide_breadcrumbs'    => true,
				'_genesis_hide_singular_image' => true,
				'_genesis_hide_footer_widgets' => true,
			],
		],
        'engage' => [
			'post_title'     => 'ENGAGE YOUR COMMUNITY',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/engage.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'page_template'  => 'page-templates/engage.php',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => [
				'_genesis_layout'              => 'full-width-content',
				'_genesis_hide_breadcrumbs'    => true,
				'_genesis_hide_singular_image' => true,
				'_genesis_hide_footer_widgets' => true,
			],
		],
        'tools' => [
			'post_title'     => 'Our Tools',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/tools.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'page_template'  => 'page-templates/tools.php',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => [
				'_genesis_layout'              => 'full-width-content',
				'_genesis_hide_breadcrumbs'    => true,
				'_genesis_hide_singular_image' => true,
				'_genesis_hide_footer_widgets' => true,
			],
		],
        'projects' => [
			'post_title'     => 'Projects',
			'post_content'   => require dirname( __FILE__ ) . '/import/content/projects.php',
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'page_template'  => 'page-templates/projects.php',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'meta_input'     => [
				'_genesis_layout'              => 'full-width-content',
				'_genesis_hide_breadcrumbs'    => true,
				'_genesis_hide_singular_image' => true,
				'_genesis_hide_footer_widgets' => true,
			],
		],
	],
	'navigation_menus' => [
		'primary' => [
            'engage' => [
				'title' => 'ENGAGE YOUR COMMUNITY',
			],
			'register' => [
				'title' => 'REGISTER FOR WORKSHOP',
			],
			'about'    => [
				'title' => 'About Us',
			],
			'contact'  => [
				'title' => 'Our Tools',
			],
			'blocks'   => [
				'title' => 'Projects',
			],
		],
	],
	'widgets'          => [
		'footer-1' => [
			[
				'type' => 'text',
				'args' => [
					'title'  => 'Design',
					'text'   => '<p>With an emphasis on typography, white space, and mobile-optimized design, your website will look absolutely breathtaking.</p><p><a href="#">Learn more about design</a>.</p>',
					'filter' => 1,
					'visual' => 1,
				],
			],
		]
	],
];
