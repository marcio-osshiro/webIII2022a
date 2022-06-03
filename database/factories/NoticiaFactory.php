<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categoria;

class NoticiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      $caminho = storage_path().'/app/public/imagens/';
      $imagem = $this->faker->image($caminho, 640, 480, null, false, false);
      var_dump($imagem);
    	return [
              'titulo' => $this->faker->sentence,
              'descricao' => $this->faker->realText,
              'data' => $this->faker->date,
              'autor' => $this->faker->name,
              'categoria_id' => Categoria::orderbyRaw('RANDOM()')->take(1)->first()->id,
              'imagem' => $imagem,
          ];
    }
}
