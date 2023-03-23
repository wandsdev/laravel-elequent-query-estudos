<?php

namespace Database\Factories;

use App\Models\TipoLancamento;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lancamento>
 */
class LancamentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tipoLancamento = TipoLancamento::get()->first();
        return [
            'descricao' => fake()->text(15),
            'valor' => fake()->numberBetween(100, 999999),
            'data' => fake()->date(),
            'tipo_lancamento_id' => $tipoLancamento->id
        ];
    }
}
