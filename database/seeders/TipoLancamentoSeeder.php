<?php

namespace Database\Seeders;

use App\Models\TipoLancamento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoLancamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoLancamento::factory(1)->create();
    }
}
