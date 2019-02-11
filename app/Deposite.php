<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deposite extends Model
{
     //can set some values here table name
     protected $table = 'deposites';
     //primary key
         public $primarykey = 'account_number';
     //timestumps
         public $timestamps = true;
     
}
