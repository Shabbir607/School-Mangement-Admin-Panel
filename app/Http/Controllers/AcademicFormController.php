<?php

namespace App\Http\Controllers;

use App\Mail\sendEmail;
use App\Models\User;


use App\Models\acSubject;
use App\Models\acLevel;
use App\Models\acClassRoom;
use App\Models\acInfoAfter;
use App\Models\acInfoIntrov;
use App\Models\employeeList;


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

class AcademicFormController extends Controller
{

 public function AcSubject(Request $request)
    {
         $acSubject = new acSubject();
         $acSubject = $acSubject->acSubject_index();
        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.acSubject')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture'],'subject'=>$acSubject]);
    }
     public function saveAcSubject(Request $req){
        $req->validate([
        'type' => 'required',
        'subject_thai' => 'required',
        'subject_english' => 'required',
      

        
        ]);
            
            $fileModel = new acSubject();
            $fileModel->type = $req->type;
            $fileModel->subject_thai = $req->subject_thai;
            $fileModel->subject_english = $req->subject_english;
            $fileModel->save();
            return back()
            ->with('success','File has been uploaded.');
        
    }
     public function HomeClassRoom(Request $request)
    {
         $employeeList = new employeeList();
         $employeeList = $employeeList->employeeList_index();
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.HomeClassroom')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture'],'homeroom'=>$employeeList]);
    }
    
 public function AcLevel(Request $request)
    {
         $acLevel = new acLevel();
         $acLevel = $acLevel->acLevel_index();
        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.acLevel')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture'],'aclevel'=>$acLevel]);
    }
     public function saveAcLevel(Request $req){
        $req->validate([
        
        'subject_thai' => 'required',
        'subject_english' => 'required',
      

        
        ]);
            
            $fileModel = new acLevel();
            
            $fileModel->subject_thai = $req->subject_thai;
            $fileModel->subject_english = $req->subject_english;
           

            $fileModel->save();
            return back()
            ->with('success','File has been uploaded.');
        
    }
    

 public function acClassRoom(Request $request)
    {
         $acClassRoom = new acClassRoom();
         $acClassRoom = $acClassRoom->acClassRoom_index();
        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.acClassRoom')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture'],'acClassRoom'=>$acClassRoom]);
    }
     public function saveAcClassRoom(Request $req){
        $req->validate([
        'level' => 'required',
        'subject_thai' => 'required',
        'subject_english' => 'required',
      

        
        ]);
            
            $fileModel = new acClassRoom();
           $fileModel->level = $req->level;
            $fileModel->subject_thai = $req->subject_thai;
            $fileModel->subject_english = $req->subject_english;
           

            $fileModel->save();
            return back()
            ->with('success','File has been uploaded.');
        
    }
   

public function AcInfoAfter(Request $request)
    {
         $acInfoAfter = new acInfoAfter();
         $acInfoAfter = $acInfoAfter->acInfoAfter_index();
        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.acInfoAfter')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture'],'acInfoAfter'=>$acInfoAfter]);
    }
     public function saveAcInfoAfter(Request $req){
        $req->validate([
        'day' => 'required', 
        'subject' => 'required',
        'teacher' => 'required',
        'total_hour' => 'required',
        'hour_day' => 'required',
        'music' => 'required',
        'student' => 'required',
        'receipt_number' => 'required',
        'receipt_date' => 'required',
        'price' => 'required',
        'note' => 'required',
        ]);
            
            $dayString = implode(',', $req->day);

            $fileModel = new acInfoAfter();

            $fileModel->day = $dayString;
            $fileModel->subject = $req->subject;
            $fileModel->teacher = $req->teacher;
            $fileModel->total_hour = $req->total_hour;
            $fileModel->hour_day = $req->hour_day;
            $fileModel->music = $req->music;
            $fileModel->student = $req->student;
            $fileModel->receipt_number = $req->receipt_number;
            $fileModel->receipt_date = $req->receipt_date;
            $fileModel->price = $req->price;
            $fileModel->note = $req->note;



            $fileModel->save();
            return back()
            ->with('success','File has been uploaded.');
        
    }
    public function AcInfoIntrov(Request $request)
    {
         $acInfoIntrov = new acInfoIntrov();
         $acInfoIntrov = $acInfoIntrov->acInfoIntrov_index();
        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.acInfoIntrov')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture'],'AcInfoIntrov'=>$acInfoIntrov]);
    }
     public function saveAcInfoIntrov(Request $req){
        $req->validate([
        'day' => 'required', 
        'subject' => 'required',
        'teacher' => 'required',
        'total_hour' => 'required',
        'hour_day' => 'required',
        'music' => 'required',
        'student' => 'required',
        'receipt_number' => 'required',
        'receipt_date' => 'required',
        'price' => 'required',
        'note' => 'required',
        ]);
            
            $dayString = implode(',', $req->day);

            $fileModel = new acInfoIntrov();

            $fileModel->day = $dayString;
            $fileModel->subject = $req->subject;
            $fileModel->teacher = $req->teacher;
            $fileModel->total_hour = $req->total_hour;
            $fileModel->hour_day = $req->hour_day;
            $fileModel->music = $req->music;
            $fileModel->student = $req->student;
            $fileModel->receipt_number = $req->receipt_number;
            $fileModel->receipt_date = $req->receipt_date;
            $fileModel->price = $req->price;
            $fileModel->note = $req->note;



            $fileModel->save();
            return back()
            ->with('success','File has been uploaded.');
        
    }

public function AcRepInfoAfter(Request $request)
    {
         $acRepInfoAfter = new acInfoAfter();
         $acRepInfoAfter = $acRepInfoAfter->acInfoAfter_index();
        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.acRepInfoAfter')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture'],'acRepInfoAfter'=>$acRepInfoAfter]);
    }
     public function AcRepInfoIntrov(Request $request)
    {
         $acRepInfoIntrov = new acInfoIntrov();
         $acRepInfoIntrov = $acRepInfoIntrov->acInfoIntrov_index();
        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.acRepInfoIntrov')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture'],'acRepInfoIntrov'=>$acRepInfoIntrov]);
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
