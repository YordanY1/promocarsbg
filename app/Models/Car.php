<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Car extends Model {
    use HasFactory;

    protected $guarded = ['id'];

    public function reviews() {
        return $this->hasMany(Review::class);
    }

    public function images() {
        return $this->hasMany(CarImage::class);
    }

    public function brand() {
        return $this->belongsTo(CarMake::class, 'make_id', 'id');
    }
    
     public function registerMediaCollections(): void
    {
        $this->addMediaCollection('images')->useDisk('public');
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($car) {
            $car->generateUniqueSlug();
        });

        static::updating(function ($car) {
            if ($car->isDirty(['make_id', 'model'])) {
                $car->generateUniqueSlug();
            }
        });

        static::saved(fn() => cache()->forget('sitemap'));
        static::deleted(fn() => cache()->forget('sitemap'));
    }


    private function generateUniqueSlug()
    {
        $this->load('brand');

        if ($this->brand) {
            $baseSlug = Str::slug("{$this->brand->name}-{$this->model}");

           
            $existingSlugs = Car::where('slug', 'LIKE', "$baseSlug%")
                                ->where('id', '!=', $this->id)
                                ->pluck('slug')
                                ->toArray();

            if (in_array($baseSlug, $existingSlugs)) {
                $suffix = 1;
                while (in_array("{$baseSlug}-{$suffix}", $existingSlugs)) {
                    $suffix++;
                }
                $this->slug = "{$baseSlug}-{$suffix}";
            } else {
                $this->slug = $baseSlug;
            }
        }
    }

    public function getFullNameAttribute()
    {
        return "{$this->brand->name} {$this->model}";
    }

}
