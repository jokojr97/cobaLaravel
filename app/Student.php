<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['nama', 'nrp', 'email', 'jurusan'];
    // protected $guarded = ['id', 'created_at', 'update_at'];
}
