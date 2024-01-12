<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','number1', 'number2', 'number3','number_fixe',
        'name_site','slogan','logo','bg','favicon',
        'facebook','instagram','twitter','linkedin','youtube',
        'email','adresse','description','map',
        'projet','clients','partenaires','experiences'
    ];
}
