<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Member extends Seeder
{
    use HasFactory;
    public function getDevice() {
        return $this->hasMany('App\Models\Company');
    }
}