<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tienda;

class TiendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tienda::truncate();

        $json = file_get_contents("database/data/tiendas.json");
        $countries = json_decode($json);

        foreach ($countries as $key => $value) {
            Tienda::create([
                "id"=>$value->id,
                "name"=>$value->name,
                "type"=>$value->type,
                "direction"=>$value->direction,
            ]);
        }
    }
}
