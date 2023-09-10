<?php

namespace Database\Seeders;

use App\Models\Navbars;
use Illuminate\Database\Seeder;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $links = [
            [
                'name' => 'Inicio',
                'route' => 'index',
                'ordering' => 1,
            ],
            [
                'name' => 'Comprar',
                'route' => 'imoveis.index',
                'ordering' => 2,
            ],
            [
                'name' => 'Alugar',
                'route' => 'imoveis.index',
                'ordering' => 3,
            ]

        ];

        foreach ($links as $key => $navbar) {
            Navbars::create($navbar);
        }
    }
}
