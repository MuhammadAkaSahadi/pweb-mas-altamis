<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class LoginController
{
    public function index(){
        return view('loginpage');
    }

    public function store(Request $request){
        try {
            $request->validate(
                [
                    "Username" => "required",
                    "Password" => "required"
                ]
            );
            
            $user = DB::table("pengguna")
            ->where("Username", $request->Username)->first();
            

            if($user && Hash::check($request->Password, $user->password)){
                session(["user_id" =>  $user->id]);
                Auth::loginUsingId($user->id);

                return redirect()->route('dashboard');
            }

            return back()->withErrors([
                "Username" => "Username tidak diitemukan"
            ]);} catch (\Exception $e) {
            throw $e;
        }
    }

    public function logout()
    {
        session()->forget("user_id");

        return redirect("/login");
    }
}