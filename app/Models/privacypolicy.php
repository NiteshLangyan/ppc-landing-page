<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class privacypolicy extends Model
{
    use HasFactory;
    protected $table = 'privacypolicy';
    protected $primarykey = 'id';
}
