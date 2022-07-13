<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    ];

    public function getContacts(string $search = null){
       $users = $this->where(function ($query) use ($search){
         
        $query->where('name', 'LIKE', "%{$search}%");
         $query->orWhere('email', "{$search}");

       })->paginate(5);

       return $users;
    }
}
