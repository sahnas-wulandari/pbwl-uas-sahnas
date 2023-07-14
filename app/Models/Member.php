<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Member extends Model
{
    use HasFactory;
    protected $table = 'tb_member';
    protected $primaryKey = 'member_id';
    protected $guarded = '[]';
    protected $fillable = [
        'member_id',
        'member_nama',
        'member_alamat',
        'member_no_tlpn'
    ];
    public function booking() :HasMany
    {
        return $this->hasMany(Booking::class, 'booking_nama_member', 'member_id');    
    }
}
