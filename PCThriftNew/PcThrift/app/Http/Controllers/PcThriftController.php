<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PcThriftController extends Controller
{
    public function register(){
        return view('signUp');
        
    }

    public function saveuser(Request $request){
        $user = User::create([
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'number' => $request->number,
        ]);
        return redirect('/signIn');
    }
    
    public function login(){
        return view('signIn');
    }
    
    public function ceklogin(Request $request){
        $credentials =[
            'email' => $request->email, 
            'password' => $request->password
        ];
        if(!Auth::attempt($credentials)){
            return redirect('/signIn')->with('error', 'Log in unsuccesfull !');
        }else{
            return redirect('/')->with('success', 'Successfully logged in !');
        };
    } 
    public function logout(Request $request){
        Auth::logout();
        return redirect('/signIn');
    }

    public function changeUsername(Request $request){
        $user = Auth::user();
        $user->name = $request->input('new_username');
        $user->save();
        return redirect()->back()->with('success', ' Username updated successfully!');
    }
    
    public function changeEmail(Request $request){
        $user = Auth::user();
        $user->email = $request->input('new_email');
        $user->save();
        return redirect()->back()->with('success', ' Email updated successfully!');
    }

    public function changePassword(Request $request){
        $user = Auth::user();
        if(!Hash::check($request->input('current_password'),$user->password)){
            return redirect()->back()->with('error','Current Password is Incorrect');
        }
        $newPassword = $request->input('new-password');
        $hashedPassword = Hash::make($newPassword);
        $user->password = $hashedPassword;
        $user->save();
        return redirect()->back()->with('success', ' Password updated successfully!');
    }

    public function changeNumber(Request $request){
        $user = Auth::user();
        $user->number = $request->input('new_number');
        $user->save();
        return redirect()->back()->with('success', ' Number updated successfully!');
    }

    // public function updateusername(Request $request){
    //     $user = auth()->user();
    //     $validatedData = $request->validate([
    //         'username' => 'required|unique:users|min:3',
    //     ]);
    //     $user->name = $validatedData['name'];
    //     $user->save();
    //     return redirect()->back()->with('success', ' Username updated successfully!');
    // }

    public function showdata (){
        $users = Auth::user();
        return view('profile.showdata',['profile'=>$users]);
    }

    // public function testing(){
    //     $sebuahdata = 'kontol';
    //     return view('profile.testing', compact(['sebuahdata']));
    // }

    // public function checkuser(){
    //     Auth::
    // }
}
