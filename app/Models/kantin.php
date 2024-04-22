<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kantin extends Model
{
    use HasFactory;
    protected $table = 'kantin';
    protected $primaryKey = 'kantinID';
}
