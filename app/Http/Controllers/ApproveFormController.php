<?php

namespace App\Http\Controllers;

use App\Mail\sendEmail;
use App\Models\User;
//approvel /froms
use App\Models\presentForms;
use App\Models\LeaveForms;
use App\Models\requestForms;
use App\Models\purchaseForms;
use App\Models\bookingForms;
use App\Models\cctvForms;
use App\Models\stationaryForms;

//Rejected Forms
use App\Models\rejPresentForms;
use App\Models\rejLeaveForms;
use App\Models\rejRequestForms;
use App\Models\rejPurchaseForms;
use App\Models\rejBookingForms;
use App\Models\rejCctvForms;
use App\Models\rejStationaryForms;

//Approve Forms
use App\Models\approvePresentForms;
use App\Models\approveLeaveForms;
use App\Models\approveRequestForms;
use App\Models\approvePurchaseForms;
use App\Models\approveBookingForms;
use App\Models\approveCctvForms;
use App\Models\approveStationaryForms;

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

class ApproveFormController extends Controller
{
    //company registeration page
    public function presentForm(Request $request)
    {
         $presentForm = new presentForms();
         $presentForm = $presentForm->index();
        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.presentForm')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture'],'present'=>$presentForm]);
    }
    public function LeaveForm(Request $request)
    {
        $leaveForm = new LeaveForms();
        $leaveForm = $leaveForm->leave_index();
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.leaveForms')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture'],'leave'=>$leaveForm]);
        
    }
     public function requestForm(Request $request)
    {
        $requestForm = new requestForms();
        $requestForm = $requestForm -> Request_index();
        
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.requestForms')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture'],'approveRequest'=>$requestForm]);
        
    }
      public function stationaryForm(Request $request)
    {
        $stationaryForm = new stationaryForms();
        $stationaryForm = $stationaryForm -> Stationary_index();
        
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.stationaryForms')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture'],'stationary'=>$stationaryForm]);
        
    }
  public function purchaseForm(Request $request)
    {
        $purchaseForm = new purchaseForms();
        $purchaseForm = $purchaseForm -> purchase_index();
        
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.purchaseForm')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture'],'purchase'=>$purchaseForm]);
        
    }
 public function bookingForm(Request $request)
    {
        $bookingForm = new bookingForms();
        $bookingForm = $bookingForm -> booking_index();
        
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.bookingForms')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture'],'booking'=>$bookingForm]);
        
    }
    public function cctvForm(Request $request)
    {
        $cctvForm = new cctvForms();
        $cctvForm = $cctvForm -> cctv_index();
        
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.cctvForm')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture'],'cctv'=>$cctvForm]);
        
    }

//Rejected Forms
 public function rejPresentForm(Request $request)
    {
         $rejpresentForm = new rejPresentForms();
         $rejpresentForm = $rejpresentForm->index();
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.rejpresentForm')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture'],'rejpresent'=>$rejpresentForm]);
    }
    public function rejLeaveForm(Request $request)
    {
        $rejleaveForm = new rejLeaveForms();
        $rejleaveForm = $rejleaveForm->rejleave_index();
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.rejleaveForms')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture'],'rejleave'=>$rejleaveForm]);
        
    }
     public function rejrequestForm(Request $request)
    {
        $rej_requestForm = new rejRequestForms();
        $rej_requestForm = $rej_requestForm -> rejRequestIndex();
        
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.rejrequestForms')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture'],'rejrequest'=>$rej_requestForm]);
        
    }
      public function rejstationaryForm(Request $request)
    {
        $rejstationaryForm = new rejStationaryForms();
        $rejstationaryForm = $rejstationaryForm -> rejStationary_index();
        
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.rejstationaryForms')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture'],'rejstationary'=>$rejstationaryForm]);
        
    }
  public function rejpurchaseForm(Request $request)
    {
        $rejpurchaseForm = new rejPurchaseForms();
        $rejpurchaseForm = $rejpurchaseForm -> rejpurchase_index();
        
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.rejpurchaseForm')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture'],'rejpurchase'=>$rejpurchaseForm]);
        
    }
 public function rejbookingForm(Request $request)
    {
        $rejbookingForm = new rejBookingForms();
        $rejbookingForm = $rejbookingForm -> rejbooking_index();
        
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.rejbookingForms')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture'],'rejbooking'=>$rejbookingForm]);
        
    }
    public function rejcctvForm(Request $request)
    {
        $rejcctvForm = new rejCctvForms();
        $rejcctvForm = $rejcctvForm -> rejcctv_index();
        
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.rejcctvForm')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture'],'rejcctv'=>$rejcctvForm]);
        
    }

    //Approved Forms 
 public function approvePresentForm(Request $request)
    {
         $approvepresentForm = new approvepresentForms();
         $approvepresentForm = $approvepresentForm->index();
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.approvePresentForm')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture'],'approvepresent'=>$approvepresentForm]);
    }
    public function approveLeaveForm(Request $request)
    {
        $approveleaveForm = new approveLeaveForms();
        $approveleaveForm = $approveleaveForm->approveleave_index();
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.approveLeaveForms')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture'],'approveleave'=>$approveleaveForm]);
        
    }
     public function approveRequestForm(Request $request)
    {
        $approve_requestForm = new approveRequestForms();
        $approve_requestForm = $approve_requestForm -> approveRequestIndex();
        
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.approveRequestForms')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture'],'approverequest'=>$approve_requestForm]);
        
    }
      public function approveStationaryForm(Request $request)
    {
        $approve_stationaryForm = new approveStationaryForms();
        $approve_stationaryForm = $approve_stationaryForm -> approveStationary_index();
        
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.approveStationaryForm')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture'],'approvestationary'=>$approve_stationaryForm]);
        
    }
  public function approvePurchaseForm(Request $request)
    {
        $approve_purchaseForm = new approvePurchaseForms();
        $approve_purchaseForm = $approve_purchaseForm -> approvepurchase_index();
        
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.approvePurchaseForm')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture'],'approvepurchase'=>$approve_purchaseForm]);
        
    }
 public function approveBookingForm(Request $request)
    {
        $approve_bookingForm = new approveBookingForms();
        $approve_bookingForm = $approve_bookingForm -> approvebooking_index();
        
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.approveBookingForm')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture'],'approvebooking'=>$approve_bookingForm]);
        
    }
    public function approvecctvForm(Request $request)
    {
        $approve_cctvForm = new approveCctvForms();
        $approve_cctvForm = $approve_cctvForm -> approvecctv_index();
        
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.approveCctvForm')->with(['name' => $userData[0]['name'],'profile_picture' => $userData[0]['profile_picture'],'approvecctv'=>$approve_cctvForm]);
        
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
