<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function getRouteKeyName()
    {
        # code...
        return 'name';
    }

    public function akur() //menghubungkan dengan model akur
    {
        # code...
        return $this->hasMany(Alatukur::class); //satu pic dimiliki banyak alatukur
    }
}
