<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['accountId', 'description', 'type', 'value'];
}
