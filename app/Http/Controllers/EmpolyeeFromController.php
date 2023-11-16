<?php

namespace App\Http\Controllers;

use App\Mail\sendEmail;
use App\Models\User;

use App\Models\schoolLater;
use App\Models\empolyeeGroup;
use App\Models\payRoll;
use App\Models\leaveType;
use App\Models\schoolInform;
use App\Models\notification;
use App\Models\employeeList;
use App\Models\workingTime;

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

class EmpolyeeFromController extends Controller
{
    public function SchoolLater(Request $request)
    {
        $schoollater = new schoolLater();
        $schoollater = $schoollater->schoolLater_index();
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.schoolLatter')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'SchoolLater' => $schoollater]);
    }

    public function saveSchoolLater(Request $req)
    {
        $req->validate([

            'cancel_visa' => 'required',
            'resign' => 'required',
            'visa_extension' => 'required',
            'b_replacement_cover' => 'required',
            'O_replacement_cover' => 'required',
            'teacher_visa' => 'required',
            'personnel_visa' => 'required'

        ]);
        $fileModel = new schoolLater();


        $fileModel->cancel_visa = $req->cancel_visa;
        $fileModel->resign = $req->resign;
        $fileModel->visa_extension = $req->visa_extension;
        $fileModel->b_replacement_cover = $req->b_replacement_cover;
        $fileModel->O_replacement_cover = $req->O_replacement_cover;
        $fileModel->teacher_visa = $req->teacher_visa;
        $fileModel->personnel_visa = $req->personnel_visa;
        $fileModel->save();
        return back()
            ->with('success', 'File has been uploaded.');
    }

    public function SchoolInfo(Request $request)
    {
        $schoolinfo = new schoolInform();
        $schoolinfo = $schoolinfo->schoolInform_index();

        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.schoolInfo')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'schoolinfo' => $schoolinfo]);
    }

    public function saveschoolinfo(Request $req)
    {
        $req->validate([

            'file' => 'required|mimes:png,jpg,jpeg,xlx,xls,pdf|max:2048',
            'name_thai' => 'required',
            'name_engli' => 'required',
            'domain' => 'required',
            'identi' => 'required',
            'address_thai' => 'required',
            'address_engli' => 'required',
            'Registration' => 'required',
            'income' => 'required',
            'student' => 'required',
            'classroom' => 'required',


        ]);
        $fileModel = new schoolInform();
        $fileName = time() . '_' . $req->file->getClientOriginalName();
        $req->file->move(public_path('file'), $fileName);
        $fileModel->file = $fileName;

        $fileModel->name_thai = $req->name_thai;
        $fileModel->name_engli = $req->name_engli;
        $fileModel->domain = $req->domain;
        $fileModel->identi = $req->identi;
        $fileModel->address_thai = $req->address_thai;
        $fileModel->address_engli = $req->address_engli;
        $fileModel->finance = $req->finance;
        $fileModel->Registration = $req->Registration;
        $fileModel->income = $req->income;
        $fileModel->student = $req->student;
        $fileModel->classroom = $req->classroom;

        $fileModel->save();
        return back()
            ->with('success', 'File has been uploaded.');
    }
    public function Notification(Request $request)
    {
        $notification = new notification();
        $notification = $notification->notification_index();

        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.Notification')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'notification' => $notification]);
    }

    public function saveNotification(Request $req)
    {
        $req->validate([

            'absent' => 'required',
            'days' => 'required',
            'id_card' => 'required',
            'visa' => 'required',
            'work' => 'required',
            'teaching' => 'required',
            'passport' => 'required',
            'visa_area' => 'required',
            'work_area' => 'required',
            'mail' => 'required',
            'days_area' => 'required',
            'teaching_area' => 'required',
            'absent_area' => 'required',
            'id_card_area' => 'required',


        ]);
        $fileModel = new notification();

        $fileModel->days = $req->days;
        $fileModel->id_card = $req->id_card;
        $fileModel->passport = $req->passport;
        $fileModel->visa = $req->visa;
        $fileModel->work_permit = $req->work;
        $fileModel->teaching_li = $req->teaching;
        $fileModel->passport_msg = $req->passport;
        $fileModel->visa_msg = $req->visa_area;
        $fileModel->work_msg = $req->work_area;
        $fileModel->mail = $req->mail;
        $fileModel->days_msg = $req->days_area;
        $fileModel->absent = $req->absent;
        $fileModel->teaching_msg = $req->teaching_area;
        $fileModel->id_card_msg = $req->id_card_area;
        $fileModel->absent_msg = $req->absent_area;

        $fileModel->save();
        return back()
            ->with('success', 'File has been uploaded.');
    }
    public function EmployeeList(Request $request)
    {
        $employeeList = new employeeList();
        $employeeList = $employeeList->employeeList_index();

        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.employeeList')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'employeelist' => $employeeList]);
    }

