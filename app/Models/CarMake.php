<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarMake extends Model {
    public function cars() {
        return $this->hasMany( Car::class, 'make', 'name' );
    }

}
