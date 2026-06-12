<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'satuan',
        'harga',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
