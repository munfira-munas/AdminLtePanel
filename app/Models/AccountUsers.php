<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountUsers extends Model
{
    use HasFactory;

    protected $table='account_users';
    /**
    * The attributes that are mass assignable.
    *
    * @var array<int, string>
    */

   protected $fillable = [
       'id',
       'first_name',
       'last_name',
       'email',
       'suburb',
       'country'
   ];
}
