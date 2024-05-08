<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Exceptions\LimiteExcedidoException;
use Illuminate\Support\Facades\File;
use Symfony\Component\HttpKernel\Exception\HttpException;

Route::get('/deposito/{valor}', function ($valor) {
    // O método do laravel explicitamente lança a exceção
    // $usuario = User::findOrFail(1);
    // return $usuario;

    // Lançamos a exceção manualmente
    if ($valor > 1000) {
        //throw LimiteExcedidoException::mensal();
        throw LimiteExcedidoException::diario();
    }

    return 'Deposito realizado com sucesso';
    
    // O Laravel gera uma exceção por um erro da nossa parte
    // return view('');
    // File::get('');

    //Lançando HTTP exceptions
    //throw new HttpException(403);
    // abort(403, 'Minha mensagem de teste');
});
