<?php

use Illuminate\Database\Seeder;

class LocalidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Localidad::create(['localidad' => 'Zazárida','municipio_id'=>'25','ubigeom_id'=>'1125','ubigeop_id'=>'112505','ubigeol_id'=>'112505']);

    }
}
