<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    protected $fillable = ['nama', 'nrp', 'email', 'jurusan'];
    // protected $guarded = ['id', 'created_at', 'update_at'];
    use SoftDeletes;
}
