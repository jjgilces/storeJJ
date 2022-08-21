<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;
use File;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::truncate();
  
        $json = file_get_contents("database/data/productos.json");
        $countries = json_decode($json);
        
        foreach ($countries as $key => $value) {
            Producto::create([
                "id"=>$value->id,
                "name" => $value->name,
                "price" => $value->price,
                "description" => $value->description,
                "category" => $value->category,
                "image" => $value->image,
                "rating_id" => $value->id,
            ]);
        }
    }
}
