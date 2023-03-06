<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Plato extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function pedidos(): BelongsToMany{
        return $this->belongsToMany(Pedido::class, 'platos_pedidos');
    }
}
