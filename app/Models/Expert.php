<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'fio',
        'fio_tr',
        'fio_en',
        'image',
        'malumot_uz',
        'malumot_tr',
        'malumot_en',
    ];
}
