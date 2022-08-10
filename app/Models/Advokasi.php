<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Advokasi extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'advokasis';

    protected $fillable = [
        'name',
        'email',
        'category',
        'message',
        'status',
    ];

}
