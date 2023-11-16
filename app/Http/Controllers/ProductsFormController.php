<?php

namespace App\Http\Controllers;

use App\Mail\sendEmail;
use App\Models\User;

use App\Models\proUnit;
use App\Models\proCategory;
use App\Models\proBrand;
use App\Models\proItem;
use App\Models\proImport;
use App\Models\proSales;



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

class ProductsFormController extends Controller
{

    public function ProUnit(Request $request)
    {

        $prounit = new proUnit();
        $prounit = $prounit->proUnit_index();
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.proUnits')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'prounit' => $prounit]);
    }
    public function saveProUnit(Request $req)
    {
        $req->validate([
            'name_thi' => 'required',
            'name_engl' => 'required'
        ]);

        $fileModel = new proUnit();
        $fileModel->name_thi = $req->name_thi;
        $fileModel->name_engl = $req->name_engl;

        $fileModel->save();
        return back()
            ->with('success', 'File has been uploaded.');
    }
    public function ProCategory(Request $request)
    {

        $procategory = new proCategory();
        $procategory = $procategory->proCategory_index();
        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.proCategory')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'procategories' => $procategory]);
    }

    public function saveProCategory(Request $req)
    {
        $req->validate([
            'name_thi' => 'required',
            'name_engl' => 'required'
        ]);
        $fileModel = new proCategory();

        $fileModel->name_thi = $req->name_thi;
        $fileModel->name_engl = $req->name_engl;
        $fileModel->save();
        return back()
            ->with('success', 'File has been uploaded.');
    }
    public function proBrand(Request $request)
    {

        $probrand = new proBrand();
        $probrand = $probrand->proBrand_index();
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.proBrand')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'proBrand' => $probrand]);
    }

    public function saveProBrand(Request $req)
    {
        $req->validate([
            'file' => 'required|mimes:png,jpg,jpeg,xlx,xls,pdf|max:2048',
            'name_thi' => 'required',
            'name_engl' => 'required'
        ]);
        $fileModel = new proBrand();
        if ($req->file()) {
            $fileName = time() . '_' . $req->file->getClientOriginalName();
            $req->file->move(public_path('file'), $fileName);
            $fileModel->picture = $fileName;
            $fileModel->name_thi = $req->name_thi;
            $fileModel->name_engl = $req->name_engl;
            $fileModel->save();
            return back()
                ->with('success', 'File has been uploaded.')
                ->with('file', $fileName);
        }
    }
    //information


    public function ProItems(Request $request)
    {


        $proitem = new proItem();
        $proitem = $proitem->proItem_index();
        $userData = new User();
        $userData = $userData->index();

        $procategory = new proCategory();
        $procategory = $procategory->proCategory_index();

        $probrand = new proBrand();
        $probrand = $probrand->proBrand_index();

        return view('ApproveForm.proItem')->with(
            ['name' => $userData[0]['name'], 'user_id' => $userData[0]['id'], 'profile_picture' => $userData[0]['profile_picture'], 'proItem' => $proitem, 'probrand' => $probrand, 'procategory' => $procategory, 'probrand' => $probrand]

        );
    }

    public function saveProItems(Request $req)
    {

        $req->validate([
            'category' => 'required',
            'code' => 'required',
            'product' => 'required',
            'price' => 'required',
            'file' => 'required|mimes:png,jpg,jpeg,xlx,xls,pdf|max:2048',
            'name_thi' => 'required',
            'name_engl' => 'required',
            'title_engl' => 'required',
            'title_thi' => 'required',
            'desc_thi' => 'required',
            'desc_engl' => 'required'
        ]);
        $fileModel = new proItem();
        if ($req->file()) {

            $fileName = time() . '_' . $req->file('file')->getClientOriginalName();
            $req->file->move(public_path('file'), $fileName);

            $fileModel->picture = $fileName;
            $fileModel->brand_id = $req->brand;
            $fileModel->code = $req->code;
            $fileModel->product = $req->product;
            $fileModel->price = $req->price;
            $fileModel->category = $req->category;
            $fileModel->created_id = $req->user;
            $fileModel->name_thi = $req->name_thi;
            $fileModel->name_engl = $req->name_engl;
            $fileModel->title_engl = $req->title_engl;
            $fileModel->title_thi = $req->title_thi;
            $fileModel->disc_thi = $req->desc_thi;
            $fileModel->disc_engl = $req->desc_engl;

            $fileModel->save();
            return back()
                ->with('success', 'File has been uploaded.')
                ->with('file', $fileName);
        }
    }

