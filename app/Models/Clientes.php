<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'endereco',
        'telefone',
        'cpf',
        'email',
        'senha'
    ];

protected $hidden = [ // este campo não sera exibido
    'senha',
    'remember_token',
];
public function pedidos(){
    //return $this->hasMany(Pedido::class);
}

}
