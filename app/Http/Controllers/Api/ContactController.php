<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendNewMail;


class ContactController extends Controller
{
    public function store(Request $request){
      /* Inviare l'email */
      $data = $request -> all();
      Mail::to(env("MAIL_CONTACT_DESTINATION"))->send(new SendNewMail($data));
    }
}
