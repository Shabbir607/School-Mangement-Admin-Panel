<?php

namespace App\Http\Controllers;

use App\Mail\sendEmail;
use App\Models\User;

use App\Models\salesReport;
use App\Models\brokenReport;
use App\Models\refundReport;
use App\Models\importReport;
use App\Models\SummaryReport;
use App\Models\sBrand;
use App\Models\sCategory;
use App\Models\sUnit;

use App\Models\sApprove;
use App\Models\sBillImport;
use App\Models\sBroken;
use App\Models\sItem;
use App\Models\sRefund;
use App\Models\sSales;
use App\Models\sImport;

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

class StationaryFormController extends Controller
{

    public function ssaleReport(Request $request)
    {
        $sale = new sSales();
        $sale = $sale->sSales_index();

        //  dd($sale);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.SalesReport')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'SalesReport' => $sale]);
    }
    public function simportReport(Request $request)
    {
        $simports = new sImport();
        $simports = $simports->sBillImport();
        $importReports = new importReport();
        $importReports = $importReports->importReport_index();
        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.ImportReport')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'ImportReport' => $simports]);
    }
    public function sBrokenReport(Request $request)
    {

        $refoundReports = new brokenReport();
        $refoundReports = $refoundReports->brokenReport_index();
        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.BrokenReport')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'BrokenReport' => $refoundReports]);
    }
    public function sRefundReport(Request $request)
    {

        $refoundReports = new refundReport();
        $refoundReports = $refoundReports->refundReport_index();
        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.RefundReport')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'RefoundReport' => $refoundReports]);
    }
    public function SummaryReport(Request $request)
    {

        $summaryReports = new SummaryReport();
        $summaryReports = $summaryReports->SummaryReport_index();
        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.SummaryReport')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'SummaryReport' => $summaryReports]);
    }
    public function sBrand(Request $request)
    {

        $sbrand = new sBrand();
        //return $sbrand;
        $sbrand = $sbrand->SBrand_index();
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.sBrand')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'sBrand' => $sbrand]);
    }

