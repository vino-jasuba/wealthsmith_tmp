<?php

namespace App\Http\Controllers;

use App\WealthSmithProperty;
use Illuminate\Http\Request;
Use App\Post;
use App\User;
use App\Http\Requests;
use App\Http\Requests\ContactFormRequest;
use Mail;
use Session;
use Redirect;
use App\Comment;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class PageController extends Controller
{
    public function index() {
    	return view('pages.home');
    }

    public function about() {
    	return view('pages.about');
    }

    public function services() {
    	return view('pages.services');
    }

    public function testimonials() {
    	return view('pages.testimonials');
    }

    public function publications() {
        return view('pages.publications');
    }

    public function blog() {
        return view('pages.blog');
    }

    // public function tenders() {
    //     return view('pages.tenders');
    // }

    public function grants() {
        return view('pages.grants');
    }

    public function contacts() {
        return view('pages.contact');
    }

    public function submitContact(ContactFormRequest $request) {
        // $this->validate($request, [
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        //     'subject' => 'required',
        //     'message' => 'required'
        // ]);

        // $data = array(
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'subject' => $request->subject,
        //     'bodyMessage' => $request->message,

        // );

        // Mail::send('pages.mail', $data, function($message) use ($data){
        //     $message->from($data['email']);
        //     $message->to('michaelmagero2@gmail.com', 'LSF');
        //     $message->subject($data['subject']);
        // });

        \Mail::send('pages.mail',
                array(
                    'name' => $request->get('name'),
                    'email' => $request->get('email'),
                    'phone' => $request->get('phone'),
                    'subject' => $request->get('subject'),
                    'bodyMessage' => $request->get('message')
                ), function($message)
            {
                $message->from('info@lsftz.org');
                $message->to('info@lsftz.org', 'Admin')->subject('LSFContact Form Feedback');
        });


        \Session::flash('flash_message','Message sent successfully, We will get back to you'); 

            return redirect('/contact');
     }

}