    public function saveEmployeeList(Request $req)
    {
        $req->validate([

            'name' => 'required',
            'asstant' => 'required',
            'department' => 'required',
            'subject' => 'required',
            'group' => 'required',
            'nationality' => 'required',
            'religion' => 'required',
            'employee_id' => 'required',
            'password' => 'required',
            'phone_no' => 'required',
            'card_number' => 'required',
            'passpord_number' => 'required',
            'visa_number' => 'required',
            'address' => 'required',
            'issue' => 'required',
            'work' => 'required',
            'file' => 'required |mimes:png,jpg,jpeg,xlx,xls,pdf|max:2048',
            'work_issue' => 'required',
            'subject' => 'required',
            'end_date' => 'required',
            'teaching' => 'required',
            'teaching_issure' => 'required',
            'teaching_end' => 'required',
            'school_issure' => 'required',
            'school_end' => 'required',
            'expair' => 'required',
            'classroom' => 'required',
            'homeroom' => 'required',
            'contract' => 'required',
            'contract_issue' => 'required',
            'contract_end_date' => 'required',

        ]);
        $fileModel = new employeeList();
        $fileModel->contract = $req->contract;
        $fileModel->asstant = $req->asstant;
        $fileModel->contract_date = $req->contract_end_date;
        $fileModel->contract_issue = $req->contract_issue;


        $fileModel->work_issue = $req->work_issue;
        $fileModel->end_date = $req->end_date;
        $fileModel->work = $req->work;
        $fileModel->classroom = $req->classroom;
        $fileModel->homeroom = $req->homeroom;
        $fileModel->teaching = $req->teaching;
        $fileModel->teaching_end = $req->teaching_end;
        $fileModel->name = $req->name;

        $fileModel->teaching_issure = $req->teaching_issure;
        $fileModel->school = $req->school;
        $fileModel->school_end = $req->school_end;
        $fileModel->school_issure = $req->school_issure;
        $fileModel->department = $req->department;
        $fileModel->subject = $req->subject;
        $fileModel->group = $req->group;
        $fileModel->nationality = $req->nationality;
        $fileModel->religion = $req->religion;
        $fileModel->employee_id = $req->employee_id;
        $fileModel->password = $req->password;
        $fileModel->phone_no = $req->phone_no;
        $fileModel->card_number = $req->card_number;
        $fileModel->passpord_number = $req->passpord_number;
        $fileModel->visa_number = $req->visa_number;
        $fileModel->address = $req->address;

        $fileName = time() . '_' . $req->file->getClientOriginalName();
        $req->file->move(public_path('file'), $fileName);
        $fileModel->picture = $fileName;


        $fileModel->issue = $req->issue;
        $fileModel->expire = $req->expair;
        $fileModel->department = $req->department;

        $fileModel->save();
        return back()
            ->with('success', 'File has been uploaded.');
    }

    public function Nationality(Request $request)
    {
        $nationality = new employeeList();
        $nationality = $nationality->employeeList_index();

        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.Nationality')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'nationality' => $nationality]);
    }
    public function Contract(Request $request)
    {
        $contract = new employeeList();
        $contract = $contract->employeeList_index();

        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.contractDocument')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'contractdocument' => $contract]);
    }
    public function Homeroom(Request $request)
    {
        $homeroom = new employeeList();
        $homeroom = $homeroom->employeeList_index();

        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.Homeroom')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'homeroom' => $homeroom]);
    }
    public function WorkingTime(Request $request)
    {
        $workingTime = new workingTime();
        $workingTime = $workingTime->workingTime_index();
        $nationality = new employeeList();
        $nationality = $nationality->employeeList_index();

        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.WorkingTime')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'workingTime' => $workingTime, 'employeelist' => $nationality]);
    }
    //saad
    public function editWorkingTime($id = null)
    {
        $workingtime = new workingTime();
        $editWorkingTime =  workingTime::find($id);
        //return $editWorkingTime;
        //dd($editWorkingTime); 
        $WorkingTimeAll = $workingtime->workingTime_index();
        $nationality = new employeeList();
        $nationality = $nationality->employeeList_index();
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.WorkingTime')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'workingTime' => $WorkingTimeAll, 'editWorkingTime' => $editWorkingTime, 'employeelist' => $nationality]);
    }
    public function saveWorkingTime(Request $req)
    {
        if ($req->hide) {
            //return $req;
            $req->validate([
                'timeIn' => 'required',
                'timeOut' => 'required',

            ]);
            $updateArray = [
                'timeIn' => $req->timeIn,
                'timeOut' => $req->timeOut,

            ];
            //return $updateArray;
            $fileModel = new workingTime();

            $fileModel::where('id', $req->hide)->update($updateArray);
            return redirect()->route('workingTime')->with('success', 'Category updated successfully');
        } else {
            $req->validate([

                'name' => 'required',
                'group' => 'required',
                'timeIn' => 'required',
                'timeOut' => 'required',

            ]);
            $fileModel = new workingTime();


            $fileModel->name = $req->name;
            $fileModel->group = $req->group;
            $fileModel->timeIn = $req->timeIn;
            $fileModel->timeOut = $req->timeOut;

            $fileModel->save();
            return back()
                ->with('success', 'File has been uploaded.');
        }
    }