    public function editBrand(Request $request, $id = null)
    {

        $brand = new sBrand();
        $editBrand =  $brand->BrandById($id);
        // dd($editBrand); 
        $BrnadAll = $brand->SBrand_index();
        $userData = new User();
        $userData = $userData->index();

        return view('ApproveForm.sBrand')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'sBrand' => $BrnadAll, 'editBrand' => $editBrand]);
    }

    public function delete_brand_row(Request $request, $id = null)
    {

        $brand = new sBrand();
        $delete_brand_row =  $brand->delete_brand_row($id);
        $brandAll = $brand->SBrand_index();

        $userData = new User();
        $userData = $userData->index();

        return redirect()->route('sbrand')->with('success', 'Category deleted successfully');
    }


    public function saveBrand(Request $req)
    {
        //dd($req);

        //return $req;

        //if its data for updation
        if ($req->hide) {

            //if user submits new file
            if ($req->file()) {

                $req->validate([
                    'file' => 'required|mimes:png,jpg,jpeg',
                    'name_th' => 'required',
                    'name_en' => 'required'
                ]);

                $fileName = time() . '_' . $req->file('file')->getClientOriginalName();
                $req->file->move(public_path('file'), $fileName);

                $updateArray = [
                    'language' => $req->name_th,
                    'english' => $req->name_en,
                    'picture' =>  $fileName

                ];
                $fileModel = new sBrand();

                $fileModel::where('id', $req->hide)->update($updateArray);
                return redirect()->route('sbrand')->with('successfully', 'Data update.');
            } else {

                //if user not change file
                $req->validate([
                    'name_th' => 'required',
                    'name_en' => 'required'
                ]);

                $updateArray = [
                    'language' => $req->name_th,
                    'english' => $req->name_en,
                ];
                $fileModel = new sBrand();

                $fileModel::where('id', $req->hide)->update($updateArray);
                return redirect()->route('sbrand')->with('successfully', 'Data update.');
            }
        } else {

            // if creating new record 
            $req->validate([
                'file' => 'required|mimes:png,jpg,jpeg,xlx,xls,pdf|max:2048',
                'name_th' => 'required',
                'name_en' => 'required'
            ]);

            $fileModel = new sBrand();
            if ($req->file()) {
                $fileName = $req->file('file')->getClientOriginalName();
                //return $fileName;

                $fileName = time() . '_' . $req->file('file')->getClientOriginalName();
                $req->file->move(public_path('file'), $fileName);
                $fileModel->picture = $fileName;
                $fileModel->language = $req->name_th;
                $fileModel->english = $req->name_en;
                $fileModel->save();
                return back()
                    ->with('success', 'File has been uploaded.')
                    ->with('file', $fileName);
            }
        }
    }
    public function sCategory(Request $request)
    {

        $scategory = new sCategory();
        $scategory = $scategory->SCategory_index();
        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.sCategory')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'categories' => $scategory]);
    }

    public function saveCategory(Request $req) //saad
    {
        $req->validate([
            'name_th' => 'required',
            'name_en' => 'required'
        ]);

        if ($req->hide) {
            $updateArray = [
                'language' => $req->name_th,
                'english' => $req->name_en,

            ];
            //return $updateArray;
            $fileModel = new sCategory();

            $fileModel::where('id', $req->hide)->update($updateArray);
            return redirect()->route('scategory')->with('success', 'Category updated successfully');
        } else {
            $fileModel = new sCategory();

            $fileModel->language = $req->name_th;
            $fileModel->english = $req->name_en;
            $fileModel->save();
            return redirect()->route('scategory')->with('success', 'Category added successfully');
        }
    }
    public function editCategory($id = null)
    {
        $category = new sCategory();
        $editCategory =  SCategory::find($id);
        //return $editCategory;
        //dd($editCategory); 
        $CategoryAll = $category->sCategory_index();
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.sCategory')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'categories' => $CategoryAll, 'editCategory' => $editCategory]);
    }
    public function deleteCategory($id = null) //saad
    {
        //$id = $req->input('id');
        $category = SCategory::find($id);

        if (!$category) {
            return redirect()->route('scategory')->with('error', 'Category not found');
        }

        try {
            // Soft delete the category
            $category->delete();
            return redirect()->route('scategory')->with('success', 'Category deleted successfully');
        } catch (\Exception $e) {
            // Handle any exceptions or errors that may occur during deletion
            return redirect()->route('scategory')->with('error', 'Failed to delete the category');
        }
    }
    public function sUnit(Request $request)
    {

        $sunit = new sUnit();
        $sunit = $sunit->sUnit_index();
        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.sUnits')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'sunits' => $sunit]);
    }
    public function saveUnit(Request $req)
    {
        $req->validate([
            'name_th' => 'required',
            'name_en' => 'required'
        ]);
        $fileModel = new sUnit();

        $fileModel->language = $req->name_th;
        $fileModel->english = $req->name_en;

        $fileModel->save();
        return back()
            ->with('success', 'File has been uploaded.');
    }

    // information

    public function sItems(Request $request)
    {

        $sitem = new sItem();
        $sitem = $sitem->sItem_index();
        $userData = new User();
        $userData = $userData->index();

        $scategory = new sCategory();
        $scategory = $scategory->SCategory_index();

        $sbrand = new sBrand();
        $sbrand = $sbrand->SBrand_index();

        return view('ApproveForm.sItem')->with(
            ['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'sItem' => $sitem, 'sbrand' => $sbrand, 'scategory' => $scategory, 'sbrand' => $sbrand]
        );
    }

    public function saveItems(Request $req)
    {

        $req->validate([
            'category' => 'required',
            'code' => 'required',
            'product' => 'required',
            'price' => 'required',
            'brand' => 'required',
            'file' => 'required|mimes:png,jpg,jpeg'


        ]);
        $fileModel = new sItem();
        if ($req->file()) {
            $fileName = time() . '_' . $req->file('file')->getClientOriginalName();
            $req->file->move(public_path('file'), $fileName);

            $fileModel->picture = $fileName;
            $fileModel->brand_id = $req->brand;
            $fileModel->code = $req->code;
            $fileModel->product = $req->product;
            $fileModel->price = $req->price;
            $fileModel->english = $req->product;
            $fileModel->category = $req->category;
            $fileModel->save();
            return back()
                ->with('success', 'File has been uploaded.')
                ->with('file', $fileName);
        }
    }


    public function saveImports(Request $req)
    {
        $req->validate([
            'date' => 'required',
            'code' => 'required',
            'qty' => 'required',
            'price' => 'required',
            'brand' => 'required',
            'invoice' => 'required'

        ]);
        $fileModel = new sImport();

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
    public function sImports(Request $request)
    {

        $sitem = new sItem();
        $sitem = $sitem->sItem_index();

        $sbrand = new sBrand();
        $sbrand = $sbrand->SBrand_index();

        $simports = new sImport();
        $simports = $simports->sImport_index();
        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.sImport')->with(['name' => $userData[0]['name'], 'user_id' => $userData[0]['id'], 'profile_picture' => $userData[0]['profile_picture'], 'sbrand' => $sbrand, 'sImport' => $simports, 'products' => $sitem]);
    }

    public function sBrokens(Request $request)
    {

        $sbroken = new sBroken();
        $sbroken = $sbroken->sBroken_index();
        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.sBroken')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'sBroken' => $sbroken]);
    }
    public function sBillimport(Request $request)
    {
        $simports = new sImport();
        $simports = $simports->sBillImport();

        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.sbillimport')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'sBillimport' => $simports]);
    }
    public function sSales(Request $request)
    {

        $sale = new sSales();
        $sale = $sale->sSales_index();
        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.sSale')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'sSale' => $sale]);
    }
    public function sRefunds(Request $request)
    {

        $srefund = new sRefund();
        $srefund = $srefund->sRefund_index();
        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.sRefund')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'sRefund' => $srefund]);
    }
    public function sApproves(Request $request)
    {


        $simports = new sImport();
        $simports = $simports->sBillImport();
        $sapprove = new sApprove();
        $sapprove = $sapprove->sApprove_index();
        //dd($presentForm);
        $userData = new User();
        $userData = $userData->index();
        return view('ApproveForm.sApprove')->with(['name' => $userData[0]['name'], 'profile_picture' => $userData[0]['profile_picture'], 'sApprove' => $simports]);
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
