<?php

use App\Http\Livewire\ContactForm;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', function () {
    return view('exampels');
});


Route::post('/contact', function (Request $request) {
    $contact = $request()->validate(array(
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'message' => 'required',
    ));

    //Mail::to('creaspo6@gmail.com')->send(new ContactFormMailable($contact));
    return back()->with('success_message', 'we received your message successfuly and will get back to you soon!');
});
