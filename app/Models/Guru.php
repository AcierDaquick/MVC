<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'gurus';
    protected $primaryKey = 'id';

    protected $fillable = [
        'NIG','NamaGuru','Alamat','Kelas','Pelajaran','Jadwal'
    ];
}