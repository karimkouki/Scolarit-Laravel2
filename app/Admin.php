<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    protected $table = 'admin';
    public $primayKey ='idadmin';
    public $timestamps = true ;
}
