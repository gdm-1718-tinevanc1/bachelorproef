<?php

namespace EDS_site\Http\Controllers;

use EDS_site\Models\Contact;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use EDS_site\Mail\AnswerContact;

class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware(['admin', 'auth']);
    }

    public function index(){
        $contact = Contact::orderBy('created_at','desc')->paginate(10);

        return view('contact.index', compact('contact'));

    }

    public function show(Contact $contact, Request $request){

        return view('contact.show', compact('contact'));

    }

    public function store(Request $request){
        $id = request('id');
        $contact = Contact::find($id);
        $oldMessage = $contact->message;
        $answerMessage = request('message');
        $email = $contact->email;

        Mail::to($email)->send(new AnswerContact($oldMessage, $answerMessage));

        $contact->answered = true; 
        $contact->save();

        session()->flash('message', 'De mail is verstuurd.');

        return redirect('/contact');

        //die('test');
    }
}
