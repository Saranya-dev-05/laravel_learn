<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public $fillable = ['pro_no', 'pro_na', 'pro_le', 'stat', 'price' , '1'];
}
