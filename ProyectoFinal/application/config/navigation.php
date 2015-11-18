<?php

$config['navigation'] = array(
           /* 'home' => array(
                'id'     => 'home',
                'title'  => 'Home',
                'link'   => ''
            ),*/
            'cartelera' => array(
                'id'     => 'cartelera',
                'title'  => 'Cartelera',
                'link'   => 'films/listarPelis'
            ),
            'actores' => array(
                'title'  => 'Actores',
                'link'   => '../actor/listaActor'
            ),
			'directores' => array(
					'id'     => 'directores',
					'title'  => 'Directores',
					'link'   => '../director/listarDirector'
			),
			'genero' => array(
					'id'     => 'genero',
					'title'  => 'Género',
					'link'   => '../genero/listarGenero'
			)
        );

