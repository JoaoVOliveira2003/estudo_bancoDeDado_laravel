<?php

/*
Esta usando o .env do notes
*/

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;

// isso daqui é uma teste de conecção com uma base de fora
Route::get('/testeMysql', function () {
    try {
        DB::connection()->getPdo();
        echo 'Nome da getDatabaseName() -> ' . DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        die('erro' . $e);
    }
});

// isso daqui é uma teste de conecção com uma base de um arquivo interior
Route::get('/testeSqlLite', function () {
    try {
        DB::connection()->getPdo();
        echo 'teste testeSqlLite -> ' . DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        die('erro ->' . $e);
    }
});


Route::get('/podeConectarComDuasBases', function () {
    try {
        DB::connection('baseA')->getPdo();
        echo 'Conectou a base A -> ' . DB::connection('baseA')->getDatabaseName();
        echo '<br>';

        DB::connection('baseB')->getPdo();
        echo 'Conectou a base A -> ' . DB::connection('baseB')->getDatabaseName();
        echo '<br>';
    } catch (\Exception $e) {
        die('erro' . $e);
    }
});

Route::get('/daParaConfigurarPelaFuncao', function () {
    try {
        Config::set('database.conexao', [
            'driver'   => 'mysql',
            'host'     => '127.0.0.1',
            'port'     => 3306,
            'database' => 'meu_banco',
            'username' => 'root',
            'password' => 'secret',
            'charset'  => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix'   => '',
        ]);

        DB::connection('meu_banco')->getPdo();
        echo 'Conectou em tese';

    } catch (\Exception $e) {
        die('erro' . $e);
    }
});

Route::get('/migration', function () {
        DB::connection()->getPdo();
    echo 'oie';
});
