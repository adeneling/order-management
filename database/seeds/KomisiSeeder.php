<?php

use Illuminate\Database\Seeder;
use App\Komisi;
class KomisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
    	$komisi = 0;
        for ($i=0; $i <9 ; $i++) { 
    		App\Komisi::create([
			    'komisi' => $komisi,
			]);
            $komisi+=5;
    	}
    }
}
