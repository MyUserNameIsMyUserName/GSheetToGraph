<?php

class GSTG_HelloWorld extends ET_Builder_Module {

	public $slug       = 'gstg_hello_world';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => '#',
		'author'     => 'Slavko V.',
		'author_uri' => 'https://github.com/MyUserNameIsMyUserName/GSheetToGraph',
	);

	public function init() {
		$this->name = esc_html__( 'Hello World', 'gstg-gsheettograph' );
	}

	public function get_fields() {
		return array(
			'content' => array(
				'label'           => esc_html__( 'Content', 'gstg-gsheettograph' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear inside the module.', 'gstg-gsheettograph' ),
				'toggle_slug'     => 'main_content',
			),
		);
	}

	public function render( $attrs, $content = null, $render_slug ) {
		return sprintf( '<h1>%1$s</h1>', $this->props['content'] );
	}
}

new GSTG_HelloWorld;
