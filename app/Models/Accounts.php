<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    use HasFactory;

    protected $table='accounts';
    /**
    * The attributes that are mass assignable.
    *
    * @var array<int, string>
    */

   protected $fillable = [
       'first_name',
       'last_name',
       'company_name',
       'suburb',
       'country'
   ];

}
