<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signage extends Model
{
    use HasFactory;
    protected $table = 'signage';
    protected $fillable = [
        'meeting_room',
        'event_name'
    ];
}
