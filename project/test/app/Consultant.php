<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    protected $primaryKey = "idconsultants";

    protected $hidden = array('created_at', 'updated_at');
}
