<?php

namespace App\Services;

use FarhanWazir\GoogleMaps\GMaps;

class ConstroiMapaService {

    protected $gmap;

    public function __construct(GMaps $gmap) {
        $this->gmap = $gmap;
    }

    public function constroiMapa($localizacoes) {

        $config = $this->retornaConfiguracaoInicial();
        $this->gmap->initialize($config);

        foreach ($localizacoes as $localizacao) {
            $marker['position'] = $localizacao->latitude . ', ' . $localizacao->longitude;
            $marker['infowindow_content'] = $localizacao->address;

            $this->gmap->add_marker($marker);
        }

        $map = $this->gmap->create_map();

        return $map;
    }

    public function retornaConfiguracaoInicial()
    {
        $config = [];
        //$config['center'] = 'New York, USA';
        $config['center'] = '-20.45213, -54.58208';
        $config['zoom'] = '16';
        $config['map-height'] = '500px';
        //$config['map-width'] = '500px';

        $config['scrollwheel'] = false;

        return $config;
    }
}