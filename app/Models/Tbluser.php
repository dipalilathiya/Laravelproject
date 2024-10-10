<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbluser extends Model
{
    public $table ="tbluser";
//     protected $primaryKey ="id";
//     public $timestemp=true;
//  protected $incrementing = true;
   
    public $fillable = ['name','email','password'];
}
