<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationEntry extends Model
{
    use HasFactory;
    protected $fillable = [
        'message',
        'is_read',
    ];
}
