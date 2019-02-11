<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //can set some values here table name
    protected $table = 'posts';
//primary key
    public $primarykey = 'transction_id';
//timestumps
    public $timestamps = true;

}
