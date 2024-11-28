<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalService extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public static function activePosts($paginate = true, $perPage = 20)
    {
        $query = self::where('is_active', 1)
                     ->orderBy('created_at', 'desc');

        return $paginate ? $query->paginate($perPage) : $query->get();
    }
}
