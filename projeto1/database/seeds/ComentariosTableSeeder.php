<?php

use Illuminate\Database\Seeder;

class ComentariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comentarios')->insert([
            'produto_id'=> 1,
            'usuario' =>'Jose do comentário',
            'comentario'=> 'O melhor, show!',
            'created_at' => date('Y/m/d h:i:s'),
            'updated_at' => date('Y/m/d h:i:s')
        ]);
        DB::table('comentarios')->insert([
            'produto_id'=> 1,
            'usuario' =>'Maria joaquina',
            'comentario'=> 'SHOW esse produto',
            'created_at' => date('Y/m/d h:i:s'),
            'updated_at' => date('Y/m/d h:i:s')
        ]);
        DB::table('comentarios')->insert([
            'produto_id'=> 1,
            'usuario' =>'Joaquina',
            'comentario'=> 'Achei legal... parabéns',
            'created_at' => date('Y/m/d h:i:s'),
            'updated_at' => date('Y/m/d h:i:s')
        ]);
    }
}
