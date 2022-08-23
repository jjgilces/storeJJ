<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comentario;
use File;

class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comentario::truncate();
  
        $json = file_get_contents("database/data/comentarios.json");
        $countries = json_decode($json);
        
        foreach ($countries as $key => $value) {
            Comentario::create([
                "id"=>$value->id,
                "nombre_cliente" => $value->nombre_cliente,
                "titulo" => $value->titulo,
                "descripcion" => $value->descripcion,
                "calificacion" => $value->calificacion,
                "likes" => $value->likes,
                "dislikes" => $value->dislikes,
                "id_producto" => $value->id_producto
            ]);
        }
    }
}