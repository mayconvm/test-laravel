<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $primaryKey = "idaddresses";

    protected $hidden = array('created_at', 'updated_at');
}
