<?php

namespace App\Http\Controllers;

use App\Mail\sendEmail;
use App\Models\User;

use App\Models\myWebMenu;
use App\Models\myWebInfo;
use App\Models\myWebContect;



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

class MyWebFormController extends Controller
{

   public function myWebmenu(Request $request)
    {
         $webMenu = new myWebMenu();
         $webMenu = $webMenu->myWebMenu_index();
        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.myWebmenu')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture'],'myWebMenu'=>$webMenu]);
    }
     public function savemyWeb_menu(Request $req){
        $req->validate([
        
        'category_thai' => 'required',
        'category_english' => 'required',
        ]);
            
            $fileModel = new myWebMenu();
            
            $fileModel->menu_thai = $req->category_thai;
            $fileModel->menu_english = $req->category_english;
           

            $fileModel->save();
            return back()
            ->with('success','File has been uploaded.');
        
    }
    public function myWebInfo(Request $request)
    {
         $myWebInfo = new myWebInfo();
         $myWebInfo = $myWebInfo->myWebInfo_index();
        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.myWebInfo')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture']]);
    }
     public function savemyWebInfo(Request $req){
        $req->validate([
        
        'name_thai' => 'required',
        'name_english' => 'required',
        'file' => 'required|mimes:png,jpg,PNG,jpeg,xlx,xls,pdf|max:2048',
        'domain' => 'required',
        'website' => 'required',
        'title_thai' => 'required',
        'title_english' => 'required',
        'facebook' => 'required',
        'google' => 'required',
        'desic_thai' => 'required',
        'desic_english' => 'required',
        'keyword_thai' => 'required',
        'keyword_english' => 'required',
        ]);
           //dd($req); 
            $fileModel = new myWebInfo();
            
            $fileModel->name_thai = $req->name_thai;
            $fileModel->name_english = $req->name_english;
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $req->file->move(public_path('file'), $fileName);
            $fileModel->logo = $fileName;
        

            $fileModel->domain = $req->domain;
            $fileModel->google = $req->google;
            $fileModel->website = $req->website;
            $fileModel->facebook = $req->facebook;
            $fileModel->title_thai = $req->title_thai;
            $fileModel->title_english = $req->title_english;
            $fileModel->keyword_thai = $req->keyword_thai;
            $fileModel->keyword_english = $req->keyword_english;
            $fileModel->desic_english = $req->desic_english;
            $fileModel->disc_thai = $req->desic_thai;
           

            $fileModel->save();
            return back()
            ->with('success','File has been uploaded.');
        
    }

    public function myWebContect(Request $request)
    {
         $myWebContect = new myWebContect();
         $myWebContect = $myWebContect->myWebContect_index();

         $myWebInfo = new myWebInfo();
         $myWebInfo = $myWebInfo->myWebInfo_index();
         $webMenu = new myWebMenu();
         $webMenu = $webMenu->myWebMenu_index();
        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.myWebContect')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture'],'myWebContect' => $myWebContect,'mywebinfo' => $myWebInfo,'webMenu' => $webMenu ]);
    }
     public function savemyWeb_contect(Request $req){
        $req->validate([
        
        'file' => 'required|mimes:png,jpg,jpeg,xlx,xls,pdf|max:2048',
        'domain' => 'required',
        'expire' => 'required',
        'title_thai' => 'required',
        'title_english' => 'required',
        'tag_thai' => 'required',
        'tag_english' => 'required',
        'contant_thai' => 'required',
        'contant_thai' => 'required',

        'name_thai' => 'required',
        'name_thai' => 'required',
        'domain' => 'required',
        'category' => 'required',
        ]);
            
            $fileModel = new myWebContect();
            
           
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $req->file->move(public_path('file'), $fileName);
            $fileModel->logo = $fileName;
            
            $fileModel->domain = $req->domain;
            $fileModel->name_thai = $req->name_thai;
            $fileModel->name_english = $req->name_english;
            $fileModel->category = $req->category;
            $fileModel->logo = $req->file;
            $fileModel->tag_english = $req->tag_english;
            $fileModel->tag_thai = $req->tag_thai;
            $fileModel->title_english = $req->title_english;
            $fileModel->title_thai = $req->title_thai;
            $fileModel->contant_english = $req->contant_english;
            $fileModel->contant_thai = $req->contant_thai;
            $fileModel->expire = $req->expire;
           

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
