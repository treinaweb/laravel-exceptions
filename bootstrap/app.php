<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Foundation\Application;
use App\Exceptions\LimiteExcedidoException;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Contracts\Filesystem\FileNotFoundException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // $exceptions->render(function(LimiteExcedidoException $e, Request $request) {
        //     return response()->view('erros.limite', [], 500);
        // });

        // $exceptions->render(function(Exception $e, Request $request) {
        //     if ($request->is('/api/*')) {
        //         //return response()->json(['mensagem'=>'minha mensagem', 500]);
        //     }

        //     return response()->view('erros.limite', [], 500);
        // });

        // $exceptions->shouldRenderJsonWhen(function (Request $request, Throwable $e) {
        //     if ($request->is('/api/*')) {
        //         return true;
        //     }
     
        //     return $request->expectsJson();
        // });

        $exceptions->dontReport([
            LimiteExcedidoException::class
        ]);

        // $exceptions->report(function (LimiteExcedidoException $e) {
        //     File::put('treinaweb.txt', $e->getMessage());
        // })->stop(); 

        // $exceptions->report(function (FileNotFoundException $e) {
        //     File::put('treinaweb.txt', $e->getMessage());
        // })->stop(); 
    })->create();
