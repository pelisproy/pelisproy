<?php

$config['navigation'] = array(
           /* 'home' => array(
                'id'     => 'home',
                'title'  => 'Home',
                'link'   => ''
            ),*/
            'directores' => array(
                'id'     => 'directores',
                'title'  => 'Directores',
                'link'   => '../director/listarDirector'
            ),
            'cartelera' => array(
                'id'     => 'cartelera',
                'title'  => 'Cartelera',
                'link'   => 'films/listarPelis'
            ),
            'actores' => array(
                'title'  => 'Actores',
                'link'   => '../actor/listaActor'
            )
        );

