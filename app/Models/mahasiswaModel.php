<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswaModel extends Model
{
    use HasFactory;


    protected $table = 'mahasiswa';
    protected $primaryKey = 'id';
    protected $fillable = ['nim', 'nama', 'jenisKelamin', 'prodi'];
}
