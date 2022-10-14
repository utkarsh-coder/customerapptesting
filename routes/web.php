<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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

Route::get('/', function () {
    $redis = Redis::connection();
    $name = $redis->get('name');
    if ($name == NULL) {
        echo $name . 'initial';
    }
    return view('welcome');
});

Route::get('/login', function () {

    // $redis = Redis::connection();
    // $redis->set('name', 'Taylor');
    // $redis->expire('name',20); 
    // $name = $redis->get('name');
    // echo $name.'initial';

    // $customers = customers::all();
    // echo "<pre>";
    // print_r($customers->toArray());

    // $customers = customers::where('email','rahul@gmail.com')->first();
    // $customers->email = 'rahul@gmail.com';
    // $customers->password = 'checking123';
    // $customers->save();

    // $customers = customers::where('email','rahul@gmail.com')->first();
    // echo "<pre>";
    // print_r($customers->toArray());

    // $customers = new customers();
    // // $customers->id = 3;
    // $customers->email = 'utkarshblp2k@gmail.com';
    // $customers->password = 'check';
    // // // return $customers->all();
    // $customers->save();

    return view('login');

    // $basic  = new \Vonage\Client\Credentials\Basic("6f8f57ea", "3wQy2vgenxaoKB4R");
    // $client = new \Vonage\Client($basic);
    
    // $response = $client->sms()->send(
    //     new \Vonage\SMS\Message\SMS("918787212247", "BRAND_NAME", 'A text message sent using the Nexmo SMS API')
    // );

    // $message = $response->current();

    // if ($message->getStatus() == 0) {
    //     echo "The message was sent successfully\n";
    // } else {
    //     echo "The message failed with status: " . $message->getStatus() . "\n";
    // }
    // return view('new_password_reset',['email'=>'utkarshblp2k@gmail.com']);
});

// Route::get("/customer", function(){
//     $customers = customers::all();

//     echo "<pre>";
//     print_r($customers->toArray());
// });

//middleware protected
Route::get("/home", [CustomerController::class, "home"])->middleware('guard');
Route::get("/healthchart", [CustomerController::class, "healthChart"]);
Route::get("/sitelocation", [CustomerController::class, "sitelocation"])->middleware('guard');

Route::get("/customer", [CustomerController::class, 'index']);
Route::post("/customer", [CustomerController::class, 'store']);
Route::post("/update", [CustomerController::class, 'update']);
Route::post("/getResult", [CustomerController::class, 'view']);
Route::get("/register", [CustomerController::class, "register"]);
Route::post("/verify", [CustomerController::class, "verify"]);
Route::get("/forgotmail", [CustomerController::class, "forgotmail"]);
Route::post("/drilldown", [CustomerController::class, 'drilldown']);
Route::post("/sitelist", [CustomerController::class, 'sitelist']);
Route::get("/mapuser", [CustomerController::class, 'mapuser']);

Route::post('/send-mail', [MailController::class, 'sendOTPMail']);
Route::post("/verifyotp", [MailController::class, "verifyOTP"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
