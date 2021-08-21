<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Database extends Model
{
    use HasFactory;
    // protected $fillable = ['judul', 'pengarang', 'excerpt', 'isi'];
    protected $guarded = ['id'];
    protected $with = ['penulis', 'kategori'];

    public function kategori()
    {
        return $this->belongsTo(kategori::class);
    }

    public function penulis()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
