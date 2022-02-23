<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //protected $table='students';
    protected $primaryKey='regno';
    protected $fillable=['regno','name','department','photo'];
     public $timestamps=false;
}
