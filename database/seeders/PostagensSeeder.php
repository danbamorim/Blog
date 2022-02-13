<?php

namespace Database\Seeders;

use App\Models\Postagem;
use Illuminate\Database\Seeder;

class PostagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Postagem::factory()->count(5)->create();
    }
}
