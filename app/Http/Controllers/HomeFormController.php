<?php

namespace App\Http\Controllers;

use App\Mail\sendEmail;
use App\Models\User;


use App\Models\homeRequestForms;
use App\Models\sSales;
use App\Models\sItem;
use App\Models\sBrand;
use App\Models\purchaseForms;
use App\Models\PresentForms;
use App\Models\homePresentForms;
use App\Models\employeeList;
use App\Models\workingTime;
use App\Models\leaveForm;

use App\Models\homeCctv;
use App\Models\homeBook;

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
use Illuminate\Auth\Events\Validated;
use Twilio\Rest\Client;

class HomeFormController extends Controller
{
    public function homePresent(Request $request)
    {
        $workingTime = new workingTime();
        $workingTime = $workingTime->workingTime_index();
        $nationality = new employeeList();
        $nationality = $nationality->employeeList_index();


        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.homePresentForm')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'workingTime' => $workingTime, 'employeelist' => $nationality],);
    }


    public function homeLeave(Request $request)
    {
        $workingTime = new workingTime();
        $workingTime = $workingTime->workingTime_index();
        $nationality = new employeeList();
        $nationality = $nationality->employeeList_index();
        $leaveform = new leaveForm();
        $leaveform = $leaveform->leave_index();


        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.homeLeaveForm')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'workingTime' => $workingTime, 'employeelist' => $nationality, 'leaveform' => $leaveform],);
    }


    public function saveHome_Leave(Request $req)
    {
        $req->validate([

            'name' => 'required',
            'group' => 'required',
            'date' => 'required',
            'days' => 'required',
            'type' => 'required',

        ]);
        $fileModel = new leaveForm();


        $fileModel->name = $req->name;
        $fileModel->group = $req->group;
        $fileModel->type = $req->type;
        $fileModel->days = $req->days;
        $fileModel->date = $req->date;

        $fileModel->save();
        return back()
            ->with('success', 'File has been uploaded.');
    }
    public function HomeRequestForm(Request $request)
    {

        $request_form = new homeRequestForms();
        $request_form = $request_form->homeRequestForms_index();

        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.homeRequestForms')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'homerequest' => $request_form]);
    }



    public function saveRequestForm(Request $req)
    {
        $req->validate([
            'date' => 'required',
            'description' => 'required',
            'subject' => 'required'
        ]);

        $fileModel = new homeRequestForms();
        $fileModel->date = $req->date;
        $fileModel->subject = $req->subject;
        $fileModel->desciption = $req->description;

        $fileModel->save();
        return back()
            ->with('success', 'File has been uploaded.');
    }

