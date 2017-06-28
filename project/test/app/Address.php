<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
	/**
     * Nome do campo de ID
     * @var string
     */
    protected $primaryKey = "idaddresses";

    /**
     * Campos que não devem ser exibidos
     * @var array
     */
    protected $hidden = array('created_at', 'updated_at', 'idaddresses');
}
