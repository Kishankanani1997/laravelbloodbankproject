<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class AddBloodCampModel extends Model
{
    use HasFactory,Notifiable;

    protected $fillable = [
        'cname',
        'cdate',
        'ctime',
        'address',
        'statelist',
        'city',
        'number',
        'conductedby',
        'organizedby'
    ];

    protected $table = "addbloodcamp_tbl";
}
