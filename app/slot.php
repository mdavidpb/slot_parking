<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slot extends Model
{
    //
    protected $table = 'slots';
    protected $foreignkey = 'mobil_id';
}
