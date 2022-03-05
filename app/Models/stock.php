<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'user_id'];

    public static $rules = array(
        'name' => 'required',
        'amount' => 'integer',
        'unit' => 'required'
    );
}