    public function ProImports(Request $request)
    {
        $proitem = new proItem();
        $proitem = $proitem->proItem_index();

        $probrand = new proBrand();
        $probrand = $probrand->proBrand_index();

        $proimports = new proImport();
        $proimports = $proimports->proImport_index();
        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.proImport')->with(['name' => $userData[0]['name'], 'user_id' => $userData[0]['id'], 'profile_picture' => $userData[0]['profile_picture'], 'probrand' => $probrand, 'proImport' => $proimports, 'proitem' => $proitem]);
    }
    public function saveProImports(Request $req)
    {
        $req->validate([
            'date' => 'required',
            'code' => 'required',
            'qty' => 'required',
            'price' => 'required',
            'brand' => 'required',
            'invoice' => 'required'

        ]);
        $fileModel = new proImport();

        $fileModel->date = $req->date;
        $fileModel->code = $req->code;
        $fileModel->qty = $req->qty;
        $fileModel->price = $req->price;;
        $fileModel->supplier = $req->brand;
        $fileModel->invoice = $req->invoice;
        $fileModel->createID = $req->user;


        $fileModel->save();
        return back()
            ->with('success', 'File has been uploaded.');
    }
    public function ProBillimport(Request $request)
    {
        $proimports = new proImport();
        $proimports = $proimports->proBillImport();

        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.probillimport
            ')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'proBillimport' => $proimports]);
    }
    public function ProSales(Request $request)
    {

        $prosale = new proSales();
        $prosale = $prosale->proSales_index();
        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.proSale')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'proSale' => $prosale]);
    }
    public function ProRefunds(Request $request)
    {


        $prosale = new proSales();
        $prosale = $prosale->proRefund();
        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.proRefund')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'proRefund' => $prosale]);
    }
    public function proApproves(Request $request)
    {
        $proimports = new proImport();
        $proimports = $proimports->proApproved();

        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.proApprove')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'proApprove' => $proimports]);
    }
    public function proBrokens(Request $request)
    {


        $prosale = new proSales();
        $prosale = $prosale->proBroken();
        //dd($prosale);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.proBroken')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'proBroken' => $prosale]);
    }
    public function proEcommerce(Request $request)
    {


        $prosale = new proSales();
        $prosale = $prosale->proSales_index();
        //dd($prosale);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.proEcommerce')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'proEcommerce' => $prosale]);
    }
    //Report Maduls

    public function proSaleReport(Request $request)
    {

        $salereport = new proSales();
        $salereport = $salereport->proSalesWithUser();
        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.proSalesReport')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'proSaleReport' => $salereport]);
    }
    public function proBrokenReport(Request $request)
    {

        $brokenreport = new proSales();
        $brokenreport = $brokenreport->proSalesWithUser();
        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.proBrokenReport')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'proBrokenReport' => $brokenreport]);
    }
    public function ProImportsReport(Request $request)
    {

        $proimport = new proImport();
        $proimport = $proimport->proImportWithUser();
        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.proImportReport')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'proImportReport' => $proimport]);
    }
    public function proEcommerceReport(Request $request)
    {

        $salereport = new proSales();
        $salereport = $salereport->proSalesWithUser();
        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.proEcommerceReport')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'proEcommerceReport' => $salereport]);
    }
    public function proRefundReport(Request $request)
    {

        $salereport = new proSales();
        $salereport = $salereport->proSalesWithUser();
        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.proRefundReport')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'proRefundReport' => $salereport]);
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
