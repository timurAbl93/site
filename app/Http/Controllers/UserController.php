<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller {

    public $rules = [
        'email' => 'required|email|exists:users',
        'password' => 'required',
    ];

    public function login() {

        $data = Input::all();
        $validation = Validator::make($data, $this->rules);

        //валидация прошла успешна
        if ($validation->passes()) {
            //запомнить меня
            $remember = Input::get('remember');
            $auth = Auth::attempt([
                        'email' => Input::get('email'),
                        'password' => Input::get('password')
                            ], $remember);

            if ($auth) {
                return Redirect('/dachboard');
            } else {
                return redirect()->back()->withErrors('неправильно введен логин или пароль');
            }
        }

        return redirect()->back()->withErrors('неправильно введен логин или пароль');
    }

    public function getLogin() {
        return view('admin/login');
    }

}
