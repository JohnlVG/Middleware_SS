<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\AgeLog;
use App\Services\AgeRouterService;

class VerificarEdad
{
    public function handle(Request $request, Closure $next)
    {
        $edad = $request->input('edad');

        if (!is_numeric($edad) || $edad < 0 || $edad > 120) {
            return redirect()->route('error');
        }

        AgeLog::create(['age' => $edad]);

        $ruta = app(AgeRouterService::class)->obtenerRuta((int)$edad);

        return redirect($ruta);
    }
}
