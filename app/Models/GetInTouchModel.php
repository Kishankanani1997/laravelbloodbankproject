<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class GetInTouchModel extends Model
{
    use HasFactory,Notifiable;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'subject',
        'message'
    ];

    protected $table = "getintouch_tbl";
}
