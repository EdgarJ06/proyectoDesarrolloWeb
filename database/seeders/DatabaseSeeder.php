<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Cliente;
use App\Models\Persona;
use App\Models\Proveedores;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Proveedores::factory(175)->create();

        // Seeders
        $this->call(TipoPersonaSeeder::class);
        $this->call(EstadoSeeder::class);

        // Factory
        Persona::factory(175)->create();

        // Usuario
        \App\Models\User::factory()->create([
            'name' => 'Administrador',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$SOA783nBrSAZ5CLBWCrm6OX2m62ZttqGMpFAPHwcjZ7QeWx1tFtfa'
        ]);
    }
}
