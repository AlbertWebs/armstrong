<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

use Carbon\Carbon;
use Hash;
use Socialite;
use App\Models\User;
use Auth;
use Str;
use Session;
use Redirect;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'     => 'required|email',
            'password'  => 'required'
        ]);
        $credentials = $request->only('email', 'password');
        if(! auth()->attempt($credentials)){
            return redirect()->route('proceed-cart')
                ->with('error','Email-Address And Password Are Wrong.');
        }
        if (auth()->user()->is_admin == 1) {
            return redirect()->route('admin.home');
        }
        return redirect()->route('proceed-cart');
    }

    public function facebookRedirect(){
        $user = Socialite::driver('facebook')->user();
        // Logic
        $user = User::firstOrCreate([
            'email' => $user->email

        ],[
             'name' =>$user->name,
             'password' => Hash::make(Str::random(24))
        ]);

        Auth::login($user, true);
        return redirect()->to('/dashboard');
    }

    public function facebook(){
        return Socialite::driver('facebook')->redirect();
    }

    public function google(){
        return Socialite::driver('google')->redirect();
    }

    public function googleRedirect(){
        $user = Socialite::driver('google')->user();
        // Logic
        $user = User::firstOrCreate([
            'email' => $user->email

        ],[
             'name' =>$user->name,
             'password' => Hash::make(Str::random(24))
        ]);

        Auth::login($user, true);
        return redirect()->to('/dashboard');
    }

    public function callback(SocialFacebookAccountService $service)
    {
        $user = $service->createOrGetUser(Socialite::driver('facebook')->user());
        auth()->login($user);
        return redirect()->to('/home');
    }
}
