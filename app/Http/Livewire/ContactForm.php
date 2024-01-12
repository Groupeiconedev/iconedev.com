<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $prenom, $nom, $email, $sujet, $message;

    public function saveContact()
    {
        $this->validate([
            'prenom' => 'required',
            'nom' => 'required',
            'email' => 'required|email',
            'sujet' => 'required',
            'message' => 'required',
        ],[
            'prenom.required' =>"Veillez remplir ce champ !",
            'nom.required' =>"Veillez remplir ce champ !",
            'email.required' =>"Veillez remplir ce champ !",
            'email.email' =>"Veillez entrez une adresse email valide !",
            'sujet.required' =>"Veillez remplir ce champ !",
            'message.required' =>"Veillez remplir ce champ !",
        ]);

        $contact = new Contact;
        $contact->prenom = $this->prenom;
        $contact->nom = $this->nom;
        $contact->email = $this->email;
        $contact->sujet = $this->sujet;
        $contact->message = $this->message;

        $adminEmail = "info.iconedev@gmail.com";
        Mail::to($adminEmail)->send(new ContactMail($contact));

        $this->resetInput();
        session()->flash('success','Message bien reçu, nous vous contacterons sous peu !');
    }

    public function resetInput()
    {
        $this->prenom = '';
        $this->nom = '';
        $this->email = '';
        $this->sujet = '';
        $this->message = '';
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
