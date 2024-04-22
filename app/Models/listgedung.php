<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listgedung extends Model
{
    use HasFactory;
    protected $table = 'listgedung';
    protected $primaryKey = 'gedungid';
}
