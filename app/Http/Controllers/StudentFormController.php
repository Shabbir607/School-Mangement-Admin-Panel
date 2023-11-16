<?php

namespace App\Http\Controllers;

use App\Mail\sendEmail;
use App\Models\User;


use App\Models\stuLevel;
use App\Models\stuClassRoom;
use App\Models\StuInfoCurrent;

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

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\stuinfocurrentImportClass;

class StudentFormController extends Controller
{

    public function StudentLevel(Request $request)
    {
        $stuLevel = new stuLevel();
        $stuLevel = $stuLevel->stuLevel_index();
        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.stuLevel')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'stuLevel' => $stuLevel]);
    }
    public function saveStudentLevel(Request $req)
    {
        $req->validate([

            'thai' => 'required',
            'english' => 'required',



        ]);

        $fileModel = new stuLevel();

        $fileModel->thai = $req->thai;
        $fileModel->english = $req->english;


        $fileModel->save();
        return back()
            ->with('success', 'File has been uploaded.');
    }


    public function StudentCassRoom(Request $request)
    {
        $stuClassRoom = new stuClassRoom();
        $stuClassRoom = $stuClassRoom->stuClassRoom_index();
        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.stuClassRoom')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'stuClassRoom' => $stuClassRoom]);
    }
    public function savestuClassRoom(Request $req)
    {
        $req->validate([
            'level' => 'required',
            'thai' => 'required',
            'english' => 'required',

        ]);

        $fileModel = new stuClassRoom();
        $fileModel->level = $req->level;
        $fileModel->thai = $req->thai;
        $fileModel->english = $req->english;


        $fileModel->save();
        return back()
            ->with('success', 'File has been uploaded.');
    }

    public function StuInfoCurrent(Request $request)
    {
        $StuInfoCurrent = new StuInfoCurrent();
        $StuInfoCurrent = $StuInfoCurrent->Current();
        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.StuInfoCurrent')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'stuInfoCurrent' => $StuInfoCurrent]);
    }
    public function editStuInfoCurrent($id = null)
    {
        $StuInfoCurrent = new StuInfoCurrent();
        $editStuInfoCurrent =  StuInfoCurrent::find($id);
        //return $editStuInfoCurrent;
        //dd($editStuInfoCurrent); 
        $StuInfoCurrentAll = $StuInfoCurrent->Current();
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.StuInfoCurrent')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'stuInfoCurrent' => $StuInfoCurrentAll, 'editStuInfoCurrent' => $editStuInfoCurrent]);
    }
    public function saveStuInfoCurrent(Request $req)
    {

        //dd($req);
        //return $req;

        //to handle edit existing record

        if ($req->hide) {

            //return $req;
            $req->validate([
                'code' => 'required',
                'password' => 'required',
                'firstname' => 'required',
                'middlename' => 'required',
                'lastname' => 'required',
                'classroom' => 'required',
                'status' => 'required',

            ]);
            $updateArray = [
                'code' => $req->code,
                'password' => $req->password,
                'firstname' => $req->firstname,
                'middlename' => $req->middlename,
                'lastname' => $req->lastname,
                'classroom' => $req->classroom,
                'status' => $req->status,

            ];
            //return $updateArray;
            $fileModel = new StuInfoCurrent();

            $fileModel::where('id', $req->hide)->update($updateArray);
            return redirect()->route('stuinfocurrent')->with('success', 'Category updated successfully');


        } else {
            //to handle new record


            //if request has file input
            if ($req->hasFile('excel_file')) {

                $req->validate([
                    'excel_file' => 'required|mimes:xls,xlsx',
                ]);

                $file = $req->file('excel_file');

                // Use Laravel Excel to import data from the Excel file
                Excel::import(new stuinfocurrentImportClass, $file);

                return redirect()->back()->with('success', 'Data imported successfully');
            } else {
                //if the request as not file input
                $req->validate([
                    'code' => 'required',
                    'password' => 'required',
                    'firstname' => 'required',
                    'middlename' => 'required',
                    'lastname' => 'required',
                    'classroom' => 'required',
                    'status' => 'required',

                ]);

                $fileModel = new StuInfoCurrent();
                $fileModel->code = $req->code;
                $fileModel->password = $req->password;
                $fileModel->firstname = $req->firstname;
                $fileModel->middlename = $req->middlename;
                $fileModel->lastname = $req->lastname;
                $fileModel->classroom = $req->classroom;
                $fileModel->status = $req->status;

                $fileModel->save();
                return back()->with('success', 'File has been uploaded.');
            }
        }
    }
    public function StuInfoAlumni(Request $request)
    {
        $StuInfoAlumni = new StuInfoCurrent();
        $StuInfoAlumni = $StuInfoAlumni->Alumni();
        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.StuInfoAlumni')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'stuInfoAlumni' => $StuInfoAlumni]);
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
        try {
            $request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);

            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $user = User::where('email', $request->email)->first();
                if (Auth::user()->user_type == 'admin') {
                    return redirect(url('admin'));
                } elseif (Auth::user()->user_type == 'agent') {
                    if (Auth::user()->status == 1) {
                        return redirect(url('agent'));
                    } else {
                        return redirect(url('agent/'))->withSuccess('Wait for the approval from admin side.');
                    }
                } elseif (Auth::user()->user_type == 'student') {
                    if (Auth::user()->status == 1) {
                        return redirect(url('student/'));
                    } else {
                        return redirect(url('student/'))->withSuccess('Please compete your profile and Wait for the approval from admin side.');
                    }
                } elseif (Auth::user()->user_type == 'owner') {
                    if (Auth::user()->status == 1) {
                        return redirect(url('owner/'));
                    } else {
                        return redirect(url('owner/'))->withSuccess('Please compete your profile for post a job');
                    }
                } else {
                    return redirect(url('admin/dashboard'));
                }
            }
            return redirect("login")->withSuccess('Login details are not valid');
        } catch (\Exception $ex) {
            DB::rollback();
            return back()->with('error', 'Error occured' . $ex->getMessage());
        }
    }
    //logout
    public function signOut()
    {
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
        if (Auth::check()) {
            if (Auth::user()->user_type == 'admin') {
                return view('dashboard');
            }
        }

        return redirect("/")->withSuccess('Opps! You do not have access');
    }
}
