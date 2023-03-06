<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Pedido extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    public function platos(): BelongsToMany{
        return $this->belongsToMany(Plato::class, 'platos_pedidos');
    }
}
