<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Penjualan extends Model
{
    use HasFactory;

    protected $table = 'penjualan';

    protected $primaryKey = 'id';

    protected $guarded = [];

    protected $fillable = [
        'tanggal',
        'jumlah',
        'harga',
        'donat_id',
        'pel_id',
    ];

    public function donat(): HasOne
    {
        return $this->hasOne(Donat::class, 'id', 'donat_id');
    }

    public function pelanggan(): HasOne
    {
        return $this->hasOne(Pelanggan::class, 'id', 'pel_id');
    }
}
