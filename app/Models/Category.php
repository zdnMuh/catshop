<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $primaryKey = 'id_categories';
    public $incrementing = true;
    protected $fillable = ['nama', 'harga', 'gambar'];
    public $timestamps = false;

    public function transaction()
    {
        return $this->hasMany(Transaction::class, 'category_id', 'id_categories');
    }
}
