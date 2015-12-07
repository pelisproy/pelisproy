<?php
$CI = & get_instance ();
$CI->load->helper ( 'url' );
$config['navigation'] = array(
		'peliculas' => array(
				'id'     => 'peliculas',
				'title'  => 'Películas',
				'link'   => base_url('films/listarPelis')
		),
		'directores' => array(
				'id'     => 'directores',
				'title'  => 'Directores',
				'link'   => base_url('director/listarDirector')
		),
		'actores' => array(
				'id'     => 'actores',
				'title'  => 'Actores',
				'link'   => base_url('actor/listarPorActor')
		),
		'genero' => array(
				'title'  => 'Género',
				'link'   => base_url('genero/listarPorGenero')
		)
);
?>