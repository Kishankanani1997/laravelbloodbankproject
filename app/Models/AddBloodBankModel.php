<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class AddBloodBankModel extends Model
{
    use HasFactory,Notifiable;

    protected $fillable = [
        'name',
        'address',
        'number',
        'email',
        'bbtype'
    ];

    protected $table = "addbloodbank_tbl";
}
