<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'tb_booking';
    protected $primaryKey = 'booking_id';
    protected $guarded = '[]';
    protected $fillable = [
        'booking_id',
        'booking_jenis_kost',
        'booking_nama_member',
        'booking_tanggal',
        'booking_waktu',
        'booking_jumlah_bayar'
    ];
    public function kost() :BelongsTo
    {
        return $this->belongsTo(kost::class, 'booking_jenis_kost');    
    }
    public function member() :BelongsTo
    {
        return $this->belongsTo(member::class, 'booking_nama_member');    
    }
}
