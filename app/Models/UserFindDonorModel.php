<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class UserFindDonorModel extends Model
{
    use HasFactory,Notifiable;

    protected $fillable = [
        'name',
        'surname',
        'email',
        'verifyemail',
        'number',
        'occupation',
        'address',
        'gender',
        'bloodtype',
        'statelist',
        'donate',
        'disease',
        'allergy',
        'date'
    ];

    protected $table = "find_donor";
}
