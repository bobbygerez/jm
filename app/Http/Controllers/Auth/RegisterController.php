<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Traits\CaptchaTrait;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    use CaptchaTrait;
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {


        $data['captcha'] = $this->captchaCheck($data);

        $validator = Validator::make($data,
            [
                'firstname'            => 'required',
                'lastname'             => 'required',
                'email'                 => 'required|email|unique:users',
                'password'              => 'required|min:6|max:20',
                'password_confirmation' => 'required|same:password',
                'g-recaptcha-response'  => 'required',
                'captcha'               => 'required|min:1'
            ],
            [
                'firstname.required'   => 'First Name is required',
                'lastname.required'    => 'Last Name is required',
                'email.required'        => 'Email is required',
                'email.email'           => 'Email is invalid',
                'password.required'     => 'Password is required',
                'password.min'          => 'Password needs to have at least 6 characters',
                'password.max'          => 'Password maximum length is 20 characters',
                'g-recaptcha-response.required' => 'Captcha is required',
                'captcha.min'           => 'Wrong captcha, please try again.'
            ]
        );

        return $validator;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        
                
        return User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
