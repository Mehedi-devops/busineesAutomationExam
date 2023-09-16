<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Auth;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class GoogleController extends Controller
{
    public function google(){
        return socialite::driver('google')->redirect();
    }
    public function googleCallback(){
        try {

            $user = Socialite::driver('google')->user();


            $findUser = User::where('google_id', $user->id)->first();

            if($findUser){

                Auth::login($findUser);

                return redirect()->route('account.create');

            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => Hash::make('12345678'),
                ]);
                Auth::login($newUser);
                return redirect()->route('account.create');
            }

        } catch (Exception $e) {

            $e->getMessage();
        }


    }
}
