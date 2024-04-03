<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footeradd extends Model
{
    use HasFactory;
    protected $table= 'footeradds';
    protected $primaryKey= 'id';
}
