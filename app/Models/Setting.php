<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    public $fillable = ['id',
    'AppName','image','facebook','twitter','googleplus','instagram','linkedin','mobile','email','address','copyright','about_us'];
}
