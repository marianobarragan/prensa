<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $guarded = ['id'];
    
    const CREATED_AT = 'creado';
    const UPDATED_AT = 'ultima_modificacion';
}