    public function homeStationary(Request $request)
    {

        $sItem = new sItem();
        $sItem = $sItem->sItem_index();

        $sBrand = new SBrand();
        $sBrand = $sBrand->get();

        $userData = new User();
        $userData = $userData->index();

        $sSale  = new sSales();
        $sSale  = $sSale->get();
        return view('ApproveForm.homeStationary')->with(['name' => $userData[0]['name'],
         'profile_picture' => $userData[0]['profile_picture'], 'brands' => $sBrand, 
         'products' => $sItem, "user_id" => $userData[0]['id'], 'sales' => $sSale]);
    }
    public function editHomeStationary($id = null)
    {
        $sItem = new sItem();
        $sItem = $sItem->sItem_index();

        $sBrand = new SBrand();
        $sBrand = $sBrand->get();

        $userData = new User();
        $userData = $userData->index();

        $sSale  = new sSales();
        $sSale  = $sSale->get();

        $editSsale = $sSale->find($id);
        //return $editSsale;
        return view('ApproveForm.homeStationary')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'brands' => $sBrand, 'products' => $sItem, "user_id" => $userData[0]['id'], 'sales' => $sSale, 'editSsale' => $editSsale]);
    }
    public function saveHomeStationary(Request $req)
    {
        //return $req;
        if ($req->hide) {

            $req->validate([
                'date' => 'required',
                'qty' => 'required|integer|min:1',
                'description' => 'required',
                'status' => 'required',
                'productId' => 'required',

            ]);

            $itemQty = $req->qty;
            $sitem = sItem::find($req->productId);
            $price = $sitem->price;
            $price = floatval($price);

            //calculating bill
            $bill = $itemQty * $price;

            $updateArray = [
                'date' => $req->date,
                'saleQty' => $req->qty,
                'description' => $req->description,
                'status' => $req->status,
                'bill' => $bill,
            ];
            $fileModel = sSales::find($req->hide);
            $fileModel->update($updateArray);


            return redirect()->route('home_Stationary')
                ->with('successfully', 'Data update.');
        } else {

            //save new record

            //return $req;
            $req->validate([
                'date' => 'required',
                'qty' => 'required|integer|min:1',
                'user' => 'required',
                'productId' => 'required',
                // 'company' => 'required',
                'description' => 'required',
                'status' => 'required',

            ]);

            $itemQty = $req->qty;
            $sitem = sItem::find($req->productId);
            $price = $sitem->price;
            $price = floatval($price);

            //calculating bill
            $bill = $itemQty * $price;

            //for brand or company
            $sbrand = $sitem->brand_id;
            //return $sbrand;

            $fileModel = new sSales();
            $fileModel->date = $req->date;
            $fileModel->description = $req->description;
            $fileModel->productCode = $req->productId;
            $fileModel->createIP = $req->user;
            $fileModel->createID = $req->user;
            $fileModel->bill = $bill;
            $fileModel->billNumber = $bill;
            $fileModel->companyID = $sbrand;
            $fileModel->branchID = $sbrand;
            $fileModel->saleQty = $req->qty;
            $fileModel->saleType = '';
            $fileModel->teacher = $req->teacher;
            $fileModel->status = $req->status;

            $fileModel->save();
            return back()
                ->with('success', 'File has been uploaded.');
        }
    }

    public function homePurchase(Request $request)
    {


        $userData = new User();
        $userData = $userData->index();

        $purchase  = new purchaseForms();
        $purchase  = $purchase->get();
        return view('ApproveForm.homePurchase')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], "user_id" => $userData[0]['id'], 'homePurchase' => $purchase]);
    }
    public function saveHomePurchase(Request $req)
    {
        $req->validate([
            'date' => 'required',
            'qty' => 'required',
            'qty_price' => 'required',
            'description' => 'required',
            'order' => 'required',


        ]);

        $fileModel = new purchaseForms();
        $fileModel->date = $req->date;
        $fileModel->name = $req->user;
        $fileModel->description = $req->description;
        $fileModel->approve_1 = $req->user;
        $fileModel->order = $req->order;
        $fileModel->qty = $req->qty;
        $fileModel->qty_price = $req->qty_price;
        $fileModel->status = 'waiting';

        $fileModel->save();
        return back()
            ->with('success', 'File has been uploaded.');
    }

    public function homeBooking(Request $request)
    {


        $userData = new User();
        $userData = $userData->index();

        $homeBook  = new homeBook();
        $homeBook  = $homeBook->homeBook_index();
        return view('ApproveForm.homeBook')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], "user_id" => $userData[0]['id'], 'homeBook' => $homeBook]);
    }
    public function saveHome_Booking(Request $req)
    {
        $req->validate([
            'date' => 'required',
            'time' => 'required',
            'room' => 'required',
            'note' => 'required',
            'active' => 'required',
            'fan' => 'required',
            'chair' => 'required',
            'air' => 'required',
            'light' => 'required',
            'other' => 'required',
            'file' => 'required|mimes:png,jpg,jpeg,xlx,xls,pdf|max:2048',


        ]);

        $fileModel = new homeBook();
        $fileModel->date = $req->date;
        $fileModel->active = $req->active;
        $fileModel->time = $req->time;
        $fileModel->note = $req->note;
        $fileModel->chair = $req->chair;
        $fileModel->fan = $req->fan;
        $fileModel->air = $req->air;
        $fileModel->room = $req->room;
        $fileModel->light = $req->light;
        $fileModel->other = $req->other;
        $fileName = time() . '_' . $req->file->getClientOriginalName();
        $req->file->move(public_path('file'), $fileName);
        $fileModel->picture = $fileName;

        $fileModel->status = 'waiting';

        $fileModel->save();
        return back()
            ->with('success', 'File has been uploaded.');
    }
    public function homeCctv(Request $request)
    {

        $userData = new User();
        $userData = $userData->index();

        $homecctv  = new homeCctv();
        $homecctv  = $homecctv->homeCctv_index();

        return view('ApproveForm.homeCctv')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], "user_id" => $userData[0]['id'], 'homeCctv' => $homecctv]);
    }
    public function saveHome_Cctv(Request $req)
    {
        $req->validate([
            'date' => 'required',
            'file' => 'required|mimes:png,jpg,jpeg',
            'time' => 'required',
            'note' => 'required',
            'channel' => 'required',
            'dvr' => 'required',


        ]);

        $fileModel = new homeCctv();
        $fileModel->date = $req->date;
        $fileName = time() . '_' . $req->file('file')->getClientOriginalName();
        $req->file->move(public_path('file'), $fileName);

        $fileModel->picture = $fileName;
        $fileModel->time = $req->time;
        $fileModel->note = $req->note;
        $fileModel->dvr = $req->dvr;
        $fileModel->channel = $req->channel;
        $fileModel->status = 'waiting';

        $fileModel->save();
        return back()
            ->with('success', 'File has been uploaded.');
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
