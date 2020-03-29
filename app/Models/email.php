<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Email extends Model{
    protected $table = 'emails';

    protected $fillable = [
        'email',
    ];
}
