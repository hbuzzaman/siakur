<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alatukur extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    protected $with = ['pic','location'];

    // public function getRouteKeyName()
    // {
    //     # code...
    //     return 'name';
    // }

    public function pic()
    {
        # code...
        return $this->belongsTo(Pic::class); //satu akur mempunyai satu pic
    }
    public function location()
    {
        # code...
        return $this->belongsTo(Location::class); //satu akur mempunyai satu location
    }



}
