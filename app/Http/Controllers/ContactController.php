<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

    public function index()
    {
        return view('welcome');
    }

    public function save(Request $request)
    {
         
        $validatedData = $request->validate([
            'name'      => 'required',
            'email'     => 'required',
            'subject'   => 'required',
            'message'   => 'required',
            'date'      => 'required|date',
            'hour'      => 'required|integer|min:0|max:12',
            'minute'    => 'required|integer|min:0|max:60',
            'format'    => 'required|in:am,pm',
        ]);
        $date = $request->input('date');
        $hour = $request->input('hour');
        $minute = $request->input('minute');
        $format = $request->input('format');
        
        $datetime = "{$date} {$hour}:{$minute}{$format}";

        $d = new \DateTime($datetime);


        $contact = new Contact;
 
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->datetime = $d;

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $file->move('uploads/images/',$filename);

            $contact->image = $filename;

        }
 
        $contact->save();
 
        return redirect('/')->with('status', 'Contact form  Has been Submitted');
 
    }
}
