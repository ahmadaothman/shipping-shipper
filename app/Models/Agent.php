<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;
use PragmaRX\Countries\Package\Countries;

class Agent extends Authenticatable
{
    use Notifiable;
    protected $table = 'agent';

     
    protected $fillable = [
        'name',
        'email',
        'password',
        'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function getcountryNameAttribute()
    {

        return Countries::where('cca2', $this->country)->first()->name_en;
    }

    public function getcountryFlagImojiAttribute()
    {

 
         return Countries::where('cca2', $this->country)->first()->flag->emoji;
    }
}
