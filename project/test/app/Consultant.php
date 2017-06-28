<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
	/**
     * Nome do campo de ID
     * @var string
     */
    protected $primaryKey = "idconsultants";

    /**
     * Campos que não devem ser exibidos
     * @var array
     */
    protected $hidden = array('created_at', 'updated_at', 'idconsultants');
}
