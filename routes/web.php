<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UnitController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ApproveFormController;
use App\Http\Controllers\StationaryFormController;
use App\Http\Controllers\ProductsFormController;
use App\Http\Controllers\EmpolyeeFromController;
use App\Http\Controllers\HomeFormController;
use App\Http\Controllers\SettingFormController;
use App\Http\Controllers\AcademicFormController;
use App\Http\Controllers\WebFormController;
use App\Http\Controllers\StudentFormController;
use App\Http\Controllers\MyWebFormController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CurlController;                    
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Auth routes
Route::get('/login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->middleware('checkUser')->name('custom-login');
// Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout');
Route:: get('/checkCustomUser',[ProfileController::class,'checkCustomUser' ])
->middleware('checkUser')->name('checkCustomUser');

//Approve wating Form Maldus
Route::get('present_form', [ApproveFormController::class, 'presentForm'])->name('present_form');
Route::get('leave_form', [ApproveFormController::class, 'LeaveForm'])->name('leave_form');
Route::get('request_form', [ApproveFormController::class, 'requestForm'])->name('request_form');
Route::get('stationary_form', [ApproveFormController::class, 'stationaryForm'])->name('stationary_form');
Route::get('purchase_form', [ApproveFormController::class, 'purchaseForm'])->name('purchase_form');
Route::get('booking_form', [ApproveFormController::class, 'bookingForm'])->name('booking_form');
Route::get('cctv_form', [ApproveFormController::class, 'cctvForm'])->name('cctv_form');

//Rejectedforms
Route::get('rej_present_form', [ApproveFormController::class, 'rejPresentForm'])->name('rej_present_form');
Route::get('rej_leave_form', [ApproveFormController::class, 'rejLeaveForm'])->name('rej_leave_form');
Route::get('rej_request_form', [ApproveFormController::class, 'rejrequestForm'])->name('rej_request_form');
Route::get('rej_stationary_form', [ApproveFormController::class, 'rejstationaryForm'])->name('rej_stationary_form');
Route::get('rej_purchase_form', [ApproveFormController::class, 'rejpurchaseForm'])->name('rej_purchase_form');
Route::get('rej_booking_form', [ApproveFormController::class, 'rejbookingForm'])->name('rej_booking_form');
Route::get('rej_cctv_form', [ApproveFormController::class, 'rejcctvForm'])->name('rej_cctv_form');

//Aproved devel 

Route::get('approve_present_form', [ApproveFormController::class, 'approvePresentForm'])->name('approve_present_form');

Route::get('approve_leave_form', [ApproveFormController::class, 'approveLeaveForm'])->name('approve_leave_form');

Route::get('approve_request_form', [ApproveFormController::class, 'approveRequestForm'])->name('approve_request_form');

Route::get('approve_stationary_form', [ApproveFormController::class, 'approveStationaryForm'])->name('approve_stationary_form');

Route::get('approve_purchase_form', [ApproveFormController::class, 'ApprovePurchaseForm'])->name('approve_purchase_form');

Route::get('approve_booking_form', [ApproveFormController::class, 'ApprovebookingForm'])->name('approve_booking_form');

Route::get('approve_cctv_form', [ApproveFormController::class, 'ApprovecctvForm'])->name('approve_cctv_form');

//Stationary Forms

Route::get('ssalereport' ,[StationaryFormController::class, 'ssaleReport'])->name('ssalereport');

Route::get('sbrokenreport' ,[StationaryFormController::class, 'sBrokenReport'])->name('sbrokenreport');
Route::get('srefoundreport' ,[StationaryFormController::class, 'sRefundReport'])->name('srefoundeport');

Route::get('simportreport' ,[StationaryFormController::class, 'sImportReport'])->name('simportreport');


Route::get('summaryreport' ,[StationaryFormController::class, 'SummaryReport'])->name('summaryreport');

//Setting

Route::get('sbrand' ,[StationaryFormController::class, 'SBrand'])->name('sbrand');

Route::get('editbrand/{id}' ,[StationaryFormController::class, 'editBrand'])->name('editbrand');

Route::get('delete_brand_row/{id}'  ,[StationaryFormController::class, 'delete_brand_row'])->name('delete_brand_row');

Route::post('savebrand' ,[StationaryFormController::class, 'saveBrand'])->name('savebrand');


Route::get('scategory' ,[StationaryFormController::class, 'SCategory'])->name('scategory');

Route::post('savecategory' ,[StationaryFormController::class, 'saveCategory'])->name('savecategory');

Route::get('editcategory/{id}' ,[StationaryFormController::class, 'editCategory'])->name('editcategory');

Route::get('deletecategory/{id}' ,[StationaryFormController::class, 'deleteCategory'])->name('deletecategory');//saad


Route::get('sunit' ,[StationaryFormController::class, 'SUnit'])->name('sunit');
Route::post('saveunit' ,[StationaryFormController::class, 'saveUnit'])->name('saveunit');
//information

Route::get('sitem' ,[StationaryFormController::class, 'sItems'])->name('sitem');

Route::post('saveitem' ,[StationaryFormController::class, 'saveItems'])->name('saveitem');

Route::get('simport' ,[StationaryFormController::class, 'sImports'])->name('simport');

Route::post('saveimport' ,[StationaryFormController::class, 'saveImports'])->name('saveimport');

Route::get('ssale' ,[StationaryFormController::class, 'sSales'])->name('ssale');
Route::get('srefund' ,[StationaryFormController::class, 'sRefunds'])->name('srefund');
Route::get('sapprove' ,[StationaryFormController::class, 'sApproves'])->name('sapprove');
Route::get('sbroken' ,[StationaryFormController::class, 'sBrokens'])->name('sbroken');
Route::get('sbillimport' ,[StationaryFormController::class, 'sBillimport'])->name('sbillimport');


// Product maduls
Route::get('prounit' ,[ProductsFormController::class, 'ProUnit'])->name('prounit');
Route::post('saveprounit' ,[ProductsFormController::class, 'saveProUnit'])->name('saveprounit');


Route::get('probrand' ,[ProductsFormController::class, 'proBrand'])->name('probrand');

Route::post('saveprobrand' ,[ProductsFormController::class, 'saveProBrand'])->name('saveprobrand');

Route::get('procategory' ,[ProductsFormController::class, 'ProCategory'])->name('procategory');

Route::post('saveprocategory' ,[ProductsFormController::class, 'saveProCategory'])->name('saveprocategory');

Route::get('proitem' ,[ProductsFormController::class, 'ProItems'])->name('proitem');

Route::post('saveproitem' ,[ProductsFormController::class, 'saveProItems'])->name('saveproitem');

Route::get('proimport' ,[ProductsFormController::class, 'ProImports'])->name('proimport');

Route::post('saveproimport' ,[ProductsFormController::class, 'saveProImports'])->name('saveproimport');

Route::get('probillimport' ,[ProductsFormController::class, 'ProBillimport'])->name('probillimport');

Route::get('prosale' ,[ProductsFormController::class, 'ProSales'])->name('prosale');
Route::get('prorefund' ,[ProductsFormController::class, 'ProRefunds'])->name('prorefund');
Route::get('proapprove' ,[ProductsFormController::class, 'proApproves'])->name('proapprove');
Route::get('probroken' ,[ProductsFormController::class, 'proBrokens'])->name('probroken');
Route::get('proecommerce' ,[ProductsFormController::class, 'proEcommerce'])->name('proecommerce');

//Reports Maduls
Route::get('prosalereport' ,[ProductsFormController::class, 'proSaleReport'])->name('prosalereport');
Route::get('probrokenreport' ,[ProductsFormController::class, 'proBrokenReport'])->name('probrokenreport');
Route::get('proimportreport' ,[ProductsFormController::class, 'ProImportsReport'])->name('proimportreport');
Route::get('proecommercereport' ,[ProductsFormController::class, 'proEcommerceReport'])->name('proecommercereport');
Route::get('prorefundreport' ,[ProductsFormController::class, 'proRefundReport'])->name('proRefundreport');


//Employee Madul
Route::get('schoollater' ,[EmpolyeeFromController::class, 'SchoolLater'])->name('schoollater');
Route::post('saveschoollater' ,[EmpolyeeFromController::class, 'saveSchoolLater'])->name('saveschoollater');

Route::get('schoolinfo' ,[EmpolyeeFromController::class, 'SchoolInfo'])->name('schoolinfo');

Route::post('saveschoolinfo' ,[EmpolyeeFromController::class, 'saveSchoolInfo'])->name('saveschoolinfo');

Route::get('group' ,[EmpolyeeFromController::class, 'Group'])->name('group');

Route::post('savegroup' ,[EmpolyeeFromController::class, 'saveGroup'])->name('savegroup');

Route::get('payroll' ,[EmpolyeeFromController::class, 'Payroll'])->name('payroll');

Route::post('saveparroll' ,[EmpolyeeFromController::class, 'savePayroll'])->name('savepayroll');
Route::get('leavetype' ,[EmpolyeeFromController::class, 'LeaveType'])->name('leavetype');

Route::get('editLeavetype/{id}' ,[EmpolyeeFromController::class, 'editLeaveType'])->name('editLeavetype');

Route::get('delete_row/{id}'  ,[EmpolyeeFromController::class, 'delete_row'])->name('delete_row');


Route::post('saveleavetype' ,[EmpolyeeFromController::class, 'saveLeaveType'])->name('saveLeaveType');

Route::get('notification' ,[EmpolyeeFromController::class, 'Notification'])->name('notification');

Route::post('savenotification' ,[EmpolyeeFromController::class, 'saveNotification'])->name('savenotification');
Route::get('workingTime' ,[EmpolyeeFromController::class, 'WorkingTime'])->name('workingTime');
Route::get('editworkingtime/{id}' ,[EmpolyeeFromController::class, 'editWorkingTime'])->name('editworkingtime');
Route::post('saveworkingtime' ,[EmpolyeeFromController::class, 'saveWorkingTime'])->name('saveworkingtime');

Route::get('employeeList' ,[EmpolyeeFromController::class, 'EmployeeList'])->name('employeeList');
Route::post('saveemployeeList' ,[EmpolyeeFromController::class, 'saveEmployeeList'])->name('saveemployeeList');

Route::get('nationality' ,[EmpolyeeFromController::class, 'Nationality'])->name('nationality');
Route::get('homeroom' ,[EmpolyeeFromController::class, 'Homeroom'])->name('homeroom');
Route::get('education' ,[EmpolyeeFromController::class, 'Education'])->name('education');
Route::get('attendance' ,[EmpolyeeFromController::class, 'Attendance'])->name('attendance');
Route::get('document' ,[EmpolyeeFromController::class, 'Document'])->name('document');
Route::get('contract' ,[EmpolyeeFromController::class, 'Contract'])->name('contract');

Route::get('visadocument' ,[EmpolyeeFromController::class, 'VisaDocument'])->name('visadocument');
Route::get('workdocument' ,[EmpolyeeFromController::class, 'WorkDocument'])->name('workdocument');
Route::get('teachingdocument' ,[EmpolyeeFromController::class, 'TeachingDocument'])->name('teachingdocument');
Route::get('schooldocument' ,[EmpolyeeFromController::class, 'SchoolDocument'])->name('schooldocument');


//Home Maduls
Route::get('home_request_form',[HomeFormController::class, 'HomeRequestForm'])->name('home_request_form');

Route::post('saverequest_form',[HomeFormController::class, 'saveRequestForm'])->name('saverequest_form');


Route::get('home_Stationary' ,[HomeFormController::class, 'homeStationary'])->name('home_Stationary');
Route::post('savehome_Stationary' ,[HomeFormController::class, 'saveHomeStationary'])->name('savehome_Stationary');
Route::get('editHomeStationary/{id}' ,[HomeFormController::class, 'editHomeStationary'])->name('editHomeStationary');


Route::get('home_Purchase' ,[HomeFormController::class, 'homePurchase'])->name('home_Purchase');
Route::post('savehome_Purchase' ,[HomeFormController::class, 'saveHomePurchase'])->name('savehome_Purchase');
Route::get('home_present' ,[HomeFormController::class, 'homePresent'])->name('home_present');
Route::post('savehome_present' ,[HomeFormController::class, 'saveHome_Present'])->name('savehome_present');

Route::get('home_leave' ,[HomeFormController::class, 'homeLeave'])->name('home_leave');
Route::post('savehome_leave' ,[HomeFormController::class, 'saveHome_Leave'])->name('savehome_leave');

Route::get('home_booking' ,[HomeFormController::class, 'homeBooking'])->name('home_booking');
Route::post('savehome_booking' ,[HomeFormController::class, 'saveHome_Booking'])->name('savehome_booking');

Route::get('home_cctv' ,[HomeFormController::class, 'homeCctv'])->name('home_cctv');
Route::post('savehome_cctv' ,[HomeFormController::class, 'saveHome_Cctv'])->name('savehome_cctv');



//Setting Maduls
Route::get('setting_Language' ,[SettingFormController::class, 'settingLanguage'])->name('setting_Language');
Route::post('saveSetting_Language' ,[SettingFormController::class, 'saveSettingLanguage'])->name('saveSetting_Language');
Route::get('setting_book' ,[SettingFormController::class, 'settingBook'])->name('setting_book');
Route::post('saveSetting_Book' ,[SettingFormController::class, 'saveSettingBook'])->name('saveSetting_Book');
Route::get('setting_stationary' ,[SettingFormController::class, 'settingStationary'])->name('setting_stationary');
Route::post('save_Setting_Stationary' ,[SettingFormController::class, 'saveSettingStationary'])->name('save_Setting_Stationary');

Route::get('setting_cctv' ,[SettingFormController::class, 'settingCctv'])->name('setting_cctv');

Route::post('save_Setting_Cctv' ,[SettingFormController::class, 'saveSettingCctv'])->name('save_Setting_Cctv');

//Academic Setting Maduls
Route::get('ac_Subject' ,[AcademicFormController::class, 'AcSubject'])->name('ac_Subject');

Route::post('save_Ac_Subject' ,[AcademicFormController::class, 'saveAcSubject'])->name('save_Ac_Subject');
Route::get('ac_Level' ,[AcademicFormController::class, 'AcLevel'])->name('ac_Level');

Route::post('save_Ac_Level' ,[AcademicFormController::class, 'saveAcLevel'])->name('save_Ac_Level');

Route::get('ac_ClassRoom' ,[AcademicFormController::class, 'AcClassRoom'])->name('ac_ClassRoom');

Route::post('save_Ac_ClassRoom' ,[AcademicFormController::class, 'saveAcClassRoom'])->name('save_Ac_ClassRoom');

//Academic Information Maduls
Route::get('ac_InfoAfter' ,[AcademicFormController::class, 'AcInfoAfter'])->name('ac_InfoAfter');

Route::post('save_Ac_InfoAfter' ,[AcademicFormController::class, 'saveAcInfoAfter'])->name('save_Ac_InfoAfter');

Route::get('ac_InfoIntrov' ,[AcademicFormController::class, 'AcInfoIntrov'])->name('ac_InfoIntrov');

Route::post('save_Ac_InfoIntrov' ,[AcademicFormController::class, 'saveAcInfoIntrov'])->name('save_Ac_InfoIntrov');
Route::get('homeclassroom' ,[AcademicFormController::class, 'HomeClassRoom'])->name('homeclassroom');
//Academic Reports Maduls

Route::get('ac_Rep_After' ,[AcademicFormController::class, 'AcRepInfoAfter'])->name('ac_Rep_After');
Route::get('ac_Rep_Introv' ,[AcademicFormController::class, 'AcRepInfoIntrov'])->name('ac_Rep_Introv');


 // Web maduls 
 Route::get('web_menu' ,[WebFormController::class, 'webMenu'])->name('web_menu');

Route::post('save_web_menu' ,[WebFormController::class, 'saveWebMenu'])->name('save_web_menu');
Route::get('extra_Link' ,[WebFormController::class, 'extraLink'])->name('extra_Link');

Route::post('save_extraLink' ,[WebFormController::class, 'saveextraLink'])->name('save_extraLink');


// Student Maduls 
Route::get('studentLevel' ,[StudentFormController::class, 'StudentLevel'])->name('studentLevel');

Route::post('save_studentLevel' ,[StudentFormController::class, 'saveStudentLevel'])->name('save_studentLevel');

Route::get('studentclassroom' ,[StudentFormController::class, 'StudentCassRoom'])->name('studentclassroom');

Route::post('save_stuclassroom' ,[StudentFormController::class, 'savestuClassRoom'])->name('save_stuclassroom');

Route::get('stuinfocurrent' ,[StudentFormController::class, 'StuInfoCurrent'])->name('stuinfocurrent');
Route::get('editstuinfocurrent/{id}' ,[StudentFormController::class, 'editStuInfoCurrent'])->name('editstuinfocurrent');
Route::post('save_stuinfocurrent' ,[StudentFormController::class, 'saveStuInfoCurrent'])->name('save_stuinfocurrent');

Route::get('stuinfoalumni' ,[StudentFormController::class, 'StuInfoAlumni'])->name('stuinfoalumni');

// My Website Maduls
Route::post('savemyWeb_menu' ,[MyWebFormController::class, 'savemyWeb_menu'])->name('savemyWeb_menu');

Route::get('myWeb_menu' ,[MyWebFormController::class, 'myWebmenu'])->name('myWeb_menu');

Route::post('savemyWeb_info' ,[MyWebFormController::class, 'savemyWebInfo'])->name('savemyWeb_info');

Route::get('myWeb_info' ,[MyWebFormController::class, 'myWebInfo'])->name('myWeb_info');

Route::post('savemyWeb_contect' ,[MyWebFormController::class, 'savemyWeb_contect'])->name('savemyWeb_contect');

Route::get('myWeb_contect' ,[MyWebFormController::class, 'myWebContect'])->name('myWeb_contect');

Route::get('/', function () {
    return view('welcome');
});


Route::get('post',[CurlController::class,'index']);
Route::post('getCurlData',[CurlController::class,'getCurlData'])->name('');
Route::get('post/store',[CurlController::class,'store']);
Route::get('post/update',[CurlController::class,'update']);
Route::get('post/delete',[CurlController::class,'delete']);


/***
*Admin routes
*
*/
// Route::middleware(['auth'])->group(function () {
//     //Admin Routes
//     Route::prefix('admin')->group(function () {
//         Route::get('/', function () {
//             return view('dashboard');
//         });

//     });
// });


