<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class initialInvestment   extends Model
{
    use HasFactory;
    protected $table= 'initial_investment';
    protected $primaryKey= 'id';
}
