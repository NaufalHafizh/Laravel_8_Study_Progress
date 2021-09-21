<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Database extends Model
{
    use HasFactory;
    use Sluggable;

    // protected $fillable = ['judul', 'pengarang', 'excerpt', 'isi'];
    protected $guarded = ['id'];
    protected $with = ['penulis', 'kategori'];

    public function scopeFilter($quary, array $filter)
    {

        $quary->when($filter['search'] ?? false, function ($quary, $search) {

            return $quary->where('judul', 'like', '%' . $search . '%')
                ->orWhere('isi', 'like', '%' . $search . '%');
        });

        $quary->when($filter['kategori'] ?? false, function ($quary, $kategori) {

            return $quary->whereHas('kategori', function ($quary) use ($kategori) {

                $quary->where('slug', $kategori);
            });
        });

        $quary->when($filter['penulis'] ?? false, function ($quary, $penulis) {

            return $quary->whereHas('penulis', function ($quary) use ($penulis) {

                $quary->where('username', $penulis);
            });
        });
    }

    public function kategori()
    {
        return $this->belongsTo(kategori::class);
    }

    public function penulis()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function GetRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }
}
