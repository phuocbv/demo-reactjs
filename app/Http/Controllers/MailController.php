<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function basic_email(){
        Mail::send('mail', ['name' => 'abc'], function($message) {
            $message->to('buivanphuocforyou@gmail.com')->subject('Welcome to the Laravel 4 Auth App!');
        });
    }
}
