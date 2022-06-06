<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Creation extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'creations';

    protected $fillable = [
        'name',
        'description',
        'thumbnail',
    ];
}
