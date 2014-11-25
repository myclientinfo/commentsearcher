<?php namespace Searcher\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use Searcher\Http\Requests\LoginRequest;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Searcher\Http\Requests\RegisterRequest;
use Searcher\Repositories\AuthoriserInterface;

class AuthController extends Controller {

	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
	protected $auth;

    protected $oauth;

    protected $request;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  Guard  $auth
	 * @return void
	 */
	public function __construct(Guard $auth, AuthoriserInterface $oauth, Request $request)
	{
		$this->auth = $auth;

		$this->middleware('guest', ['except' => 'getLogout']);

        $this->oauth = $oauth;

        $this->request = $request;

	}

	/**
	 * Show the application registration form.
	 *
	 * @return Response
	 */
	public function getRegister()
	{
		return view('auth.register');
	}

	/**
	 * Handle a registration request for the application.
	 *
	 * @param  RegisterRequest  $request
	 * @return Response
	 */
	public function postRegister(RegisterRequest $request)
	{
		// Registration form is valid, create user...

		$this->auth->login($user);

		return redirect('/');
	}

	/**
	 * Show the application login form.
	 *
	 * @return Response
	 */
//	public function getLogin()
//	{
//		return view('auth.login');
//	}


    public function login(){
        if($this->request->input('code')){
            return $this->oauth->redirectToToken($this->request->input('code'));
        }
        return $this->oauth->redirectToCode();
    }

	/**
	 * Handle a login request to the application.
	 *
	 * @param  LoginRequest  $request
	 * @return Response
	 */
//	public function postLogin(LoginRequest $request)
//	{
//		if ($this->auth->attempt($request->only('email', 'password')))
//		{
//			return redirect('/');
//		}
//
//		return redirect('/auth/login')->withErrors([
//			'email' => 'These credentials do not match our records.',
//		]);
//	}

	/**
	 * Log the user out of the application.
	 *
	 * @return Response
	 */
	public function getLogout()
	{
		$this->auth->logout();

		return redirect('/');
	}

}
