<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use App\Models\Mailing;
use Illuminate\Support\Facades\Mail;


class PagesController extends Controller
{
   public function home()
   {
       return view('pages.home');

   }

   public function about()
   {
       return view('pages.about');

   }

   public function contact()
   {
       return view('pages.contact');
   }

   public function  store(ContactRequest $request)
   {

         $mailable = new ContactMessageCreated($request->name , $request->email , $request->message);

         Mailing::create(['name' => $request->name , 'email' => $request->email , 'message' => $request->message]);
         Mail::to(config('laracarte.admin_support_email'))->send($mailable);

         flashy('Nous vous repondrons dans les plus brefs delais');

         return  redirect(route('root_path'));

   }
}
