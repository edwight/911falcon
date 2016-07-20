<?php

use Illuminate\Database\Seeder;

class MunicipiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Municipio::create(['municipio' => 'ACOSTA','capital'=>'San Juan de los Cayos','latitude'=>'', 'longitude'=>'','levelzoom'=>'']);
        Municipio::create(['municipio' => 'BOLIVAR','capital'=> '','latitude'=>'', 'longitude'=>'','levelzoom'=>'']);
        Municipio::create(['municipio' => 'BUCHIVACOA','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'' ]);
        Municipio::create(['municipio' => 'CARIRUBANA','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'' ]);
        Municipio::create(['municipio' => 'COLINA','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'' ]);
		Municipio::create(['municipio' => 'DEMOCRACIA','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'' ]);

        Municipio::create(['municipio' => 'FALCON','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'' ]);
        Municipio::create(['municipio' => 'FEDERACION','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'' ]);
        Municipio::create(['municipio' => 'MAUROA','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'' ]);

        Municipio::create(['municipio' => 'MIRANDA','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'' ]);
        Municipio::create(['municipio' => 'PETIT','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'' ]);
        Municipio::create(['municipio' => 'SILVA','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'' ]);

        Municipio::create(['municipio' => 'ZAMORA','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'' ]);
        Municipio::create(['municipio' => 'DABAJURO','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'' ]);
        Municipio::create(['municipio' => 'MONS. ITURRIZA','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'' ]);

        Municipio::create(['municipio' => 'LOS TAQUES','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'' ]);
        Municipio::create(['municipio' => 'PIRITU','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'' ]);
        Municipio::create(['municipio' => 'UNION','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'' ]);

        Municipio::create(['municipio' => 'SAN FRANCISCO','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'' ]);
        Municipio::create(['municipio' => 'JACURA','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'' ]);
        Municipio::create(['municipio' => 'CACIQUE MANAURE','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'' ]);

        Municipio::create(['municipio' => 'PALMA SOLA','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'' ]);
        Municipio::create(['municipio' => 'SUCRE','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'' ]);
        Municipio::create(['municipio' => 'URUMACO','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'' ]);
        Municipio::create(['municipio' => 'TOCOPERO','capital'=>'','latitude'=>'', 'longitude'=>'','levelzoom'=>'' ]);
    }
}
