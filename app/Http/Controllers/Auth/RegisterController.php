<?php

namespace App\Http\Controllers\Auth;

use App\PersonalData;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Traits\CaptchaTrait;
use Illuminate\Http\Request;

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



        $data['g-recaptcha-response'] = $this->captchaCheck($data);

        $validator = Validator::make($data,
            [
                'firstname'            => 'required',
                'lastname'             => 'required',
                'email'                 => 'required|email|unique:users',
                'password'              => 'required|min:6|max:20',
                'password_confirmation' => 'required|same:password',
                'g-recaptcha-response'  => 'required'
            ],
            [
                'firstname.required'   => 'First Name is required',
                'lastname.required'    => 'Last Name is required',
                'email.required'        => 'Email is required',
                'email.email'           => 'Email is invalid',
                'password.required'     => 'Password is required',
                'password.min'          => 'Password needs to have at least 6 characters',
                'password.max'          => 'Password maximum length is 20 characters',
                'g-recaptcha-response.required' => 'Captcha is required'
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
            'personal_data_id' => $data['personal_data_id'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

        /**
     * Handle a registration request for the application.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request) {
        $validator = $this->validator($request->all());


        if($validator->fails()){
            return response()->json(['messages' => $validator->errors()->getMessages(), 'error' => true]);
        }
        
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');

        $personalData = PersonalData::create([
                'firstname' => $firstname,
                'lastname' => $lastname
            ]);

        $requestAll = $request->all();
        $requestAll['personal_data_id'] = $personalData->id;

        $this->create($requestAll);

        return response()->json([

            'messages' => [

                'messages' => ['Please check your email to verify!'], 
                'error' => false
            ]

            ]);

        //$this->guard()->login($user);

        //return $this->registered($request, $user)
         //   ?: redirect($this->redirectPath());
    }

    /**
     * The user has been registered.
     *
     * @param Request $request
     * @param  mixed $user
     * @return mixed
     */
    protected function registered(Request $request, $user) {
        return response()->json(['SUCCESS' => 'AUTHENTICATED']);
    }
}
