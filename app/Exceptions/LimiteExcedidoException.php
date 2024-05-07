<?php

namespace App\Exceptions;

use Exception;

class LimiteExcedidoException extends Exception
{
    public $message = 'O limite foi excedido';
}
