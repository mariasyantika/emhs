<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataTask extends Model
{
    protected $table = 'task';

    protected $fillable = [ 
        'nama',
        'judul_task',
        'deskripsi_task',
    ];
}
