<?php

namespace App\Http\Controllers;

use App\Mail\sendEmail;
use App\Models\User;
use App\Models\setLanguage;
use App\Models\setBook;
use App\Models\setCctv;
use App\Models\sItem;


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

class SettingFormController extends Controller
{

     

 public function settingLanguage(Request $request)
    {
         

         $userData = new User();
         $userData = $userData->index();

         $setlanguage  = new setLanguage();
         $setlanguage  = $setlanguage->set_Language_index();
        return view('ApproveForm.settingLanguage')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture'],"user_id"=>$userData[0]['id'],'sLanguage'=>$setlanguage]);
    }
 public function saveSettingLanguage(Request $req){
        $req->validate([
        
        'thi' => 'required',
        'english' => 'required',
        'keyword' => 'required',

        
        ]);
            
            $fileModel = new setLanguage();
           
            $fileModel->thi = $req->thi;
            $fileModel->english = $req->english;
            $fileModel->keyword = $req->keyword;
            $fileModel->status = 'waiting';

            $fileModel->save();
            return back()
            ->with('success','File has been uploaded.');
        
    }

 public function settingBook(Request $request)
    {
         

         $userData = new User();
         $userData = $userData->index();

         $setBook  = new setBook();
         $setBook  = $setBook->setBook_index();
        return view('ApproveForm.settingBook')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture'],"user_id"=>$userData[0]['id'],'setBook'=>$setBook]);
    }
 public function saveSettingBook(Request $req){
        $req->validate([
        
        'thi' => 'required',
        'english' => 'required',

        
        ]);
            
            $fileModel = new setBook();
           
            $fileModel->thi = $req->thi;
            $fileModel->english = $req->english;
            
            $fileModel->save();
            return back()
            ->with('success','File has been uploaded.');
        
    }

    public function settingStationary(Request $request)
    {
         

         $userData = new User();
         $userData = $userData->index();

         $setStationary   = new sItem();
         $setStationary   = $setStationary ->get();
        return view('ApproveForm.setStationary')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture'],"user_id"=>$userData[0]['id'],'setStationary'=>$setStationary ]);
    }
 public function saveSettingStationary(Request $req){
       $req->validate([
        'code' => 'required',
        'thai' => 'required',
        'english' => 'required',
        'file' => 'required|mimes:png,jpg,jpeg,xlx,xls,pdf|max:2048'

        ]);
        $fileModel = new sItem();
        if($req->file()) {
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $req->file->move(public_path('file'), $fileName);
            $fileModel->picture = $fileName;
            
            $fileModel->brand_id = $req->brand;
            $fileModel->code = $req->code;
            $fileModel->product = $req->thai;
            $fileModel->category = $req->english;
            $fileModel->price = $req->code;
            $fileModel->english = $req->english;
            $fileModel->brand_id = $req->code;
            $fileModel->save();
            return back()
            ->with('success','File has been uploaded.');
        
    }
}

public function settingCctv(Request $request)
    {
         

         $userData = new User();
         $userData = $userData->index();

         $setCctv  = new setCctv();
         $setCctv  = $setCctv->setCctv_index();
        return view('ApproveForm.setCctv')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture'],"user_id"=>$userData[0]['id'],'setCctv'=>$setCctv]);
    }
 public function saveSettingCctv(Request $req){
         $req->validate([
        'cctv' => 'required',
        'channel' => 'required',
        'file' => 'required|mimes:png,jpg,jpeg,xlx,xls,pdf|max:2048'

        ]);
        $fileModel = new setCctv();
        if($req->file()) {
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $req->file->move(public_path('file'), $fileName);
            $fileModel->picture = $fileName;


            $fileModel->cctv = $req->cctv;
            $fileModel->channel = $req->channel;
            
            $fileModel->save();
            return back()
            ->with('success','File has been uploaded.');
        
    }
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