    public function Group(Request $request)
    {
        $group = new empolyeeGroup();
        $group = $group->empolyeeGroup_index();
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.employeeGroups')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'groups' => $group]);
    }
    public function Education(Request $request)
    {
        $education = new employeeList();
        $education = $education->employeeList_index();
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.Education')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'education' => $education]);
    }
    public function Attendance(Request $request)
    {
        $attendance = new workingTime();
        $attendance = $attendance->workingTime_index();
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.Attendance')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'attendance' => $attendance]);
    }
    public function Document(Request $request)
    {
        $document = new employeeList();
        $document = $document->employeeList_index();
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.Document')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'document' => $document]);
    }

    public function VisaDocument(Request $request)
    {
        $visadocument = new employeeList();
        $visadocument = $visadocument->employeeList_index();
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.VisaDocument')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'visaDocument' => $visadocument]);
    }
    public function WorkDocument(Request $request)
    {
        $workdocument = new employeeList();
        $workdocument = $workdocument->employeeList_index();
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.workDocumnet')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'workdocument' => $workdocument]);
    }
    public function TeachingDocument(Request $request)
    {
        $teachingdocument = new employeeList();
        $teachingdocument = $teachingdocument->employeeList_index();
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.TeachingDocument')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'teahcingDocument' => $teachingdocument]);
    }
    public function SchoolDocument(Request $request)
    {
        $schooldocument = new employeeList();
        $schooldocument = $schooldocument->employeeList_index();
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.SchoolDocument')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'schooldocument' => $schooldocument]);
    }
    public function saveGroup(Request $req)
    {
        $req->validate([

            'language_thi' => 'required',
            'language_engli' => 'required'
        ]);
        $fileModel = new empolyeeGroup();


        $fileModel->language_thi = $req->language_thi;
        $fileModel->language_engli = $req->language_engli;
        $fileModel->save();
        return back()
            ->with('success', 'File has been uploaded.');
    }
    public function Payroll(Request $request)
    {
        $payroll = new payRoll();
        $payroll = $payroll->payRoll_index();

        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.payRoll')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'payRoll' => $payroll]);
    }

    public function savePayroll(Request $req)
    {
        $req->validate([

            'language_thi' => 'required',
            'language_engli' => 'required',
            'type' => 'required'

        ]);
        $fileModel = new payRoll();


        $fileModel->language_thi = $req->language_thi;
        $fileModel->language_engli = $req->language_engli;
        $fileModel->type = $req->type;
        $fileModel->save();
        return back()
            ->with('success', 'File has been uploaded.');
    }
    public function LeaveType(Request $request)
    {
        $leaveType = new leaveType();
        $leaveType = $leaveType->leaveType_index();

        $userData = new User();
        $userData = $userData->index();

        return view('ApproveForm.LeaveType')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'leavetype' => $leaveType]);
    }

    public function editLeaveType(Request $request, $id = null)
    {

        $leaveType = new leaveType();
        $editLeaveType =  $leaveType->leaveTypeById($id);
        $leaveTypeAll = $leaveType->leaveType_index();

        $userData = new User();
        $userData = $userData->index();

        return view('ApproveForm.LeaveType')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'leavetype' => $leaveTypeAll, 'editLeave' => $editLeaveType]);
    }


    public function delete_row(Request $request, $id = null)
    {

        $leaveType = new leaveType();
        $delete_row =  $leaveType->delete_row($id);
        $leaveTypeAll = $leaveType->leaveType_index();

        $userData = new User();
        $userData = $userData->index();

        return redirect()->route('leavetype')->with('success', 'record deleted successfully.');
    }


    public function saveLeaveType(Request $req)
    {
        $req->validate([
            'language_thi' => 'required',
            'language_engli' => 'required',
            'Including' => 'required',
            'deduct' => 'required',
            'out' => 'required'

        ]);
        if ($req->hide) {
            $updateArray = [
                'language_thi' => $req->language_thi,
                'language_engli' => $req->language_engli,
                'Including' => $req->Including,
                'deduct' => $req->deduct,
                'out' => $req->out
            ];
            $fileModel = new leaveType();

            $fileModel::where('id', $req->hide)->update($updateArray);
            return redirect()->route('leavetype')
                ->with('successfully', 'Data update.');
        } else {
            $fileModel = new leaveType();
            $fileModel->language_thi = $req->language_thi;
            $fileModel->language_engli = $req->language_engli;
            $fileModel->Including = $req->Including;
            $fileModel->deduct = $req->deduct;
            $fileModel->out = $req->out;
            $fileModel->save();
            return back()
                ->with('success', 'File has been uploaded.');
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
