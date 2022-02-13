<?php

namespace Database\Factories;
use App\Models\Postagem;
use Illuminate\Database\Eloquent\Factories\Factory;
class PostagemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        return [
            'titulo' => $this->faker->titulo,
            'conteudo' => $this->faker->text()
        ];
    } 
}
