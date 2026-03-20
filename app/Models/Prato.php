<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Pedido;

class pratos extends Model
{
    use HasFactory;
    protected $table = 'pratos';
    protected $fillable = [
        'nome',
        'preco',
        'descricao'
    ];

    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}