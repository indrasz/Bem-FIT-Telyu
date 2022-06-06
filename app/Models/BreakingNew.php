<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BreakingNew extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'breaking_news';

    protected $fillable = [
        'name',
        'description',
        'thumbnail',
    ];
}
