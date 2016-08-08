<?php

use Illuminate\Database\Seeder;

class CuadrantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Motivo::create(
         	['cuadrante' => 'P-1',
         	'telefono'=>'0416-610-34-96',
         	'organismo_id'=>'1',//polifalcon
         	'municipio_id'=>'10',//miranda
         	'sectores'=>'PARCELAMIENTO CASTULO MARMOL, PANTANO ABAJO, PARCELAMIENTO JOSEFA CAMEJO.']
         	);
        Motivo::create(
         ['cuadrante' => 'P-2',
         	'telefono'=>'0416-610-34-59',
         	'organismo_id'=>'2',//polimiranda
         	'municipio_id'=>'10',//miranda
         	'sectores'=>'LOS ORUMOS, POLIDEPORTIVO, SAN BOSCO, APAMATES, PLAZA, BARRIO LA  CONCORDIA']
         	);
        Motivo::create(
		['cuadrante' => 'P-3',
         	'telefono'=>'0416-610-35-01',
         	'organismo_id'=>'2',//polimiranda
         	'municipio_id'=>'10',//miranda
         	'sectores'=>'LA FLORESTA, PARCELAMIENTO RAFAEL, GALLARDO, SANTA ANA.']
         	);
        Motivo::create(
		['cuadrante' => 'P-4',
         	'telefono'=>'0416-610-34-97',
         	'organismo_id'=>'1',//polifalcon
         	'municipio_id'=>'10',//miranda
         	'sectores'=>'LA FLORESTA, PARCELAMIENTO RAFAEL, GALLARDO, SANTA ANA.']
         	);
        Motivo::create(
		['cuadrante' => 'P-5',
         	'telefono'=>'0416-610-34-57',
         	'organismo_id'=>'1',//polifalcon
         	'municipio_id'=>'10',//miranda
         	'sectores'=>'ZONA INDUSTRIAL, VELITAS VI, VELITAS II, VELITA V, URBANIZACIÓN 480, URBANIZACIÓN SANTA MARÍA, URBANIZACIÓN SANTA PAULA']
         	);
        Motivo::create(
		['cuadrante' => 'P-6',
         	'telefono'=>'0416-610-35-17',
         	'organismo_id'=>'3',//gnb
         	'municipio_id'=>'10',//miranda
         	'sectores'=>'PUEBLO NUEVO, 28 DE JULIO NORTE Y SUR, LAS MERCEDES, LA FLORIDA.']
         	);
        Motivo::create(
		['cuadrante' => 'P-7',
         	'telefono'=>'0416-610-35-16',
         	'organismo_id'=>'1',//polifalcon
         	'municipio_id'=>'10',//miranda
         	'sectores'=>'LAS GUINEAS, CENTRO CORO, ASOCENTRO, BARRIO SAN NICOLAS, BARRIO LAS PANELAS, BARRIO CURAZAITO.']
         	);
        Motivo::create(
		['cuadrante' => 'P-8',
         	'telefono'=>'0416-610-35-15',
         	'organismo_id'=>'1',//polifalcon
         	'municipio_id'=>'10',//miranda
         	'sectores'=>'PANTANO CENTRO, PANTANO ARRIBA, EL CHIPRE, BOBARE NORTE']
         	);
        Motivo::create(
		['cuadrante' => 'P-9',
         	'telefono'=>'0416-610-35-09',
         	'organismo_id'=>'2',//polimiranda
         	'municipio_id'=>'10',//miranda
         	'sectores'=>'PARQUE CRISTAL, RESIDENCIAS SOL DE CORO, PARCELAMIENTO CACIQUE BACOA, NUESTRA SEÑORA DE LA COROMOTO, SAN JOSE.']
         	);
        Motivo::create(
		['cuadrante' => 'P-10',
         	'telefono'=>'0416-610-34-91',
         	'organismo_id'=>'1',//polifalcon
         	'municipio_id'=>'10',//miranda
         	'sectores'=>'PARCELAMIENTO Y BARRIO CRUZ VERDE, URBANIZACIÓN ANTONIO JOSE DE SUCRE, URBANIZACIÓN JOSEFA CAMEJO']
         	);
        Motivo::create(
		['cuadrante' => 'P-11',
         	'telefono'=>'0416-610-48-01',
         	'organismo_id'=>'1',//polifalcon
         	'municipio_id'=>'10',//miranda
         	'sectores'=>'HOSPITAL, MONTE VERDE, URBANIZACIÓN AMPIES, URBANIZACIÓN EL BOSQUE, URBANIZACIÓN EL CAREY']
         	);
        Motivo::create(
		['cuadrante' => 'P-12',
         	'telefono'=>'0416-610-52-02',
         	'organismo_id'=>'1',//polifalcon
         	'municipio_id'=>'10',//miranda
         	'sectores'=>'CABUDARE, LOS CLARITOS, URBANIZACIÓN 28 DE JULIO, MONZÓN, LAS MARGARITAS, BOBARE SUR.']
         	);
        Motivo::create(
		['cuadrante' => 'P-13',
         	'telefono'=>'0416-610-48-06',
         	'organismo_id'=>'2',//polimiranda
         	'municipio_id'=>'10',//miranda
         	'sectores'=>'BARRIO 5 DE JULIO']
         	);
        Motivo::create(
		['cuadrante' => 'P-14',
         	'telefono'=>'0416-610-51-99',
         	'organismo_id'=>'1',//polifalcon
         	'municipio_id'=>'10',//miranda
         	'sectores'=>'URBANIZACIÓN CRUZ VERDE']
         	);
        Motivo::create(
		['cuadrante' => 'P-15',
         	'telefono'=>'0416-610-48-03',
         	'organismo_id'=>'2',//polimiranda
         	'municipio_id'=>'10',//miranda
         	'sectores'=>'LOS PEROZOS']
         	);
        Motivo::create(
		['cuadrante' => 'P-16',
         	'telefono'=>'0416-610-48-02',
         	'organismo_id'=>'',//GNB - 132
         	'municipio_id'=>'10',//miranda
         	'sectores'=>'LA CAÑADA, URBANIZACIÓN  MONSEÑOR ITURRIZA, PARCELAMIENTO VICTORIA']
         	);
        Motivo::create(
		['cuadrante' => 'P-17',
         	'telefono'=>'0416-610-47-99',
         	'organismo_id'=>'1',//polifarcon
         	'municipio_id'=>'10',//miranda
         	'sectores'=>'URBANIZACIÓN LAS EUGENIAS, URBANIZACIÓN ARISTIDES GALVANI, ZUMURUCUARE']
         	);
        Motivo::create(
		['cuadrante' => 'P-18',
         	'telefono'=>'0416-610-48-05',
         	'organismo_id'=>' ',//DESUR CORO
         	'municipio_id'=>'10',//miranda
         	'sectores'=>'URBANIZACIÓN LOS MEDANOS.']
         	);
        Motivo::create(
		['cuadrante' => 'P-19',
         	'telefono'=>'0416-610-47-97',
         	'organismo_id'=>'1',//polifalcon
         	'municipio_id'=>'10',//miranda
         	'sectores'=>'LOS LIBERTADORES, CAJUARAO, LA BOMBA, SECTOR LAS HUERTAS']
         	);
        
    }

}
