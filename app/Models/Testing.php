<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testing extends Model
{
    use HasFactory;
    protected $table = 'testing';
    protected $fillable = ['user_id', 'nama_file'];

    

}