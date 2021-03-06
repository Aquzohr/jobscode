<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Role;
use App\Models\package;
use App\Models\MemberProfile;
use App\Models\company;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

      $user = new User();
      $user->name = $data['name'];
      $user->email = $data['email'];
      $user->password = bcrypt($data['password']);
      $user->save();
      $user->roles()->attach(Role::where('name', $data['role'])->first());
      
      if($data['role']=='member'){
        $user_profile = new MemberProfile;
        $user_profile->user_id = $user->id;
        $user_profile->save();
      }elseif($data['role']=='manager'){
        $user->have_package()->attach(package::where('name', $data['package'])->first());

        $company = new company;
        $company->user_id = $user->id;
        $company->save();
      }


      return $user;
    }

    protected function showRegistrationForm(){
      return view('auth.register');
    }

    protected function worker_register(){
      return view('auth.worker_register');
    }

    protected function manager_register(){
      return view('auth.manager_register');
    }

    protected function manager_package(){
      $packages = package::all();
      return view('auth.manager_package')
      ->with('packages', $packages);
    }

}
