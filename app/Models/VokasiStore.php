<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VokasiStore extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'vokasi_stores';

    protected $fillable = [
        'name',
        'price',
        'description',
        'url',
        'slug',
    ];

    public function gallery()
    {
        return $this->hasMany(VokasiStoreGallery::class, 'vokasi_stores_id');
    }
}
