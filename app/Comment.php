<?php

namespace App;

use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Comment extends Model
{
    protected $fillable = [
        'thread_id',
        'name',
        'comment'
    ];
}
