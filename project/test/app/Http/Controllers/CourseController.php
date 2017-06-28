<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

class CourseController extends BaseController
{
    use ValidatesRequests;

    /**
    * Método para buscar todos os cursos disponívels
    * @return array Retorna array com todos cursos
    */
    public function getAll()
    {
		return ['result' => Course::with(['address', 'consultant'])->get()];
    }

    /**
    * Método para buscar um curso pelo id
    * @param $id int Id do curso a ser buscado
    * @return array Retorna array com curso buscado
    */
    public function get($id)
    {
    	return ['result' => Course::with(['address', 'consultant'])->find($id)];
    }
}
