<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuarioSeeder extends Seeder {

    public function run() {

        $usuarioModel = new \App\Models\UsuarioModel;

        $usuario = [
            
            'email' => 'admin@admmin.com',
            'telefone' => '41 - 9999-9999',
        ];

        $usuarioModel->protect(false)->insert($usuario);

        $usuario = [
            
            'email' => 'fulano@email.com',
            'telefone' => '41 - 8888-9999',
        ];
        $usuarioModel->protect(false)->insert($usuario);

        dd($usuarioModel->errors());
    }

}
?>