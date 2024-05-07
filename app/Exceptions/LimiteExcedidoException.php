<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;

class LimiteExcedidoException extends Exception
{
    public $message = 'O limite foi excedido';

    public function render(Request $request) : Response
    {
        return response()->view('erros.limite', [], 500);
    }

    public function report()
    {
        File::put('treinaweb.txt', $this->getMessage());    
    }

}
