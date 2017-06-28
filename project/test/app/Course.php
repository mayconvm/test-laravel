<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /**
     * Nome do campo de ID
     * @var string
     */
    protected $primaryKey = "idcourses";

    /**
     * Campos que não devem ser exibidos
     * @var array
     */
    protected $hidden = array('consultants_idconsultants', 'addresses_idaddresses', 'created_at', 'updated_at');

    /**
     * Realiza a pesquisa dos endereços para o curso a ser pesquisado
     */
    public function address()
    {
    	return $this->hasOne('App\Address', 'idaddresses');
    }

    /**
     * Realiza a pesquisa dos consultores para o curso a ser pesquisado
     */
    public function consultant()
    {
    	return $this->hasOne('App\Consultant', 'idconsultants');
    }
}
