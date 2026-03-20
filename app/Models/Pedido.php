<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'pratos_id',
        'quantidade'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function pratos()
    {
        return $this->belongsTo(pratos::class);
    }
}