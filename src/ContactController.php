<?php
namespace Kalam\Contact;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Kalam\Contact\Mail\ContactMailable;
use Kalam\Contact\Models\Contact;

class ContactController extends Controller
{
   public function index(){
       return view('contact::contact');
   }
   public function send(Request $request){
       Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->msg,$request->name));
       Contact::create($request->all());
       return redirect(route('contact'));
   }
}
