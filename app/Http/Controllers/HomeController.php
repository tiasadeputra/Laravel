<?php namespace App\Http\Controllers;

use Auth;
use Redirect;


class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	 protected $layout = 'home';
  

	public function index()
	{
		 $content = view('Dashboard');

        return $this->setPageContent($content);
	}


    


		public function register()
	{
		return view('register');
	}

 



    public function doLogin()
    {
        $rules = array(
                        'email'    => 'required|email',
                        'password' => 'required|alphaNum|min:5'
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
                        return Redirect::to('login')
                                        ->withErrors($validator)
                                        ->withInput(Input::except('password'));
        } else {
                        $userdata = array(
                                        'email'   => Input::get('email'),
                                        'password'          => Input::get('password')
                        );
                        if (Auth::attempt($userdata)) {
                                        return Redirect::to('/');
                        } else {               
                                        return Redirect::to('login');
                        }
        }
    }
 
    public function logout()
    {
        Auth::logout();
        return Redirect::to('login');
    }




}
