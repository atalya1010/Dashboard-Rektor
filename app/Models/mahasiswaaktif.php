<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswaaktif extends Model
{
    use HasFactory;
    protected $table = 'mahasiswaaktif';
    protected $primaryKey = 'id';
    protected $fillable = ['prodi', 'nim', 'nama', 'kelas', 'angkatan', 'jalurmasuk', 'emailaktif', 'dosenwali', 'fakultas'];

}
