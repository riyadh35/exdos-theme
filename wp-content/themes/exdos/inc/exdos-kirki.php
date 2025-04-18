
<?php

// panel name
new \Kirki\Panel(
	'exdos_panel_id',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Exdos Option', 'kirki' ),
		'description' => esc_html__( 'My Panel Description.', 'kirki' ),
	]
);




//  section 

new \Kirki\Section(
	'header_info',
	[
		'title'       => esc_html__( 'Header Info', 'kirki' ),
		'description' => esc_html__( 'My Section Description.', 'kirki' ),
		'panel'       => 'exdos_panel_id',
		'priority'    => 160,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'phone_number',
		'label'    => esc_html__( 'Phone Number', 'kirki' ),
		'section'  => 'header_info',
		'default'  => esc_html__( '0144555555555', 'kirki' ),
		'priority' => 10,
	]
);


// offcanvas



new \Kirki\Section(
	'header_offcanvas',
	[
		'title'       => esc_html__( 'Header Info', 'kirki' ),
		'description' => esc_html__( 'My Section Description.', 'kirki' ),
		'panel'       => 'exdos_panel_id',
		'priority'    => 160,
	]
);


new \Kirki\Field\Text(
	[
		'settings' => 'offcanvas_title',
		'label'    => esc_html__( 'Phone Number', 'kirki' ),
		'section'  => 'header_offcanvas',
		'default'  => esc_html__( '0144555555555', 'kirki' ),
		'priority' => 10,
	]
);


new \Kirki\Field\Textarea(
	[
		'settings' => 'offcanvas_description',
		'label'    => esc_html__( 'Phone Number', 'kirki' ),
		'section'  => 'header_offcanvas',
		'default'  => esc_html__( '0144555555555', 'kirki' ),
		'priority' => 10,
	]
);
