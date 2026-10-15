<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormSubmission extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'message', 'source', 'page_url', 'locale',
        'email_status', 'email_sent_at',
    ];

    protected function casts(): array
    {
        return ['email_sent_at' => 'datetime'];
    }
}
