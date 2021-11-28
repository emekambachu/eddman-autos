<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

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
    return view('home');
});

Route::get('about', function () {
    return view('about');
});

Route::get('products', function () {
    return view('products');
});

Route::get('services', function () {
    return view('services');
});

Route::get('contact', function () {
    return view('contact');
});

Route::post('contact/submit', function (Request $request){

    $input = $request->all();

    $rules = array(
        'name' => ['required'],
        'email' => ['required', 'email'],
        'service' => ['required'],
        'mobile' => ['nullable'],
        'description' => ['required'],
    );

    $validator = Validator::make($input, $rules);

    if($validator->fails()){
        return response()->json([
            "errors" => $validator->getMessageBag()->toArray()
        ]);
    }

    $data = [
        'name' => $input['name'],
        'email' => $input['email'],
        'service' => $input['service'],
        'mobile' => $input['mobile'],
        'description' => $input['description'],
    ];

    Mail::send('emails.contact', $data,
        static function ($message) use ($data) {
            $message->from('info@eddmanautos.com', 'Eddman Autos');
            $message->to('services@eddmabautos.com', 'Eddman Autos');
            $message->replyTo('info@eddmanautos.com', 'Eddman Autos');
            $message->subject('Message from '.$data['name']);
        });

    return response()->json([
        'success'=>'Contact message submitted',
    ]);

})->name('contact.submit');

Route::get('appointment', function () {
    return view('appointment');
});

Route::post('appointment/submit', function (Request $request){

    $input = $request->all();

    $rules = array(
        'first_name' => ['required'],
        'last_name' => ['required'],
        'email' => ['required', 'email'],
        'mobile' => ['nullable'],
        'vehicle_manufacturer' => ['required'],
        'vehicle_model' => ['required'],
        'vehicle_year' => ['required'],
        'description' => ['required'],
    );

    $validator = Validator::make($input, $rules);

    if($validator->fails()){
        return response()->json([
            "errors" => $validator->getMessageBag()->toArray()
        ]);
    }

    $data = [
        'name' => $input['first_name'].' '.$input['last_name'],
        'email' => $input['email'],
        'mobile' => $input['mobile'],
        'vehicle_manufacturer' => $input['vehicle_manufacturer'],
        'vehicle_model' => $input['vehicle_model'],
        'vehicle_year' => $input['vehicle_year'],
        'description' => $input['description']
    ];

    Mail::send('emails.contact', $data,
        static function ($message) use ($data) {
            $message->from('info@eddmanautos.com', 'Eddman Autos');
            $message->to('services@eddmabautos.com', 'Eddman Autos');
            $message->replyTo('info@eddmanautos.com', 'Eddman Autos');
            $message->subject('Appointment for '.$data['name']);
        });

    return response()->json([
        'success'=>'Appointment submitted, we will follow up on your request.',
    ]);

})->name('appointment.submit');

Route::get('policies', function () {
    return view('policies');
});

Route::get('terms', function () {
    return view('terms');
});

// Github Deployment
// Must disable csrf in Http/Middleware/VerifyCsrfToken
Route::post('github/deploy', 'GithubDeploymentController@deploy');
