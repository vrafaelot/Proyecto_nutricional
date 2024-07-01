<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;

    protected $table = 'contacto';

    protected $fillable = [
        'user_id',
        'nombre',
        'correo',
        'telefono',
        'asunto',
        'descripcion',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
