<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $table = 'message';

    protected $primaryKey = 'id_contact';

    public $timestamps = false;

    protected $fillable = [
        'sender_name',
        'sender_email',
        'message',
        'datetime',
    ];
}
