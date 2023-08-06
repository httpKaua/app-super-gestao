<?php

use Illuminate\Database\Seeder;
use App\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $contato = new SiteContato();
        // $contato->name = 'Sistema SG';
        // $contato->telefone = '(11) 99999-8888';
        // $contato->email = 'contato@sg.com.br';
        // $contato->motivo = 1;
        // $contato->msg = 'Seja bem-vindo ao sistema Super Gestão';
        // $contato->save();

        factory(SiteContato::class, 100)->create();

        // SiteContato::create([
        //     'name' => 'Sistema LX',
        //     'telefone' => '(32) 88888-9999',
        //     'email' => 'contato@lx.com.br',
        //     'motivo' => 1,
        //     'msg' => 'Seja bem-vindo ao sistema LX'
        // ]);
    }
}
