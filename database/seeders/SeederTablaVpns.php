<?php

namespace Database\Seeders;

use App\Models\vpn;
use Illuminate\Database\Seeder;

class SeederTablaVpns extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vpns = [
            //emmanuel
            '10.6.0.2',
            '10.6.0.3',
            '10.6.0.4'
        ];

        $usuarios = [
            '1',
            '2',
            '3'
        ];
        for($i=0; $i<count($vpns); $i++){
            vpn::create(['user_id' => $usuarios[$i], 'vpn' => $vpns[$i]]);
        }
    }
}
