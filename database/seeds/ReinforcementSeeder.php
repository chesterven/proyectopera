<?php

use Illuminate\Database\Seeder;
use App\Reinforcement;
class ReinforcementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Reinforcement::create([
            
            'nombre'=> 'Lectura',
        ]);

        Reinforcement::create([
            
            'nombre'=> 'Comprensión y atención',
        ]);

        Reinforcement::create([
            
            'nombre'=> 'Memoria',
        ]);

        Reinforcement::create([
            
            'nombre'=> 'Sintetizar información',
        ]);
    }
}
