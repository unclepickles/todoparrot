<?php

namespace todoparrot\Http\Controllers;

use Illuminate\Http\Request;
use todoparrot\Http\Requests;
use todoparrot\Http\Controllers\Controller;
use todoparrot\Http\Requests\ContactFormRequest;

class AboutController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('about.contact');
    }

    /**
     * @param ContactFormRequest $request
     * @return mixed
     */
    public function store(ContactFormRequest $request)
    {
        \Mail::send('emails.contact',
            [
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message')
            ], function($message)
            {
                $message->from('walid@sky.com');
                $message->to('unclepickles@hotmail.co.uk')->subject('TodoParrot Feedback');
            }
            );
        return \Redirect::route('contact')->with('message', 'Thanks for contacting us!');
    }
}
