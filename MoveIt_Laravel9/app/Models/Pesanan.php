<?php

namespace App\Models;

use App\Models\Pesanan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_penerima',
        'alamat_pickup',
        'alamat_tujuan',
        'berat',
        'deskripsi',
        'jarak',
        'tarif',
        // 'tanggal',
        // 'jam',
        'is_completed',
        'customer_id',
        'driver_id',
        'accepted_at',
        'completed_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'id',
        // 'customer_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

    // public function pesanan()
    // {
    //     return $this->belongsTo(Pesanan::class, 'customer_id', 'id');
    // }

    public function user()
    {
        // return $this->belongsTo(User::class, 'whatever_id', 'driver_id');
        return $this->belongsTo(User::class, 'customer_id', 'id');
    }

    public function driver()
    {
        // return $this->belongsTo(User::class, 'whatever_id', 'driver_id');
        return $this->belongsTo(User::class, 'driver_id', 'driver_id');
    }
}
