<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Mail;

class ContactFormController extends Controller
{
    // Create Contact Form

    // Contact Form data
    public function index(Request $request, $contactType = NULL)
    {
        switch ($contactType) {
            case 'projet':

                $this->ContactProjetForm($request);
                break;

            case 'carriere':
                $this->ContactCarriereForm($request);
                break;

            default:
                $this->ContactForm($request);
                break;
        }

        $this->Confirmation($request, $contactType);

        // 
        return back()->with('success', 'Nous avons bien reçu votre message, merci de nous avoir contacté.');
    }

    // Send confirmation mail
    public function Confirmation(Request $request, $type = NULL)
    {
        //  Send mail to user
        Mail::send('emails.confirmation-mail', array(
            'name' => $request->get('name') . (!$request->get('surname') ?: ' ' . $request->get('surname')),
            'email' => $request->get('email'),
            'phone' => $request->get('phone_number'),
            'subject' => $request->get('msg_subject'),
            'user_query' => $request->get('message'),
        ), function ($message) use ($request, $type) {
            // $message->from($request->email);
            $message->to($request->email, $request->get('name'))->subject('Formulaire de contact ' . $type);
        });


        // 
        return back()->with('success', 'Nous avons bien reçu votre message, merci de nous avoir contacté.');
    }

    // Contact Form data
    public function ContactForm(Request $request)
    {
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'msg_subject' => 'required',
            'message' => 'required'
        ]);

        //  Send mail to admin
        Mail::send('emails.contact', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone_number'),
            'subject' => $request->get('msg_subject'),
            'user_query' => $request->get('message'),
        ), function ($message) use ($request) {
            $message->from($request->email);
            $message->to('agence@godigital.technology', 'Admin')->subject('Formulaire de contact - ' . $request->get('msg_subject'));
        });


        // 
        return back()->with('success', 'Nous avons bien reçu votre message, merci de nous avoir contacté.');
    }

    // Contact-carriere Form data
    public function ContactCarriereForm(Request $request)
    {
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'objectif' => 'required',
            'domaine' => 'required'
        ]);

        $domaine = [
            'Ux/Ui design',
            'Marketing et Com Digitale',
            'Design Graphique',
            'SEO',
            'Développement Web et Mobile',
            'Gestion de projet'
        ];

        //  Send mail to admin
        Mail::send('emails.contact-carriere', array(
            'name' => $request->get('name'),
            'surname' => $request->get('surname'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone_number'),
            'objectif' => $request->get('objectif'),
            'domaine' => $domaine[$request->get('domaine') - 1],
        ), function ($message) use ($request) {
            if ($request->file('file-input')) {
                $message->attach(
                    $request->file('file-input')->getRealPath(),
                    array(
                        'as' => $request->file('file-input')->getClientOriginalName(), // If you want you can chnage original name to custom name      
                        'mime' => $request->file('file-input')->getMimeType()
                    )
                );
            }
            $message->from($request->email);
            $message->to('agence@godigital.technology', 'Admin')->subject('Formulaire de contact carrière - ' . $domaine[$request->get('domaine') - 1]);
        });


        // 
        return back()->with('success', 'Nous avons bien reçu votre message, merci de nous avoir contacté.');
    }

    // Contact-projet Form data
    public function ContactProjetForm(Request $request)
    {
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'entreprise' => 'required',
            'category' => 'required',
            'message' => 'required'
        ]);

        $category = [
            'Ux',
            'Ui design',
            'Stratégie Com',
            'Développement',
            'E commerce',
            'SEO / SEA',
            'Application Mobile',
            'Community Management',
            'Autres'
        ];

        //  Send mail to admin
        Mail::send('emails.contact-projet', array(
            'name' => $request->get('name'),
            'surname' => $request->get('surname'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone_number'),
            'entreprise' => $request->get('entreprise'),
            'category' => $category[$request->get('category') - 1],
            'user_query' => $request->get('message'),
        ), function ($message) use ($request) {
            if ($request->file('file-input')) {
                $message->attach(
                    $request->file('file-input')->getRealPath(),
                    array(
                        'as' => $request->file('file-input')->getClientOriginalName(), // If you want you can chnage original name to custom name      
                        'mime' => $request->file('file-input')->getMimeType()
                    )
                );
            }
            $message->from($request->email);
            $message->to('agence@godigital.technology', 'Admin')->subject('Formulaire de contact projet - ' . $category[$request->get('category') - 1]);
        });

        // 
        return back()->with('success', 'Nous avons bien reçu votre message, merci de nous avoir contacté.');
    }
}
