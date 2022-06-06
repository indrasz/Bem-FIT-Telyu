<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'profiles';

    protected $fillable = [
        'departments_id',
        'name',
        'position',
        'thumbnail',
    ];

    public function department(){
        return $this->belongsTo(Department::class, 'departments_id', 'id');
    }

}
