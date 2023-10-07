<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;
    protected $table = 'gejalas';
    protected $fillable = ['kode_gejala', 'nama_gejala', 'nilai_densitas'];

    public function penyakit()
    {
        return $this->belongsToMany(TKModel::class, 'relasis', 'kode_gejala', 'kode_penyakit');
    }
    public function relasi()
    {
        return $this->belongsToMany(Relasi::class, 'relasis','kode_gejala', 'kode_gejala');
    }
}
