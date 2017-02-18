<?php

namespace App\Http\Controllers\Auth;

use App\Coordinator;
use App\Director;
use App\Teacher;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;


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

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';


    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {

        if($data['nivel'] == 1){
            $diretor = new Director();
            $diretor = $diretor->create($data);

            return User::create([
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'id_referenciado' => $diretor->id,
                'nivel' => $data['nivel'],

            ]);
        } else if($data['nivel'] == 2){
            $coordenador = new Coordinator();
            $coordenador = $coordenador->create($data);
            $this->redirectTo = '/coordenadores';

            return User::create([
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'id_referenciado' => $coordenador->id,
                'nivel' => $data['nivel'],

            ]);
        } else if($data['nivel'] == 3) {
            $professor = new Teacher();
            $professor = $professor->create($data);
            $this->redirectTo = '/professores';

            return User::create([
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'id_referenciado' => $professor->id,
                'nivel' => $data['nivel'],

            ]);
        }

    }
}
