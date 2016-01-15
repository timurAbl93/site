<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Feedback;


class DachboardController extends Controller {

	
	public function index()
	{
            $data = Feedback::all();
            return view('admin/index',['data'=> $data]);
	}

	public function create()
	{
		
	}

	public function show($id)
	{
            $data = Feedback::where('id','=',$id)->get();
            return view('admin/show',['data'=> $data]);
	}

	public function edit()
	{
            $data = Feedback::all();
            return view('admin/edit',['data'=> $data]);
	}

	public function destroy($id)
	{
            Feedback::where('id','=',$id)->delete();
            return redirect()->back();
	}

}
