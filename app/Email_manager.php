<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email_manager extends Model
{
    protected $fillable = [
        'id',
        'name',
        'number',
        'email' 
    ];
  
  
}
