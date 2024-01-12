<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Setting;

class Parametre extends Component
{
    public  $name, $number1, $number2, $number3, $number_fixe, $logo, $bg, $favicon, 
            $facebook, $instagram, $twitter, $linkedin, $youtube, $email, 
            $adresse, $description, $map, $projet, $clients, $partenaires, 
            $experiences;
    
    public function mount(){
        $setting = Setting::find(1);
        $this->name = $setting->name;
        $this->number1 = $setting->number1;
        $this->number2 = $setting->number2;
        $this->number3 = $setting->number3;
        $this->number_fixe = $setting->number_fixe;
        $this->logo = $setting->logo;
        $this->bg = $setting->bg;
        $this->favicon = $setting->favicon;
        $this->facebook = $setting->facebook;
        $this->instagram = $setting->instagram;
        $this->twitter = $setting->twitter;
        $this->linkedin = $setting->linkedin;
        $this->youtube = $setting->youtube;
        $this->email = $setting->email;
        $this->adresse = $setting->adresse;
        $this->description = $setting->description;
        $this->map = $setting->map;
        $this->projet = $setting->projet;
        $this->clients = $setting->clients;
        $this->partenaires = $setting->partenaires;
        $this->experiences = $setting->experiences;
    }
    
    public function update(){
        $setting = Setting::find(1);
        $setting->name = $this->name;
        $setting->number1 = $this->number1 ;
        $setting->number2 = $this->number2 ;
        $setting->number3 = $this->number3;
        $setting->number_fixe = $this->number_fixe;
        $setting->logo = $this->logo;
        $setting->bg = $this->bg;
        $setting->favicon = $this->favicon;
        $setting->facebook = $this->facebook;
        $setting->instagram = $this->instagram;
        $setting->twitter = $this->twitter;
        $setting->linkedin = $this->linkedin;
        $setting->youtube = $this->youtube;
        $setting->email = $this->email;
        $setting->adresse = $this->adresse ;
        $setting->description = $this->description;
        $setting->map = $this->map ;
        $setting->projet = $this->projet;
        $setting->clients = $this->clients;
        $setting->partenaires = $this->partenaires;
        $setting->experiences = $this->experiences;
        $setting->update();
        return redirect()->route('admin.setting');
    }
    
    public function render()
    {
        return view('livewire.parametre');
    }
}
