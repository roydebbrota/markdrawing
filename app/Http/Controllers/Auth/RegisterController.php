<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\City;
use App\Notifications\VerifyRegistration;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Auth;

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
    protected $redirectTo = '/';
    // protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    { 
        $cities = City::orderBy('priority','asc')->get();
        return view('auth.register', compact('cities'));
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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function register(Request $request)
    {
        // dd($request->first_name);
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|unique:users',  
            'password' => 'required|string|min:8|confirmed',                      
        ]);

        // $otp = rand(1000,9999);

        $user =  User::create([
            'name' => $request->first_name." ".$request->last_name,
            // 'last_name' => $request->last_name,
            // 'otp' => $otp,
            // 'address' => $request->address,
            // 'delivery_phone' => $request->delivery_phone,
            // 'delivery_address' => $request->delivery_address,
            // 'gender' => $request->gender,
            // 'city_id' => $request->city_id,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'remember_token' => Str::random(50),            
        ]);

        //POST Method example

        // $url = "http://66.45.237.70/api.php";
        // $number=$request->phone_number;
        // $text="Your Dailydael OTP code is $otp";
        // $data= array(
        // 'username'=>"dailydealbd",
        // 'password'=>"UTGKNZ85",
        // 'number'=>"$number",
        // 'message'=>"$text"
        // );

        // $ch = curl_init(); // Initialize cURL
        // curl_setopt($ch, CURLOPT_URL,$url);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $smsresult = curl_exec($ch);
        // $p = explode("|",$smsresult);
        // $sendstatus = $p[0];

        // $user->notify(new VerifyRegistration($user));
        //return view('frontend.pages.user.home',compact('user'));
        Auth::login($user);
        return redirect()->route('index');
        // return redirect()->route('user.profile.home',$user->id);
        // return redirect()->route('index');
    }
}
