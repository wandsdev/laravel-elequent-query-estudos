<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoLancamento extends Model
{
    use HasFactory;

    protected $table = 'tipo_lancamento';

    /**
     * @return HasMany
     */
    public function lacamentos(): HasMany
    {
        return $this->hasMany(Lancamento::class);
    }
}
