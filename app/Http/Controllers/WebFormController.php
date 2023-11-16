<?php

namespace App\Http\Controllers;

use App\Mail\sendEmail;
use App\Models\User;

use App\Models\webMenu;
use App\Models\webExtraLink;


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

class WebFormController extends Controller
{

   public function webMenu(Request $request)
    {
         $webMenu = new webMenu();
         $webMenu = $webMenu->webMenu_index();
        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.webMenu')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture'],'Menu'=>$webMenu]);
    }
     public function saveWebMenu(Request $req){
        $req->validate([
        
        'menu_thai' => 'required',
        'menu_english' => 'required',
        ]);
            
            $fileModel = new webMenu();
            
            $fileModel->menu_thai = $req->menu_thai;
            $fileModel->menu_english = $req->menu_english;
           

            $fileModel->save();
            return back()
            ->with('success','File has been uploaded.');
        
    }
    public function extraLink(Request $request)
    {
         $ExtraLink = new webExtraLink();
         $ExtraLink = $ExtraLink->webExtraLink_index();
        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.webExtraLink')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture'],'extralink'=>$ExtraLink]);
    }
     public function saveextraLink(Request $req){
        $req->validate([
        
        'link_thai' => 'required',
        'link_english' => 'required',
        'extra' => 'required',
        ]);
            
            $fileModel = new webExtraLink();
            
            $fileModel->link_thai = $req->link_thai;
            $fileModel->link_english = $req->link_english;
            $fileModel->extra = $req->extra;
           

            $fileModel->save();
            return back()
            ->with('success','File has been uploaded.');
        
    }
    //company registeration page
   

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
        try{
            $request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);

            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $user = User::where('email', $request->email)->first();
                if(Auth::user()->user_type == 'admin'){
                    return redirect(url('admin'));
                }elseif (Auth::user()->user_type == 'agent') {
                    if(Auth::user()->status == 1){
                        return redirect(url('agent'));
                    }else{
                        return redirect(url('agent/'))->withSuccess('Wait for the approval from admin side.');
                    }
                }elseif (Auth::user()->user_type == 'student') {
                    if(Auth::user()->status == 1){
                        return redirect(url('student/'));
                    }else{
                        return redirect(url('student/'))->withSuccess('Please compete your profile and Wait for the approval from admin side.');
                    }
                }elseif (Auth::user()->user_type == 'owner') {
                    if(Auth::user()->status == 1){
                        return redirect(url('owner/'));
                    }else{
                        return redirect(url('owner/'))->withSuccess('Please compete your profile for post a job');
                    }
                }
                else{
                    return redirect(url('admin/dashboard'));
                }
            }
            return redirect("login")->withSuccess('Login details are not valid');
        } catch (\Exception $ex) {
            DB::rollback();
            return back()->with('error','Error occured' . $ex->getMessage());
        }
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
