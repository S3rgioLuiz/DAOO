<?php

use Illuminate\Support\Facades\Route;
use App\Models\{Alternativa, Modulo, Questao};


Route::prefix('query')->group(function () {

    Route::get('questoes-nivel/{min}/{max}', function($min, $max) {
        $result = Questao::whereBetween('nivel', [$min, $max])
            ->orderBy('nivel', 'desc')
            ->get();
        return response()->json($result);
    });

    Route::get('alternativas-ativas', function() {
        $result = Alternativa::where('status', 1)->get();
        return response()->json($result);
    });

    Route::get('questoes-modulo/{moduloId}', function($moduloId) {
        $result = Questao::whereHas('alternativas', function($q) {
            $q->where('status', 1);
        })->where('modulo_id', $moduloId)->get();
        return response()->json($result);
    });

    Route::get('questoes-count-modulo/{moduloId}', function($moduloId) {
        $result = Questao::where('modulo_id', $moduloId)
            ->whereHas('alternativas', function($q) {
                $q->where('status', 1);
            })->count();
        return response()->json($result);
    });

    Route::get('modulos-com-questoes-alternativas', function() {
        $result = Modulo::with([
            'questoes' => function($q) {
                $q->whereHas('alternativas');
            },
            'alternativas' => function($q) {
                $q->where('status', 1);
            }
        ])->get();
        return response()->json($result);
    });


});
