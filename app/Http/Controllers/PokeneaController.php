<?php

namespace App\Http\Controllers;

use App\Http\Resources\PokeneaResource;

class PokeneaController extends Controller
{
    public static $pokeneas = array(
        array(
            'id' => 1,
            'name' => 'Fico',
            'height' => '40 % según Invamer',
            'skill' => 'Politiquear',
            'image' => 'https://storage.googleapis.com/artifacts.te-software.appspot.com/pokeneas/alcalde-nea.jpg',
            'phrase' => 'Orden y oportunidades para todos',
        ),
        array(
            'id' => 2,
            'name' => 'Feid',
            'height' => '1.72 m',
            'skill' => 'Cantar',
            'image' => 'https://storage.googleapis.com/artifacts.te-software.appspot.com/pokeneas/feid.jpg',
            'phrase' => 'Estoy borracho y prendí algo pa\' volar',
        ),
        [
            'id' => 3,
            'name' => 'El Fuicioso',
            'height' => '1.65 m',
            'skill' => 'Ser fuicioso',
            'image' => 'https://storage.googleapis.com/artifacts.te-software.appspot.com/pokeneas/fuicioso.png',
            'phrase' => 'Todo bien, todo bonito. Solo Nacional a morir. ¿Sabe qué?, solo Nacional. Fuiciosos',
        ],
        [
            'id' => 4,
            'name' => 'Doña Gloria',
            'height' => '1.55 m',
            'skill' => 'Sobrevivir al metrocable',
            'image' => 'https://storage.googleapis.com/artifacts.te-software.appspot.com/pokeneas/gloria.png',
            'phrase' => '¡CINDY NO! ¿Yo por qué me vine? Yo si soy marica en mi gran puta de la vida.',
        ],
        [
            'id' => 5,
            'name' => 'El Lidioso',
            'height' => '1.65 m',
            'skill' => 'Ser lidioso',
            'image' => 'https://storage.googleapis.com/artifacts.te-software.appspot.com/pokeneas/hqdefault.jpg',
            'phrase' => 'Todo mal, todo feito. Solo Medellín a morir. ¿Sabe qué?, solo Medellín. Lidiosos',
        ],
        [
            'id' => 6,
            'name' => 'La hinchada nea',
            'height' => '1.65 m',
            'skill' => 'Siempre perder',
            'image' => 'https://storage.googleapis.com/artifacts.te-software.appspot.com/pokeneas/medellin.jpg',
            'phrase' => 'REXIXTENCIA NORTE',
        ],
        [
            'id' => 7,
            'name' => 'Neas',
            'height' => '1.65 m',
            'skill' => '',
            'image' => 'https://storage.googleapis.com/artifacts.te-software.appspot.com/pokeneas/neas-2.jpg',
            'phrase' => '',
        ],
        [
            'id' => 8,
            'name' => 'El polinea',
            'height' => '1.70 m',
            'skill' => 'Ser polinea',
            'image' => 'https://storage.googleapis.com/artifacts.te-software.appspot.com/pokeneas/policia.png',
            'phrase' => '',
        ],
        [
            'id' => 9,
            'name' => 'El zarco',
            'height' => '1.65 m',
            'skill' => 'Ser zarco',
            'image' => 'https://storage.googleapis.com/artifacts.te-software.appspot.com/pokeneas/zarco.jpeg',
            'phrase' => '',
        ],
        [
            'id' => 10,
            'name' => 'Ñeras',
            'height' => '1.65 m',
            'skill' => 'Insultar a Camila González',
            'image' => 'https://storage.googleapis.com/artifacts.te-software.appspot.com/pokeneas/%C3%B1eras.png',
            'phrase' => '',
        ]

    );

    public function findAll()
    {
        return response()->json([
            'data' => PokeneaResource::collection(PokeneaController::$pokeneas),
            'meta' => [
                'api_version' => '1.0.0',
                'ip' => $_SERVER['REMOTE_ADDR'],
                'docker_container' => gethostbyname(gethostname()),
            ],
        ]);
    }

    public function find($id)
    {
        // get the pokenea with the specified id from values of the static array
        $pokenea = array_filter(PokeneaController::$pokeneas, function ($pokenea) use ($id) {
            return $pokenea['id'] == $id;
        });
        $pokenea = array_values($pokenea)[0];

        return response()->json([
            'data' => PokeneaResource::collection($pokenea),
            'meta' => [
                'api_version' => '1.0.0',
                'ip' => $_SERVER['REMOTE_ADDR'],
                'docker_container' => gethostbyname(gethostname()),
            ],
        ]);
    }

    public function getRandom()
    {
        $pokeneaIndex = array_rand(PokeneaController::$pokeneas);

        return response()->json([
            'data' => PokeneaController::$pokeneas[$pokeneaIndex],
            'meta' => [
                'api_version' => '1.0.0',
                'ip' => $_SERVER['REMOTE_ADDR'],
                'docker_container' => gethostbyname(gethostname()),
            ],
        ]);
    }

    public function getRandomWithView()
    {
        $pokeneaIndex = array_rand(PokeneaController::$pokeneas);

        $viewData = [
            'pokenea' => PokeneaController::$pokeneas[$pokeneaIndex],
            'docker_container' => gethostbyname(gethostname()),
        ];

        return view('pokenea.show', $viewData);
    }
}
