<?php

namespace App\Models;

use App\Traits\HasPrimaryKeyUuid;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class DespesaRecorrente extends Model
{
    use HasFactory, HasPrimaryKeyUuid, Authenticatable;

    public $timestamps = true;
    protected $fillable = ['id', 'nome', 'valor_base', 'status', 'id_user'];
    //protected $guarded = ['id', 'id_user'];
    protected $table = 'despesa_recorrente';
    protected $visible = ['id', 'nome', 'valor_base', 'status'];

    public function user()
    {
        return $this->hasMany(User::class, 'id');
    }
}
