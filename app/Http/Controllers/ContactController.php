<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ContactController extends Controller
{
   public function store(Request $request){
       
        $request->validate([
            'prenom' => 'required',
            'nom' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ],[
            'prenom.required' =>"Veillez remplir ce champ !",
            'nom.required' =>"Veillez remplir ce champ !",
            'email.required' =>"Veillez remplir ce champ !",
            'email.email' =>"Veillez entrez une adresse email valide !",
            'subject.required' =>"Veillez remplir ce champ !",
            'message.required' =>"Veillez remplir ce champ !",
        ]);

        $contact = new Contact;
        $contact->prenom = $request->prenom;
        $contact->nom = $request->nom;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        Contact::create($request->all());
        
        $adminEmail = "contact@iconedev.com";
        Mail::to($adminEmail)->send(new ContactMail($contact));
        
        return redirect()->back()
                         ->with(['success' => 'Merci de nous avoir contacter. Nous vous contacterons sous peu.']);
    }
}
