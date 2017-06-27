<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $primaryKey = "idcourses";

    protected $hidden = array('consultants_idconsultants', 'addresses_idaddresses', 'created_at', 'updated_at');

    public function address()
    {
    	return $this->hasOne('App\Address', 'idaddresses');
    }

    public function consultant()
    {
    	return $this->hasOne('App\Consultant', 'idconsultants');
    }
}
