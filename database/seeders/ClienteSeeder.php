<?php

namespace Database\Seeders;

use App\Models\Clientes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Clientes::create([
            'nome'=>'Cliente Exemplo',
            'endereco'=>'Rua Exemplo, 123',
            'telefone'=>'1199999999999',
            'cpf'=>'12345678901',
            'email'=>'cliente@example.com',
            'senha'=>bcrypt('senha123'),
        ]);
        Clientes::create([
            'nome'=>'Cliente Exemplo',
            'endereco'=>'Rua Exemplo, 123',
            'telefone'=>'1199999999999',
            'cpf'=>'12345678902',
            'email'=>'cliente2@example.com',
            'senha'=>bcrypt('senha123'),
        ]);
        Clientes::create([
            'nome'=>'Cliente Exemplo',
            'endereco'=>'Rua Exemplo, 123',
            'telefone'=>'1199999999999',
            'cpf'=>'12345678903',
            'email'=>'cliente3@example.com',
            'senha'=>bcrypt('senha123'),
        ]);
    }
}
