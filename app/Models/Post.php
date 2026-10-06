<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public const LANGUAGE_ENGLISH = 1;

    public const LANGUAGE_CHINESE = 2;

    protected $guarded = ['id'];

    public static function activePosts($paginate = true, $perPage = 20)
    {
        $query = self::query()
            ->active()
            ->latest('created_at');

        return $paginate ? $query->paginate($perPage) : $query->take($perPage)->get();
    }

    public static function activePostsForLocale(string $locale, bool $paginate = true, int $perPage = 20)
    {
        $query = self::query()
            ->active()
            ->forLocale($locale)
            ->with('category')
            ->latest('created_at');

        return $paginate ? $query->paginate($perPage) : $query->take($perPage)->get();
    }

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }

    public function scopeForLocale(Builder $query, string $locale): Builder
    {
        return $query->where('language', self::languageIdForLocale($locale));
    }

    public static function languageIdForLocale(string $locale): int
    {
        return match ($locale) {
            'en' => self::LANGUAGE_ENGLISH,
            'zh' => self::LANGUAGE_CHINESE,
            default => throw new \InvalidArgumentException("Unsupported post locale [{$locale}]."),
        };
    }

    public function locale(): ?string
    {
        return match ((int) $this->language) {
            self::LANGUAGE_ENGLISH => 'en',
            self::LANGUAGE_CHINESE => 'zh',
            default => null,
        };
    }

    public function category()
    {
        return $this->belongsTo(PostCategory::class, 'post_category_id');
    }

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
