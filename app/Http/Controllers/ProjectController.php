<?php namespace App\Http\Controllers;

use App\Feedback;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;


class ProjectController extends Controller {

        public $rules = [
            'email'       => 'required|email',
            'userName'    => 'required|max:50',
            'description' => 'required|max:100',
            'jobs'        => 'required'
        ];
	public function index()
	{
		//
	}

	public function store()
	{
            $data = Input::all();
            $validation = Validator::make($data, $this->rules);
            
            if ($validation->passes()) {
               Feedback::addApplication($data);
               
            }else{
            //Feedback::addApplication($data);
                return 'ошибка';
            }
	}


}
