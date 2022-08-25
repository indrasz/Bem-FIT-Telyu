<?php

namespace App\Models;

use App\Models\Ormawa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Missions extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'missions';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'ormawas_id',
        'mission',
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
