<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lancamento extends Model
{
    use HasFactory;

    protected $table = 'lancamento';

    public function tipoLancamento(): BelongsTo
    {
        return $this->belongsTo(TipoLancamento::class);
    }
}
