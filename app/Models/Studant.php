<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studant extends Model
{
    use HasFactory;
    protected $table = "studants";
    protected $fillable = [
       'fname','lname','email','age'
    ];
}
