<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // ini taruh di dalam class, bukan di luar
    protected $fillable = ['nim','nama','kelas','prodi'];
}
