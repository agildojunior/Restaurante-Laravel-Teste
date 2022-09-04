<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $fillable = ['status','pessoa_1','pessoa_2','pessoa_3','pessoa_4', 'qtdd_Pessoas'];

    protected $table = 'mesas';
}
