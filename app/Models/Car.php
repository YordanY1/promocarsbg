<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

}
