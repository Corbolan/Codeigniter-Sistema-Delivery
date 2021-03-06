<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuarioSeeder extends Seeder {

    public function run() {

        $usuarioModel = new \App\Models\UsuarioModel;

        $usuario = [
            'nome' => 'Lucio Antonio',
            'email' => 'admin@admmin.com',
            'cpf' => '215.742.780-53',
            'telefone' => '41 - 9999-9999',
        ];

        $usuarioModel->protect(false)->insert($usuario);

        $usuario = [
            'nome' => 'Fulano de Tal',
            'email' => 'fulano@email.com',
            'cpf' => '265.806.400-49',
            'telefone' => '41 - 8888-9999',
        ];
        $usuarioModel->protect(false)->insert($usuario);

        dd($usuarioModel->errors());
    }

}

?>