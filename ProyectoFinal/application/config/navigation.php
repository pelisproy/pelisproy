<?php
$CI = & get_instance ();
$CI->load->helper ( 'url' );
$config['navigation'] = array(
		'actores' => array(
				'id'     => 'actores',
				'title'  => 'Actores',
				'link'   => base_url('actor/listarPorActor')
		),
		'directores' => array(
				'id'     => 'directores',
				'title'  => 'Directores',
				'link'   => base_url('director/listarDirector')
		),
		'cartelera' => array(
				'id'     => 'cartelera',
				'title'  => 'Cartelera',
				'link'   => base_url('films/listarPelis')
		),
		'genero' => array(
				'title'  => 'Genero',
				'link'   => base_url('genero/listarPorGenero')
		)
);
?>