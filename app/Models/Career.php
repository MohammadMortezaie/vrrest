<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public static function activeCareer($paginate = true, $perPage = 20)
    {
        $query = self::where('is_active', 1)
                     ->orderBy('created_at', 'desc');

        return $paginate ? $query->paginate($perPage) : $query->get();
    }

    public static function activeAll($paginate = true, $perPage = 20)
    {
        $query = self::orderBy('created_at', 'desc');

        return $paginate ? $query->paginate($perPage) : $query->get();
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }

}
