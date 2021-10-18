<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages;
use App\Http\Controllers\Evaluate;
use App\Http\Controllers\Submitreports;
use App\Http\Controllers\ChartsController;
use App\Http\Controllers\Requestresources;
use App\Http\Controllers\Loginusers;
use App\Http\Controllers\Logoutusers;
use App\Http\Controllers\Registerusers;


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
// Main Pages
Route::get('/',function(){
    // return dd(app());
    return view('login');
});
Route::get('/logout', [Logoutusers::class,'logout']);
Route::post('/user_login',[Loginusers::class,'logins'])->name('user_login.logins');

Route::get('/register_user', function(){
    return view('register');
});
Route::post('/user_register',[Registerusers::class,'validator']);

// Route::get('/dashboard', function(){
//     return view('pages.dashboard');
// });

// subpages
Route::get('/startupevaluate',[Pages::class,'subpages'])->name('startupevaluate');
Route::get('/startupadvice', function(){
    return view('pages.subpages.startupadvice');
});
// request being handled by the controller
Route::post('/startupevaluate_record', [Evaluate::class,'startupeval_record']);


// spinoff
Route::get('/spinoffevaluate', function(){
    return view('pages.subpages.spinoffevaluate');
});
Route::get('/spinoffadvice', function(){
    return view('pages.subpages.spinoffadvice');
});
Route::post('spinoffevaluate_record',[Evaluate::class,'spinoff_evaluation']);

// Section Routes
Route::get('/sectionevaluate', function(){
    return view('pages.subpages.sectionevaluate');
});

Route::post('/section_evaluate_record',[Evaluate::class,'Director_evaluates_section_leader']);

Route::get('/sectionadvice', function(){
    return view('pages.subpages.sectionadvice');
});
Route::get('/sectioncomment',function(){
    return view('pages.subpages.sectioncomment');
});


// project routes
Route::get('/projectevaluate',function(){
    return view('pages.subpages.projectevaluate');
});
Route::get('/projectadvice',function(){
    return view('pages.subpages.projectadvice');
});
Route::get('/projectcomment',function(){
    return view('pages.subpages.projectcomment');
});

// employee routes
Route::get('/employe_evaluation',function(){
    return view('pages.subpages.employe_evaluation');
});
Route::post('employee_record',[Evaluate::class,'Director_evaluates_employee']);
Route::get('/employee_advice',function(){
    return view('pages.subpages.employee_advice');
});
Route::get('/employeecomment',function(){
    return view('pages.subpages.employeecomment');
});

// Individual Accounts

// Route::get('/startup', function(){
//     return view('startups.dashboard');
// });
Route::get('startup',[ChartsController::class, 'chart'])->name('startup.chart');
Route::get('/sales_revenue_report', function(){
    return view('startups.startup_pages.salesrevenue');
});
Route::post('/revenuesubmit',[Submitreports::class, 'sales_revenue']);
Route::get('/marketing_report',function(){
    return view('startups.startup_pages.marketing');
});
Route::post('/marketsubmit', [Submitreports::class,'marketing']);

Route::get('/annual_report', function(){
    return view('startups.startup_pages.annual');
});
Route::post('/annual_report',[Submitreports::class,'annual']);

Route::get('/workshop', function (){
    return view('startups.startup_pages.workshop');
});
Route::post('/workshop_resources',[Requestresources::class,'compusworkshop']);

Route::get('interns', function(){
    return view('startups.startup_pages.interns');
});


// spinoffs
Route::get('/spinoff', [ChartsController::class,'spinoffchart'])->name('spinoffs.spinoffchart');
Route::get('/spinoffs_sales_revenue_report', function (){
    return view('spinoffs.spinoff_page.spinoff_salesrevenue');
});
Route::get('/spinoff_marketing_report', function(){
    return view('spinoffs.spinoff_page.spinoff_marketing');
});
Route::get('/spinoffs_annual', function(){
    return view('spinoffs.spinoff_page.spinoff_annual');
});

// sections
Route::get('/section_leaders', [ChartsController::class,'section_chart'])->name('section.section_chart');



// projects
Route::get('/project_leaders', function(){
    return view('projects.dashboard');
});


// employees
Route::get('/employees', function (){
    return view('employees.dashboard');
});



// charts JS
// Route::get('/charts', [])
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
