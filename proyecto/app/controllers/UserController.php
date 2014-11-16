<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $this->layout->nest('content', 'inicio_sesion.login');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->nest('content', 'inicio_sesion.registro');	
	}

	public function login(){
		$userdata = array(
            'usuario'     => Input::get('usuario'),
            'password'  => Input::get('password')
        );

        if (Auth::attempt($userdata)) {
            return Redirect::to('privada');
        } else {
            // validation not successful, send back to form
            return Redirect::to('login')->withErrors(array('invalid_credentials' => 'Acceso Denegado'));
        }

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$usuario = Input::get('usuario');
		$password = Input::get('password');
		$password = Hash::make($password);
		$user = new User();
		$user->usuario = $usuario;
		$user->password = $password;
		$user->save();
		Auth::attempt(array('usuario' => $usuario, 'password' => $password));
		return Redirect::to('privada');
	}

	public function logout()
    {
        Auth::logout();
        return Redirect::to('login');
    }

    public function isLogged()
    {
        if (Auth::guest()) {
            return Redirect::to('login');
        }
    }


}
