<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Newsletter;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Newsletters extends Component
{
    use LivewireAlert;
    public $address;


    public function sabonner(){

        $this->validate([
            'address' => 'required|email|unique:newsletters,address'
        ],[
            'address.required' => 'Veuillez renseigner votre adresse E-mail !',
            'address.email' => 'Veuillez vérifier votre adresse mail',
            'address.unique' => 'Vous êtes déja abonnée à notre Newsletter ',
        ]);


        $newsletter = new Newsletter;
        $newsletter->address = $this->address;
        $newsletter->save();
        $this->address = '';
        session()->flash('success', 'Merci de vous abonné à notre Newsletter !');
    }

    public function render()
    {
        return view('livewire.newsletters');
    }
}
