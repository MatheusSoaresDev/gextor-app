<?php

namespace App\Observers;

use App\Models\DespesaRecorrente;
use Illuminate\Support\Facades\Auth;

class DespesaRecorrenteObserver
{
    /**
     * Handle the DespesaRecorrente "created" event.
     *
     * @param  \App\Models\DespesaRecorrente  $despesaRecorrente
     * @return void
     */
    public function created(DespesaRecorrente $despesaRecorrente)
    {

    }

    public function creating(DespesaRecorrente $despesaRecorrente)
    {
        $despesaRecorrente->id_user = Auth::id();
    }
}
