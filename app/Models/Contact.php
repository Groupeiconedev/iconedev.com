<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class Contact extends Model
{
    use HasFactory;
    
    public $fillable = ['prenom','nom', 'email', 'phone', 'subject', 'message'];

    /**
     * Write code on Method
     *
     * @return response()
     */
    public static function boot() {

        parent::boot();

        static::created(function ($item) {

            $adminEmail = "contact@iconedev.com";
            Mail::to($adminEmail)->send(new ContactMail($item));
        });
    }
}
