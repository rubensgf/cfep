<?php

use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert([
            'descricao' => 'Inscricao',
        'valor' => '150.00',
        'ativo' => 1
        ]);

        DB::table('produtos')->insert([
            'descricao' => '2 via da carteirinha',
        'valor' => '70.00',
        'ativo' => 1
        ]);
    }
}
