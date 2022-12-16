<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Onigiri extends Model
{
    protected $table = 'onigiris';

    protected $fillable = ['name', 'price'];
}
