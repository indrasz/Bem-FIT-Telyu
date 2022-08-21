<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vision extends Model
{
    use SoftDeletes;

    public $table = 'vision';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'ormawas_id',
        'vision',
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    // one to many
    public function ormawa()
    {
        return $this->belongsTo(Ormawa::class, 'ormawas_id', 'id');
    }
}
