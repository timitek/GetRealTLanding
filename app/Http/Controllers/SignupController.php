<?php

namespace App\Http\Controllers;

use Validator;
use Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\SignupSubmitted;
use Illuminate\Support\Facades\Mail;
use App\Signup;

class SignupController extends Controller
{
    public function submit (Request $request) {
        $validatedData = $request->validate([
            'firstName' => 'required|max:50',
            'lastName' => 'required|max:50',
            'email' => 'required|max:100',
            'phone' => 'required|max:12',
            'address' => 'required|max:100',
            'city' => 'required|max:50',
            'state' => 'required|max:50',
            'zip' => 'required|max:50',
            'theme' => 'required|max:20'
        ]);

        //Store it in the databaswe
        signup::create($validatedData);

        /**
         * Mailable generated with
         * php artisan make:mail SignupSubmitted --markdown=emails.signup.submitted
         */
         Mail::to("me@earth.com")->send(new SignupSubmitted($validatedData));
    }

    /**
     * Test the e-mail with
     * http://localhost:8000/api/signup/testEmail
     *
     * @return void
     */
     public function testEmail() {
        return new SignupSubmitted([
            'firstName' => '',
            'lastName' => '',
            'email' => '',
            'phone' => '',
            'address' => '',
            'city' => '',
            'state' => '',
            'zip' => '',
            'theme' => ''
        ]);
    }
}