<?php

namespace App\Http\Controllers;

use App\Mail\sendEmail;
use App\Models\User;
use App\Models\Agent;
use App\Models\Student;
use App\Models\Lesse;
use App\Models\Owner;
use App\Models\Property;
use App\Models\VerificationCode;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Exception;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Session ;

class CustomAuthController extends Controller
{
    //company registeration page
    public function registration()
    {
        return view('auth.register');
    }
    //Register a user
    public function customRegistration(Request $request)
    {
        try{
            $request->validate([
                'name' => 'required|min:3',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6|confirmed',
                'user_type' => 'required',
                'image' => 'required',
            ]);
            if($request->hasFile('image')) {
                $image = $request->image;
                $name=time().$image->getClientOriginalName();
                $image->move(public_path().'/profile-images/', $name);
            }
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'user_type' => $request->user_type,
                'mobile' => $request->mobile,
                'profile_picture' => $name,
            ]);
            return redirect(url("/login"))->withSuccess('You are registered successfully');
        } catch (\Exception $ex) {
            DB::rollback();
            return back()->with('error','Error occured: ' . $ex->getMessage());
            return redirect()->back();
        }
    }
    /**
     * Display a login page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.login');
    }
    //login a user
    public function customLogin(Request $request)
    {
       //dd ( Auth::user());
        //dd(  Session::get('name'));   
        $username = Session::get('name');
        if($username != null  ){

            return view('welcome');
        }
        else{
            return redirect('/login');
        }



        // try{
        //     $request->validate([
        //         'email' => 'required',
        //         'password' => 'required',
        //     ]);

        //     $credentials = $request->only('email', 'password');
        //     if (Auth::attempt($credentials)) {
        //         $user = User::where('email', $request->email)->first();
        //         if(Auth::user()->user_type == 'admin'){
        //             return redirect(url('admin'));
        //         }elseif (Auth::user()->user_type == 'agent') {
        //             if(Auth::user()->status == 1){
        //                 return redirect(url('agent'));
        //             }else{
        //                 return redirect(url('agent/'))->withSuccess('Wait for the approval from admin side.');
        //             }
        //         }elseif (Auth::user()->user_type == 'student') {
        //             if(Auth::user()->status == 1){
        //                 return redirect(url('student/'));
        //             }else{
        //                 return redirect(url('student/'))->withSuccess('Please compete your profile and Wait for the approval from admin side.');
        //             }
        //         }elseif (Auth::user()->user_type == 'owner') {
        //             if(Auth::user()->status == 1){
        //                 return redirect(url('owner/'));
        //             }else{
        //                 return redirect(url('owner/'))->withSuccess('Please compete your profile for post a job');
        //             }
        //         }
        //         else{
        //             return redirect(url('admin/dashboard'));
        //         }
        //     }
        //     return redirect("login")->withSuccess('Login details are not valid');
        // } catch (\Exception $ex) {
        //     DB::rollback();
        //     return back()->with('error','Error occured' . $ex->getMessage());
        // }
    }
    //logout
    public function signOut() {
        Auth::logout();
        return Redirect(url("/login"));
    }
    /**
     * Write code on Method
     * Dashboard page
     *
     * @return response()
     */
    public function dashboard()
    {
        $user = Auth::user();
        if(Auth::check()){
            if(Auth::user()->user_type == 'admin'){
                return view('dashboard');
            }
        }

        return redirect("/")->withSuccess('Opps! You do not have access');
    }
}
