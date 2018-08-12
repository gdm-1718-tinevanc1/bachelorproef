<?php

namespace EDS_site\Http\Controllers\Api;

use EDS_site\Models\Contact;
use Illuminate\Http\Request;
use EDS_site\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function store( Request $request){
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);


        $contact = new Contact([
            'name' => request('name'),
            'email' => request('email'),
            'message' => request('message'),
            'answered' => false,
        ]);

        if ($contact->save()) {
            return response()
                ->json($contact);
            //     // ->setStatusCode(Response::HTTP_CREATED);
        }
    }
}
