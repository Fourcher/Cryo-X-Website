<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    // Specify the table name if it's not the plural of the model name
    // protected $table = 'emails';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'recipient',
        'subject',
        'body',
        'is_sent',
        'sent_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_sent' => 'boolean',
        'sent_at' => 'datetime',
    ];
}
