<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class AuthController extends Controller
{
    public function redirect(){
        return Socialite::driver('google')->redirect();
    }

    public function callback(){
        $fecha = Carbon::now();
        $userGoogle = Socialite::driver('google')->user();
 
        $user = User::updateOrCreate([
            'google_id' => $userGoogle->id,
        ], [
            'name' => $userGoogle->name,
            'email' => $userGoogle->email,
            'email_verified_at' => $fecha,
            'google_token' => $userGoogle->token,
        ]);
     
        Auth::login($user);
     
        return redirect('/dashboard');
    }
}
