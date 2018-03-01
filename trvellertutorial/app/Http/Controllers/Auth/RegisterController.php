<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Input;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use DB;
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
        return Validator::make($data, [
            'user_id' => 'required',
            'name' => 'required|string|max:50',
            'contact'=>'required|text|max:50',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
             'type' => 'required|max:255'
        ]);


    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $request)
    {
       // return Input::all();

        $profile=Input::file('image');
        $profile_filename=time().'.'.$profile->getClientOriginalExtension();
        $profile->move(public_path().'/'.'user_image/profile'.'/',$profile_filename);

        $scan=Input::file('scan_copy');
        $scan_filename=time().'.'.$scan->getClientOriginalExtension();
        $scan->move(public_path().'/'.'user_image/scan'.'/',$scan_filename);


        $data =  $request->all();
        /*
        $user = User::create([

            'user_id' => $data['user_id'],
            'name' => $data['name'],
            'contact' => $data['phone'],
            'email' => $data['email'],
            'language'=>$data['language'],
            'address'=>$data['address'],
            'postal_code'=>$data['postal_code'],
            'profile_img'=>'user_image/profile/'.$profile_filename,
            'scan_img'=>'user_image/scan/'.$scan_filename
        ]);
*/
        DB::table('users')->insert(
            ['user_id' => $data['user_id'],
                'name' => $data['name'],
                'contact' => $data['phone'],
                'email' => $data['email'],
                'language' => $data['language'],
                'country'=>$data['country'],
                'address' => $data['address'],
                'postal_code' => $data['postal_code'],
                'profile_img' => 'user_image/profile/'.$profile_filename,
                'scan_img'=>'user_image/scan/'.$scan_filename
                ]
        );

        //return redirect()->route('congrats')->with('success', "Done");
        return redirect('/congrats');
    }


    public function refer($user_id)
    {
        ///save username/register
        return view('auth.register')->with('user_id', $user_id);
    }
//    public function register(Request $data)
//    {
//        return User::register([
//            'name' => $data['name'],
//            'contact' => $data['contact'],
//            'email' => $data['email'],
//            'password' => bcrypt($data['password']),
//            'type' =>$data['type'],
//        ]);
//    }
}
