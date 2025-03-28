<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doi extends Model
{
    use HasFactory;

//    use SoftDeletes;

    protected $fillable = [
        'doi_url',
        'doi_file',
        'title',
        'authors',
        'abstract',
        'keywords',
        'issue_id',
        'created_at',
    ];


    public function issue()
    {
        return $this->belongsTo(Issue::class);
    }

}
