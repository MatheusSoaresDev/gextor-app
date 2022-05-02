<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mes_Despesa_Recorrente extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = ['id', 'data', 'valor', 'comentario', 'forma_pagamento', 'status', 'boleto', 'comprovante', 'id_user', 'id_depesa_recorrente'];
    protected $table = 'mes_despesa_recorrente';
    protected $visible = ['id', 'data', 'valor', 'comentario', 'forma_pagamento', 'status', 'boleto', 'comprovante', 'id_user', 'id_depesa_recorrente'];


}
