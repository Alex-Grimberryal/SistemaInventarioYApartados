<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ambiente extends Model
{
    protected $table = 'ambientes';

    protected $primaryKey = 'idAmbiente';

    // Atributos rellenables (fillable)
    protected $fillable = [
        'ambiente',
        'pabellon',
        'piso',
    ];
}
