<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
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
         Mail::to('admin@laracarte.com')->send($mailable);

         return 'Done!';

   }
}
