<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

class CourseController extends BaseController
{
    use ValidatesRequests;

    public function getAll()
    {
		return ['result' => Course::All()];
    }

    public function get($id)
    {
    	return ['result' => Course::findOrFail($id)];
    }
}
