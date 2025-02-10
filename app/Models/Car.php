<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Car extends Model {
    use HasFactory;

    protected $guarded = [ 'id' ];

    public function reviews() {
        return $this->hasMany( Review::class );
    }

    public function images() {
        return $this->hasMany( CarImage::class );
    }

    public function brand() {
        return $this->belongsTo( CarMake::class, 'make_id', 'id' );

    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($car) {
            $car->load('brand'); 
            if ($car->brand) {
                $baseSlug = Str::slug("{$car->brand->name}-{$car->model}");
                $count = Car::where('slug', 'LIKE', "$baseSlug%")->count();
                $car->slug = $count > 0 ? "{$baseSlug}-" . ($count + 1) : $baseSlug;
            }
        });

        static::updating(function ($car) {
            $car->load('brand');
            if ($car->brand) {
                $baseSlug = Str::slug("{$car->brand->name}-{$car->model}");
                $count = Car::where('slug', 'LIKE', "$baseSlug%")->where('id', '!=', $car->id)->count();
                $car->slug = $count > 0 ? "{$baseSlug}-" . ($count + 1) : $baseSlug;
            }
        });
    }

}
