<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Contacts extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'cpf',
        'tel',
         'photo',
         'Cep',
         'street',
         'neighborhood',
         'state',
         'id',
         'user_id',
    ];

    public function user()
    {
      return $this->belongsTo(User::class);  
    }
}
