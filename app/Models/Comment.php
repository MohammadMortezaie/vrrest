<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public static function activeAll($paginate = true, $perPage = 20)
    {
        $query = self::orderBy('created_at', 'desc');

        return $paginate ? $query->paginate($perPage) : $query->get();
    }
    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->hasMany(Post::class);
    }
}
