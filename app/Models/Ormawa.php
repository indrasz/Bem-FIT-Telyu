<?php

namespace App\Models;

use App\Models\Vision;
use App\Models\Missions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ormawa extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'ormawas';

    protected $fillable = [
        'name',
        'description',
        'vision',
        'mission',
        'thumbnail',
        'url_instagram',
        'slug'
    ];

    public function mission()
    {
        return $this->hasMany(Missions::class, 'ormawas_id');
    }

    public function vision()
    {
        return $this->hasMany(Vision::class, 'ormawas_id');
    }
}
