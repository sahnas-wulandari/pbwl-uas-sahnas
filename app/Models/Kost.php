<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kost extends Model
{
    use HasFactory;
    protected $table = 'tb_kost';
    protected $primaryKey = 'kost_id';
    protected $guarded = '[]';
    protected $fillable = [
        'kost_id',
        'kost_jenis',
        'kost_harga'
    ];
    public function booking() :HasMany
    {
        return $this->hasMany(Booking::class, 'booking_jenis_kost', 'kost_id');    
    }
}
