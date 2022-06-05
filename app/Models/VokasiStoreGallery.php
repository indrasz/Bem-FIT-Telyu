<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VokasiStoreGallery extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'vokasi_store_galleries';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'vokasi_stores_id',
        'thumbnail',
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    public function vokasiStore()
    {
        return $this->belongsTo(VokasiStore::class, 'vokasi_stores_id', 'id');
    }
}
