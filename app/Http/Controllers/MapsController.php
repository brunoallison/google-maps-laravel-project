<?php

namespace App\Http\Controllers;

use App\Maps;
use App\Services\ConstroiMapaService;
use FarhanWazir\GoogleMaps\GMaps;
use Illuminate\Http\Request;

class MapsController extends Controller
{
    protected $constroiMapaService;

    public function __construct(ConstroiMapaService $constroiMapaService){
        $this->constroiMapaService = $constroiMapaService;
    }

    public function index() {

        $localizacoes = Maps::all();

        $map = $this->constroiMapaService->constroiMapa($localizacoes);

        return view('welcome', compact('map'));
    }

    public function store(Request $request)
    {
        $mapa = new Maps();

        $mapa->address = $request->address;
        $mapa->latitude = $request->latitude;
        $mapa->longitude = $request->longitude;

        $mapa->save();

        return redirect()->back();
    }

    public function show(Maps $maps)
    {
        //
    }

    public function edit(Maps $maps)
    {
        //
    }

    public function update(Request $request, Maps $maps)
    {
        //
    }

    public function destroy(Maps $maps)
    {
        //
    }
}
