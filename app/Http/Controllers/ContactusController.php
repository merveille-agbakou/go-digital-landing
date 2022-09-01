<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Mail;

class ContactUsController extends Controller
{

    public function handle_contact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'msg_subject' => 'required',
            'message' => 'required'
        ]);
        Mail::send(
            'email',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message')
            ),
            function ($message) {
                $message->from('yann.kotto@godigital.technology'); // get from address
                $message->to('gekokoya@gmail.com', 'Admin')->subject('Contact mail'); // get to address
            }
        );

        return back()->with('success', 'Merci de nous avoir contacté!');
    }


    public function handle_contact_carriere(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'msg_subject' => 'required',
            'message' => 'required'
        ]);
        Mail::send(
            'email',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message')
            ),
            function ($message) {
                $message->from('yann.kotto@godigital.technology');
                $message->to('gekokoya@gmail.com', 'Admin')->subject('Contact mail');
            }
        );

        return back()->with('success', 'Merci de nous avoir contacté!');
    }


    public function handle_contact_projet(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'msg_subject' => 'required',
            'message' => 'required'
        ]);
        Mail::send(
            'email',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message')
            ),
            function ($message) {
                $message->from('yann.kotto@godigital.technology');
                $message->to('gekokoya@gmail.com', 'Admin')->subject('Contact mail');
            }
        );

        return back()->with('success', 'Merci de nous avoir contacté!');
    }
}
