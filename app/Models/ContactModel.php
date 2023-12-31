<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    use HasFactory;

protected $table = 'contacts';

    protected $fillable = ['user_id', 'name', 'phone_number', 'avatar','gender'];
}
