<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/deposito/{valor}', function ($valor) {
    // O método do laravel explicitamente lança a exceção
    // $usuario = User::findOrFail(1);
    // return $usuario;

    // Lançamos a exceção manualmente
    // if ($valor > 1000) {
    //     throw new Exception('O valor não pode ser maior do que 1000');
    // }
    // return 'Deposito realizado com sucesso';
    
    // O Laravel gera uma exceção por um erro da nossa parte
    //return view('');
});
